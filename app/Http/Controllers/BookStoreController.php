<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookgenre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookStoreController extends Controller
{
    //
    public function home(){
        $books = Book::where('id',Auth::id())->simplePaginate(5);
        return view('home',['books'=>$books]);
    }

    public function bookdetail($id){
        $books = Book::find($id);
        return view('bookdetail',['books'=>$books]);
    }

    public function loginPage() {
        return view('login');
    }

    public function insertbook(Request $req){
        $req->validate([
            'cover' => 'required|file|image',
            'name' => 'required',
            'synopsis' => 'required',
            'author' => 'required',
            'price' => 'required',
        ]);
        $insert = new Book();
        $insert->nama = $req->name;
        $insert->author = $req->author;
        $insert->synopsis = $req->synopsis;
        $insert->price = $req->price;
        $file = $req->file('cover');

        $file_name=$file ->getClientOriginalName();
        $file->storeAs('public',$file_name);
        $insert->file_path= $file_name;
        $insert->save();
        return view('insert');
    }

    public function insertgenre(Request $req){
        $req->validate([
            'name'=> 'required',
        ]);
        $insert = new Bookgenre();
        $insert->genres = $req->name;
        $insert->save();

        return redirect()->back();
    }


    public function createbook(){
        return view('insert');
    }
    public function creategenre(){
        $genres = Bookgenre::all();
        return view('addgenre',['genre'=>$genres]);
    }

    public function updategenre(Request $req,$id){
        $genres = Bookgenre::find($id);
        return view('genredetail',['genre'=>$genres]);
    }

    public function update(Request $req, $id){
        $req->validate([
            'name' => 'required',
        ]);

        $genres = Bookgenre::find($id);

        $genres->update([
            'genres' => $req->name
        ]);

        return redirect()->back();

    }

    public function manageuser(){
        $users = User::all();
        return view('manageuser',['users'=>$users]);
    }

    public function updateuser(Request $req,$id){
        $users = User::find($id);
        return view('manageuserdetail',['users'=>$users]);
    }

    public function updateuserrr(Request $req, $id){
        $req->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $users = User::find($id);

        $users->update([
            'name' => $req->name,
            'email' => $req->email,
        ]);

        return view('manageuserdetail',['users'=>$users]);

    }
}

