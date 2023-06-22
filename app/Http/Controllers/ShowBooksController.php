<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BookDetails;

class ShowBooksController extends Controller
{
    //Redicting Based on the Function Called
    public function allBooks(){
        
        $userId = Auth::user()->id;
        $bookData = BookDetails::all()->where('user_id', '=', $userId);
        return view('allBooks', ['bookData' => $bookData]);
    }
    public function planToRead(){
        
        $userId = Auth::user()->id;
        $bookData = BookDetails::all()->where('user_id', '=', $userId);
        return view('planToRead', ['bookData' => $bookData]);
    }
    public function completed(){
        
        $userId = Auth::user()->id;
        $bookData = BookDetails::all()->where('user_id', '=', $userId);
        return view('completed', ['bookData' => $bookData]);
    }
    public function onGoing(){
        
        $userId = Auth::user()->id;
        $bookData = BookDetails::all()->where('user_id', '=', $userId);
        return view('onGoing', ['bookData' => $bookData]);
    }
    public function onHold(){
        
        $userId = Auth::user()->id;
        $bookData = BookDetails::all()->where('user_id', '=', $userId);
        return view('onHold', ['bookData' => $bookData]);
    }
    public function dropped(){
        
        $userId = Auth::user()->id;
        $bookData = BookDetails::all()->where('user_id', '=', $userId);
        return view('dropped', ['bookData' => $bookData]);
    }
    
}
