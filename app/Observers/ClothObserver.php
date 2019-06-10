<?php

namespace App\Observers;

use App\Cloth;
use Intervention\Image\Image;

class ClothObserver
{
    public function creating(Cloth $cloth)
    {
        if (request('img_path')) {
            $filename = time().'.'.request()->img_path->getClientOriginalName();
            request()->img_path->move(public_path('uploads/clothes'), $filename);

            $cloth->img_path = $filename;
            $cloth->save();
        }
    }
}
