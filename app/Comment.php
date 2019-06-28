<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table ='comments';
    protected $fillable=['id', 'user_id', 'topic_id', 'content'];
    public $timestamps = true;

    public  function topic(){
        return $this->belongsTo(Topics::class, 'topic_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
