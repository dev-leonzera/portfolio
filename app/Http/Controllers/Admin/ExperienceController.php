<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::orderBy('order')->get();
        return view('admin.experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'year_start' => 'required|integer|min:1900|max:2100',
            'start_month' => 'required|string|size:2',
            'year_end' => 'nullable|integer|min:1900|max:2100',
            'end_month' => 'nullable|string|size:2',
            'description' => 'required|string',
            'order' => 'required|integer|min:0',
        ]);

        // Define current como true se não houver data de término
        $validated['current'] = empty($validated['year_end']) && empty($validated['end_month']);

        // Verifica se tem data de término
        if ($validated['year_end'] && $validated['end_month']) {
            // Verifica se a data de término é posterior à data de início
            $start = $validated['year_start'] . $validated['start_month'];
            $end = $validated['year_end'] . $validated['end_month'];
            
            if ($end <= $start) {
                return back()
                    ->withErrors(['end_date' => 'A data de término deve ser posterior à data de início'])
                    ->withInput();
            }
        }

        Experience::create($validated);

        return redirect()->route('admin.experiences.index')
            ->with('success', 'Experiência criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        return view('admin.experience.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view('admin.experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'year_start' => 'required|integer|min:1900|max:2100',
            'start_month' => 'required|string|size:2',
            'year_end' => 'nullable|integer|min:1900|max:2100',
            'end_month' => 'nullable|string|size:2',
            'description' => 'required|string',
            'order' => 'required|integer|min:0',
        ]);

        // Define current como true se não houver data de término
        $validated['current'] = empty($validated['year_end']) && empty($validated['end_month']);

        // Verifica se tem data de término
        if ($validated['year_end'] && $validated['end_month']) {
            // Verifica se a data de término é posterior à data de início
            $start = $validated['year_start'] . $validated['start_month'];
            $end = $validated['year_end'] . $validated['end_month'];
            
            if ($end <= $start) {
                return back()
                    ->withErrors(['end_date' => 'A data de término deve ser posterior à data de início'])
                    ->withInput();
            }
        }

        $experience->update($validated);

        return redirect()->route('admin.experiences.index')
            ->with('success', 'Experiência atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->route('admin.experiences.index')
            ->with('success', 'Experiência excluída com sucesso!');
    }
}