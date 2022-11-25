<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return $req;
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
