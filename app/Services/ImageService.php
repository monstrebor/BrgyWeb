<?php

namespace App\Services;

class ImageService
{
    public function imageHandler($image)
    {
        if ($image && $image->isValid()) {
            $filename = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $filename);
            return $filename;
        }

        return null;
    }


    public function imagePublisher($image)
    {
        $image = asset('/storage/images/' . $image);

        return $image;
    }

}
