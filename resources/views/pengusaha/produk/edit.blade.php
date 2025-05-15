<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

    <!-- Header dan Sidebar (Dapat Disesuaikan) -->
    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')

    <main id="main" class="main" style="margin-bottom: 35px;">
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
                            <form action="#" method="POST" enctype="multipart/form-data" id="editProductForm">
                                @csrf

                                <div class="row">
                                    <!-- Nama Produk -->
                                    <div class="col-12">
                                        <label for="namaProduk" class="form-label">Nama Produk</label>
                                        <input type="text" name="nama_produk" class="form-control" id="namaProduk"
                                            placeholder="Produk A" required>
                                    </div>

                                    <!-- Harga Produk -->
                                    <div class="col-12 mt-3">
                                        <label for="hargaProduk" class="form-label">Harga Produk</label>
                                        <input type="number" name="harga_produk" class="form-control" id="hargaProduk"
                                            placeholder="RP. 100.000" required>
                                    </div>

                                    <!-- Deskripsi Produk dengan CKEditor -->
                                    <div class="col-12 mt-3">
                                        <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
                                        <!-- Ganti textarea dengan div untuk CKEditor -->
                                        <div id="deskripsiProduk" class="form-control" style="min-height: 150px; border: 1px solid #ccc;" required>Deskripsi singkat tentang Produk A. Produk ini sangat bermanfaat untuk kebutuhan harian Anda.

Deskripsi lengkap tentang Produk A. Produk ini sangat bermanfaat untuk kebutuhan harian Anda, baik untuk keperluan rumah tangga maupun pribadi. Dengan fitur-fitur canggih yang dimiliki, produk ini menjadi pilihan utama untuk meningkatkan kualitas hidup Anda. Penggunaan yang mudah dan harga yang terjangkau menjadikan produk ini sangat disarankan untuk setiap keluarga.</div>
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

    <!-- Modal Berhasil Simpan -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Berhasil Simpan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Produk Anda berhasil disimpan.
                </div>
                <div class="modal-footer">
                    <a href="{{ route('produkusaha') }}" class="btn btn-success">Kembali ke Daftar Produk</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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
                    Terjadi kesalahan saat menyimpan produk Anda. Silakan coba lagi.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Bootstrap (Untuk Modal dan Interaksi Lainnya) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Menambahkan CKEditor 5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        // Inisialisasi CKEditor pada elemen dengan ID "deskripsiProduk"
        ClassicEditor
            .create(document.querySelector('#deskripsiProduk'), {
                toolbar: [
                    'undo', 'redo', '|',
                    'bold', 'italic', '|',
                    'link', 'imageUpload', 'numberedList', 'bulletedList', '|',
                    'blockQuote', 'insertTable'
                ],
                ckfinder: {
                    uploadUrl: '/upload-image' // Ganti dengan URL untuk menangani upload gambar
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        // Menangani form submission
        document.getElementById("editProductForm").onsubmit = function (event) {
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
