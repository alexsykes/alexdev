<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request) {
        return view('uploads.uploadform');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}


