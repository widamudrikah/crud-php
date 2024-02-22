<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use Illuminate\Http\Request;

class BuahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buah = Buah::all();
        return view('buah.index', compact('buah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buah.tambah');
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
        $pesan = [
            'nama.required'  => 'Nama masih kosong !',
            'harga.required'  => 'Harga masih kosong masih kosong !',
            'nama.min'          => 'Nama salah !',
        ];
        
        $request->validate([
            'nama'      => 'required|min:3',
            'harga'     => 'required',
        ], $pesan);

        $buah = new Buah();

        $buah->nama = $request->nama;
        $buah->harga =$request->harga;

        $buah->save();
        return redirect()->route('buah.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buah = Buah::findOrFail($id);
        return view('buah.show', compact('buah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buah = Buah::findOrFail($id);
        return view('buah.edit', compact('buah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buah = Buah::findOrFail($id);

        $buah->nama     =$request->nama;
        $buah->harga     =$request->harga;

        $buah->update();

        return redirect()->route('buah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buah = Buah::findOrFail($id);
        $buah->delete();

        return redirect()->route('buah.index');
    }
}
