<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable=['title', 'price', 'category_name', 'category_id', 'description', 'image'];
}
