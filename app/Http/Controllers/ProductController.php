<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index',['product'=>$products]);

    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $product = Product::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('products.index', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'satuan' => 'required',
            ]);

            if ($request->file('photo')) {
                $image_name = $request->file('photo')->store('images', 'public');
            }

            //fungsi eloquent untuk menambah data
            $product = new Product();
            $product->nama = $request->get('nama');
            $product->deskripsi = $request->get('deskripsi');
            $product->harga = $request->get('harga');
            $product->photo = $image_name;
            $product->satuan = $request->get('satuan');

            $product -> save();
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('products.index')
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
        $product = Product::find($id);
        return view('products.show',['product'=>$product]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',['product'=>$product]);
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
        $product = Product::find($id);
        $product->nama = $request->nama;
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->satuan = $request->satuan;
        $product->save();
        return redirect()->route('products.index');

        if($product->photo && file_exists(storage_path('app/public/'
        . $product->photo)))
        {
        \Storage::delete('public/'.$product->photo);
        }
        $image_name = $request->file('photo')->store('images',
        'public');
        $product->photo = $image_name;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
