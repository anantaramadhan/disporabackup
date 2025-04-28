<!DOCTYPE html>
<html lang="en">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

  @include('pengusaha.layouts.header')
  @include('pengusaha.layouts.sidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Edit Event</h1>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body pt-4">
              <!-- Form Edit Event -->
              <form>
                
                <!-- Nama Event -->
                <div class="mb-3">
                  <label for="namaEvent" class="form-label">Nama Event</label>
                  <input type="text" class="form-control" id="namaEvent" value="Festival Seni 2025" required>
                </div>

                <!-- Tanggal Event -->
                <div class="mb-3">
                  <label for="tanggalEvent" class="form-label">Tanggal Event</label>
                  <input type="date" class="form-control" id="tanggalEvent" value="2025-06-10" required>
                </div>

                <!-- Nama Pengaju -->
                <div class="mb-3">
                  <label for="namaPengaju" class="form-label">Nama Pengaju</label>
                  <input type="text" class="form-control" id="namaPengaju" value="Hermawan" required>
                </div>

                <!-- Status Event -->
                <div class="mb-3">
                  <label for="statusEvent" class="form-label">Status Event</label>
                  <select class="form-control" id="statusEvent">
                    <option value="Aktif" selected>Aktif</option>
                    <option value="Menunggu">Menunggu</option>
                    <option value="Batal">Batal</option>
                  </select>
                </div>

                <!-- Foto Event -->
                <div class="mb-3">
                  <label for="fotoEvent" class="form-label">Foto Event</label>
                  <input type="file" class="form-control" id="fotoEvent">
                  <small class="text-muted">* Kosongkan jika tidak ingin mengubah foto</small>
                </div>

                <!-- Tombol Simpan -->
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                  <a href="{{ route('eventmu') }}" class="btn btn-secondary">Kembali</a>
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
