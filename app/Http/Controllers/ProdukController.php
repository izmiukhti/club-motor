<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Menampilkan semua produk
    public function index()
    {
        //$produks = Produk::all(); // Mengambil semua produk
        return view('users.navbar.produk.index'); // Mengirim data ke view
    }

    public function admin()
    {
        //$produks = Produk::all(); // Mengambil semua produk
        return view('admin.navbar.produk.index'); // Mengirim data ke view
    }

    // Menampilkan form untuk membuat produk baru
    public function create()
    {
        return view('produk.create'); // Mengembalikan view untuk form tambah produk
    }

    // Menyimpan produk baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|string', // Ganti dengan validasi file jika diperlukan
            'kategori' => 'required|in:accessories,parts,services',
        ]);

        Produk::create($request->all()); // Menyimpan produk baru
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.'); // Redirect ke halaman index
    }

    // Menampilkan detail produk
    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk')); // Mengembalikan view untuk menampilkan produk
    }

    // Menampilkan form untuk mengedit produk
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk')); // Mengembalikan view untuk form edit produk
    }

    // Memperbarui data produk
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|string', // Ganti dengan validasi file jika diperlukan
            'kategori' => 'required|in:accessories,parts,services',
        ]);

        $produk->update($request->all()); // Memperbarui produk
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.'); // Redirect ke halaman index
    }

    // Menghapus produk
    public function destroy(Produk $produk)
    {
        $produk->delete(); // Menghapus produk
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.'); // Redirect ke halaman index
    }
}
