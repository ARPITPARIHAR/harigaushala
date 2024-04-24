<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(){
    return view('user.home');

    
}

public function admin(){
    return view('admin.home');

    
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


public function gallery(){
    return view('user.gallery');

    
}
public function login(){
    return view('user.login');

    
}


public function getComment()
    {
        return view('partials.comment-modal-body');
    }

}