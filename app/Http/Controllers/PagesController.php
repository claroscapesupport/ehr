<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Welcome To Claroscape';
    	return view('pages.index')->with('title', $title);
    }

    public function about(){
    	$title = 'About';
    	return view('pages.about')->with('title', $title);
    }

    public function services(){
    	$data = array(
    		'title' => 'Services',
    		'services' => ['Web Design','Programming', 'SEO']);
    	return view('pages.services')->with($data);
    }

    public function ehr(){
        $title = 'Electronic Health Records';
        return view('pages.ehr')->with('title', $title);
    }

     public function ehrlaunch(){
        $title = 'Electronic Health Records Launch';
        return view('pages.ehrlaunch')->with('title', $title);
    }
}
