<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){

       $comics = include(resource_path('data/comics.php'));
       
       return view(('pages.welcome'), compact('comics'));
    }
}
