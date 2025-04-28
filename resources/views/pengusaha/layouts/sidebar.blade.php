<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Menu Dashboard -->
    <li class="nav-item">
      <a class="nav-link @if(Request::is('informasiusaha')) active @else collapsed @endif" href="{{ route('informasiusaha') }}">
        <i class="bi bi-shop"></i>
        <span>Informasi usaha</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <!-- Menu Eventmu -->
    <li class="nav-item">
      <a class="nav-link @if(Request::is('eventmu')) active @else collapsed @endif" href="{{ route('eventmu') }}">
        <i class="bi bi-calendar-event"></i>
        <span>Eventmu</span>
      </a>
    </li><!-- End Eventmu Nav -->


        <!-- Menu Produk Usaha -->
        <li class="nav-item">
      <a class="nav-link @if(Request::is('produkusaha')) active @else collapsed @endif" href="{{ route('produkusaha') }}">
        <i class="bi bi-bag"></i>
        <span>Produk Usahamu</span>
      </a>
    </li><!-- End Produk Usaha Nav -->

  </ul>

  @include('pengusaha.layouts.scripts')

</aside><!-- End Sidebar -->
