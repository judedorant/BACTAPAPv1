<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
// use Illuminate\Support\Facades\Auth;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);


         // $url = '';

        // if($request->user()->role === 'admin'){
        //     $url = 'admin/dashboard';

        // }elseif($request->user()->role === 'client') {
            $url = 'client';
        // }

        // return redirect()->intended(RouteServiceProvider::HOME);
        // return redirect()->intended($url);
    }
    public function register(Request $request){


        // $artist = "";
        // // artist
        // $request->artist == "on" ? $artist = "artist" : $artist = "client";
        // password != Cpassword ? false : true; 

        // $user = User::create([
        //     'first_name' => $request->name,
        //     'last_name' => $request->email,
        //     'username' => $request->email,
        //     'email' => $request->email,
        //     'contact_number' => $request->email,
        //     'photo' => $request->email,
        //     'role' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // if ($request->has('profilePic')) {
            $picture = request()->file('profilePic')->store('profilePic', 'public');

            // $user->update(['profilePic' => $picture]);
            // $request->artist

            try {
                $user = User::create([
                    'first_name' => $request->fname,
                    'last_name' => $request->lname,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'email' => $request->email,
                    'contact_number' => $request->contact_number,
                    'photo' => $picture,
                    'role' => $request->artist,
                ]);

                Auth::login($user);

                // return redirect(RouteServiceProvider::HOME);

                // return redirect()->intended(RouteServiceProvider::Client);
                 return response()->json(
                    [
                        "success" => "failed",
                        "msg" => "success",
                        "data" => $request->username,
                        // "id" => $userId,
                        "errors" => true,
                    ], 
                200);

            } catch (Exception $e) {
                return response()->json(
                    [
                        "success" => "failed",
                        "msg" => "failed to register please try again",
                        "data" => $request->username,
                        // "id" => $userId,
                        "errors" => true,
                    ], 
                500);
            }

        // }
        // else{
        //     return response()->json(
        //         [
        //             "success" => "failed",
        //             "msg" => "failed to upload picture",
        //             "data" => $request->has('profilePic'),
        //             // "id" => $userId,
        //             "errors" => true,
        //         ], 
        //     500);
        // }
         


    }
}
