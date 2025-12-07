<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps = FALSE;
    protected $table = 'videos';
    public $fillable = ['name','status','created_at'];
    public $primaryKey = 'id';
}
