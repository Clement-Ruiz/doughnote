<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
<<<<<<< HEAD
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
=======
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
>>>>>>> dev
    {
        return $this->attributes["password"]."a";
    }

<<<<<<< HEAD
    public function getCommentaires()
    {
        return $this->hasMany("App\Commentaire", "user_id", "id");
    }

    public function tags(){
        return $this->belongsToMany("App\Tag", "user_tag", "user_id", "tag_id");
    }

=======
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
>>>>>>> dev
}
