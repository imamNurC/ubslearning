<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ContentManageController extends Controller
{
    public function index()
    {
        $data = Content::all();
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
    ]);

    Content::create($validatedData);
    return redirect('/content-manage')->with('success', 'Insert Successful!');
}
}