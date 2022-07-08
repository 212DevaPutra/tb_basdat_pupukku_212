@extends('layouts.master')
@section('content')
    <div class="content" style="color: white">
        <div class="page-inner" style="background-image: url('{{ asset('img/farm.jpg') }}');">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="background-color: greenyellow;">
                        <div class="card-header">
                            <div class="card-title">PUPUK-KU</div>
                        </div>
                        <form method="POST" action="{{ route('pupukku_store') }}">
                            {{-- {{ @csrf_field() }} --}}
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    {{-- KOLOM 1 --}}
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Nama Anggota</label>
                                            <input name="nama_pembeli" type="text" class="form-control"
                                                placeholder="Masukkan Nama Pembeli">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input name="no_pembeli" type="text" class="form-control"
                                                placeholder="Masukkan Nomor Pembeli">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Anggota Subsidi (NAS)</label>
                                            <input name="nas" type="text" class="form-control"
                                                placeholder="Masukkan Nomor Anggota">
                                        </div>
                                    </div>
                                    {{-- KOLOM 2 --}}
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Nama Pupuk</label>
                                            <div class="selectgroup w-100">
                                                @foreach ($pupuks as $pupuk)
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="nama_pupuk" value="{{ $pupuk->id }}"
                                                            class="selectgroup-input" checked="">
                                                        <span class="selectgroup-button">{{ $pupuk->nama_pupuk }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                            <div style="color: black">
                                                <span>Urea : Rp 2500/kg &ensp;</span>
                                                <span>ZA : Rp 1700/kg &ensp;</span>
                                                <span>SP-36 : Rp 2400/kg &ensp;</span>
                                            </div>
                                            <div style="color: black">
                                                <span>Phonska : Rp 2300/kg &ensp;</span>
                                                <span>Petragonik : Rp 800/kg &ensp;</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Pesanan</label>
                                            <div class="input-group mb-3">
                                                <input name="jumlah_pesan" type="text" class="form-control"
                                                    aria-describedby="basic-addon3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">KG</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pesanan</label>
                                            <input name="tanggal_pesan" type="text" class="form-control"
                                                placeholder="Masukkan Nomor Anggota">
                                                <span style="color: black">Format : DD/MM/YYYY</span>
                                        </div>
                                        <div class="form-check">
                                            <label>Status Pengiriman</label><br />
                                            <label class="form-radio-label">
                                                <input name="status" class="form-radio-input" type="radio" name="status"
                                                    value="Ambil" checked="">
                                                <span class="form-radio-sign">Ambil</span>
                                            </label>
                                            <label class="form-radio-label ml-3">
                                                <input class="form-radio-input" type="radio" name="status"
                                                    value="Kirim">
                                                <span class="form-radio-sign">Kirim</span>
                                            </label>
                                        </div>
                                    </div>
                                    {{-- KOLOM 3 --}}
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Ongkos Kirim</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">RP</span>
                                                </div>
                                                <input name="ongkir" type="text" class="form-control"
                                                    aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Total Pesanan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">RP</span>
                                                </div>
                                                <input name="total_pesan" type="text" class="form-control"
                                                    aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Dibayar</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">RP</span>
                                                </div>
                                                <input name="dibayar" type="text" class="form-control"
                                                    aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Kembali</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">RP</span>
                                                </div>
                                                <input name="kembali" type="text" class="form-control"
                                                    aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <input type="submit" class="btn btn-success" value="Selesai" />
                                        <button class="btn btn-danger">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
