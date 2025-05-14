<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>
  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Sektor</h1>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body pt-4">
               <!-- Kolom Pencarian Terpisah -->
              <div class="d-flex justify-content-between mb-3">
                <input type="text" id="searchInput" class="form-control w-50" placeholder="Cari Event..." onkeyup="searchTable()">
                
                <!-- Button Filter dan Button Ajukan -->
                <div class="d-flex">
                  <button class="btn btn-sm btn-outline-secondary me-2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-funnel"></i> Filter
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Filter 1</a>
                    <a class="dropdown-item" href="#">Filter 2</a>
                  </div>

                  <!-- Button Ajukan Event dengan Warna Hijau yang Mengarah ke Halaman Tambah Event -->
                  <a href="{{ route('sektor.tambah') }}" class="btn btn-sm btn-success d-flex align-items-center justify-content-center">
                    <i class="bi bi-plus-circle me-2"></i> Tambah Sektor
                  </a>
                </div>
              </div>

              <!-- Tabel Data Sektor -->
              <table class="table table-hover" id="sektorTable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Gambar Sektor</th>
                    <th>Nama Sektor</th>
                    <th>Deskripsi</th>
                    <th>Jumlah Pelaku Usaha</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Contoh Data -->
                  <tr>
                    <td>1</td>
                    <td><img src="{{ asset('assets/img/logoekraf.png') }}" alt="Sektor 1" class="img-fluid" width="60"></td>
                    <td>Sektor 1</td>
                    <td>Deskripsi sektor 1</td>
                    <td>150</td>
                    <td>
                      <a href="{{ route('sektor.info') }}" class="btn btn-sm btn-primary">Pelaku Usaha</a>
                       <a href="{{ route('sektor.edit') }}" class="btn btn-sm btn-warning">Edit</a>
                      <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusSektorModal">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><img src="{{ asset('assets/img/sektor2.jpg') }}" alt="Sektor 2" class="img-fluid" width="60"></td>
                    <td>Sektor 2</td>
                    <td>Deskripsi sektor 2</td>
                    <td>200</td>
                    <td>
                      <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#sektor2Modal">Pelaku Usaha</button>
                      <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editSektorModal">Edit</button>
                      <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusSektorModal">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><img src="{{ asset('assets/img/sektor3.jpg') }}" alt="Sektor 3" class="img-fluid" width="60"></td>
                    <td>Sektor 3</td>
                    <td>Deskripsi sektor 3</td>
                    <td>120</td>
                    <td>
                      <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#sektor3Modal">Pelaku Usaha</button>
                      <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editSektorModal">Edit</button>
                      <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusSektorModal">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><img src="{{ asset('assets/img/sektor4.jpg') }}" alt="Sektor 4" class="img-fluid" width="60"></td>
                    <td>Sektor 4</td>
                    <td>Deskripsi sektor 4</td>
                    <td>175</td>
                    <td>
                      <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#sektor4Modal">Pelaku Usaha</button>
                      <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editSektorModal">Edit</button>
                      <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusSektorModal">Hapus</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- JavaScript untuk Pencarian -->
  <script>
    function searchTable() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toLowerCase();
      table = document.getElementById("sektorTable");
      tr = table.getElementsByTagName("tr");

      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        var matchFound = false;

        // Loop through each cell in the row
        for (var j = 0; j < td.length; j++) {
          if (td[j]) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toLowerCase().indexOf(filter) > -1) {
              matchFound = true;
              break;
            }
          }
        }

        // Show the row if any match is found, else hide it
        if (matchFound) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  </script>

</body>
</html>
