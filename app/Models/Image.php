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

    // helper
    public function attachImage($file)
    {
    	// store image
    	// make thumbnails
    }
}
