@extends('layouts.master')

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
    }

    /* The popup form - hidden by default */
    .form-popup {
        display: none;
        bottom: 0;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
        width: auto;
        padding: 10px;
        background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text],
    .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus,
    .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
        opacity: 1;
    }
</style>


@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Laporan</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead style="background-color: greenyellow">
                                        <tr>
                                            <th>Nama Anggota</th>
                                            <th>Alamat</th>
                                            <th>Nomor HP</th>
                                            <th>NAS</th>
                                            <th>Jenis Pupuk</th>
                                            <th>Harga Satuan</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal Pesan</th>
                                            <th>Status Pengiriman</th>
                                            <th>Ongkir</th>
                                            <th>Total Pesanan</th>
                                            <th>Jumlah Dibayar</th>
                                            <th>Jumlah Kembali</th>

                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reviews as $review)
                                            <tr>
                                                <td>{{ $review->pembelis->nama_pembeli }}</td>
                                                <td>{{ $review->pembelis->alamat }}</td>
                                                <td>{{ $review->pembelis->no_pembeli }}</td>
                                                <td>{{ $review->pembelis->nas }}</td>
                                                <td>{{ $review->pesanans->pupuks->nama_pupuk }}</td>
                                                <td>{{ $review->pesanans->pupuks->harga_pupuk }}</td>
                                                <td>{{ $review->pesanans->jumlah_pesan }}</td>
                                                <td>{{ $review->pesanans->tanggal_pesan }}</td>
                                                <td>{{ $review->pengirimans->status }}</td>
                                                <td>{{ $review->pengirimans->ongkir }}</td>
                                                <td>{{ $review->pesanans->total_pesan }}</td>
                                                <td>{{ $review->dibayar }}</td>
                                                <td>{{ $review->kembali }}</td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="{{route('pupukku_edit',$review->id) }}"><button></button><i class="fa fa-edit"></i></a>
                                                        {{-- <button type="submit" data-toggle="tooltip"
                                                        class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Task" onclick="openForm()">
                                                        <i class="fa fa-edit"></i>
                                                        <script>
                                                            function openForm() {
                                                                document.getElementById("myForm-{{ $review->id }}").style.display = "block";
                                                            }

                                                            function closeForm() {
                                                                document.getElementById("myForm-{{ $review->id }}").style.display = "none";
                                                            }
                                                        </script> --}}
                                                    </button>
                                                        <form action="{{ route('pupukku_delete', $review->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" data-toggle="tooltip"
                                                                class="btn btn-link btn-danger"
                                                                data-original-title="Remove">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>

                                            {{-- <form method="POST" action="{{ route('pupukku_update', $review->id) }}">
                                                @csrf
                                                @method('put')
                                                <div class="form-popup" id="myForm-{{ $review->id }}">
                                                    <form action="/action_page.php" class="form-container">
                                                        <div class="card-body">
                                                            <div class="row">

                                                               

                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="form-group">
                                                                        <label>Nama Anggota</label>
                                                                        <input name="nama_pembeli" type="text"
                                                                            class="form-control"
                                                                            placeholder="Masukkan Nama Pembeli"
                                                                            value="{{ $review->pembelis->nama_pembeli }}"
                                                                            disabled>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Alamat</label>
                                                                        <textarea name="alamat" class="form-control" rows="5">{{ $review->pembelis->alamat }}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Nomor HP</label>
                                                                        <input name="no_pembeli" type="text"
                                                                            class="form-control"
                                                                            placeholder="Masukkan Nomor Pembeli"
                                                                            value="{{ $review->pembelis->no_pembeli }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Nomor Anggota Subsidi (NAS)</label>
                                                                        <input name="nas" type="text"
                                                                            class="form-control"
                                                                            placeholder="Masukkan Nomor Anggota"
                                                                            value="{{ $review->pembelis->nas }}"
                                                                            disabled>
                                                                    </div>


                                                                </div>

                                                               
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="form-group">
                                                                        <label>Jumlah Pesanan</label>
                                                                        <div class="input-group mb-3">
                                                                            <input name="jumlah_pesan" type="text"
                                                                                class="form-control"
                                                                                aria-describedby="basic-addon3"
                                                                                value="{{ $review->pesanans->jumlah_pesan }}">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"
                                                                                    id="basic-addon3">KG</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Tanggal Pesanan</label>
                                                                        <input name="tanggal_pesan" type="text"
                                                                            class="form-control"
                                                                            placeholder="Masukkan Nomor Anggota"
                                                                            value="{{ $review->pesanans->tanggal_pesan }}"
                                                                            disabled>
                                                                    </div>

                                                                </div>
                                                               

                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="form-group">
                                                                        <label>Ongkos Kirim</label>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"
                                                                                    id="basic-addon3">RP</span>
                                                                            </div>
                                                                            <input name="ongkir" type="text"
                                                                                class="form-control"
                                                                                aria-describedby="basic-addon3"
                                                                                value="{{ $review->pengirimans->ongkir }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Total Pesanan</label>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"
                                                                                    id="basic-addon3">RP</span>
                                                                            </div>
                                                                            <input name="total_pesan" type="text"
                                                                                class="form-control"
                                                                                aria-describedby="basic-addon3"
                                                                                value="{{ $review->pesanans->total_pesan }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Jumlah Dibayar</label>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"
                                                                                    id="basic-addon3">RP</span>
                                                                            </div>
                                                                            <input name="dibayar" type="text"
                                                                                class="form-control"
                                                                                aria-describedby="basic-addon3"
                                                                                value="{{ $review->dibayar }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Jumlah Kembali</label>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"
                                                                                    id="basic-addon3">RP</span>
                                                                            </div>
                                                                            <input name="kembali" type="text"
                                                                                class="form-control"
                                                                                aria-describedby="basic-addon3"
                                                                                value="{{ $review->kembali }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="submit" class="btn btn-success" value="Update" />
                                                        <button type="button" class="btn cancel"
                                                            onclick="closeForm()">Close</button>
                                                    </form>
                                                </div>
                                            </form> --}}
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
