<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $articles =  DB::table('articles')->get();
        return view('welcome',[
            'articles' => $articles,
        ]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);


        $request->user()->articles()->create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect('/createForm');
    }
    public function view(Request $request){

    }

}
