<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class BrandController extends BaseController
{
    public function indexList(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $brands = Brand::all();
        return view('admin.brand.list', ['brands' => $brands]);
    }
    public function indexDetail(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.brand.detail');
    }
    public function indexCreate(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.brand.create');
    }
    public function indexEdit($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit', ['brand' => $brand]);
    }

    public function create(Request $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $brand = new Brand();
            $brand->name = $request->name;
            $brand->description = $request->description;
            $brand->save();
            DB::commit();
            return redirect()->route('admin.brand');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }

    public function edit(Request $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $brand = Brand::find($request->id);
            $brand->name = $request->name;
            $brand->description = $request->description;
            $brand->save();
            DB::commit();
            return redirect()->route('admin.brand');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }

    }

    public function delete(Request $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $brand = Brand::find($request->id);
            if (!$brand) {
                return redirect()->back()->withErrors(['message' => 'Brand not found']);
            }
            $brand->delete();
            DB::commit();
            return redirect()->route('admin.brand');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
