<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\config;
use App\Models\logo;
use Exception;

use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        return view('admin.pages.dashboard')->with('title','dashboard');
    }

    public function user_profile()
    {
        return view('admin.pages.profile')->with('title','Profile');
    }
    
    public function update_profile(Request $req)
    {
        // dd($req->all()); 
        $token_ignore = ['_token' => '' , 'email' => ''];
        $post_feilds = array_diff_key($_POST , $token_ignore);
        try{
            $update = User::where("id" , Auth::user()->id)->update($post_feilds);
            return back()->with('message','Profile Updated');
        }
        catch(Exception $e){
            return back()->with('warning',$e->getMessage());
        }
    }

    public function change_password()
    {
        return view('admin.pages.update-password')->with('title','Passwrod');
    }

    public function update_password(Request $req)
    {
        // return $req;
        $validate = Validator::make($req->all(),[
            'old_pass'=> 'required|min:3',
            'new_pass' => 'required|min:8',
            'conf_pass' => 'required|same:new_pass',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput()->with('warning','Data Requirements not Match!');
        }
        
        if(Hash::check($req->old_pass, Auth::user()->password)){
            
            $user = User::find(Auth::user()->id); 
            $user->password = Hash::make($req->new_pass);
            $user->save();
            return back()->with('message','Password Changed Successfully!');

        }
        return back()->withInput()->with('error','Password not Match!');
    }


    public function web_config()
    {
        $config = config::where('is_active',1)->where('is_deleted',0)->get();
        return view('admin.pages.config',compact('config'))->with('title','Config');
    }

    public function update_config(Request $req)
    {
        // return $req;
        $token_ignore = ['_token' => ''];
        $post_feilds = array_diff_key($_POST, $token_ignore);

        foreach($post_feilds as $key => $data){
            config::where('slug',$key)->update(['value'=>$data]);
        }
        return back()->with(['message'=>'Update Successfully!','status'=>'1']);
    }


    public function web_logo()
    {
        return view('admin.pages.logo')->with('title','logo');
    }

    public function update_logo(Request $req)
    {
        $token_ignore = ['_token' => '', 'image' => ''];
        $post_feilds = array_diff_key($_POST, $token_ignore);
        
        // return back()->with(['message' => "Logo Updated"]);
        $extension = array("jpeg", "jpg", "png", "gif", "ico");
        if (isset($req->image))
        {
            $file = $req->image;
            $ext = $req->image->getClientOriginalExtension();
            if (in_array($ext, $extension))
            {
                $file_name = $req->image->getClientOriginalName();
                $file_name = substr($file_name, 0, strpos($file_name, "."));
                $name = "uploads/logos/" . $file_name . "_" . time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path() . '/uploads/logos/';
                $share = $req->image->move($destinationPath, $name);
                $post_feilds['image'] = $name;
            } else {
                $msg = "This File type is not Supported!";
                return redirect()->back()->with('error', "Error Code: " . $msg);
            }
            $update = logo::where("name" , $req->name)->where('is_active',1)->update(['is_active'=>0]);
            $create = logo::create($post_feilds);
            return back()->with(['message' => "Logo Updated"]);
        }
        // return $post_feilds;
        return back()->with(['warning' => "Upload Logo!"]);
    }


    public function confirm_mail()
    {
        return view('admin.pages.mail-send-success');
    }

}
