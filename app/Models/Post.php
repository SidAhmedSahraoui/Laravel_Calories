<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $title = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true ;
}
