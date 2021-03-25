<?php

namespace App\Http\Controllers;

use App\Models\Image;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function index()
    {
        return view('imageupload');
    }

    public function uploadImage(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $userId = Auth::id();

        $image = time() . '.' . $request->image->extension();

        $request->image->move(public_path('uploads'), $image);

        $image = Image::create(["image_name" => $image, "userId" => $userId]);

        if (!is_null($image)) {
            return back()->with('success', 'Success! image uploaded');
        } else {
            return back()->with("failed", "Alert! image not uploaded");
        }
    }
}
