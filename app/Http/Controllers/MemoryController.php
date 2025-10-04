<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memory;
use ZipArchive;

class MemoryController extends Controller
{
    public function memory()
    {
        $memories = Memory::latest()->get();
        return view('admin.memory', compact('memories'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|string|max:255',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $imagePaths = [];
        if($request->hasFile('image')){
            foreach($request->file('image') as $file){
                $imagePaths[] = $file->store('memories', 'public');
            }
        }

        Memory::create([
            'title' => $request->input('title'),
            'image_path' => json_encode($imagePaths),
        ]);

        return redirect()->route('admin.memory')->with('success', 'Memory added successfully!');
    }

    public function downloadAll($id)
    {
        $memory = Memory::findOrFail($id);
        $paths = json_decode($memory->image_path, true);

        $zipFileName = 'memory_' . $id . '.zip';
        $zipFilePath = storage_path('app/public/' . $zipFileName);

        $zip = new ZipArchive;
        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
            foreach ($paths as $filePath) {
                $absolutePath = storage_path('app/public/' . $filePath);
                if (file_exists($absolutePath)) {
                    $zip->addFile($absolutePath, basename($filePath));
                }
            }
            $zip->close();
        }
        return response()->download($zipFilePath)->deleteFileAfterSend(true);
    }
    public function edit($id)
    {
        $memory = Memory::findOrFail($id);
        return view('admin.memory', compact('memory'));
    }

    public function delete($id)
    {
        $memory = Memory::findOrFail($id);
        $memory->delete();
        $paths = json_decode($memory->image_path, true);
        if ($paths) {
            foreach ($paths as $filePath) {
                $Path = storage_path('app/public/' . $filePath);
                if (file_exists($Path)) {
                    unlink($Path);
                }
            }
        }
        $memory->delete();
        return redirect()->route('admin.memory')->with('success', 'Memory deleted successfully!');
    }
}
