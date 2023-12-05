<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class BarangController extends Controller
{
    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $barang = Barang::create($request->all());

        // Hitung total harga
        $total_harga = $barang->qty * $barang->harga_jual;

        // Hitung diskon
        $diskon = 0;
        if ($total_harga >= 500000) {
            $diskon = 0.5;
        } elseif ($total_harga >= 200000) {
            $diskon = 0.2;
        } elseif ($total_harga >= 100000) {
            $diskon = 0.1;
        }

        // Hitung harga setelah diskon
        $harga_setelah_diskon = $total_harga * (1 - $diskon);

        // Tampilkan hasil
        return view('barang.result', compact('barang', 'total_harga', 'diskon', 'harga_setelah_diskon'));
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        return Redirect::route('barang.edit', ['id' => $barang->id])->with('success', 'Data berhasil diperbarui.');
    }

    public function index()
    {
        $barangs = Barang::all();
        return View::make('barang.create')->with('barangs', $barangs);
    }
}
