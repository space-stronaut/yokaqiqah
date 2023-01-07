<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakets = Paket::all();

        return view('paket.index', compact('pakets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Paket::create($request->all());

        // return redirect()->route('paket.index');
        if ($request->file('foto_paket')) {
            # code...
            $image = base64_encode(file_get_contents($request->file('foto_paket')->path()));

            Paket::create([
                'nama_paket' => $request->nama_paket,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'isi_paket' => $request->isi_paket,
                'foto_paket' => $image
            ]);
        }else{
            Paket::create([
                'nama_paket' => $request->nama_paket,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'isi_paket' => $request->isi_paket,
                'foto_paket' => null
            ]);
        }
        // $image = base64_encode(file_get_contents($request->file('foto_paket')->path()));

        // dd($image);

        return redirect()->route('paket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paket = Paket::find($id);

        return view('paket.show', compact('paket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paket = Paket::find($id);

        return view('paket.edit', compact('paket'));
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
        Paket::find($id)->update([
            'nama_paket' => $request->nama_paket,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'isi_paket' => $request->isi_paket
            // 'foto_paket' => null
        ]);

        return redirect()->route('paket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paket::find($id)->delete();

        return redirect()->route('paket.index');
    }
}
