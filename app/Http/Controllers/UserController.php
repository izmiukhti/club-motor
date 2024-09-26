<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return view('users.index');
    }

    public function visimisi()
    {
        return view('users.navbar.visimisi');
    }

    public function kontak()
    {
        return view('users.navbar.kontak');
    }

    public function about()
    {
        return view('users.navbar.about');
    }

    public function admin()
    {
        return view('admin.index');
    }

    public function vimi()
    {
        return view('admin.navbar.visimisi');
    }

    public function contact()
    {
        return view('admin.navbar.kontak');
    }

    public function tentang()
    {
        return view('admin.navbar.about');
    }

    public function edit()
    {
        // Mengambil profil user yang sedang login
        $profile = Profil::where('user_id', Auth::id())->first();
        
        // Jika tidak ada profil, redirect dengan pesan error
        if (!$profile) {
            return redirect()->back()->with('error', 'Profil tidak ditemukan.');
        }

        // Tampilkan view untuk mengedit profil
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'bio' => 'required',
            'photo' => 'nullable|image|max:2048',
        ]);

        // Update atau buat profil baru berdasarkan user yang sedang login
        $profile = Profil::updateOrCreate(
            ['user_id' => Auth::id()],
            ['bio' => $request->bio]
        );

        // Jika ada file photo, simpan ke storage
        if ($request->hasFile('photo')) {
            $profile->photo = $request->file('photo')->store('profiles', 'public'); // Simpan ke direktori storage
            $profile->save();
        }

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Profil updated successfully.');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        // Hash password dan simpan ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('home')->with('success', 'Registration successful');
    }
}
