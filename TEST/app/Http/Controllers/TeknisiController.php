<?php

namespace App\Http\Controllers;

use App\Models\Teknisi;
use App\Http\Requests\StoreTeknisiRequest;
use App\Http\Requests\UpdateTeknisiRequest;
use App\Models\Lab;

class TeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $labs = Lab::where(function ($query) {
        $query->where('monitor', 'Rusak')
            ->orWhere('keyboard', 'Rusak')
            ->orWhere('mouse', 'Rusak')
            ->orWhere('jaringan', 'Rusak');
    })->get();

    return view('Teknisi.teknisi_index', compact('labs'));
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
    public function store(StoreTeknisiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Teknisi $teknisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teknisi $teknisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeknisiRequest $request, Teknisi $teknisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lab = Lab::findOrFail($id);
        $lab->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
