<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Auto Blog';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }
}
