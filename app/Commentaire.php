<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = array('auteur', 'content', 'user_id', 'created_at', 'updated_at', 'active');
    public static $rules =  array(
        "create" => array(
            "user_id" => 'required|integer',
            "auteur" => 'required|string',
            "content" => 'required|string',
            "active" => 'boolean'
        ),
        "update" => array(
            "user_id" => 'required|integer',
            "auteur" => 'required|string',
            "content" => 'required|string',
            "active" => 'boolean'
        ),
        "valide" => array(
            "active" => 'boolean'
        )
    );
    
    public function user()
    {
        return $this->belongsTo("App\User", "user_id", "id");
    }
}
