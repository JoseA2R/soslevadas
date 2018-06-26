<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpagesController extends Controller
{
    public function index(){
        $title = 'SOSLevadas';
        //return view('pages.index',compact('title'));
        return view('sidebar')->with('title',$title);
    }

    public function sidebar(){
        $title = 'SOSLevadas';
        //return view('pages.index',compact('title'));
        return view('sidebar2')->with('title',$title);
    }
}
