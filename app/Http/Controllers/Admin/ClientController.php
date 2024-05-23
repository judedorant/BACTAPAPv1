<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class ClientController extends Controller
{
    //
   public function index(){

        $id = Auth::user()->id;
        $profileData = User::find($id);


        $dataClient = User::where('role', '!=', 'admin')->get();

        // User::get('*')->where('role' )

        return view('admin.pages.clientData', compact('profileData', 'dataClient'));
    }

}
