<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //
    function loginAdmin(Request $req)
    {
        $admin = Admin::where(['email'=>$req->email])->first();
        if(!$admin || ($req->password != $admin->password)) {
            return "Username or password is not match";
        }
        else {
            $req->session()->put('admin', $admin);
            return redirect('/');
        }
    }
}
