<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

    <!-- Header dan Sidebar (Dapat Disesuaikan) -->
    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')

    <main id="main" class="main" style="margin-buttom: 35px;">
        <div class="pagetitle">
            <h1>Edit Produk</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Edit Produk</h5>

                            <!-- Form untuk mengedit produk -->
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <!-- Nama Produk -->
                                    <div class="col-12">
                                        <label for="namaProduk" class="form-label">Nama Produk</label>
                                        <input type="text" name="nama_produk" class="form-control" id="namaProduk"
                                            placeholder="Masukkan nama produk" required>
                                    </div>

                                    <!-- Harga Produk -->
                                    <div class="col-12 mt-3">
                                        <label for="hargaProduk" class="form-label">Harga Produk</label>
                                        <input type="number" name="harga_produk" class="form-control" id="hargaProduk"
                                            placeholder="Masukkan harga produk" required>
                                    </div>

                                    <!-- Deskripsi Produk -->
                                    <div class="col-12 mt-3">
                                        <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
                                        <textarea name="deskripsi_produk" class="form-control" id="deskripsiProduk" rows="4"
                                            placeholder="Masukkan deskripsi produk" required></textarea>
                                    </div>

                                    <!-- Foto Produk -->
                                    <div class="col-12 mt-3">
                                        <label for="fotoProduk" class="form-label">Foto Produk</label>
                                        <input type="file" name="foto_produk" class="form-control" id="fotoProduk"
                                            accept="image/*">
                                        <small class="text-muted">Kosongkan jika tidak ingin mengganti foto produk</small>
                                        <!-- Menampilkan foto produk yang sudah ada -->
                                        <div class="mt-2">
                                            <img src="https://via.placeholder.com/100" alt="Foto Produk" width="100">
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- Script untuk Bootstrap (Untuk Modal dan Interaksi Lainnya) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
