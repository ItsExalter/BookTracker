<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookDetails;

class DeleteBookController extends Controller
{
    public function delete($id){
        BookDetails::where('id','=', $id)->delete();
        
        return redirect("dashboard")->withSuccess('Successfully Deleted!');
    }
}
