<?php

namespace App\Http\Controllers;

use App\Models\Tipekamar;
use Illuminate\Http\Request;

class TipekamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tipekamar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tmbhtipekamar');
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
     * @param  \App\Models\Tipekamar  $tipekamar
     * @return \Illuminate\Http\Response
     */
    public function show(Tipekamar $tipekamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipekamar  $tipekamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipekamar $tipekamar)
    {
        //
        return view('admin.edittipekamar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipekamar  $tipekamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipekamar $tipekamar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipekamar  $tipekamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipekamar $tipekamar)
    {
        //
    }
}
