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
            "nom" => "required|string|min:2|regex:/^[a-zA-Z-' ]$/",
            "prenom" => "required|string|min:2|regex:/^[a-zA-Z-' ]$/",
            'email' => 'required|email|unique:users',
            "login" => 'required|string|min:2|unique:users|alpha_dash',
            'password' => 'required|string|min:8',
            'birth_date' => 'string',
            'type' => 'required|string|regex:/eleve|prof|admin/',
            'avatar' => 'url'
        ),
        "update" => array(
            "nom" => "string|min:2|regex:/^[a-zA-Z-' ]$",
            "prenom" => "string|min:2|regex:/^[a-zA-Z-' ]$",
            'email' => 'email|unique:users',
            'password' => 'required|string|min:8',
            'birth_date' => 'string',
            'avatar' => 'url'
        ),
        "avatarUpdate" => array(
            "avatar" => 'url|required'
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

    // Fonctions perso

    public function hasRole($role)
    {
        
    } 
}
