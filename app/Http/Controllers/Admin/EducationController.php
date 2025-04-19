<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::orderBy('order')->get();
        return view('admin.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'university' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'year_start' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'year_end' => 'nullable|integer|min:1900|max:' . (date('Y') + 1),
            'description' => 'required|string',
            'order' => 'required|integer|min:0',
        ]);

        Education::create($validated);

        return redirect()->route('admin.educations.index')
            ->with('success', 'Formação criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        return view('admin.education.show', compact('education'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('admin.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $validated = $request->validate([
            'university' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'year_start' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'year_end' => 'nullable|integer|min:1900|max:' . (date('Y') + 1),
            'description' => 'required|string',
            'order' => 'required|integer|min:0',
        ]);

        $education->update($validated);

        return redirect()->route('admin.educations.index')
            ->with('success', 'Formação atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('admin.educations.index')
            ->with('success', 'Formação excluída com sucesso!');
    }
} 