<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(){
    return view('user.home');

    
}
public function contact(){
    return view('user.contact');

    
}

public function founder(){
    return view('user.founder');

    
}
public function about(){
    return view('user.about');

    
}

}