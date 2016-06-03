<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseNews extends Model
{
    protected $table = 'BaseNews';
    protected $fillable = ['TITLE','PREVIEW_TEXT','DETAIL_TEXT','updated_at','created_at'];
    public $timestamps = false;
}
