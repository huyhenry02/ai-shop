<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CustomerController extends BaseController
{
   public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
   {
       return view('admin.index');
   }
}
