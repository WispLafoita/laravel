<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Сategories;

class SiteComposer {
    
    public function compose(View $view){
        $catalogs_comp = Сategories::all();
        $view->with('catalogs_comp',$catalogs_comp);
    }
    
}