<?php

namespace App\Http\Controllers;

use App\Models\Fasilkmr;
use Illuminate\Http\Request;

class FasilkmrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.fasilkmr');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tmbhfasilkmr');
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
     * @param  \App\Models\Fasilkmr  $fasilkmr
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilkmr $fasilkmr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilkmr  $fasilkmr
     * @return \Illuminate\Http\Response
     */
    public function edit(Fasilkmr $fasilkmr)
    {
        //
        return view('admin.editfasilkmr');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fasilkmr  $fasilkmr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fasilkmr $fasilkmr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fasilkmr  $fasilkmr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fasilkmr $fasilkmr)
    {
        //
    }
}