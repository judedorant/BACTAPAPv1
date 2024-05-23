<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AdminController extends Controller
{
    //
    public function index(){
        return "test";
    }
    public function AdminDashboard(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        // return view('admin.adminDashboard');
        return view('admin.pages.home', compact('profileData'));
    }
}
