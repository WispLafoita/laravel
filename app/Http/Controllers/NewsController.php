<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function getNews()
    {
        $news = News::orderBy('id','DESC')->paginate(7);
        return view('News',compact('news'));
    }

    public function getOne($id=null)
    {
        $new = News::where('id',$id)->first();
        return view('new',compact('new'));
    }
}
