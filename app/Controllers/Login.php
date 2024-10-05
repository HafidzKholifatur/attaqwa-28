<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        if(session('id')){
            return redirect()->to(site_url('admin'));
        }
        return view('login');
    }
}