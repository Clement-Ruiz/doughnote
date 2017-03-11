<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = array('nom', 'prenom', 'email', 'login', 'password' );
    protected $hidden = array('password', 'remember_token');
    public static $rules = array(

    );

    public function commentaires()
    {
        return $this->hasMany("App\Commentaire", "user_id", "id");
    }

    public function tags(){
        return $this->belongsToMany("App\Tag", "user_tag", "user_id", "tag_id");
    }
}
