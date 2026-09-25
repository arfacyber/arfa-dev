<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        // 1. Simpan pesan ke Database CMS
        Contact::create($validated);

        // 2. Siapkan Nomor WA Anda
        $no_wa = "6281359111799"; 

        // 3. Format teks untuk dikirim ke WA
        $teksWA = "Halo, perkenalkan saya *" . $validated['name'] . "* (" . $validated['email'] . ").\n\n" . $validated['message'];

        // 4. Encode URL
        $waUrl = "https://wa.me/" . $no_wa . "?text=" . urlencode($teksWA);

        // 4. Kembalikan ke halaman sebelumnya dengan data session untuk memicu Pop-Up
        return redirect()->back()->with([
            'success' => 'Pesan berhasil disimpan!',
            'wa_url'  => $waUrl
        ]);
    }
}