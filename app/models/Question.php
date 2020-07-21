<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;

class Question extends Model {

    protected $table = 'questions';
    protected $fillable = ['question','user_id'];

    public function answers() {
        return $this->hasMany('\Models\Answer');
    }

}