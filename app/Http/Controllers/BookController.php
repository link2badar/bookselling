<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    // to get all record from database
    public function index(){
        $data           =           Book::all();
        return response()->json($data);
    }


    // to store data

    public function store(Request $request) {
        $book                   =       new Book;
        $book->name             =       $request->name;
        $book->author           =       $request->author;
        $book->publish_date     =       $request->publish_date;

        $book->save();
        return response()->json([
            'message'           =>      'Book is added',
            'status'            =>      '200'
        ], 201);
    }


    // get book record to update it.
    public function show($id) {
        $book           =       Book::find($id);

        if(!empty($book)){
            return response()->json($book);
        } else {
            return response()->json([
                'message'           =>      'Book not found',
                'status'            =>      '404'
            ], 404);
        }
    }


    // to update the record of db
    public function update(Request $request, $id) {
        $book               =       new Book;
        $book->name         =       $request->name;
        $book->author_title =       $request->author_title;
        $book->publish_date =       $request->publish_date;
        $book->save();

        return response()->json([
            'message'       =>      'book data is updated',
            'status'        =>      '200'
        ]);
    }


    // to delete the record of book
    public function destroy($id) {
        $book               =       Book::find($id);
        $book->delete();
        return response()->json([
            'message'       =>      'Book delete',
            'status'        =>      '200'
        ], 202);
    }


}
