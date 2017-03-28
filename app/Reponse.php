<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    protected $table="reponses";
    protected $fillable = array('auteur', 'content', 'comment_id', 'active');
    public static $rules =  array(
        "create" => array(
            "author_id" => 'required|integer',
            "content" => 'required|string',
            "comment_id" => 'required|integer',
            "active" => 'boolean'
        ),
        "update" => array(
            "author_id" => 'required|integer',
            "content" => 'required|string',
            "active" => 'boolean'
        ),
        "activate" => array(
            "active" => 'boolean'
        )
    );
}
