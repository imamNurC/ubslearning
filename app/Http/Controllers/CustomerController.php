<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Content;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    $customer = Customer::where('username', $username)->firstOrFail(); // Ambil customer berdasarkan username
    $userId = $customer->id_customer; // Dapatkan ID dari customer yang ditemukan

    // Ambil transaksi terbaru dengan karakteristik unik untuk customer tersebut
    $purchasedContents = Transaction::where('id_customer', $userId)
        ->where('status', 'accepted')
        ->orderBy('created_at', 'desc') // Urutkan berdasarkan data terbaru
        ->get(['id_content', 'content_name', 'image_path'])
        ->unique('content_name'); // Hapus duplikat berdasarkan 'content_name'

    return view('dashboard_user.dashboardUser_my_content', compact('customer', 'purchasedContents'));
}

public function showContent($username, Request $request)
{
    // Cari pelanggan berdasarkan username
    $customer = Customer::where('username', $username)->firstOrFail();
    $userId = $customer->id_customer;

    // Ambil ID konten dari URL
    $id_content = $request->route('id_content');

    // Cari transaksi yang sesuai
    $transaction = Transaction::where('id_customer', $userId)
        ->where('id_content', $id_content)
        ->where('status', 'accepted') // Pastikan statusnya "accepted"
        ->first();

    // Jika transaksi tidak ditemukan, beri pesan error
    if (!$transaction) {
        return redirect()->back()->with('error', 'Konten tidak ditemukan atau tidak diizinkan.');
    }

    // Ambil data konten berdasarkan ID konten
    $content = Content::findOrFail($id_content);

    // Simpan ID konten ke session (opsional, jika memang diperlukan)
    session(['current_content_id' => $id_content]);

    // Kirim data ke view
    return view('dashboard_user.dashboardUser_content', compact('customer', 'content'));
}


public function storeSession(Request $request)
{
    $request->validate([
        'username' => 'required|string',
        'id_content' => 'required|integer',
    ]);

    // Simpan data ke dalam session
    session(['username' => $request->username, 'id_content' => $request->id_content]);

    // dd(session()->all());
    // Mengembalikan respon JSON sebagai tanda keberhasilan
    return response()->json(['session_id' => session()->getId()], 200);
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


    //function purchase form
    public function showPurchaseForm($username)
    {
        $productData = session('contentData');

        if (!$productData) {
            return redirect()->back()->withErrors(['message' => 'Data konten tidak ditemukan. Silakan coba lagi.']);
        }
        $customer = Customer::where('username', $username)->firstOrFail();
        $content = session('content_data');
        return view('dashboard_user.dashboardUser_purchase_form', compact('customer'));
    }

    //function untuk menampilkan data secara otomatis
    public function saveProductToSession(Request $request)
    {
        $data = $request->all();

        // Menyimpan detail produk ke dalam session
        session([
            //customer data
            // 'id_customer' => $request->input('idCustomer'),
            // 'name' => $request->input('name'),
            // 'number_phone' => $request->input('numberPhone'),
            // 'email' => $request->input('email'),
            'customer' => $data['customer'],

            //content data
            'contentData' => $data['contentData'],

        ]);
        session()->forget('product_data');
        session()->put('product_data', $request->all());
        return response()->json(['message' => 'Product saved to session']);
    }

    //function untuk purchase store
    public function PurchaseStore(Request $request)
    {
        // $customer = Customer::where('username', $username)->firstOrFail();

        // Validasi data
        $validated = $request->validate([
            'id_customer' => 'required|exists:customers,id_customer',
            'name' => 'required|string|max:255',
            'number_phone' => 'required|string|max:15',
            'email' => 'required|email',
            'id_content' => 'required|exists:content,id_content',
            'content_name' => 'required|string|max:100',
            'price' => 'required|integer',
            // 'image_path' => 'required|string|max:255',
            // 'date' => 'required|date',
            // 'time' => 'required|date_format:H:i',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // $path = $request->file('image')->store('transactions', 'public');

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('public/images');
        // } else {
        //     $imagePath = null; // Jika tidak ada gambar, simpan null
        // }

        // Simpan transaksi
        $transaction = new Transaction();
        $transaction->id_customer = $request->id_customer;
        $transaction->name = $request->name;
        $transaction->number_phone = $request->number_phone;
        $transaction->email = $request->email;
        $transaction->id_content = $request->id_content;
        $transaction->content_name = $request->content_name;
        $transaction->price = $request->price;
        $transaction->image_path = $request->image_path;
        $transaction->status = 'pending'; // status default
        // $transaction->date = $request->date;
        // $transaction->time = $request->time;
        // $transaction->image_path = $imagePath; // jika gambar diupload
        $transaction->save();

        session()->forget(['product_name', 'product_price', 'product_category', 'product_description', 'product_image']);
        return response()->json(['success' => true, 'data' => $transaction]);
        // Redirect atau return response
        return view('dashboard_user.dashboardUser_purchase_form', compact('customer'));
    }
}
