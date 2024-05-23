<?php

namespace App\Http\Controllers;
use App\Models\Viewnewsfeed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class userController extends Controller
{
    //
    public function index(){
        $id = Auth::user()->id;
        $profileData = User::find($id);

        $data = Viewnewsfeed::get('*');
        return view('client.pages.index', compact('data', 'profileData'));

    }

    public function getNewsfeed(){

        $data = Viewnewsfeed::get('*');

        return response()->json([
                "success" => "Success",
                "msg" => "Select",
                "data" => $data,
                // "countDat"
                "errors" => false,
            ], 200);
    }
}
