<?php

namespace Models;

use \Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model {

    use SoftDeletes;

    protected $table = 'questions';
    protected $fillable = ['question','user_id'];
    protected $dates = ['deleted_at'];

    // Obter uma Pergunta Com Respostas
    public function answers() {
        return $this->hasMany('\Models\Answer');
    }

    // Obter uma Pergunta Com Usuário
    public function user() {
        return $this->belongsTo('\Models\User');
    }

}