<?php

namespace Controllers;

use Models\Question;

class Questions {

    public static function create_question($question, $user_id) {
        $qtn = Question::create([
            'question'=> $question,
            'user_id' => $user_id
        ]);
        return $qtn;
    }

    public static function get_questions_with_answers(){
        $questions = Question::with('answers')->get()->toArray();
        return $questions;
    }

    public static function get_questions_with_users() {
        $questions = Question::with('user')->get()->toArray();
        return $questions; 
    }

    public static function get_question_answers_upvotes($question_id) { 
        $questions = Question::find($question_id)->answers()->with('upvotes')->get()->toArray();
        return $questions;
    }

    public static function delete_question($question_id){
        $question = Question::find($question_id);
        var_dump($question);
        // $deleted = $question->delete();
        // return $deleted;
    }

}