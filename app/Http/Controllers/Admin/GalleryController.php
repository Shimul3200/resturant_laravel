<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;
use Illuminate\Support\Facades\Validator;


class GalleryController extends Controller
{
 
    public function index()
    {
        $galleries = gallery::orderBy('id','desc')->get();
        return view('admin.gallery.index',\compact('galleries'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
 
            'image' => 'required',
           
        ]);
 
        if (!$validator->fails()) {
            $gallery = new gallery();
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

    public function show($id)
    {
        //
    }



    public function editGallery($id)
    {
        $gallery = gallery::find($id);
        if ($gallery) {
            return response()->json([
                'success' => 'OK',
                'data' => $gallery,
            ]);
        }
    }

    public function updateGallery(Request $request, $id)
    {
          // return $id;
         $validator = Validator::make($request->all(), [
            'title' => 'required',  
        ]);
        if (!$validator->fails()) {
            $gallery = gallery::find($id);
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
                    'message' => 'Gallery Update Sucessfully',
                    'date' => date('l,m-Y', strtotime($gallery->created_at)),
                    'dif' => $gallery->created_at->diffforhumans() ?: 'null',
                    'status' => 'update',
                ]);
            }

        }
        return response()->json([
            'success' => 'FALD',
            'errors' => $validator->errors()->all()
        ]);
    }
    // public function destroy($id)
    // {
    //     $data = Gallery::find($id);
    //     $data->delete();
    //     return 1;
    // }
    public function deleteGallery($id)
    {
        $gallery = gallery::find($id);
        if ($gallery->delete()) {
            return response()->json([
                'success' => 'OK',
                'message' => 'Gallery delete successfully',
            ]);
        }
    }
}
