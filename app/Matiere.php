<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table = "matieres";
    protected $fillable = array('name');
    protected $rules = array(
        "create" => array(
          "name" => "required|string"
        ),
        "update" => array(
            "name" => "required|string"
        )
    );

    public function users()
    {
    	return $this->belongsToMany("App/Users", "prof_to_mat", "mat_id", "teacher_id");
    }
}
