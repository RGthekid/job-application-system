<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kualifikimi;

class KualifikimiController extends Controller
{
    //
    public function index()
    {
        $kualifikimet = Kualifikimi::all();
        return view('kualifikimi.index', compact('kualifikimet'));
    }
    public function create()
    {
        return view('kualifikimi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'study_field' => 'required|string',
            'institution' => 'required|string',
            'finish_date' => 'required|date',
        ]);

        Kualifikimi::create($request->all());

        return redirect()->route('kualifikimi.create')->with('success', 'Kualifikimi created successfully!');
    }

    public function edit(Kualifikimi $kualifikimi)
    {
        return view('kualifikimi.edit', compact('kualifikimi'));
    }

    public function update(Request $request, Kualifikimi $kualifikimi)
    {
        $request->validate([
            'title' => 'required|string',
            'study_field' => 'required|string',
            'institution' => 'required|string',
            'finish_date' => 'required|date',
        ]);

        $kualifikimi->update($request->all());

        return redirect()->route('kualifikimi.edit', $kualifikimi)->with('success', 'Kualifikimi updated successfully!');
    }

    public function destroy(Kualifikimi $kualifikimi)
    {
        $kualifikimi->delete();
        return redirect()->route('kualifikimi.index')->with('success', 'Kualifikimi deleted successfully!');
    }
}
