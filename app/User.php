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
        "create" => array(
            "nom" => "required|string|min:2",
            "prenom" => "required|string|min:2",
            'email' => 'required|email|unique:users',
            "login" => 'required|string|min:2|unique:users',
            'password' => 'required|string|min:2'
        ),
        "update" => array(
            "nom" => "string|min:2",
            "prenom" => "string|min:2",
            'email' => 'email|unique:users',
            "login" => 'required|string|min:2|unique:users',
            'password' => 'required|string|min:2'
        )
    );

    public function setPasswordAttribut($value)
    {
        $this->attributes["password"] = Hash::make($value);
    }

    public function getPasswordAttribut($value)
    {
        return $this->attributes["password"]."a";
    }

    public function notes()
    {
        return $this->hasMany("App\Note", "user_id", "id");
    }

    public function commentaires()
    {
        return $this->hasMany("App\Commentaire", "user_id", "id");
    }

    public function tags(){
        return $this->belongsToMany("App\Tag", "user_tag", "user_id", "tag_id");
    }
}
