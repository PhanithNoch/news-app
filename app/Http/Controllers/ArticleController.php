<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
class ArticleController extends Controller
{
    public function index(){

        return view('backend.article.index');
    }

    public function create(){
        $categories =  Category::all();

        return view('backend.article.create',compact('categories'));
    }

    public function store(Request $request){
        $new_name = null;
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'description' => 'required'
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $new_name = '/images/'.$name;
        }
  
        $form_data = array(
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'image' => $new_name,
            'is_published' => 0,
            /// get current user logged 
            'user_id' => auth()->user()->id,
        );
        Article::create($form_data);
        return redirect()->route('article')->with('success', 'Article created successfully.');
    }
}
