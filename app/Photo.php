<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManagerStatic as Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class Photo extends Model
{


    /**
     * @var string
     */
    protected $table = 'banner_photos';
    /**
     * @var array
     */

    protected $fillable = ['name', 'path', 'thumbnail_path'];
    protected $baseDir = "images/photos";

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function banner()
    {
        return $this->belongsTo(Banner::class);
    }


    //189.
//    public static function formFrom($file)
    public static function named($name)
    {

//        $photo = new static();
//        $photo = new Photo();
//        $name = time() . '-' . $file->getClientOriginalName();
//         $photo->path = 'banners/photos/'. $name;


//        $image_resize = Image::make($file->getRealPath());
//        $image_resize->resize(750, 450);
////        $image_resize->save('banners/photos/' . $name);
//        $image_resize->save($photo->baseDir.'/'. $name);

//        return $photo;//
//
//

        $photo = new static();
        $photo->saveAs($name);
        return $photo;
    }

    public function saveAs($name)
    {
        $this->name = sprintf("%s-%s", time(), $name);
        $this->path = sprintf("%s/%s", $this->baseDir, $this->name);
        $this->thumbnail_path = sprintf("%s/tn-%s", $this->baseDir, $this->name);





    }
    /**
     * @param UploadedFile $file
     */
//    public function store(UploadedFile $file)
    public function move( UploadedFile $file)
    {
        $file->move($this->baseDir, $this->name);
        $this->makeThumbnail();
        return $this;



//        $photo = new static();
//        $photo = new Photo();
//        $name = time() . '-' . $file->getClientOriginalName();
//         $photo->path = 'banners/photos/'. $name;
//
//
//        $image_resize = Image::make($file->getRealPath());
//        $image_resize->resize(750, 450);
////        $image_resize->save('banners/photos/' . $name);
//        $image_resize->save($photo->baseDir.'/'. $name);
//
////        return $photo;//
//        return $this;
//


//
    }

    public function makeThumbnail()
    {
//        Image::make('banners/photos/354')
//            ->fit(200,200)
//            ->save($this->baseDir.'/'. 'kljhkl2');
//        return $this;

        Image::make($this->path)
            ->fit(200)
            ->save($this->thumbnail_path);
        return $this;
    }


}
