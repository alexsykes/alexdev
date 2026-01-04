<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return Image::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'uploaded_by' => ['required', 'integer'],
            'category' => ['nullable'],
            'filename' => ['required'],
            'description' => ['nullable'],
        ]);

        return Image::create($data);
    }

    public function show(Image $image)
    {
        return $image;
    }

    public function update(Request $request, Image $image)
    {
        $data = $request->validate([
            'title' => ['required'],
            'uploaded_by' => ['required', 'integer'],
            'category' => ['nullable'],
            'filename' => ['required'],
            'description' => ['nullable'],
        ]);

        $image->update($data);

        return $image;
    }

    public function destroy(Image $image)
    {
        $image->delete();

        return response()->json();
    }
}
