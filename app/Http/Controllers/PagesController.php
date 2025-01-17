<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= ('Welcome to my Site');

        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title=('About Us');
        return view('pages.about',compact('title'));
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['SEO','WEB dev','Android dev']
        );
        return view('pages.services')->with($data);
    }

}
