<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){

        $comics = Comic::all();

       return view(('pages.welcome'), compact('comics'));
    }
}


// not needed :p
