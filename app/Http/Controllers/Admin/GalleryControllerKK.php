<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::orderBy('id','desc')->get();
        return view('admin.gallery.index',\compact('galleries'));
    } 
 
    public function savegallery(Request $request)
    {
        $validator = Validator::make($request->all(), [
 
            'image' => 'required',
           
        ]);
 
        if (!$validator->fails()) {
            $gallery = new Gallery();
            $gallery->title = $request->title;
 
            //if request file image then store the image...
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('images/gallery', 'public');
                $gallery->image = $path;
            }
 
            //if data save then give us "Ok" response
            if ($gallery->save()) {
                return response()->json([
                    'success' => 'OK',
                    'data' => $gallery,
                    'message' => 'Image add suucessfully',
                    'date' => date('l,m-Y', strtotime($gallery->created_at)),
                    'dif' => $gallery->created_at->diffforhumans() ?: 'null',
                ]);
            }
        }
 
        return response()->json([
            'success' => 'FALD',
            'errors' => $validator->errors()->all()
        ]);
    }
 
    public function deleteGallery($id)
    {
        $data = Gallery::find($id);
        $data->delete();
        return 1;
    }

}
