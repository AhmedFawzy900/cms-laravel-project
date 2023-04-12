<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index(){
        $title="Welcome to Home Page";
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title="Welcome to About Page";
        return view('pages.about',compact('title'));
    }
    public function features(){
        $data=array(
            'title'=>"Features",
            'features'=>['Create Post','upload Media']
        );
        return view('pages.features')->with($data);
    }
}
