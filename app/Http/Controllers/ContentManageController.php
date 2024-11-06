<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ContentManageController extends Controller
{
    public function index()
    {
        $data = Content::all(); // Ambil semua data dari tabel content
        // dd($data);

        if ($data->isEmpty()) {
            return view('dashboard_admin.dashboard_content_manage', ['data' => []]);
        }
        return view('dashboard_admin.dashboard_content_manage', compact('data')); // Mengirim data ke view
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content_name' => 'required|max:255',
            'price' => 'required|string|max:255',
            'youtube_url' => 'required|string|max:13',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string|min:5|max:12',
        ]);

        Content::create($validatedData);
        return redirect('/content-manage')->with('success', 'Insert Successful!');
    }

    public function products()
    {
        // Fetch all products from the Content model
        $data = Content::all();

        return view('dashboard_user.dashboardUser', compact('data'));
    }
}
