<?php

namespace App\Http\Controllers;

use App\Models\Customer;
Use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{

public function showProfile($username)
{
    $customer = Customer::where('username', $username)->firstOrFail();
    return view('dashboard_user.dashboardUser_my_profile', compact('customer'));
}

public function showMyContent($username)
{
    $customer = Customer::where('username', $username)->firstOrFail();
    return view('dashboard_user/dashboardUser_my_content', compact('customer'));
}

public function updateProfile(Request $request, $username)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $customer = Customer::where('username', $username)->firstOrFail();
    $customer->name = $request->name;

    // upload foto
    if ($request->hasFile('image')) {
        if ($customer->image_path) {
            Storage::disk('public')->delete($customer->image_path);
        }

        // Simpan foto ke folder server
        $imagePath = $request->file('image')->store('profile-images', 'public');
        $customer->image_path = $imagePath;
    }

    $customer->save();

    return redirect()->route('profile.show', $username)->with('success', 'Profile updated successfully');
}


    //function merubah password
    public function changePassword(Request $request, $username)
{
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|min:5|confirmed',
    ]);

    $customer = Customer::where('username', $username)->first();

    // Validasi password lama
    // Debugging Hash::check
    if (!Hash::check($request->old_password, $customer->password)) {
        Log::info('Old Password:', [$request->old_password, $customer->password]);
        return back()->withErrors(['old_password' => 'The provided password does not match our records.']);
    }


    // Update password
    $customer->password = Hash::make($request->new_password);
    $customer->save();

    return redirect()->route('profile.show', $username)->with('success', 'Password updated successfully!');
}

    //function menambah count view
    public function updateViewCount($id)
{
    try {
        $product = Content::findOrFail($id);
        $product->increment('count_view');
        return response()->json(['success' => true, 'message' => 'View count updated.']);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Failed to update view count.'], 500);
    }
}



}
