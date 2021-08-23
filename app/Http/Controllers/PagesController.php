<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'hello0909';
        return view('pages.index')->with('title', $title);
    }
    
    public function about(){
        $title = 'About Ussssss';
        $data = array('title' => $title);
        return view('pages.about')->with($data);
    }

    
    public function services(){
        $data = array(
            'title' => 'meat',
            'services' => ['Web Design', 'HD Movies', 'Box Office']
        );
        return view('pages.services')->with($data);
    }
}
