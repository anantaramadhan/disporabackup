<!DOCTYPE html>
<html lang="en">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

  @include('pengusaha.layouts.header')
  @include('pengusaha.layouts.sidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Produk</h1>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body pt-4">
              <!-- Kolom Pencarian Produk -->
              <div class="d-flex justify-content-between mb-3">
                <input type="text" id="searchInput" class="form-control w-50" placeholder="Cari Produk..." onkeyup="searchTable()">
                
                <!-- Button Tambah Produk -->
                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#tambahProdukModal">
                  <i class="bi bi-plus-circle"></i> Tambah Produk
                </button>
              </div>

              <!-- Grid Produk -->
              <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                      <h5 class="card-title">Produk A</h5>
                      <p class="card-text" id="deskripsiProduk1">Deskripsi singkat tentang Produk A. Produk ini sangat bermanfaat untuk kebutuhan harian Anda.</p>
                      <p id="deskripsiFull1" class="card-text d-none">Deskripsi lengkap tentang Produk A. Produk ini sangat bermanfaat untuk kebutuhan harian Anda, baik untuk keperluan rumah tangga maupun pribadi. Dengan fitur-fitur canggih yang dimiliki, produk ini menjadi pilihan utama untuk meningkatkan kualitas hidup Anda. Penggunaan yang mudah dan harga yang terjangkau menjadikan produk ini sangat disarankan untuk setiap keluarga.</p>
                      <button class="btn btn-link" id="btnShowMore1" onclick="toggleDescription(1)">Tampilkan Selengkapnya</button>
                    </div>
                    <div class="card-footer text-muted">
                      <span class="price">Rp 100.000</span>
                      <!-- Tombol Edit dan Hapus -->
                      <div class="d-flex justify-content-end mt-2">
                        <a href="{{ route('produk.edit', 1) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Produk 2">
                    <div class="card-body">
                      <h5 class="card-title">Produk B</h5>
                      <p class="card-text" id="deskripsiProduk2">Deskripsi singkat tentang Produk B. Produk ini cocok untuk keperluan rumah tangga.</p>
                      <p id="deskripsiFull2" class="card-text d-none">Deskripsi lengkap tentang Produk B. Produk ini cocok untuk keperluan rumah tangga, termasuk untuk memasak, mencuci, dan kegiatan sehari-hari lainnya. Dengan kualitas tinggi dan harga yang bersaing, produk ini akan mempermudah hidup Anda.</p>
                      <button class="btn btn-link" id="btnShowMore2" onclick="toggleDescription(2)">Tampilkan Selengkapnya</button>
                    </div>
                    <div class="card-footer text-muted">
                      <span class="price">Rp 150.000</span>
                      <!-- Tombol Edit dan Hapus -->
                      <div class="d-flex justify-content-end mt-2">
                        <a href="{{ route('produk.edit', 2) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Produk 3">
                    <div class="card-body">
                      <h5 class="card-title">Produk C</h5>
                      <p class="card-text" id="deskripsiProduk3">Deskripsi singkat tentang Produk C. Produk ini adalah pilihan terbaik untuk aktivitas luar ruangan.</p>
                      <p id="deskripsiFull3" class="card-text d-none">Deskripsi lengkap tentang Produk C. Produk ini adalah pilihan terbaik untuk aktivitas luar ruangan, seperti hiking, berkemah, atau aktivitas petualangan lainnya. Dilengkapi dengan teknologi terbaru untuk kenyamanan maksimal dan keamanan dalam setiap perjalanan Anda.</p>
                      <button class="btn btn-link" id="btnShowMore3" onclick="toggleDescription(3)">Tampilkan Selengkapnya</button>
                    </div>
                    <div class="card-footer text-muted">
                      <span class="price">Rp 200.000</span>
                      <!-- Tombol Edit dan Hapus -->
                      <div class="d-flex justify-content-end mt-2">
                        <a href="{{ route('produk.edit', 3) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Modal Tambah Produk -->
  <div class="modal fade" id="tambahProdukModal" tabindex="-1" aria-labelledby="tambahProdukModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahProdukModalLabel">Tambah Produk Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="namaProduk" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" id="namaProduk" placeholder="Masukkan nama produk">
            </div>
            <div class="mb-3">
              <label for="hargaProduk" class="form-label">Harga Produk</label>
              <input type="number" class="form-control" id="hargaProduk" placeholder="Masukkan harga produk">
            </div>
            <div class="mb-3">
              <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
              <textarea class="form-control" id="deskripsiProduk" rows="3" placeholder="Masukkan deskripsi produk"></textarea>
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

  <!-- JavaScript untuk Pencarian dan Toggle Deskripsi -->
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

    // Function to toggle description visibility
    function toggleDescription(productId) {
      var fullDesc = document.getElementById("deskripsiFull" + productId);
      var shortDesc = document.getElementById("deskripsiProduk" + productId);
      var btn = document.getElementById("btnShowMore" + productId);

      if (fullDesc.classList.contains("d-none")) {
        fullDesc.classList.remove("d-none");
        btn.textContent = "Tampilkan Sedikit";
      } else {
        fullDesc.classList.add("d-none");
        btn.textContent = "Tampilkan Selengkapnya";
      }
    }
  </script>

</body>

</html>
