<?php

use Illuminate\Database\Seeder;
use App\Maintext;

class MaintextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //добавим постоянные данные в БД (которые будут на сайте изначально)
        $obj = new Maintext();
        $obj->name='Добро пожаловать на сайт';
        $obj->body='Статическая страница и всё что на ней';
        $obj->url='index';
        $obj->save();

    }
}
