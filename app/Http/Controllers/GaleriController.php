<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        return view('users.sidebar.galeri.index');
    }

    public function admin()
    {
        return view('admin.sidebar.galeri.index');
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:2048',
        ]);

        $gallery = new Galeri;
        if ($request->hasFile('photo')) {
            $gallery->photo = $request->file('photo')->store('galleries');
        }
        $gallery->save();

        return redirect()->route('galleries.index')->with('success', 'Photo uploaded successfully.');
    }

    public function destroy($id)
    {
        $gallery = Galeri::findOrFail($id);
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Photo deleted successfully.');
    }
}
