<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
    $comic = Comic::all();
    return view('welcome',compact('comics'));
    }
}
