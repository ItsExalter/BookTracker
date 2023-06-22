<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BookDetails;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $bookData = BookDetails::all()->where('user_id', '=', $user->id);
        return view('profile', ['user' => $user, 'bookData' => $bookData]);
    }
}
