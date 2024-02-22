<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CategoryController extends BaseController
{
   public function indexList(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
   {
       return view('admin.category.list');
   }
   public function indexDetail(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
   {
       return view('admin.category.detail');
   }
   public function indexCreate()
   {
       return view('admin.category.create');
   }

}