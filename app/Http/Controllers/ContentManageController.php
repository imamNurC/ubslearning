<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ContentManageController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard_content_manage', compact('data')); // Mengirim data ke view
    }

    public function dataView(Content $data) {
        $data = Content::all(); // Ambil semua data dari tabel content
        return view('dashboard.Dashboard_content_manage', compact('data'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'content_name' => 'required|max:255', // Ubah contentName menjadi content_name
        'price' => 'required|integer', // Ubah ke integer
        'youtube_url' => 'required|string|max:255', // Ubah youtubeUrl menjadi youtube_url
        'kategori' => 'required|string|max:255',
        'deskripsi' => 'required|string|max:255',
    ]);

    Content::create($validatedData); // Pastikan $fillable di model sudah diatur
    return redirect('/content-manage')->with('success', 'Insert Successful!');
}
}