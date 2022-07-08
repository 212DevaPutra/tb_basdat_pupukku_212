@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5" style="background-color: green">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Welcome to</h2>
                        <h5 class="text-white op-7 mb-2">Pupukku pupuk subsidi terjamin asli mutunya</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="{{ route('pupukku_index') }}" class="btn btn-white btn-border btn-round mr-2">Laporan</a>
                        <a href="{{ route('pupukku_create') }}" class="btn btn-secondary btn-round">Kasir</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-md-6">
                    <div class="card full-height">
                        <div class="card-body">
                            <div class="card-title">Pupuk Bersubsidi</div>
                            <div class="card-category">Daily information about subsidi in system</div>

                            <div class="table-responsive">
                                <table class="display table table-striped table-hover">
                                    <tr>
                                        <th>Jenis Pupuk</th>
                                        <th>Harga 2022</th>
                                    </tr>
                                    <tr>
                                        <td>Pupuk Urea</td>
                                        <td>112.500 per 50 kg (2.250 per kg)</td>
                                    </tr>
                                    <tr>
                                        <td>Pupuk ZA</td>
                                        <td>85.000 per 50 kg (1.700 per kg)</td>
                                    </tr>
                                    <tr>
                                        <td>Pupuk SP-36</td>
                                        <td>120.000 per 50 kg (2.400 per kg)</td>
                                    </tr>
                                    <tr>
                                        <td>Pupuk NPK</td>
                                        <td>115.000 per 50 kg (2.300 per kg)</td>
                                    </tr>
                                    <tr>
                                        <td>Pupuk Organik</td>
                                        <td>32.000 per 40 kg (800 per kg)</td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
