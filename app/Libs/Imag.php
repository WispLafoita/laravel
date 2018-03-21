<?php
namespace App\Libs;

use Image;

class Imag
{

    public function __construct()
    {

    }

    public function url($puth, $directory = null, $name = null)
    {
        if ($puth != null) {
            if ($directory != null) {
                $dir = 'media/uploads/'.$directory;
                if(!file_exists($dir)){
                    mkdir($dir,0777,true);
                }
            } else {
                $dir = 'media/uploads';
            }
            if ($name != null) {
                $name_pic = $name;
            } else {
                $name_pic = date('y_m_d_h_i_s') . '.jpg';
            }
            $img = Image::make($puth);
            $img->save($dir . '/' . $name_pic);
            $img->resize(200, null, function ($con) {
                $con->aspectRatio();
            });
            $img->save($dir . '/s_' . $name_pic);
            return $name_pic;
        } else {
            return false;
        }

    }

    public function picdel($puth)
    {

    }


}

