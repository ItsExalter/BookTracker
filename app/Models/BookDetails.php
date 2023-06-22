<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDetails extends Model
{
    use HasFactory;
    protected $table = 'books_details';
    protected $fillable = ["book_cover", "book_name", "book_details", "book_author", "book_year", "book_status", "user_id"];
}
