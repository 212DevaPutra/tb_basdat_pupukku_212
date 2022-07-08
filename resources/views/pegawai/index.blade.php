@extends ('layouts.master')
@section('content')
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Pegawai</h2>
                    </div>

                    @if (is_null($user->instansi_id))
                        <div class="ml-md-auto py-2 py-md-0">
                            <a href="{{ route('pegawai_create') }}" class="btn btn-secondary btn-round">Tambah Instansi</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-md-6">
                    <div class="card full-height">
                        <div class="card-body">
                            <div>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                {{ $user->name }}
                            </div>
                            <div>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                {{ $user->email }}
                            </div>
                            <div>TTL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                {{ $user->tanggal_lahir }}
                            </div>
                            <div>
                                Hp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                {{ $user->no_hp }}
                            </div>
                            @if (!is_null($user->instansi_id))
                                <div>Instansi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                    {{ $user->instansis->instansi }}
                                </div>
                                <div>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                    {{ $user->instansis->alamat_instansi }}
                                </div>
                                <div>Telpon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                    {{ $user->instansis->tlp_instansi }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
