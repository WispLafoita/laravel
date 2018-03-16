<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VideoRequest;
use App\Video;
use App\Сategories;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Video::all();
        $cats = Сategories::all();
        return view('home', compact('cats', 'movies'));
    }

    public function postIndex(VideoRequest $r)  //запускается с зависимостью обьекта $r
    {
        if (!empty($_FILES['video']['name'])) {
            dd($_FILES);
        }
        $r['video'] = '';   //ссылка на видео пока не реализована
        Video::create($r->all());   //create - множественная вставка
        return redirect('home');

    }
    
    public function getDelete($id=null){
        Video::where('id',$id)->delete();
        return redirect('home');
    }
}
