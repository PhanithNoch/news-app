<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class FrontController extends Controller
{
    public function index(){
        /// get articles from database
        $articles = Article::all();
        return view('frontend.home',compact('articles'));
        // return view('frontend.home')
    }
}
