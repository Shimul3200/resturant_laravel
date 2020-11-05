<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
 
    public function index()
    {
        $items = Item::orderBy('id','desc')->get();
        return view('admin.item.index',\compact('items'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
 
            'image' => 'required',
            'name' => 'required',
            'desc' => 'required',

           
        ]);
 
        if (!$validator->fails()) {
            $item = new Item();
            $item->name = $request->name;
            $item->desc = $request->desc;
            $item->status = 1;
 
            //if request file image then store the image...
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('images/item', 'public');
                $item->image = $path;
            }
 
            //if data save then give us "Ok" response
            if ($item->save()) {
                return response()->json([
                    'success' => 'OK',
                    'data' => $item,
                    'message' => 'Item add Sucessfully!',
                    'date' => date('l,m-Y', strtotime($item->created_at)),
                    'dif' => $item->created_at->diffforhumans() ?: 'null',
                ]);
            }
        }
 
        return response()->json([
            'success' => 'FALD',
            'errors' => $validator->errors()->all()
        ]);
    }

    public function editItem($id)
    {
        $item = Item::find($id);
        if ($item) {
            return response()->json([
                'success' => 'OK',
                'data' => $item,
            ]);
        }
    }

    public function updateItem(Request $request, $id)
    {
          // return $id;
          $validator = Validator::make($request->all(), [
            'name' => 'required',  
            'desc' => 'required', 
        ]);
        if (!$validator->fails()) {
            $item = Item::find($id);
            $item->name = $request->name;
            $item->desc = $request->desc;

            //if request file image then store the image...
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('images/item', 'public');
                $item->image = $path;
            }

            //if data save then give us "Ok" response
            if ($item->save()) {
                return response()->json([
                    'success' => 'OK',
                    'data' => $item,
                    'message' => 'Item Update Sucessfully',
                    'date' => date('l,m-Y', strtotime($item->created_at)),
                    'dif' => $item->created_at->diffforhumans() ?: 'null',
                    'status' => 'update',
                ]);
            }

        }
        return response()->json([
            'success' => 'FALD',
            'errors' => $validator->errors()->all()
        ]);
    }
    public function deleteItem($id)
    {
        $item = Item::find($id);
        if ($item->delete()) {
            return response()->json([
                'success' => 'OK',
                'message' => 'Item Delete Successfully!',
            ]);
        }
    }

    public function active($id)
    {
        $item = Item::find($id);
        $item->status = 1;
        if ($item->save()) {
            return response()->json([
                'success' => 'OK',
                'message' => 'Item active successfully',
 
            ]);
        }
    }
 
    public function deactive($id)
    {
        $item = Item::find($id);
        $item->status = 0;
        if ($item->save()) {
            return response()->json([
                'success' => 'OK',
                'message' => 'Item de-active successfully',
            ]);
        }
    }
}
