<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlienController extends Controller
{
    public function index()
    {
        return view('admin.sidebar.klien.index');
    }
}
