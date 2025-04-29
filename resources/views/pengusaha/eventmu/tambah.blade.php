<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')

    <main id="main" class="main" style="margin-buttom: 35px;">
        <div class="pagetitle">
            <h1>Tambah Event Baru</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Tambah Event</h5>

                            <!-- Form untuk menambah event -->
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <!-- Nama Event -->
                                    <div class="col-12">
                                        <label for="namaEvent" class="form-label">Nama Event</label>
                                        <input type="text" name="nama_event" class="form-control" id="namaEvent"
                                            placeholder="Masukkan nama event" required>
                                    </div>

                                    <!-- Tanggal Event -->
                                    <div class="col-12 mt-3">
                                        <label for="tanggalEvent" class="form-label">Tanggal Event</label>
                                        <input type="date" name="tanggal_event" class="form-control" id="tanggalEvent"
                                            required>
                                    </div>

                                    <!-- Lokasi Event -->
                                    <div class="col-12 mt-3">
                                        <label for="lokasiEvent" class="form-label">Lokasi Event</label>
                                        <input type="text" name="lokasi_event" class="form-control" id="lokasiEvent"
                                            placeholder="Masukkan lokasi event" required>
                                    </div>

                                    <!-- Deskripsi Event -->
                                    <div class="col-12 mt-3">
                                        <label for="deskripsiEvent" class="form-label">Deskripsi Event</label>
                                        <textarea name="deskripsi_event" class="form-control" id="deskripsiEvent" rows="4"
                                            placeholder="Masukkan deskripsi event" required></textarea>
                                    </div>

                                    <!-- Foto Event -->
                                    <div class="col-12 mt-3">
                                        <label for="fotoEvent" class="form-label">Foto Event</label>
                                        <input type="file" name="foto_event" class="form-control" id="fotoEvent"
                                            accept="image/*" required>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100">Tambah Event</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
