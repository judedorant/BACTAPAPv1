<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return "test";
    }
    public function AdminDashboard(){
        // return view('admin.adminDashboard');
        return view('admin.pages.index');

    }
}
