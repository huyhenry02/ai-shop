<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
   public function indexList(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
   {
       $users = User::all();
       return view('admin.user.list', ['users' => $users]);
   }
   public function indexEmployee(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
   {
       $users = User::where('role_type', 'employee')->get();
       return view('admin.user.employee', ['users' => $users]);
   }
   public function indexCustomer(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
   {
       $users = User::where('role_type', 'customer')->get();
       return view('admin.user.customer', ['users' => $users]);
   }
}
