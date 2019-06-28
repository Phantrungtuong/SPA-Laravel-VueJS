<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable =['id', 'name', 'description'];
    public $timestamps = true;

    public  function topics(){
        return $this->hasMany(Topics::class);
    }
}
