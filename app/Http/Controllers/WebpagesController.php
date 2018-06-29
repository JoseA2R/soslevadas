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
        return view('sidebar')->with('title',$title);
    }

    public function Contactos(){
        $title = 'SOSLevadas';
        //return view('pages.index',compact('title'));
        return view('pages.Contactos')->with('title',$title);
    }

    public function SOSapp(){
        $title = 'SOSLevadas';
        //return view('pages.index',compact('title'));
        return view('pages.SOSapp')->with('title',$title);
    }

    public function app(){
        $title = 'app';
        return view('layouts.app')->with('title',$title);
    }

}
