<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\News;

class NewsComposer {

    public function compose(View $view){
        $news_comp = News::paginate(3);
        $view->with('news_comp',$news_comp);
    }

}