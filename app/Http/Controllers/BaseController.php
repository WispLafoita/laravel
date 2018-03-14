<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;    //подключаемся к моделе

class BaseController extends Controller
{
    public function getIndex()
    {
        $text = Maintext::where('url', 'index')->first();
        return view('index', compact('text'));//передаёт переменную $text с именем text
    }

    public function getStatic($id = null)
    {
        $text = Maintext::where('url', $id)->first();
        return view('static', compact('text'));//передаёт переменную $text с именем text
    }

    public function getStatics()
    {
        //$all = Maintext::all();
        $all = Maintext::where('lang', 'ru')->orderBY('id', 'Desc')->paginate(1);
        return view('statics', compact('all'));
    }
}
