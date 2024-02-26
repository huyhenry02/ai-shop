<?php

namespace App\Http\Controllers\Customer;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
   public function indexList(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
   {
       $products = Product::all();
       $categories = Category::all();
       return view('customer.product.list',['categories'=>$categories,'products'=>$products]);
   }
   public function indexDetail(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
   {
       return view('customer.product.detail');
   }
}
