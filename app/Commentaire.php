<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table="commentaires";
    protected $fillable = array('auteur', 'content', 'user_id', 'active');
    public static $rules =  array(
        "create" => array(
            "author_id" => 'required|integer',
            "content" => 'required|string',
            "attached_id" => 'required|integer',
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
    
    public function author()
    {
        return $this->belongsTo("App\User", "users", "author_id", "id");
    }

    public function target()
    {
        return $this->belongsTo("App\User", "users", "comment_id", "id");
    }

    public function tags()
    {
        return $this->belongsToMany("App\Tag", "com_to_tag", "comment_id", "tag_id");
    }

    public function reponses(){
        return $this->hasMany("App\Reponse", "comment_id", "id");
    }

}
