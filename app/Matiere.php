<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    public function users()
    {
    	return $this->belongsToMany("App/Users", "prof_to_mat", "mat_id", "teacher_id");
    }
}
