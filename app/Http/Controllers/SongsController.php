<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Song;

class SongsController extends Controller
{
    //
    
    
    public function index(Song $song){
        
        $songs = $song ->get();
        
        return view('songs.index', compact('songs'));
        
    }
    
    public function show(Song $song){
        
        
        return view('songs.show', compact('song'));
    }
    
    public function edit(Song $song){
        
        return 'Edit the title with' . $song -> title;
    }
    
    

}
