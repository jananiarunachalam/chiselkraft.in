<?php

namespace chiselkraft\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index() { 
        return view('pages.welcome',[
            'id' => 'home-page',
            'page-setting' => config('site.global.setting'),
        ]); 
    }
}
