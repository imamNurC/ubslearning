<?php

namespace App\Http\Controllers\kta;

use App\Http\Controllers\Controller;
use App\Models\Kta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class MentorRegistController extends Controller
{
    /**
     * Handle user registration.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('kta_auth.regist');
    }
    public function register(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nama_kta' => 'required|string|max:30',
            'foto_kta' => 'required|file|mimes:png,jpg,jpeg|max:2048', // Adjust max size as needed
            'nickname_kta' => 'required|string|max:30',
            'nohp_kta' => 'required|string|max:15',
            'email' => 'required|email|max:30',
            'jabatan_kta' => 'required|string|max:30',
            'status_kta' => 'required|in:aktif,non-aktif',
            'bergabung_kta' => 'required|date',
            'kadaluarsa_kta' => 'required|date',
            'sunting_kta' => 'required|string|max:30',
            'password' => 'required|string|min:5|max:12',
        ]);


        // Handle the file upload
        if ($request->hasFile('foto_kta')) {
            $file = $request->file('foto_kta');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $filename, 'public'); // Store in storage/app/public/uploads
            $validatedData['foto_kta'] = $filename;
        }



        $validatedData['password'] = Hash::make($validatedData['password']);
        Kta::create($validatedData);


        // Redirect or respond as needed
        return redirect()->route('login-mentor')->with('success', 'Registration successful!');
    }

    public function listMembers()
    {
        $members = Kta::all(); // Fetch all members from the database
        return view('kta_modul.listAll', compact('members')); // Pass the members to the view
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string|max:30', // Validate the search input
        ]);

        $query = $request->input('query');

        // Perform the search in the Kta model
        $members = Kta::where('nickname_kta', 'LIKE', "$query%")->get();

        return view('kta_modul.memberList', compact('members'));
    }
}
