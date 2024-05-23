<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class profile extends Controller
{
    //
    public function index()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('client.pages.profile', compact('profileData'));
    }
}
