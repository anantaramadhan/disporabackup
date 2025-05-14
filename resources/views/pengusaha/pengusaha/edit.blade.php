<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

  @include('pengusaha.layouts.header')
  @include('pengusaha.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Informasi Usaha</h1>
    </div>

    <section class="section profile">
      <div class="row">

        <!-- Semua Info Pengaju & Detail Usaha Dalam Satu Card -->
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">

              <!-- Info Pengaju -->
              <div class="d-flex flex-column align-items-center mb-4">
                <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Profile" class="rounded-circle mb-2" style="width: 100px; height: 100px; margin-top: 20px;">
                <h2>Hermawan</h2>
                <h6 class="text-muted">Pemilik Usaha</h6>
              </div>

              <!-- Formulir Edit Detail Usaha -->
              <h5 class="card-title mb-3">Edit Detail Usaha</h5>
              <form method="POST" id="editBusinessForm">
                @csrf

                <!-- Nama Usaha -->
                <div class="row mb-3">
                  <div class="col-lg-4 fw-bold">Nama Usaha</div>
                  <div class="col-lg-8">
                    <input type="text" name="nama_usaha" class="form-control" value="Hus Creative" required>
                  </div>
                </div>

                <!-- Pengelola -->
                <div class="row mb-3">
                  <div class="col-lg-4 fw-bold">Pengelola</div>
                  <div class="col-lg-8">
                    <input type="text" name="pengelola" class="form-control" value="Hermawan" required>
                  </div>
                </div>

                <!-- No. Telp -->
                <div class="row mb-3">
                  <div class="col-lg-4 fw-bold">No. Telp</div>
                  <div class="col-lg-8">
                    <input type="text" name="no_telp" class="form-control" value="(62) 852-1234-5678" required>
                  </div>
                </div>

                <!-- Sektor -->
                <div class="row mb-3">
                  <div class="col-lg-4 fw-bold">Sektor</div>
                  <div class="col-lg-8">
                    <input type="text" name="sektor" class="form-control" value="Kreatif dan Seni" required>
                  </div>
                </div>

                <!-- Alamat -->
                <div class="row mb-3">
                  <div class="col-lg-4 fw-bold">Alamat</div>
                  <div class="col-lg-8">
                    <input type="text" name="alamat" class="form-control" value="Jl. Raya Nganjuk No. 12, Kab. Nganjuk" required>
                  </div>
                </div>

                <!-- Foto Usaha -->
                <h5 class="card-title mt-4">Edit Foto Usaha</h5>
                <div class="row g-2">
                  <div class="col-4">
                    <input type="file" name="foto_usaha_1" class="form-control">
                  </div>
                </div>

                <!-- Lokasi Usaha (Map) -->
                <h5 class="card-title mt-4">Edit Lokasi Usaha</h5>
                <div class="row mb-3">
                  <div class="col-lg-4 fw-bold">Alamat Lokasi</div>
                  <div class="col-lg-8">
                    <input type="text" name="lokasi_usaha" class="form-control" value="Nganjuk, Jawa Timur" required>
                  </div>
                </div>

                <div class="col-12 mt-4">
                  <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                </div>

              </form>

            </div>
          </div>
        </div>

      </div>
    </section>

  </main>

  <!-- Modal Berhasil Simpan -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Berhasil Simpan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Informasi usaha Anda berhasil disimpan.
        </div>
        <div class="modal-footer">
          <a href="{{ route('informasiusaha') }}" class="btn btn-success">Kembali ke informasi usaha</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Gagal Simpan -->
  <div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="failureModalLabel">Gagal Simpan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Terjadi kesalahan saat menyimpan informasi usaha Anda. Silakan coba lagi.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript untuk Modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Menangani form submission
    document.getElementById("editBusinessForm").onsubmit = function(event) {
      event.preventDefault();

      // Simulasikan proses penyimpanan dengan random (gantilah dengan proses sebenarnya)
      let success = Math.random() > 0.5;  // Randomly simulate success or failure

      if (success) {
        // Menampilkan modal Berhasil Simpan
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
      } else {
        // Menampilkan modal Gagal Simpan
        var failureModal = new bootstrap.Modal(document.getElementById('failureModal'));
        failureModal.show();
      }
    };
  </script>

</body>

</html>
