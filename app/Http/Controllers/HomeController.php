<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VideoRequest;
use App\Video;

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
        return view('home');
    }

    public function postIndex(VideoRequest $r)  //запускается с зависимостью обьекта $r
    {
        $r['video'] = '';   //ссылка на видео пока не реализована
        Video::create($r->all());   //create - множественная вставка
        return redirect('home');

    }
}
