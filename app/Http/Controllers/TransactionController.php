<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;

Carbon::setLocale('id');


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{

    public function checkStatus($id_customer, $id_content)
    {
        $transaction = DB::table('transactions')->where('id_customer', $id_customer)->where('id_content', $id_content)->first();
        // dd($transaction);
        return response()->json([
            'status' => $transaction->status
        ]);
    }

    public function updateSemuaDeclinedStatusReset($id_customer, $id_content, $status)
    {
        // Update semua transaksi dengan id_customer dan id_content yang sesuai
        $updatedRows = DB::table('transactions')
            ->where('id_customer', $id_customer)
            ->where('id_content', $id_content)
            ->update(['status' => $status]);

        // Cek jika ada yang terupdate
        if ($updatedRows > 0) {
            return response()->json(['success' => true, 'updated' => $updatedRows]);
        } else {
            return response()->json(['success' => false, 'message' => 'No transactions found to update.']);
        }
    }


    public function updateSemuaAcceptedStatusReset(Request $request)
    {
        $validated = $request->validate([
            'id_customer' => 'required|integer',
            'id_content' => 'required|integer',
            'status' => 'required|string'
        ]);

        DB::table('transactions')
            ->where('id_customer', $validated['id_customer'])
            ->where('id_content', $validated['id_content'])
            ->update(['status' => $validated['status']]);

        return response()->json(['message' => 'Status updated successfully']);
    }



    public function generateWhatsAppUrl(Request $request)
    {
        // dd($request->all());
        $phone = "+6283892616049";
        $judul = $request->input('judul_konten');
        $oleh = $request->input('oleh');
        $harga = $request->input('price');
        $tanggal = $request->input('dateOrd');
        $waktu = $request->input('timeOrd');

        $hari = Carbon::parse($tanggal)->translatedFormat('l');
        $formattedDate = Carbon::parse($tanggal)->format('d-m-Y');

        $text = "Haloo, ini adalah konten yang saya pesan dengan detail :\n\n";
        $text .= "Judul Konten: $judul\n";
        $text .= "Oleh: $oleh\n";
        $text .= "Harga: $harga\n";
        $text .= "Tanggal Pemesanan: $hari, $formattedDate, pada $waktu\n\n";

        $text .= "Harap tunggu pesan ini akan ditanggapi paling lambat 5 menit yaa.";

        $encoded_text = urlencode($text);

        $url = "https://api.whatsapp.com/send?phone=$phone&text=$encoded_text";

        return response()->json(['url' => $url]);
    }
}
