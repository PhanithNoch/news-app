<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        // dd(Storage::get($articles[0]->image));
// dd($articles);
        return view('backend.article.index',compact('articles'));
    }

    public function create(){
        $categories =  Category::all();

        return view('backend.article.create',compact('categories'));
    }

    public function store(Request $request){

        if(!$request->has('image')){
            return redirect()->back()->with('error','Image is required');
        }
        /// upload image to public folder 
        $image = $request->file('image');
        $image_name = time().'_'.$image->getClientOriginalName();
        $image->move(public_path('images'),$image_name);

     
       
       
        $form_data = array(
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'is_published' => $request->is_published ? 1 : 0,
            'image'=>$image_name,
       
            /// get current user logged 
            'user_id' => auth()->user()->id,
        );
        toast('Article created successfully','success');
        Article::create($form_data);
        return redirect()->route('article')->with('success', 'Article created successfully.');
    }

    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        toast('Article deleted successfully','success');
        return redirect()->route('article')->with('success', 'Article deleted successfully.');
    }
}
