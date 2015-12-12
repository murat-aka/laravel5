<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Song;

class SongsController extends Controller
{
    //
    
    
    public function index(){
        
        $songs = Song::get();
        
        return view('songs.index', compact('songs'));
        
    }
    
    public function show($slug){
        
        $song = Song::whereSlug($slug)->first();
        return view('songs.show', compact('song'));
    }
    
    
    public function getSongs(){
        
        $songs = ['be allright', 'for u', 'nic'];
        
        return $songs;
        
    }
}
