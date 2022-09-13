<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Models\{
    Post,
    Category,
    User,
    Country,
    Video
};

class HomeController extends Controller
{

    public function posts(Request $request)
    {
        return new PostCollection(Post::with(['categories'])->paginate($request->postItem));
    }
    
    //End
}
