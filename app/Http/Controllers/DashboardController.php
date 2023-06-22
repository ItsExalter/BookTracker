<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\BookDetails;

class DashboardController extends Controller
{
    public function index(){
        $userId = Auth::user()->id;
        $bookData = BookDetails::all()->where('user_id', '=', $userId);
        return view('dashboard', ['bookData' => $bookData]);
    }
}
