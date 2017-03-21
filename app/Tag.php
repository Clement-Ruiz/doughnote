<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = array('content', 'id');
    public static $rules =  array(
        "create" => array(
            "id" => 'required|integer',
            "content" => 'required|string',
        ),
        "update" => array(
            "id" => 'required|integer',
            "content" => 'required|string',
        ),
    );
    
    public function commentaires()
    {
        return $this->belongsToMany("App\Commentaire", "com_to_tag", "tag_id", "comment_id");
    }
}
