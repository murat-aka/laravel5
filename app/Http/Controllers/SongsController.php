<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SongsController extends Controller
{
    //
    
    
    public function index(){
        
        $songs = $this -> getSongs();
        
        return view('songs.index', compact('songs'));
        
    }
    
    public function show($id){
        
        $song = $this -> getSongs()[$id];
        return view('songs.show', compact('song'));
    }
    
    
    public function getSongs(){
        
        $songs = ['be allright', 'for u', 'nic'];
        
        return $songs;
        
    }
}
