<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookDetails;

class UpdateBookController extends Controller
{
    public function update(Request $request, $id){
        BookDetails::where('id','=', $id)->update([
            'book_name' => $request->get('bookTitle'),
            'book_details' => $request->get('bookDetails'),
            'book_author' => $request->get('bookAuthor'),
            'book_year' => $request->get('bookYear'),
            'book_status' => $request->get('bookStatus'),]
        );
        return redirect("dashboard")->withSuccess('Successfully Updated!');
    }

}
