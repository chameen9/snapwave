<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $timestamps = FALSE;
    protected $table = 'banners';
    public $fillable = ['title','image','status','created_at','updated_at'];
    public $primaryKey = 'id';
}
