<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = FALSE;
    protected $table = 'brands';
    public $fillable = ['name','image','url','status','created_at','updated_at'];
    public $primaryKey = 'id';
}
