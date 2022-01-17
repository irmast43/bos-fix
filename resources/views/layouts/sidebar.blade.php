<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="{{route('dashboardAdmin')}}"><img src="../assetsAdmin/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <div class="image"><a href="#"><img src="../assetsAdmin/images/profile_av.jpg" alt="User"></a></div>
                    <div class="detail">
                        <h4>Irma</h4>
                        <small>Admin</small>
                    </div>
                </div>
            </li>
            <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="{{route('dashboardAdmin')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('jadwal.index')}}"><i class="zmdi zmdi-calendar-alt"></i><span>Jadwal</span></a></li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('pendaftaran.index')}}"><i class="zmdi zmdi-file-text"></i><span>pendaftaran</span></a></li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active open' : null }}"><a href="{{route('sponsor.index')}}"><i class="zmdi zmdi-group"></i><span>Sponsor</span></a></li>

        </ul>
    </div>
</aside>
