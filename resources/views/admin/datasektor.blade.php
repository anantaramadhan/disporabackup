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
              <input type="text" id="searchInput" class="form-control w-50" placeholder="Cari Sektor..." onkeyup="searchTable()">
              <!-- Button Tambah Sektor -->
              <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#tambahSektorModal">
                <i class="bi bi-plus-circle"></i> Tambah Sektor
              </button>
            </div>

            <!-- Tabel Data Sektor -->
            <table class="table table-hover" id="sektorTable">
              <thead>
                <tr>
                  <th>#</th> <!-- Kolom Nomor -->
                  <th>Gambar Sektor</th>
                  <th>Nama Sektor</th>
                  <th>Deskripsi</th>
                  <th>Jumlah Pelaku Usaha</th> <!-- Kolom Jumlah Pelaku Usaha -->
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td> <!-- Nomor -->
                  <td><img src="{{ asset('assets/img/logoekraf.png') }}" alt="Sektor 1" class="img-fluid" width="60"></td>
                  <td>Sektor 1</td>
                  <td>Deskripsi sektor 1</td>
                  <td>150</td> <!-- Jumlah Pelaku Usaha -->
                  <td>
                    <a href="{{ route('sektor.info') }}" class="btn btn-sm btn-primary">Pelaku Usaha</a>
                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editSektorModal">Edit</button>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusSektorModal">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td> <!-- Nomor -->
                  <td><img src="{{ asset('assets/img/sektor2.jpg') }}" alt="Sektor 2" class="img-fluid" width="60"></td>
                  <td>Sektor 2</td>
                  <td>Deskripsi sektor 2</td>
                  <td>200</td> <!-- Jumlah Pelaku Usaha -->
                  <td>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#sektor2Modal">pelaku usaha</button>
                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editSektorModal">Edit</button>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusSektorModal">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>3</td> <!-- Nomor -->
                  <td><img src="{{ asset('assets/img/sektor3.jpg') }}" alt="Sektor 3" class="img-fluid" width="60"></td>
                  <td>Sektor 3</td>
                  <td>Deskripsi sektor 3</td>
                  <td>120</td> <!-- Jumlah Pelaku Usaha -->
                  <td>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#sektor3Modal">pelaku usaha</button>
                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editSektorModal">Edit</button>
                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusSektorModal">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>4</td> <!-- Nomor -->
                  <td><img src="{{ asset('assets/img/sektor4.jpg') }}" alt="Sektor 4" class="img-fluid" width="60"></td>
                  <td>Sektor 4</td>
                  <td>Deskripsi sektor 4</td>
                  <td>175</td> <!-- Jumlah Pelaku Usaha -->
                  <td>
                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#sektor4Modal">pelaku usaha</button>
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

<!-- Modal Tambah Sektor -->
<div class="modal fade" id="tambahSektorModal" tabindex="-1" aria-labelledby="tambahSektorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahSektorModalLabel">Tambah Sektor Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="namaSektor" class="form-label">Nama Sektor</label>
            <input type="text" class="form-control" id="namaSektor" placeholder="Masukkan nama sektor">
          </div>
          <div class="mb-3">
            <label for="deskripsiSektor" class="form-label">Deskripsi Sektor</label>
            <textarea class="form-control" id="deskripsiSektor" rows="3" placeholder="Masukkan deskripsi sektor"></textarea>
          </div>
          <div class="mb-3">
            <label for="gambarSektor" class="form-label">Gambar Sektor</label>
            <input type="file" class="form-control" id="gambarSektor">
          </div>
          <div class="mb-3">
            <label for="pelakuUsaha" class="form-label">Jumlah Pelaku Usaha</label>
            <input type="number" class="form-control" id="pelakuUsaha" placeholder="Masukkan jumlah pelaku usaha">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Sektor -->
<!-- (Sama seperti modal Edit sebelumnya) -->

<!-- Modal Hapus Sektor -->
<!-- (Sama seperti modal Hapus sebelumnya) -->

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
