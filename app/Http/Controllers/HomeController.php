<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Quote;
use App\Models\Blog;
use App\Models\Hero;
use App\Models\Other;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $coffess = Product::take(3)->get();
        $testimonials = Quote::take(3)->get();
        $blogs = Blog::take(3)->get();
        $hero = Hero::where('id', '1')->first();
        $igs = Other::take(6)->where('category', 'ig')->get();
        return view('home', [
            'hero' => $hero,
            'coffees' => $coffess,
            'testimonials' => $testimonials,
            'blogs' => $blogs,
            'instagram' => $igs
        ]);
    }
}