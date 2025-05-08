<!DOCTYPE html>
<html lang="en">

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
              <form method="POST">
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

</body>

</html>
