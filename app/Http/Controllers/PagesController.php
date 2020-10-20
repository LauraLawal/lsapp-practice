<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To My Laravel App';

      return view('pages.index', compact ('title'));
      //return view('pages.index', compact ('title'));->with('title',$title);
    }
    public function about (){
        $title = 'ABOUT';
        return view("pages.about", compact('title'));
    }
    public function services(){
       // $title = 'SERVICES';
        $data = array(
        'title' => 'SERVICES!',
        'services' => ['Web Design', 'Programming', 'CyberSec']
    );
        return view ('pages.services')->with($data);
        }
}
