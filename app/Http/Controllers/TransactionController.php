<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;

Carbon::setLocale('id');


use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function checkStatus($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);
        return response()->json([
            'status' => $transaction->status
        ]);
    }

    public function updateStatus($transactionId, $status)
    {
        $transaction = Transaction::findOrFail($transactionId);
        $transaction->status = $status; // Set to 'declined' or 'accepted'
        $transaction->save();
        return response()->json(['success' => true]);
    }



    public function generateWhatsAppUrl(Request $request)
    {
        // dd($request->all());
        $phone = "+6283892616049"; // Nomor WhatsApp tujuan
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
