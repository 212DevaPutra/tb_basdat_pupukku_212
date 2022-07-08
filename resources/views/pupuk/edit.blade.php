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

                        <form method="POST" action="{{ route('pupukku_update', $id) }}">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="row">

                                    {{-- KOLOM 1 --}}

                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Nama Anggota</label>
                                            <input name="nama_pembeli" type="text" class="form-control"
                                                placeholder="Masukkan Nama Pembeli"
                                                value="{{ $review->pembelis->nama_pembeli }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control" rows="5">{{ $review->pembelis->alamat }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input name="no_pembeli" type="text" class="form-control"
                                                placeholder="Masukkan Nomor Pembeli"
                                                value="{{ $review->pembelis->no_pembeli }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Anggota Subsidi (NAS)</label>
                                            <input name="nas" type="text" class="form-control"
                                                placeholder="Masukkan Nomor Anggota" value="{{ $review->pembelis->nas }}"
                                                disabled>
                                        </div>


                                    </div>

                                    {{-- KOLOM 2 --}}
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label>Jumlah Pesanan</label>
                                            <div class="input-group mb-3">
                                                <input name="jumlah_pesan" type="text" class="form-control"
                                                    aria-describedby="basic-addon3"
                                                    value="{{ $review->pesanans->jumlah_pesan }}">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">KG</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pesanan</label>
                                            <input name="tanggal_pesan" type="text" class="form-control"
                                                placeholder="Masukkan Nomor Anggota"
                                                value="{{ $review->pesanans->tanggal_pesan }}" disabled>
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
                                                    aria-describedby="basic-addon3"
                                                    value="{{ $review->pengirimans->ongkir }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Total Pesanan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">RP</span>
                                                </div>
                                                <input name="total_pesan" type="text" class="form-control"
                                                    aria-describedby="basic-addon3"
                                                    value="{{ $review->pesanans->total_pesan }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Dibayar</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">RP</span>
                                                </div>
                                                <input name="dibayar" type="text" class="form-control"
                                                    aria-describedby="basic-addon3" value="{{ $review->dibayar }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Kembali</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">RP</span>
                                                </div>
                                                <input name="kembali" type="text" class="form-control"
                                                    aria-describedby="basic-addon3" value="{{ $review->kembali }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-success" value="Update" />
                                <a href="{{ route('pupukku_index') }}"><button class="btn cancel"
                                        style="background-color: red;color: white">Batal</button></a>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        @endsection
