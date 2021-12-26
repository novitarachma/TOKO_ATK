<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggans.index',['pelanggan'=>$pelanggans]);


    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $pelanggan = Pelanggan::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('pelanggans.index', compact('pelanggan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('pelanggans.create',['kategori'=>$kategori]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'kategori_id' => 'required',
            ]);

        $kategori = Kategori::find($request->get('kategori_id'));

        $pelanggan = new Pelanggan;
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_telepon = $request->no_telepon;

        $pelanggan->kategori()->associate($kategori);
        $pelanggan->save();
        //  //add data
        //  Pelanggan::create($request->all());
        //  // if true, redirect to index
         return redirect()->route('pelanggans.index')
         ->with('success', 'Add data success!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('pelanggans.show',['pelanggan'=>$pelanggan]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $pelanggan = Pelanggan::find($id);
        return view('pelanggans.edit',['pelanggan'=>$pelanggan],['kategori'=>$kategori]);
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
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'kategori_id' => 'required',
            ]);

        $kategori = Kategori::find($request->get('kategori_id'));

        $pelanggan = Pelanggan::find($id);
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_telepon = $request->no_telepon;

        $pelanggan->kategori()->associate($kategori);
        $pelanggan->save();
        //  //add data
        //  Pelanggan::create($request->all());
        //  // if true, redirect to index
         return redirect()->route('pelanggans.index')
         ->with('success', 'Edit data success!');


        // $pelanggan = Pelanggan::find($id);
        // $pelanggan->nama = $request->nama;
        // $pelanggan->alamat = $request->alamat;
        // $pelanggan->no_telepon = $request->no_telepon;
        // $pelanggan->save();
        // return redirect()->route('pelanggans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect()->route('pelanggans.index');
    }
}
