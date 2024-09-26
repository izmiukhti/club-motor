<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index(){

        return view('users.navbar.profil');
    }

    public function admin(){

        return view('admin.navbar.profil');
    }
        public function store(Request $request)
        {
        // Validasi input file
        $request->validate([
            'file' => 'required|mimes:jpg,png,pdf,docx|max:2048', // Maksimum 2MB
        ]);

        // Proses upload file
        if ($request->file('file')) {
            // Ambil file dari request
            $file = $request->file('file');
            
            // Buat nama file unik
            $fileName = time().'_'.$file->getClientOriginalName();
            
            // Tentukan lokasi penyimpanan
            $destinationPath = 'uploads'; // di folder public/uploads
            
            // Pindahkan file ke folder uploads
            $file->move(public_path($destinationPath), $fileName);

            return back()->with('success', 'File berhasil diupload!')->with('file', $fileName);
        }

        return back()->with('error', 'File gagal diupload.');
    }
}