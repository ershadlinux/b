<?php
namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;
use App\Photo;
use App\User;

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

    public function user()
    {
        return $this->belongsTo(User::class);
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



//        catch (Exception $e) {
//            $e="hi";
//            return view('error', compact('e'));
////            return $e->getMessage();
//
//
//        }
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