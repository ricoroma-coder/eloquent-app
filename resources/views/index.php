<?php

require '../../start.php';

use Controllers\Users;
use Controllers\Questions;
use Controllers\Answers;

// import user controller

$user = Users::create_user('user1','user1@example.com', 'user1_pass');
$user = Users::create_user('user2','user2@example.com', 'user2_pass');

$question = Questions::create_question('Question 1', 1);

$answers = Answers::add_answer('Answer 1 to Question 1',1,1);

$upvote = Answers::upvote_answer(1,2);

?>