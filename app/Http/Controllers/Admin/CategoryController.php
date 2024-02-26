<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class CategoryController extends BaseController
{
    public function indexList(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::all();
        return view('admin.category.list', ['categories' => $categories]);
    }

    public function indexDetail(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.category.detail');
    }

    public function indexCreate(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.category.create');
    }

    public function indexEdit($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $category = Category::find($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function create(Request $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $category = new Category();
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();
            DB::commit();
            return redirect()->route('admin.category');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function edit(Request $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $category = Category::find($request->id);
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();
            DB::commit();
            return redirect()->route('admin.category');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }

    }

    public function delete(Request $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $category = Category::find($request->id);
            if (!$category) {
                return redirect()->back()->withErrors(['message' => 'Category not found']);
            }
            $category->delete();
            DB::commit();
            return redirect()->route('admin.category');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }


}
