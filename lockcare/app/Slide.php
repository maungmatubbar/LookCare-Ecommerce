<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['slide_title','slide_short_description','slide_long_description','button1_url','button2_url','slide_image','publication_status'];
}
