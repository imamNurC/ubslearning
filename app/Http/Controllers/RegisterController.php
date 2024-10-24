<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

use Illuminate\Support\Facades\Hash;

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
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|string|min:3|max:255|unique:customers',
            'phone_number' => 'required|string|max:13',
            'email' => 'required|string|email:dns|max:255|unique:customers',
            'password' => 'required|string|min:5|max:12',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        Customer::create($validatedData);
        return redirect('/login')->with('success', 'Registration Successful!');
    }
}
