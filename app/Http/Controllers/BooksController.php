<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;

class BooksController extends BaseController
{
    public function index()
    {
        return Book::all();
    }

    public function getdatabyid(Request $request, $id){
        $result = DB::select("SELECT * FROM books WHERE id = $id");
        if(empty($result)){
            return response()->json(['message'=>'Book Not Found'], 404);
        }
        else{
            return $result;
        }
    }
}
