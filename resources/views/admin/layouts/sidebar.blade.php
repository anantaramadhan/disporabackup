
@include('admin.layouts.scripts')

<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">


    <!-- Menu Beranda -->
    <li class="nav-item">
      <a class="nav-link @if(request()->is('admin.beranda*')) active @else collapsed @endif" href="{{ route('admin.beranda') }}">
        <i class="bi bi-grid"></i>
        <span>Beranda</span>
      </a>
    </li><!-- End Beranda Nav -->

    <!-- Menu Artikel -->
    <li class="nav-item">
      <a class="nav-link @if(request()->is('artikel*')) active @else collapsed @endif" href="{{ route('artikel') }}">
        <i class="bi bi-file-earmark-text"></i>
        <span>Artikel</span>
      </a>
    </li><!-- End Artikel Nav -->

    <!-- Menu Terima Event -->
    <li class="nav-item">
      <a class="nav-link @if(request()->is('terimaevent*')) active @else collapsed @endif" href="{{ route('terimaevent') }}">
        <i class="bi bi-calendar-check"></i>
        <span>Terima Event</span>
      </a>
    </li><!-- End Terima Event Nav -->

    <!-- Menu Data Event -->
    <li class="nav-item">
      <a class="nav-link @if(request()->is('dataevent*')) active @else collapsed @endif" href="{{ route('dataevent') }}">
        <i class="bi bi-database"></i>
        <span>Data Event</span>
      </a>
    </li><!-- End Data Event Nav -->

    <!-- Menu Terima Usaha -->
    <li class="nav-item">
      <a class="nav-link @if(request()->is('terimausaha*')) active @else collapsed @endif" href="{{ route('terimausaha') }}">
        <i class="bi bi-check-circle"></i>
        <span>Terima Usaha</span>
      </a>
    </li><!-- End Terima Usaha Nav -->

    <!-- Menu Data Usaha -->
    <li class="nav-item">
      <a class="nav-link @if(request()->is('datausaha*')) active @else collapsed @endif" href="{{ route('datausaha') }}">
        <i class="bi bi-briefcase"></i>
        <span>Data Usaha</span>
      </a>
    </li><!-- End Data Usaha Nav -->

    <!-- Menu Data Sektor -->
    <li class="nav-item">
      <a class="nav-link @if(request()->is('datasektor*')) active @else collapsed @endif" href="{{ route('datasektor') }}">
        <i class="bi bi-briefcase"></i>
        <span>Data Sektor</span>
      </a>
    </li><!-- End Data Sektor Nav -->

    <!-- Menu Profil -->
    <li class="nav-item">
      <a class="nav-link @if(request()->is('admin.profil*')) active @else collapsed @endif" href="{{ route('admin.profil') }}">
        <i class="bi bi-person"></i>
        <span>Profil</span>
      </a>
    </li><!-- End Profil Nav -->

    <!-- Menu Keluar -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="bi bi-box-arrow-right"></i>
        <span>Keluar</span>
      </a>
      <!-- Logout Form -->
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li><!-- End Keluar Nav -->

  </ul>




</aside><!-- End Sidebar -->
