<?php

namespace App\Http\Controllers;
use App\Models\users;

use Illuminate\Http\Request;

class signController extends Controller
{
    //
    public function index()
    {
        return view('signup.signup');
    }
    public function store(Request $request)
    {

        $insertData = [
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'username' => $request->username,
            'password' => bcrypt($request->password), // Store hashed password
        ];

        $userId = users::insertGetId($insertData);


        return response()->json(
            [
                "success" => "Success",
                "msg" => "Select",
                "data" => $request->fname,
                "id" => $userId,
                "errors" => false,
            ], 
        200);

    }

    public function profileSetup($id){

        // users::select('*')->where('id' => $id);
        $user = users::find($id);

       return view('signup.signupProfile', ['user' => $user]);
    }

    public function signInfo(Request $request){
        $insertData = [
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'username' => $request->username,
            'password' => bcrypt($request->password), // Store hashed password
        ];

        $userId = users::insertGetId($insertData);


        return response()->json(
            [
                "success" => "Success",
                "msg" => "Select",
                "data" => $request->fname,
                "id" => $userId,
                "errors" => false,
            ], 
        200);
    }

    public function profilesignup(Request $request)
    {

        // return $request->gender;
        return response()->json(
            [
                "success" => "Success",
                "msg" => "Select1",
                "data" => $request->gender,
                // "id" => $userId,
                "errors" => false,
            ], 
        200);
    }
}
