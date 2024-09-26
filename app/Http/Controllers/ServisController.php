<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function index()
    {
        $services = Servis::all();
        return view('service.index', compact('services'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $service = new Servis;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('services.index')->with('success', 'Servis created successfully.');
    }

    public function edit($id)
    {
        $service = Servis::findOrFail($id);
        return view('service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $service = Servis::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Servis updated successfully.');
    }

    public function destroy($id)
    {
        $service = Servis::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Servis deleted successfully.');
    }
}
