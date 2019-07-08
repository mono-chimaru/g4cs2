<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
class BackendController extends Controller
{
    function __construct(){

    }

    public function index(){
    	$user=\App\User::find(1);
    	dd($user->books);
    	$books=Book::find(1);
    	dd($books->user->name);
   		// dd($books);
   		// 
   		$book=new Book();
   		$book->title="Steve";
   		$book->author='dara';
   		$book->description="THis is testing form controller";
   		$book->user_id=\Auth::id();
   		$book->save();
    	return view('backend.index',compact('books'));
    }
}
