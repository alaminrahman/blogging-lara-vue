<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Post,
    Category,
    User,
    Country,
    Video
};

class HomeController extends Controller
{

    public function posts()
    {
        
        // $categories = Category::all();

        // $posts = Post::with(['categories'])->first();
        // $posts->categories()->sync([1,7]);

        // $user = User::with(['contact_contactinformation'])->findOrFail(3);
        // $user = $user->toArray();

        // dd($user);

        // $country = Country::with('stateCity')->first();
        // dd($country->toArray());

        $video = Video::with('tags')->first();
        dd($video->toArray());

        return view('test', ['country' => $video]);
    }
    //
}
