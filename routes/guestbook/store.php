<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guestbook; // Sesuaikan dengan model Guestbook yang Anda miliki

class GuestbookController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang dikirimkan oleh formulir
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);

        // Simpan data ke dalam database menggunakan model Guestbook
        $guestbookEntry = new Guestbook();
        $guestbookEntry->name = $validatedData['name'];
        $guestbookEntry->email = $validatedData['email'];
        $guestbookEntry->message = $validatedData['message'];
        $guestbookEntry->save();

        // Redirect kembali ke halaman buku tamu dengan pesan sukses
        return redirect()->route('guestbook.index')->with('success', 'Pesan berhasil dikirim!');
    }
}
