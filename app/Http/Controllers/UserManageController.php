<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaction;
use App\Models\PurchaseRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserManageController extends Controller
{
    public function index()
{
    $pendingTransactions = Transaction::where('status', 'pending')->get();
    $customers = Customer::all();

    return view('dashboard_admin.dashboard_user_manage', compact('customers', 'pendingTransactions'));
}

public function confirmPurchase(Request $request, $id_transaction)
{
    $transaction = Transaction::findOrFail($id_transaction);

    if ($request->action === 'confirm') {
        $transaction->status = 'confirmed';
    } elseif ($request->action === 'reject') {
        $transaction->status = 'rejected';
    }

    $transaction->save();

    return redirect()->route('admin.dashboard')->with('message', 'Status transaksi berhasil diperbarui!');
}

public function rejectPurchase($id_transaction)
{
    $$transaction = Transaction::findOrFail($id_transaction);
    $transaction->update(['status' => 'rejected']);

    return redirect()->back()->with('success', 'Pembelian berhasil ditolak!');
}

public function update(Request $request, $id_transaction)
{
    $transaction = Transaction::findOrFail($id_transaction);

    $transaction->status = $request->input('status');
    $transaction->save();

    return redirect()->back()->with('message', 'Status transaksi berhasil diperbarui.');
}

}



