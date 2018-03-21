<?php

namespace App\Http\Controllers;

use App\Video;
use App\Сategories;
use App\Http\Requests\VideoRequest;
use App;
use Auth;

class HomeController extends Controller
{
    public $cats;

    public function __construct()
    {
        $this->middleware('auth');
        $this->cats = Сategories::all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Video::orderBy('id', 'DESC')->paginate(5);
        $cats = $this->cats;
        return view('home', compact('cats', 'movies'));
    }

    public function postIndex(VideoRequest $r)  //запускается с зависимостью обьекта $r
    {
        if (!empty($_FILES['videoDB']['name'])) {
            $pic = \App::make('\App\Libs\Imag')->url($_FILES['videoDB']['tmp_name'], Auth::user()->id, $_FILES['videoDB']['name']);    //$pic = new \App\Libs\Imag
        } else {
            $pic = '';
        }
        $r['video'] = $pic;   //ссылка на видео пока не реализована
        Video::create($r->all());   //create - множественная вставка
        return redirect('home');

    }

    public function getDelete($id = null)
    {
        Video::where('id', $id)->delete();
        return redirect('home');
    }

    public function getEdit($id = null)
    {
        $v = Video::find($id);
        $cats = $this->cats;
        return view('edit', compact('v', 'cats'));
    }

    public function postEdit(VideoRequest $r, $id)
    {
        $obj = Video::find($id);
        $obj->name = $r['name'];
        $obj->categories = $r['categories'];
        $obj->about = $r['about'];
        $obj->save();
        return redirect('home');
    }
}
