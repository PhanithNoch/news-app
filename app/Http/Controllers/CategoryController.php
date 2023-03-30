<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
       $categories =  Category::all();
    //    dd($categories);
        return view('backend.category.index', compact('categories'));
        // return view('backend.category.index');
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

    public function edit($id){
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        $category = Category::find($id);
        $category->update($request->all());
        return redirect()->route('category')->with('success', 'Category updated successfully.');
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category')->with('success', 'Category deleted successfully.');
    }
}
