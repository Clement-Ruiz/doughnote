<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = "commentaires";
    protected $fillable = array('id', 'auteur', 'content', 'created_at', 'updated_at', "user_id", "active");
    public static $rules = array(
      "create" => array(

      )
    );
}
