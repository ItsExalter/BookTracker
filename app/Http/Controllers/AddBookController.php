<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BookDetails;
 
class AddBookController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'bookCover' => 'mimes:jpeg,bmp,png, jpg',
            'bookTitle' => 'required',
            'bookDetails' => 'required',
            'bookAuthor' => 'required',
            'bookYear' => 'required',
            'bookStatus' => 'required',
        ]);
        $fileName = time().'.'.$request->file('bookCover')->getClientOriginalName();
        $filePath = $request->file('bookCover')->storeAs('book-cover', $fileName, 'public');
        $userId = Auth::user()->id;

        $bookDetails = new bookDetails([
            'user_id' => $userId,
            'book_cover' => '/storage/'. $filePath,
            'book_name' => $request->get('bookTitle'),
            'book_details' => $request->get('bookDetails'),
            'book_author' => $request->get('bookAuthor'),
            'book_year' => $request->get('bookYear'),
            'book_status' => $request->get('bookStatus'),
        ]);

        $bookDetails->save();
        return redirect("dashboard")->withSuccess('Successfully Storred!');
    }

}