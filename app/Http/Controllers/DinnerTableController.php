<?php

namespace App\Http\Controllers;

use App\Models\DinnerTable;
use Illuminate\Http\Request;

class DinnerTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinner_tables = DinnerTable::all();

        return view('dinner_tables.index')->with('dinner_tables', $dinner_tables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DinnerTable  $dinnerTable
     * @return \Illuminate\Http\Response
     */
    public function show(DinnerTable $dinnerTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DinnerTable  $dinnerTable
     * @return \Illuminate\Http\Response
     */
    public function edit(DinnerTable $dinnerTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DinnerTable  $dinnerTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DinnerTable $dinnerTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DinnerTable  $dinnerTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(DinnerTable $dinnerTable)
    {
        //
    }
}
