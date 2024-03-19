<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//bo sung
use App\Models\Article;

class HomeController extends Controller
{
    //get all articles function
    public function getAllArticles()
    {
        $articles = Article::all();
        return view('home', compact('articles'));
    }
}
