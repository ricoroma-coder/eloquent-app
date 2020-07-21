<?php 
namespace Models;
 
use \Illuminate\Database\Eloquent\Model;
 
 
class UpVote extends Model {
 
    protected $table = 'upvotes';
    protected $fillable = ['answer_id','user_id'];
      
}