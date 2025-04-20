<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
@include('layouts.scripts')

<body>

  @include('layouts.header')
  @include('layouts.sidebar')

  <main id="main" class="main">

  <!-- Header: Judul + Search -->
    <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap">
      
      <!-- Page Title -->
      <div class="pagetitle">
        <h1>Terima Event</h1>
      </div>

      <!-- Search Bar -->
      <div class="flex-grow-1 d-flex justify-content-center">
        <form class="d-flex w-50" method="GET" action="{{ route('terimaevent') }}">
          <div class="input-group w-100">
            <input type="text" class="form-control" name="query" placeholder="Cari Event" aria-label="Search">
            <button class="btn btn-primary" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
      </div>

      <!-- Spacer (Untuk keseimbangan visual kanan) -->
      <div style="width: 100px;"></div>

    </div>

    <!-- Filter Button -->
    <div class="d-flex justify-content-end mb-4">
      <div class="dropdown me-2">
        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-funnel"></i> Filter
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Filter 1</a></li>
          <li><a class="dropdown-item" href="#">Filter 2</a></li>
        </ul>
      </div>
    </div>
    <!-- End Filter Button -->

    <!-- Data Table -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card recent-sales overflow-auto">
          <div class="card-body">
            <table class="table table-hover align-middle">
              <thead class="table-light">
                <tr>
                  <th scope="col">Event</th>
                  <th scope="col">Tanggal Event</th>
                  <th scope="col">Nama Pengaju</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="d-flex align-items-center">
                    <img src="assets/img/logoekraf.png" alt="Event Image" class="rounded me-3" width="60" height="60">
                    <span>Rock Revolt: A Fusion of Power and Passion</span>
                  </td>
                  <td>Monday, June 10</td>
                  <td>Jarwo Pramudito</td>
                  <td>
                    <button class="btn btn-sm btn-primary">Info</button>
                    <button class="btn btn-sm btn-danger">Tolak</button>
                    <button class="btn btn-sm btn-success">Terima</button>
                  </td>
                </tr>
                <tr>
                  <td class="d-flex align-items-center">
                    <img src="assets/img/logoekraf.png" alt="Event Image" class="rounded me-3" width="60" height="60">
                    <span>Rock Fest Extravaganza</span>
                  </td>
                  <td>Tuesday, June 21</td>
                  <td>Eko Santoso</td>
                  <td>
                    <button class="btn btn-sm btn-primary">Info</button>
                    <button class="btn btn-sm btn-danger">Tolak</button>
                    <button class="btn btn-sm btn-success">Terima</button>
                  </td>
                </tr>
                <tr>
                  <td class="d-flex align-items-center">
                    <img src="assets/img/logoekraf.png" alt="Event Image" class="rounded me-3" width="60" height="60">
                    <span>A Legendary Gathering of Rock Icons</span>
                  </td>
                  <td>Friday, July 20</td>
                  <td>Joko Purwanto</td>
                  <td>
                    <button class="btn btn-sm btn-primary">Info</button>
                    <button class="btn btn-sm btn-danger">Tolak</button>
                    <button class="btn btn-sm btn-success">Terima</button>
                  </td>
                </tr>
                <tr>
                  <td class="d-flex align-items-center">
                    <img src="assets/img/logoekraf.png" alt="Event Image" class="rounded me-3" width="60" height="60">
                    <span>Rock Fest Extravaganza</span>
                  </td>
                  <td>Tuesday, June 21</td>
                  <td>Hendra Kurniawan</td>
                  <td>
                    <button class="btn btn-sm btn-primary">Info</button>
                    <button class="btn btn-sm btn-danger">Tolak</button>
                    <button class="btn btn-sm btn-success">Terima</button>
                  </td>
                </tr>
              </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-end mt-4">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item"><a class="page-link" href="#">11</a></li>
              </ul>
            </nav>

          </div>
        </div>
      </div>
    </div>
    <!-- End Data Table -->

  </main>

</body>

</html>
