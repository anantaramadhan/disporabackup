<!DOCTYPE html>
<html lang="en">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

  @include('pengusaha.layouts.header')
  @include('pengusaha.layouts.sidebar')

  <main id="main" class="main" style="margin-top: 35px;">
    <div class="pagetitle">
      <h1>Eventmu</h1>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body pt-4">
              <!-- Kolom Pencarian Terpisah -->
              <div class="d-flex justify-content-between mb-3">
                <input type="text" id="searchInput" class="form-control w-50" placeholder="Cari Event..." onkeyup="searchTable()">
                
                <!-- Button Filter dan Button Tambah -->
                <div class="d-flex">
                  <button class="btn btn-sm btn-outline-secondary me-2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-funnel"></i> Filter
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Filter 1</a>
                    <a class="dropdown-item" href="#">Filter 2</a>
                  </div>

                  <!-- Button Tambah dengan Warna Hijau -->
                  <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#tambahEventModal">
                    <i class="bi bi-plus-circle"></i> Tambah Event
                  </button>
                </div>
              </div>

              <!-- Tabel Data Event -->
              <table class="table table-hover" id="eventTable">
                <thead>
                  <tr>
                    <th>No</th> <!-- Kolom Nomor -->
                    <th>Event</th> <!-- Gabungkan Foto dan Deskripsi -->
                    <th>Tanggal Event</th>
                    <th>Status Event</th> <!-- Kolom Status Event -->
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td> <!-- Nomor -->
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Event 1" class="img-fluid" width="60" class="me-2">
                        <div class="ms-2">
                          <strong>Festival Seni 2025</strong>
                          <p class="mb-0">Event seni tahunan yang akan diadakan pada bulan Juni 2025.</p>
                        </div>
                      </div>
                    </td> <!-- Gabungkan Foto dan Deskripsi dengan jarak antara keduanya -->
                    <td>10 Juni 2025</td>
                    <td><span class="badge bg-success">Aktif</span></td> <!-- Status Event -->
                    <td>
                      <a href="{{ route('eventmu.edit', 1) }}" class="btn btn-sm btn-warning">Edit</a>
                      <button class="btn btn-sm btn-danger">Hapus Event</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td> <!-- Nomor -->
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Event 2" class="img-fluid" width="60" class="me-2">
                        <div class="ms-2">
                          <strong>Konser Musik 2025</strong>
                          <p class="mb-0">Konser musik dengan berbagai artis ternama di Juli 2025.</p>
                        </div>
                      </div>
                    </td> <!-- Gabungkan Foto dan Deskripsi dengan jarak antara keduanya -->
                    <td>15 Juli 2025</td>
                    <td><span class="badge bg-warning">Menunggu</span></td> <!-- Status Event -->
                    <td>
                      <a href="{{ route('eventmu.edit', 2) }}" class="btn btn-sm btn-warning">Edit</a>
                      <button class="btn btn-sm btn-danger">Hapus Event</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td> <!-- Nomor -->
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Event 3" class="img-fluid" width="60" class="me-2">
                        <div class="ms-2">
                          <strong>Seminar Teknologi 2025</strong>
                          <p class="mb-0">Seminar mengenai teknologi terbaru pada bulan Agustus 2025.</p>
                        </div>
                      </div>
                    </td> <!-- Gabungkan Foto dan Deskripsi dengan jarak antara keduanya -->
                    <td>22 Agustus 2025</td>
                    <td><span class="badge bg-danger">Batal</span></td> <!-- Status Event -->
                    <td>
                      <a href="{{ route('eventmu.edit', 3) }}" class="btn btn-sm btn-warning">Edit</a>
                      <button class="btn btn-sm btn-danger">Hapus Event</button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td> <!-- Nomor -->
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Event 4" class="img-fluid" width="60" class="me-2">
                        <div class="ms-2">
                          <strong>Expo Pendidikan 2025</strong>
                          <p class="mb-0">Pameran pendidikan terbesar dengan berbagai institusi terkemuka di September 2025.</p>
                        </div>
                      </div>
                    </td> <!-- Gabungkan Foto dan Deskripsi dengan jarak antara keduanya -->
                    <td>5 September 2025</td>
                    <td><span class="badge bg-success">Aktif</span></td> <!-- Status Event -->
                    <td>
                      <a href="{{ route('eventmu.edit', 4) }}" class="btn btn-sm btn-warning">Edit</a>
                      <button class="btn btn-sm btn-danger">Hapus Event</button>
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

  <!-- Modal Tambah Event -->
  <div class="modal fade" id="tambahEventModal" tabindex="-1" aria-labelledby="tambahEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahEventModalLabel">Tambah Event Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="namaEvent" class="form-label">Nama Event</label>
              <input type="text" class="form-control" id="namaEvent" placeholder="Masukkan nama event">
            </div>
            <div class="mb-3">
              <label for="tanggalEvent" class="form-label">Tanggal Event</label>
              <input type="date" class="form-control" id="tanggalEvent">
            </div>
            <div class="mb-3">
              <label for="namaPengaju" class="form-label">Nama Pengaju</label>
              <input type="text" class="form-control" id="namaPengaju" placeholder="Masukkan nama pengaju">
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

  <!-- JavaScript untuk Pencarian -->
  <script>
    function searchTable() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toLowerCase();
      table = document.getElementById("eventTable");
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
