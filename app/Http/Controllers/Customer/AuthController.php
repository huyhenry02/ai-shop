<?php

namespace App\Http\Controllers\Customer;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function indexLogin(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('customer.auth.login');
    }
    public function indexRegister(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('customer.auth.register');
    }
    public function postRegister(Request $request): RedirectResponse
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->role_type = 'customer';
        $user->save();
        return redirect()->route('customer.login');
    }
    public function postLogin(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('customer.index');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request): RedirectResponse
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('customer.login');
    }
}
