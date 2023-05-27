<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormInputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('praktikum9');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function array()
    {
        //
        $ar_skill = ["PHP", "MySQL", "Javascript", "HTML", "CSS"];
        return view('praktikum9', compact('ar_skill'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function hasil(Request $request)
    {
        //
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);
        return view('hasilprak9', ['data' =>$request]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
