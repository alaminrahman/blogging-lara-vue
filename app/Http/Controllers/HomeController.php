<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Post,
    Category,
    User,
};

class HomeController extends Controller
{

    public function posts()
    {
        
        // $categories = Category::all();

        // $posts = Post::with(['categories'])->first();
        // $posts->categories()->sync([1,7]);

        $user = User::with(['contact.contact_informations', 'posts'])->findOrFail(16);
        dd($user->toArray());
    }
    //
}
