<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DisciplineController extends Controller
{
    public function index()
    {
        abort_if(! auth()->user()->can('disciplines.view'), 403);

        $disciplines = Discipline::query()
            ->when(! auth()->user()->hasRole(['Super Admin']), function ($query) {
                $query->whereHas('colleges', function ($query) {
                    $query->where('id', auth()->user()->college_id);
                });
            })
            ->latest('id')
            ->get();

        return view('disciplines.index', compact('disciplines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(! auth()->user()->can('disciplines.create'), 403);

        return view('disciplines.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort_if(! auth()->user()->can('disciplines.create'), 403);

        $data = $request->validate([
            'code' => ['nullable', 'string', 'max:191'],
            'name' => [
                'required',
                'string',
                'max:191',
                Rule::unique('disciplines', 'name')
            ],
        ]);

        Discipline::create($data);

        alert()->success('saved', 'Discipline Added Successfully');
        return to_route('settings.disciplines.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        abort_if(! auth()->user()->can('disciplines.update'), 403);

        $discipline = Discipline::query()
            ->when(! auth()->user()->hasRole(['Super Admin']), function ($query) {
                $query->whereHas('colleges', function ($query) {
                    $query->where('id', auth()->user()->college_id);
                });
            })
            ->whereId($id)
            ->firstOrFail();

        return view('disciplines.edit', compact('discipline'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        abort_if(! auth()->user()->can('disciplines.update'), 403);

        $data = $request->validate([
            'code' => ['nullable', 'string', 'max:191'],
            'name' => [
                'required',
                'string',
                'max:191',
                Rule::unique('disciplines', 'name')->ignore($id)
            ],
        ]);

        $discipline = Discipline::query()
            ->when(! auth()->user()->hasRole(['Super Admin']), function ($query) {
                $query->whereHas('colleges', function ($query) {
                    $query->where('id', auth()->user()->college_id);
                });
            })
            ->whereId($id)
            ->firstOrFail();
        
        $discipline->update($data);

        alert()->success('updated', 'Discipline Updated Successfully');
        return to_route('settings.disciplines.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
