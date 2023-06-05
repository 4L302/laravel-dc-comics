<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    $comic = Comic::all();
    return view('welcome',compact('comics'));
}
