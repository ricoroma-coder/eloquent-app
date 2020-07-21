<?php

namespace Controllers;

use Models\User;
use Models\Question;

class Users {

    public static function create_user($username, $email, $password) {
        $user = User::create([
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);
        return $user;
    }

    // Questions count
    public static function question_count($user_id) {
        $count = Question::where('user_id',$user_id)->count();
        return $count;
    }

}