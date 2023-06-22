<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookDetails;
use Illuminate\Support\Facades\Auth;

class BookDetailsController extends Controller
{
    public function details($id){
        $userId = Auth::user()->id;
        $bookData = BookDetails::all()->where('user_id', '=', $userId)->where('id', '=', $id);
        return view('bookDetails', ['books' => $bookData]);
    }
}
