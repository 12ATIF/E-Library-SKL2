<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the books.
     */
    public function index()
    {

        return view ('books.index');
    }

    /**
     * Show the form for creating a new book.
     */
    public function create()
    {
        return view ('books.create');
    }

    /**
     * Store a newly created book in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified book.
     */
    public function show(Books $book)
    {

    }

    /**
     * Show the form for editing the specified book.
     */
    public function edit(Books $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified book in storage.
     */
    public function update(Request $request, Books $book)
    {

    }

    /**
     * Remove the specified book from storage.
     */
    public function destroy(Books $book)
    {

    }
}