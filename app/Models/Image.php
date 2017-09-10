<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
    	'original_name', 
    	'storage_name', 
    	'views'
    ];
}
