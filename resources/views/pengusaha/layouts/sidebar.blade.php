<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">



   <!-- Menu Beranda -->
   <li class="nav-item">
      <a class="nav-link @if(Request::is('beranda')) active @else collapsed @endif" href="{{ route('beranda') }}">
        <i class="bi bi-house-door"></i>
        <span>Beranda</span>
      </a>
    </li><!-- End Beranda Nav -->


    <!-- Menu Eventmu -->
    <li class="nav-item">
      <a class="nav-link @if(Request::is('eventmu')) active @else collapsed @endif" href="{{ route('eventmu') }}">
        <i class="bi bi-calendar-event"></i>
        <span>Eventmu</span>
      </a>
    </li><!-- End Eventmu Nav -->


    <!-- Menu Informasi Usaha -->
    <li class="nav-item">
      <a class="nav-link @if(Request::is('informasiusaha')) active @else collapsed @endif" href="{{ route('informasiusaha') }}">
        <i class="bi bi-shop"></i>
        <span>Informasi usaha</span>
      </a>
    </li><!-- End Informasi Usaha Nav -->


        <!-- Menu Produk Usaha -->
        <li class="nav-item">
      <a class="nav-link @if(Request::is('produkusaha')) active @else collapsed @endif" href="{{ route('produkusaha') }}">
        <i class="bi bi-bag"></i>
        <span>Produk Usahamu</span>
      </a>
    </li><!-- End Produk Usaha Nav -->

    <!-- Menu Profil -->
    <li class="nav-item">
      <a class="nav-link @if(Request::is('profil')) active @else collapsed @endif" href="{{ route('profil') }}">
        <i class="bi bi-person-circle"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profil Nav -->

  </ul>

  @include('pengusaha.layouts.scripts')

</aside><!-- End Sidebar -->
