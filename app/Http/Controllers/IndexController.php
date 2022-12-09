<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('web.pages.index')->with('title','Index');
    }

    public function web_register()
    {
        return view('web.pages.register')->with('title','Register');
    }

    public function user_register(Request $req)
    {
        // return $req;
        $validate = Validator::make($req->all(), [

            'name' => 'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:9',
            'color_validation'=> 'required'
            
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        
        $token_ignore = ['_token' => '', 'name'=>'', 'email'=>'', 'password'=>'', 'color_val'=>''];
        $post_feilds = array_diff_key($_POST , $token_ignore);
        
        $data = "new";
        try{

            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->is_active = 0;
            $user->secret_key = serialize($post_feilds);
            $user->password = Hash::make($req->password);
            $user->save();
            
            Mail::send('web.pages.user-active',['user'=>Crypt::encrypt($user->id)],function($message) use($user){
                $message->to($user->email);
                $message->subject("Active Your Account");
            });
        }catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
        return redirect()->route('account.registerd',$req->email);
    }

    public function user_login(Request $req)
    {
        // return $req;
        $validate = Validator::make($req->all(), [

            'email' =>'required|email',
            'password' =>'required|min:9',
            'color_validation'=> 'required'
            
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }
        
        $token_ignore = ['_token' => '', 'name'=>'', 'email'=>'', 'password'=>'', 'color_val'=>''];
        $post_feilds = array_diff_key($_POST , $token_ignore);
        // return $post_feilds;
        
        $secrate = serialize($post_feilds);

        $user = User::where('email',$req->email)->where('is_active',1)->first();
        if($user){
            if(Hash::check($req->password,$user->password) && $secrate == $user->secret_key){
                Auth::loginUsingId($user->id);
                
                return redirect()->route('dashboard');
            }
        }
        return back()->with('error','Invalid User or password');
    }

    public function active_account(Request $req)
    {

        $user_id = Crypt::decrypt($req->user);
        // return $user_id;
        $data = User::where('id',$user_id)->where('is_active',0)->first();
        if($data){
            $mytime = \Carbon\Carbon::now()->subMinutes(5);
            if($data->updated_at >= $mytime){
                // return "yes";
                $data->is_active = 1;
                $data->email_verified_at = \Carbon\Carbon::now();
                
                $data->save();
                Auth::loginUsingId($user_id);
                
                return redirect()->route('dashboard')->with('message','Your Account has been Activited');
            }
            else{
                return redirect()->route('web.index')->with('error','Link is Expired');
            }
        }
        else{
            return redirect()->route('web.index')->with('error','Link is Expired');
        }
    }



    public function account_registerd($email)
    {
        return view('email-success-page',compact('email'));
    }

    public function web_login()
    {
        return view('web.pages.login')->with('title','Login');
    }


    public function web_reset()
    {
        $body = '<ul>
            <!-- opacity ki class h ye "cl-op" -->
            <li class="btn-col"><i class="col1"></i></li>
            <li class="btn-col"><i class="col2"></i></li>
            <li class="btn-col"><i class="col3"></i></li>
            <li class="btn-col"><i class="col4"></i></li>
            <li class="btn-col"><i class="col5"></i></li>
            <li class="btn-col"><i class="col6"></i></li>
        </ul>';
        return response()->json(['body'=> $body]);
    }
}
