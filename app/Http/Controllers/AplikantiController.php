<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aplikanti;
use App\Models\Kualifikimi;

class AplikantiController extends Controller
{
    // index
    public function index()
    {
        $aplikantet = Aplikanti::all();
        return view('aplikanti.index', compact('aplikantet'));
    }

    public function create()
    {
        $kualifikimet = Kualifikimi::all();
        return view('aplikanti.create', compact('kualifikimet'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'contact' => 'required|string',
            'address' => 'required|string',
            'description' => 'required|string',
            'application_position' => 'required|string',
            'kualifikimi_id' => 'required|exists:kualifikimi,id', // Ensure the selected kualifikimi_id exists in the kualifikimi table
        ]);

        $aplikanti = Aplikanti::create($request->all());

        // Associate the Aplikanti with the selected Kualifikimi
        // $aplikanti->kualifikimet()->save($kualifikimi);

        return redirect()->route('aplikanti.index')->with('success', 'Aplikanti created successfully!');
    }

    
    

    public function edit(Aplikanti $aplikanti)
    {
        $kualifikimet = Kualifikimi::all();
        return view('aplikanti.edit', compact('aplikanti', 'kualifikimet'));
    }

    public function update(Request $request, $id)
    {

        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'application_position' => 'required|string|max:255',
            'kualifikimi_id' => 'required|exists:kualifikimi,id', // Make sure the selected kualifikimi_id exists in the kualifikimis table
        ]);

        // Find the Aplikanti record
        $aplikanti = Aplikanti::findOrFail($id);

        // Update Aplikanti attributes
        $aplikanti->update([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'contact' => $request->input('contact'),
            'address' => $request->input('address'),
            'description' => $request->input('description'),
            'application_position' => $request->input('application_position'),
        ]);

        return redirect()->route('aplikanti.index')->with('success', 'Aplikanti updated successfully');
    }

    public function destroy(Aplikanti $aplikanti)
    {
        $aplikanti->delete();
        return redirect()->route('aplikanti.index')->with('success', 'Aplikanti deleted successfully!');
    }
}
