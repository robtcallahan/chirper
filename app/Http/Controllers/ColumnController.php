<?php

namespace App\Http\Controllers;

use App\Models\Column;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ColumnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $columns = Column::all();
        $sorted = $columns->sortBy('column_index');
        $columns = $sorted->values()->all();
        return Inertia::render('Columns/Index', [
            'columns' => $columns
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Column $column)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Column $column)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Column $column)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Column $column)
    {
        //
    }
}
