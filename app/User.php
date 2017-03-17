<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "users";
    protected $fillable = array('nom', 'prenom', 'email', 'login', 'password', 'birth_date', 'type', 'avatar' );
    protected $hidden = array('password', 'remember_token');
    public static $rules = array(
        "create" => array(
            "nom" => "required|string|min:2",
            "prenom" => "required|string|min:2",
            'email' => 'required|email|unique:users',
            "login" => 'required|string|min:2|unique:users',
            'password' => 'required|string|min:8',
            'birth_date' => 'string',
            'type' => 'required|string',
            'avatar' => 'url'
        ),
        "update" => array(
            "nom" => "string|min:2",
            "prenom" => "string|min:2",
            'email' => 'email|unique:users',
            'password' => 'string|min:8',
            'birth_date' => 'string|min:5',
            'avatar' => 'url'
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

    public function matieres()
    {
        return $this->belongsToMany("App\Matieres", "prof_to_mat", "teacher_id", "mat_id");
    }
}
