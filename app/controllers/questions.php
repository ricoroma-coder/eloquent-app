<?php

namespace Controllers;

class Questions {

    public static function create_user($question, $user_id) {
        $qtn = Question::create([
            'question '=> $question,
            'user_id' => $user_id
        ]);
        return $qtn;
    }

    public static function get_questions_with_answers(){
        $questions = Question::with('answers')->get()->toArray();
        return $questions;
    }

}