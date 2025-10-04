<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api;

class ApiController extends Controller
{
    public function index()
    {
        $data = Api::all();
        return view('admin.api', compact('data'));
    }

    public function show($id)
    {
        $item = Api::find($id);
        if ($item) {
            return response()->json(
                [   'message' => 'Item found',
                    'status' => 'success',
                    'data' => $item
                ]
            );
        } else {
            return response()->json(['message' => 'Item not found', 'status' => 'error']);
        }
    }

    public function store(Request $request)
    {

        $item = Api::create($request->all());
        return response()->json(['message' => 'Item created successfully', 'status' => 'success', 'data' => $item]);
    }

    public function alluser()
    {
        $data = Api::all();
        return response()->json(['message' => 'All users retrieved successfully', 'status' => 'success', 'data' => $data]);
    }
    
    public function edit($id)
    {
        $data = Api::find($id);
        return view('admin.apiedit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $item = Api::find($id);
        if (!$item) {
            return response()->json(['message' => 'Item not found'], 404);
        }
        $item->update($request->all());
        return response()->json(['message' => 'Item updated successfully', 'status' => 'success', 'data' => $item]);
    }

    public function destroy($id)
    {
        $item = Api::find($id);
        if (!$item) {
            return response()->json(['message' => 'Item not found', 'status' => 'error']);
        }
        $item->delete();
        return response()->json(['message' => 'Item deleted successfully', 'status' => 'success']);
}
}
