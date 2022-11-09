<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Laravolt\Avatar\Facade as Avatar;

trait CreateImg
{
    public function createImg($name){
        $UserImgID = Str::random(30);
        Avatar::create($name)->setShape('square')->save(public_path('uploads/user_imgs/' . $UserImgID . '.png'));
        return 'user_imgs/' . $UserImgID . '.png';
    }
}
