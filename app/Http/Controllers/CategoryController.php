<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category.index', ['categories'=>$categories]);
    }

    public function show($id){
        $category = Category::where('id', '=', $id)->first();
        return view('category.show', ['category'=>$category]);
    }

    public function update(Request $request, $id){
        if ($request->isMethod('post'))
        {
            Category::where('id','=', $id)->update([
                'name' => $request->name,
            ]);
            return redirect('/categories');
        }
        else
        {
            $category = Category::where('id', '=', $id)->first();
            return view('category.update', ['category'=> $category]);

        }
    }

    public function delete($id){
        Category::where('id', '=', $id)->delete();
        return redirect('/categories');
    }

    public function new(Request $request){
        if ($request->isMethod('post') ) {
            $category = new Category();
            $category->name = $request->name;
            $category->save();
            return redirect('/categories');
        } else {
            return view('category.new');
        }

    }
}
