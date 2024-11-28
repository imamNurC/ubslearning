<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{

    public function index()
    {
        return view('admin.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {

        // Extract data from the request
        // $data = $request->all();

        // dd($data);
        // Validate incoming request
        $validatedData = $request->validate([
            //nama request dari inputan
            'name' => 'required|max:255',
            'username' => 'required|string|min:3|max:255|unique:customers,username',
            'phone_number' => 'required|string|max:13',
            'email' => 'required|string|email:dns|max:255|unique:customers,email',
            'password' => 'required|string|min:5|max:12|confirmed',  // Added confirmation rule
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'nama_provinsi' => 'required|string|max:255', // Validate the province name
            'nama_kab_kota' => 'required|string|max:255', // Validate the regency name
            'nama_kecamatan' => 'required|string|max:255', // Validate the district name
            'nama_kelurahan' => 'required|string|max:255',
        ]);

        // dd($validatedData);

        // Hash password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Create customer
        Customer::create([
            //kolom target
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'phone_number' => $validatedData['phone_number'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'nama_provinsi' => $validatedData['nama_provinsi'],  // Store the name of province
            'nama_kab_kota' => $validatedData['nama_kab_kota'],  // Store the name of regency
            'nama_kecamatan' => $validatedData['nama_kecamatan'],  // Store the name of district
            'nama_kelurahan' => $validatedData['nama_kelurahan'],  // Store the name of village
            'latitude' => $validatedData['latitude'] ?? null,  // Store latitude, if available
            'longitude' => $validatedData['longitude'] ?? null,  // Store longitude, if available
        ]);

        // Redirect to login page with success message
        return redirect('/login')->with('success', 'Registration Successful!');
    }
}
