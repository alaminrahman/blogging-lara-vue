<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Http\Resources\SinglePostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function posts(Request $request)
    {
        return new PostCollection(Post::with(['category'])->paginate($request->postItem));
    }

    public function post($id)
    {
        return new SinglePostResource(Post::with(['category'])->find($id));
    }
}
