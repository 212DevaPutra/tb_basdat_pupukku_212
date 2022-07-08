@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Daftar Instansi') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pegawai_store') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="form-group">
                                    <label class="form-label">Nama Instansi</label>
                                    <div class="selectgroup w-100">
                                        @foreach ($instansi as $pegawai)
                                            <label class="selectgroup-item">
                                                <input type="radio" name="instansi" value="{{ $pegawai->id }}"
                                                    class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">{{ $pegawai->instansi }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('SIMPAN') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
