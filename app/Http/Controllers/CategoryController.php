<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // ambil data category dari model
        $data = Category::all();

        //  dd($data);

        // tampilkan data pada file index yang ada pada
        // folder view/category/index.blade.php
        return view('category.index')->with('data', $data);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {

        $request->validate([
           'name' => 'required'
        ]);

        Category::create($request->all());

        return to_route('category.index');
    }

}
