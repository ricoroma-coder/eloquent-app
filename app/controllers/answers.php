<?php
 
namespace Controllers;
use Models\Answer;
use Models\UpVote;
 
 
class Answers {
 
    public static function add_answer($answer,$question_id,$user_id){
        $answer = Answer::create(['answer'=>$answer,'question_id'=>$question_id,'user_id'=>$user_id]);return $answer;
    }

    public static function upvote_answer($answer_id,$user_id){
        $upvote = UpVote::create(['answer_id'=>$answer_id,'user_id'=>$user_id]);
        return $upvote;
    }

    public static function update_answer($answer_id,$new_answer){
        $answer = Answer::find($answer_id);
        $answer->answer = $new_answer;
        $updated = $answer->save();
        return $updated;
    }
}
