<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ProductController extends BaseController
{
   public function indexList(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
   {
       $products = Product::all();
       return view('admin.product.list',['products'=>$products]);
   }
   public function indexDetail(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
   {
       return view('admin.product.detail');
   }

    public function indexCreate(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
   {
       $categories = Category::all();
       $brands = Brand::all();
       return view('admin.product.create', ['categories' => $categories, 'brands' => $brands]);
   }

    public function indexEdit($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $product = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.edit', ['product' => $product, 'categories' => $categories, 'brands' => $brands]);
    }

    public function create(Request $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $product = new Product();
            $product->fill($request->all());
            if ($request->hasFile('image')) {
                $product->image = $request->file('image')->store('storage/public/product');
                $product->save();
            }
            $product->save();

            DB::commit();
            return redirect()->route('admin.product');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
    public function edit(Request $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $product = Product::find($request->id);
            $product->fill($request->all());
            $product->save();
            DB::commit();
            return redirect()->route('admin.product');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
    public function delete($id): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $product = Product::find($id);
            $product->delete();
            DB::commit();
            return redirect()->route('admin.product');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }

}
