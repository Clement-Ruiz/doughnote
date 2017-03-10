<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $fillable = array('id', 'nom', 'prenom', 'login', 'email', 'password');
    protected $hidden = array('password', 'remember_token');
    public static $rules = array(
        "create" => array(
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'email' => 'required|email|unique:users',
            'login' => 'required|string|unique:users',
            'password' => 'required|string|min:2|confirmed'
        ),
        "update" => array(
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'email' => 'required|email',
            'login' => 'required|string',
            'password' => 'string|min:2|confirmed'
        )
    );
    public function setPasswordAttribute($value)
    {
        $this->attributes["password"] = Hash::make($value);
    }

    public function getPasswordAttribute($value)
    {
        return $this->attributes["password"]."a";
    }

    public function getCommentaires()
    {
        return $this->hasMany("App\Commentaire", "user_id", "id");
    }

    public function tags(){
        return $this->belongsToMany("App\Tag", "user_tag", "user_id", "tag_id");
    }

}
