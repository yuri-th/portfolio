<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    //店舗画像の追加・表示
    public function upload()
    {   
        return view('/upload/media');
    }

    public function upload_image(Request $request)
    {   
        $dir = 'images';
        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/' . $dir, $file_name);
        return redirect('/upload/media');
    }
}
