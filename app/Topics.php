<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Null_;

class Topics extends Model
{
    protected $table='topics';
    protected $fillable =['id', 'user_id', 'category_id', 'title', 'body', 'views'];
    public $timestamps = true;

    public function category(){
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
