<?php

namespace App\Http\Controllers;

use App\Models\post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request){

        return view('home',[
            'featuredPosts'=> post::published()->featured()->latest('published_at')->take(3)->get(),
            'latestPosts'=> post::published()->latest('published_at')->take(9)->get()
        ]);

    }
}
