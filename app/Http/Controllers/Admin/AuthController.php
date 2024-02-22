<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function indexLogin()
    {
        return view('admin.auth.login');
    }
    public function indexRegister()
    {
        return view('admin.auth.register');
    }
    public function postRegister(\Illuminate\Http\Request $request)
    {

    }
}
