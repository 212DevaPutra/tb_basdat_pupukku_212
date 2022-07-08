<!-- Sidebar -->
<div class="sidebar sidebar-style-2"
    style="margin-top: 0%; background-image: url('{{ asset('img/leafpattern.jpg') }}');">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div>
                <img src="{{ asset('img/pupukku.png') }}" alt="" style="width: 250px">
            </div>

            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <a href="{{ route('pegawai_index') }}">
                        <img src="{{ asset('img/img_avatar.png') }}" alt="..." class="avatar-img rounded-circle">
                    </a>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span style="color: black">
                            {{-- {{ $user->name }} --}}
                            {{-- {{ $user->email }} --}}
                            <span class="user-level"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="{{ route('home') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pupukku_index') }}">
                        <p style="color: white; font-size: 24px">Laporan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pupukku_create') }}">
                        <p style="color: white; font-size: 24px">Kasir</p>
                    </a>
                </li>
            </ul>

            <div style="position: absolute; bottom: 0">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

        </div>
    </div>
</div>
<!-- End Sidebar -->
