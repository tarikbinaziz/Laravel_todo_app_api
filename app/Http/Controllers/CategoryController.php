<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories= Category::all();
        return response()-> json($categories);
    }
}
