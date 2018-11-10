<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function profile(){
        return view('pages.profile');
    }
    public function blade(){
        return view('blade.blade');
    }
    public function portfolio(){
        return view('blade.portfolio');
    }
}
