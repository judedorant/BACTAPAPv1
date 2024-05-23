<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    public function store(LoginRequest $request)
    {
        try {
            
            $request->authenticate();

            $request->session()->regenerate();

            $url = '';

            if($request->user()->role === 'admin'){
                $url = 'admin/dashboard';

            }elseif($request->user()->role === 'client') {
                $url = 'client';
            }

            // return redirect()->intended(RouteServiceProvider::HOME);.

            // return 
            // return redirect()->intended($url);

            return response()->json(
                [
                    "success" => "Success",
                    "msg" => "Successfull login ",
                    "data" => $url,
                    // "id" => $userId,
                    "errors" => false,
                ], 
            200);
        } catch (Exception $e) {
            return response()->json(
                [
                    "success" => "failed",
                    "msg" => "error credentials",
                    // "data" => $url,
                    // "id" => $userId,
                    "errors" => false,
                ], 
            200);
        }

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
