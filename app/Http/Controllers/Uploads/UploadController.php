<?php

namespace App\Http\Controllers\Uploads;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function create()
    {
    	return view('uploads.create');
    }

    public function store()
    {
    	$rules = [
    		'file' => 'required|image',
    	];

    	// validation
    	$this->validate(request(), $rules);

    	// check for file
    	if(request()->hasFile('file')) {
    		// is file valid
    		if (request()->file('file')->isValid()) {
    			// store data into the database
    			$file = request()->file('file');
    			$storageName = uniqid() . '.' . $file->extension();
    			$originalName = $file->getClientOriginalName();

    			// store into database
    			$image = Image::create([
    				'original_name' => $originalName,
    				'storage_name'  => $storageName,
    			]);

    			$image->attachImage($file);

    			return response($image, 200);
    		}
    	}

    	return response([
    		'responseText' => 'There was a problem uploading your file.',
    	], 422);

    	dd(request()->file('file'));
    	dd(request()->all());
    }
}
