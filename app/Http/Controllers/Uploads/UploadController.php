<?php

namespace App\Http\Controllers\Uploads;

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
    	dd(request()->file('file'));
    	dd(request()->all());
    }
}
