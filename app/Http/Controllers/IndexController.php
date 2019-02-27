<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class IndexController extends Controller
{
    public function index (){
        $data = [
            'books'=>Book::all(),
        ];
        return view('welcome', $data);
    }
}
