<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Usaha</h1>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body pt-4">
              <!-- Kolom Pencarian Terpisah -->
              <div class="d-flex justify-content-between mb-3">
                <input type="text" id="searchInput" class="form-control w-50" placeholder="Cari Usaha..." onkeyup="searchTable()">
                <!-- Button Filter -->
                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-funnel"></i> Filter
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Filter 1</a>
                  <a class="dropdown-item" href="#">Filter 2</a>
                </div>
              </div>

              <!-- Tabel Data Usaha -->
              <table class="table table-hover" id="usahaTable">
                <thead>
                  <tr>
                    <th>#</th> <!-- Kolom Nomor -->
                    <th>Nama Usaha</th>
                    <th>Pengelola</th>
                    <th>Nomor Telp</th>
                    <th>Alamat</th>
                    <th>Sosial Media</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td> <!-- Nomor -->
                    <td>PT Hus Creative</td>
                    <td>Hermawan</td>
                    <td>0965748398475</td>
                    <td>Ds Bajulan, Kecamatan Ngetos, Kab Nganjuk</td>
                    <td>Hus_Creative</td>
                    <td>
                      <a href="{{ route('usaha.info') }}" class="btn btn-sm btn-primary">Info</a>
                      <button class="btn btn-sm btn-danger">Hapus Usaha</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td> <!-- Nomor -->
                    <td>Kriya.IN</td>
                    <td>Saputra w</td>
                    <td>9678454354355</td>
                    <td>Ds Bajulan, Kecamatan Ngetos, Kab Nganjuk</td>
                    <td>KriyaIn.Indo</td>
                    <td>
                      <a href="{{ route('usaha.info') }}" class="btn btn-sm btn-primary">Info</a>
                      <button class="btn btn-sm btn-danger">Hapus Usaha</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td> <!-- Nomor -->
                    <td>UD Sukses Jaya</td>
                    <td>Budi</td>
                    <td>085123456789</td>
                    <td>Jl. Merdeka No. 12</td>
                    <td>SuksesJaya</td>
                    <td>
                      <a href="{{ route('usaha.info') }}" class="btn btn-sm btn-primary">Info</a>
                      <button class="btn btn-sm btn-danger">Hapus Usaha</button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td> <!-- Nomor -->
                    <td>IndoTech Solutions</td>
                    <td>Rani</td>
                    <td>081298765432</td>
                    <td>Jl. Soekarno No. 8</td>
                    <td>IndoTechSol</td>
                    <td>
                      <a href="{{ route('usaha.info') }}" class="btn btn-sm btn-primary">Info</a>
                      <button class="btn btn-sm btn-danger">Hapus Usaha</button>
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

  <!-- Modal Tambah Usaha -->
  <div class="modal fade" id="tambahUsahaModal" tabindex="-1" aria-labelledby="tambahUsahaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahUsahaModalLabel">Tambah Usaha Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="namaUsaha" class="form-label">Nama Usaha</label>
              <input type="text" class="form-control" id="namaUsaha" placeholder="Masukkan nama usaha">
            </div>
            <div class="mb-3">
              <label for="deskripsiUsaha" class="form-label">Deskripsi Usaha</label>
              <textarea class="form-control" id="deskripsiUsaha" rows="3" placeholder="Masukkan deskripsi usaha"></textarea>
            </div>
            <div class="mb-3">
              <label for="nomorTelp" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="nomorTelp" placeholder="Masukkan nomor telepon">
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat usaha"></textarea>
            </div>
            <div class="mb-3">
              <label for="sosialMedia" class="form-label">Sosial Media</label>
              <input type="text" class="form-control" id="sosialMedia" placeholder="Masukkan sosial media usaha">
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

  <!-- Modal Hapus Usaha -->
  <!-- (Sama seperti modal Hapus sebelumnya) -->

  <!-- JavaScript untuk Pencarian -->
  <script>
    function searchTable() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toLowerCase();
      table = document.getElementById("usahaTable");
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
