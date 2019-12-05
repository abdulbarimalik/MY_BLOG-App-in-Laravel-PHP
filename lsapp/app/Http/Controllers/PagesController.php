<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to the Laravel!';
        # 1st way to pass variable or value
        //return view('pages.index', compact('title'));
        # Another way of passing varaible
        return view('pages.index')->with('title',$title);
    }
    
    public function about(){
        $title = 'About US';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        //$title = 'Our Services';
        $data = array(
            'title' => 'Our Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
