<?php

namespace chiselkraft\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index() { return view('pages.welcome'); }
        
    public function bootcamp() {
        return view('pages.bootcamp.bootcamp',[
            'PAGE_ID' => 'bootcamp-page',
            'SETTING' => config('site.bootcamp.setting'),
        ]);
    }
}
