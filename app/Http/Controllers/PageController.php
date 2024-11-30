<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showMustafa(){
        return "<h1>Hello this is mustafa</h1>";
    }


    public function showMurtaza(){
        return "<h1>Hello this is murtaza</h1>";
    }

    public function showHaider(){
        return "<h1>Hello this is Haider</h1>";
    }

    public function showFaraz(){
        return "<h1>Hello this is Faraz</h1>";
    }
    
    public function showHammad(string $id){
        
        return view('hammad',['id' => $id]);
    }
}
