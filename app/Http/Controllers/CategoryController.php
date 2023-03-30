<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('backend.category.index');
    }
    public function create(){
        return view('backend.category.create');
    }
    
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        Category::create($request->all());
        return redirect()->route('category')->with('success', 'Category created successfully.');
    }
}
