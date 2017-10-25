<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function index()
    {

    $jsonPath = database_path('books.json');

    $booksJson = file_get_contents($jsonPath);
    $books = json_decode($booksJson, true);

    return view('book.index')->with ([

      'books' => $books
    ]);
    }

    public function show($title)

    {

return view('book.show')->with([
'title' => $title,

]);

    }
}
