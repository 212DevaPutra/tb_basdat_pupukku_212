<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pembeli;
use App\Models\Pengiriman;
use App\Models\Pesanan;
use App\Models\Pupuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PupukController extends Controller
{
    public function index()
    {
        $reviews = Pembayaran::with('pesanans', 'pesanans.pupuks')->with('pembelis')->with('pengirimans')->get();

        return view('pupuk.index', compact('reviews'));
    }

    public function create()
    {
        $pupuks = Pupuk::all();
        return view('pupuk.create', compact('pupuks'));
    }

    public function edit($id){
        $review = Pembayaran::find($id);
        $pembeli = Pembeli::all();
        $pesanan = Pesanan::all();
        $pengiriman = Pengiriman::all();
        return view ('pupuk.edit', compact('review','id','pembeli','pesanan','pengiriman'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_pembeli' => 'required',
            'alamat' => 'required',
            'no_pembeli' => 'required',
            'nas' => 'required',
            'nama_pupuk' => 'required',
            'jumlah_pesan' => 'required',
            'tanggal_pesan' => 'required',
            'status' => 'required',
            'ongkir' => 'nullable',
            'total_pesan' => 'required',
            'dibayar' => 'required',
            'kembali' => 'required',
        ]);
        $input = $request->all();

        $pesanan = new Pesanan();
        $pesanan->jumlah_pesan = $input['jumlah_pesan'];
        $pesanan->tanggal_pesan = $input['tanggal_pesan'];
        $pesanan->total_pesan = $input['total_pesan'];
        $pesanan->pupuk_id = $input['nama_pupuk'];
        // $pesanan->save();

        $pembeli = new Pembeli();
        $pembeli->nama_pembeli = $input['nama_pembeli'];
        $pembeli->alamat = $input['alamat'];
        $pembeli->no_pembeli = $input['no_pembeli'];
        $pembeli->nas = $input['nas'];
        // $pembeli->save();

        $pengiriman = new Pengiriman();
        $pengiriman->status = $input['status'];
        $pengiriman->ongkir = $input['ongkir'];

        $pesanan->save();
        $pembeli->save();
        $pengiriman->save();

        $pembayaran = new Pembayaran();
        $pembayaran->dibayar = $input['dibayar'];
        $pembayaran->kembali = $input['kembali'];
        $pembayaran->user_id = auth()->user()->id;
        $pembayaran->pesanan_id = $pesanan->id;
        $pembayaran->pengiriman_id = $pengiriman->id;
        $pembayaran->pembeli_id = $pembeli->id;
        // dd($pengiriman->id);

        $pembayaran->save();

        return redirect(route('pupukku_index'));
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::find($id);
        $pesanan = Pesanan::find($pembayaran->pesanans->id);
        $pembeli = Pembeli::find($pembayaran->pembelis->id);
        $pengiriman = Pengiriman::find($pembayaran->pengirimans->id);

        $pembayaran->delete();
        $pesanan->delete();
        $pembeli->delete();
        $pengiriman->delete();
        return redirect(route('pupukku_index'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            // 'nama_pembeli' => 'required',
            'alamat' => 'required',
            'no_pembeli' => 'required',
            // 'nas' => 'required',
            // 'nama_pupuk' => 'required',
            'jumlah_pesan' => 'required',
            // 'tanggal_pesan' => 'required',
            // 'status' => 'required',
            'ongkir' => 'nullable',
            'total_pesan' => 'required',
            'dibayar' => 'required',
            'kembali' => 'required',
        ]);

        $input = $request->all();

        $pembayaran = Pembayaran::find($id);
        $pesanan = Pesanan::find($pembayaran->pesanans->id);
        $pesanan->jumlah_pesan = $input['jumlah_pesan'];
        // $pesanan->tanggal_pesan = $input['tanggal_pesan'];
        $pesanan->total_pesan = $input['total_pesan'];
        // $pesanan->pupuk_id = $input['nama_pupuk'];
        // $pesanan->save();

        $pembeli = Pembeli::find($pembayaran->pembelis->id);
        // $pembeli->nama_pembeli = $input['nama_pembeli'];
        $pembeli->alamat = $input['alamat'];
        $pembeli->no_pembeli = $input['no_pembeli'];
        // $pembeli->nas = $input['nas'];
        // $pembeli->save();

        $pengiriman = Pengiriman::find($pembayaran->pengirimans->id);
        // $pengiriman->status = $input['status'];
        $pengiriman->ongkir = $input['ongkir'];

        $pesanan->save();
        $pembeli->save();
        $pengiriman->save();

        $pembayaran->dibayar = $input['dibayar'];
        $pembayaran->kembali = $input['kembali'];
        $pembayaran->save();

        return redirect(route('pupukku_index'));
// 
        // return view({{}})
    }
}
