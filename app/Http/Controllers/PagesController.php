<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    
    public function index(){
        
        $lessons = ['ma first lesson','my second lesson', 'my third lesson'];
        
        return view('pages.home',['lessons' => $lessons]);
        
    }
    
    public function about(){
        
        
        return 'learn a little about me';
    }
}
