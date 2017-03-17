<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = "notes";
    protected $fillable = array("matiere","student","teacher","note","max_note","coef");
    public static $rules = array(
        "create" => array(
            "matiere_id" => 'numeric|required',
            "student_id" => 'numeric|required',
            "teacher_id" => 'numeric|required',
            "note" => 'regex:/^[0-9]+\.?[0-9]+$/|required',
            "max_note" => 'regex:/^[0-9]+\.?[0-9]+$/|required',
            "coef" => 'regex:/^[0-9]+\.?[0-9]+$/|required'
        ),
        "update" => array(
            "matiere" => 'numeric',
            "student" => 'numeric',
            "teacher" => 'numeric',
            "note" => 'regex:/^[0-9]+\.?[0-9]+$/',
            "max_note" => 'regex:/^[0-9]+\.?[0-9]+$/',
            "coef" => 'regex:/^[0-9]+\.?[0-9]+$/'
        )
    );

    public function matiere()
    {
        return $this->belongsTo("App\Matiere", "matieres", "matiere_id", "id");
    }
    public function student()
    {
        return $this->belongsTo("App\User", "users", "student_id", "id");
    }
    public function teacher()
    {
        return $this->belongsTo("App\User", "users", "teacher_id", "id");
    }
}
