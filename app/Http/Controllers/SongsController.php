<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SongsController extends Controller
{
    //
    
    
    public function index(){
        
        $songs = ['be allright', 'for u', 'nic'];
        
        return view('songs.index', compact('songs'));
        
    }
}
