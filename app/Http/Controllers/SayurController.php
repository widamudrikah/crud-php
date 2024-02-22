<?php

namespace App\Http\Controllers;

use App\Models\Sayur;
use Illuminate\Http\Request;

class SayurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sayur = Sayur::all();
        return view('sayur.index', compact('sayur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('sayur.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'nama'  => 'required',
            'harga'  => 'required',
        ]);


        $sayur = new Sayur();

        $sayur->nama = $request->nama;
        $sayur->harga = $request->harga;

        $sayur->save();
        return redirect()->route('sayur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sayur = Sayur::findOrFail($id);
        return view('sayur.show', compact('sayur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sayur = Sayur::findOrFail($id);
        return view('sayur.edit', compact('sayur'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function wida(Request $request, $id)
    {
        $sayur = Sayur::findOrFail($id);

        $sayur->nama        =$request->nama;
        $sayur->harga        =$request->harga;

        $sayur->update();

        return redirect()->route('sayur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sayur = Sayur::findOrFail($id);
        $sayur->delete();
        return redirect()->route('sayur.index');
    }
}
