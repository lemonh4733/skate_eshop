<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   protected $fillable = [
       'title', 'price', 'count', 'img', 'description', 'cat_id', 'user_id',
   ];
}
