<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;

class Banner extends Model
{
    protected $fillable = [
        'street',
        'city',
        'zip',
        'country',
        'state',
        'price',
        'description',
    ];

    public function photos()
    {
        return $this->hasmany(Photo::class);
    }

    public function ownerBy(User $user){
        return $this->user_id == $user->id;

    }






    public function getPriceAttribute($price)
    {
        return number_format($price);
    }

    public function getDescriptionAttribute($description){

        return nl2br($description);
    }
//    public function scopeLocatedAt($query, $zip, $street)
//    {
//        $street = str_replace('-', ' ', $street);
//        return $query->where(compact('zip', 'street'));
//        //return $query->where(compact('zip','street'))->get();
//    }


    public static function locatedAt($zip,$street)
    {
        $street = str_replace('-', ' ', $street);
//        return self::where(compact('zip', 'street'));
        return static::where(compact('zip', 'street'))->first();
         //        return static::where(compact('zip', 'street'));
    }







//-----------------------189
    public function addPhoto(Photo $photo){

               $this->photos()->save($photo);

        return "Done...";


    }






//
//    public function addPhoto($name){
////       1.
////        $photo= new Photo();
////        $photo->path="/banners/photos/{$name}";
////                 $this->photos()->save( $photo);
//
//                 //2.
//        $this->photos()->create(["path" => "/banners/photos/{$name}"]);
//    }









}