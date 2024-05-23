<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\PicturePost;


class uploadPost extends Controller
{
    //
    public function uploadPost(Request $request)
    {
        $countPost = 0;
        $now = Carbon::now();

        $post = Post::create([
                    'user_id' => Auth::user()->id,
                    'content' => $request->details,
                    'created_at' => $now,
                ]);
        if ($post) {
            $postId = $post->post_id;

            if ($request->hasfile('images')) {
                 foreach ($request->file('images') as $file) {
                    // $name = time() . rand(1, 100) . '.' . $file->extension();
                    // $file->move(public_path('images'), $name);
                $picture = $file->store('post', 'public');

                    // $image = new Image();
                    // $image->filename = $name;
                    // $image->save();
                    $postSuccess = PicturePost::create(
                    [
                        'post_id' => $postId,
                        'picture_photo' => $picture,
                        'content' => "test",
                        // 'content' => "test",
                        
                    ]);

                    if($postSuccess){
                        $countPost++;
                    }
                }

            }
            
            return response()->json([
                "success" => "Success",
                "msg" => "Select",
                "data" => $countPost,
                // "countDat"
                "errors" => false,
            ], 200);
        } else {
            return response()->json([
                "success" => "Failed",
                "msg" => "Post not created",
                "data" => null,
                "errors" => true,
            ], 500);
        }
    }
}
