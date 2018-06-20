<?php

namespace App;

use Beta\B;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function bannners(){
        return $this->hasMany(Banner::class);
    }


    /**
     * @param $relation
     * @return bool
     */
    public function owns($relation){
        return $relation->user_id == $this->id;
    }



 public function publish(Banner $banner) {
      return  $this->bannners()->save($banner);
 }


}
