
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <!-- Menu Artikel -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('artikel') }}">
        <i class="bi bi-file-earmark-text"></i>
        <span>Artikel</span>
      </a>
    </li><!-- End Artikel Nav -->

    <!-- Menu Terima Event -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('terimaevent' ) }}">
        <i class="bi bi-calendar-check"></i>
        <span>Terima Event</span>
      </a>
    </li><!-- End Terima Event Nav -->

    <!-- Menu Data Event -->
<li class="nav-item">
  <a class="nav-link collapsed" href="{{ route('dataevent') }}">
    <i class="bi bi-database"></i>
    <span>Data Event</span>
  </a>
</li><!-- End Data Event Nav -->

<!-- Menu Terima Usaha -->
<li class="nav-item">
  <a class="nav-link collapsed" href="{{ route('terimausaha') }}">
    <i class="bi bi-check-circle"></i>
    <span>Terima Usaha</span>
  </a>
</li><!-- End Terima Usaha Nav -->

<!-- Menu Data Usaha -->
<li class="nav-item">
  <a class="nav-link collapsed" href="{{ route('datausaha') }}">
    <i class="bi bi-briefcase"></i>
    <span>Data Usaha</span>
  </a>
</li><!-- End Data Usaha Nav -->

<!-- Menu Profil -->
<li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profil Nav -->



  </ul>

  @include('layouts.scripts')

</aside><!-- End Sidebar -->
