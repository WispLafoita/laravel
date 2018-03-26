<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;


class BreadComposer {

    public function compose(View $view){
        $req = explode('/',$_SERVER['REQUEST_URI']);
       $view->with('end', end($req));
    }

}