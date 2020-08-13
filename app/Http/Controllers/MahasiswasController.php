<?php

namespace App\Http\Controllers;

use App\Mahasiswas;
use DataTables;
use Illuminate\Http\Request;

class MahasiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Mahasiswa.index');
        
    }

    public function Mahasiswas_list()
    {
        return Datatables::of(Mahasiswas::all())
                ->addIndexColumn()
                ->make(true);
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
     * @param  \App\Mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswas $mahasiswas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswas $mahasiswas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswas $mahasiswas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswas  $mahasiswas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswas $mahasiswas)
    {
        //
    }
}
