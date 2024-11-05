<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ContentManageController extends Controller
{
    public function index(Request $request)
{
    $search = $request->get('search');
    $data = Content::query()
        ->when($search, function ($query) use ($search) {
            return $query->where('content_name', 'like', "%{$search}%")
                         ->orWhere('kategori', 'like', "%{$search}%");
        })
        ->paginate(5);

    if ($request->ajax()) {
        return view('dashboard.dashboard_content_manage', compact('data'))->render();
    }

    return view('dashboard.dashboard_content_manage', compact('data'));
}




public function store(Request $request)
{
    $validatedData = $request->validate([
        'content_name' => 'required|max:255',
        'price' => 'required|integer',
        'youtube_url' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'deskripsi' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->store('content-images', 'public');
        $validatedData['image_path'] = $imagePath;
    }

    Content::create($validatedData);
    return redirect('/content-manage')->with('success', 'Insert Successful!');
}



public function delete($id_content)
{
    $content = Content::where('id_content', $id_content)->firstOrFail();

    if ($content) {
        // Hapus file gambar dari storage jika ada
        if ($content->image_path) {
            Storage::disk('public')->delete($content->image_path);
        }

        $content->delete();
        return redirect()->back()->with('success', 'Record berhasil dihapus.');
    }
    return redirect()->back()->with('error', 'Record tidak ditemukan.');
}

public function update(Request $request, $id_content)
{
    // Validasi input
    $validatedData = $request->validate([
        'content_name' => 'required|max:255',
        'price' => 'required|integer',
        'youtube_url' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'deskripsi' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // tambahkan validasi untuk gambar baru
    ]);

    $content = Content::findOrFail($id_content);

    // Cek apakah ada gambar baru yang diupload
    if ($request->hasFile('image')) {
        // Hapus file gambar lama jika ada
        if ($content->image_path) {
            Storage::disk('public')->delete($content->image_path);
        }

        // Simpan gambar baru
        $image = $request->file('image');
        $imagePath = $image->store('content-images', 'public');
        $validatedData['image_path'] = $imagePath;
    }

    // Update konten dengan data baru
    $content->update($validatedData);

    return redirect()->back()->with('success', 'Konten berhasil diperbarui.');
}

}