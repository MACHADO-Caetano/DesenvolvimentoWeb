<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function list()
    {
        $coach = Coach::all();
        return view('coach.index', compact('coach'));
    }

    public function create()
    {
        return view('coach.create');
    }

    public function register(Request $request)
    {
        Coach::create($request->all());
        return redirect('coach')->with('success', 'Coach create sucessfully!');
    }

    public function edit($id)
    {
        $coach = Coach::findOrFail($id);
        return view('coach.edit', compact('coach'));
    }

    public function update(Request $request, $id)
    {
        $coach = Coach::findOrFail($id);
        $coach->update($request->all());
        return redirect('coach')->with('success', 'Coach updated successfully!');
    }

    public function destroy($id)
    {
        $coach = Coach::findOrFail($id);
        $coach->delete();
        return redirect('coach')->with('success', 'Coach deleted successfully.');
    }
}
