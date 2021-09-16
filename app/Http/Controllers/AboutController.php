<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){

        $title = "My Page";
        $paragraph = "Lorem ipsum dolor sit amet";

        return view('about', compact('title', 'paragraph', ));

    }
}
