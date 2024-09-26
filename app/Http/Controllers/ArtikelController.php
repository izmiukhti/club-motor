<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('users.sidebar.artikel.index');
    }

    public function admin()
    {
        return view('admin.sidebar.artikel.index');
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article = new Artikel;
        $article->user_id = Auth::id();
        $article->judul = $request->judul;
        $article->konten = $request->konten;
        $article->save();

        return redirect()->route('articles.index')->with('success', 'Artikel created successfully.');
    }

    public function show($id)
    {
        $article = Artikel::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Artikel::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article = Artikel::findOrFail($id);
        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Artikel updated successfully.');
    }

    public function destroy($id)
    {
        $article = Artikel::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Artikel deleted successfully.');
    }
}
