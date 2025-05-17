<!DOCTYPE html>
<html lang="en">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

  @include('pengusaha.layouts.header')
  @include('pengusaha.layouts.sidebar')

  <main id="main" class="main" style="margin-bottom: 35px;">
    <div class="pagetitle">
      <h1>Produk</h1>
      <style>
        /* CSS untuk menggeser tombol "Tampilkan Selengkapnya" ke kiri */
        .card-body .btn-link {
          margin-left: -12px;  /* Geser tombol sedikit ke kiri */
          margin-top: -30px;
        }

        /* CSS tambahan untuk memindahkan tombol ke sebelah kiri */
        .card-body .btn-link {
          text-align: left;
          padding-left: 0; /* Menghilangkan padding default */
        }
      </style>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body pt-4">

              <!-- Kolom Pencarian Terpisah -->
              <div class="d-flex justify-content-between mb-3">
                <input type="text" id="searchInput" class="form-control w-50" placeholder="Cari Produk..." onkeyup="searchTable()">
                
                <!-- Button Filter dan Button Ajukan -->
                <div class="d-flex">
                  <button class="btn btn-sm btn-outline-secondary me-2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-funnel"></i> Filter
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Filter 1</a>
                    <a class="dropdown-item" href="#">Filter 2</a>
                  </div>

                  <!-- Button Ajukan Event dengan Warna Hijau yang Mengarah ke Halaman Tambah Event -->
                  <a href="{{ route('produk.tambah') }}" class="btn btn-sm btn-success d-flex align-items-center justify-content-center">
                    <i class="bi bi-plus-circle me-2"></i> Tambah Produk
                  </a>
                </div>
              </div>

              <!-- Grid Produk: 6 produk per baris -->
              <div class="row row-cols-1 row-cols-md-6 g-4">
                <!-- Produk A -->
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

                <!-- Produk B -->
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

                <!-- Produk C -->
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

                <!-- Produk D -->
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Produk 4">
                    <div class="card-body">
                      <h5 class="card-title">Produk D</h5>
                      <p class="card-text" id="deskripsiProduk4">Deskripsi singkat tentang Produk D. Produk ini sangat cocok untuk aktivitas luar ruangan.</p>
                      <p id="deskripsiFull4" class="card-text d-none">Deskripsi lengkap tentang Produk D. Produk ini sangat cocok untuk aktivitas luar ruangan, seperti hiking, berkemah, atau aktivitas petualangan lainnya. Dilengkapi dengan teknologi terbaru untuk kenyamanan maksimal dan keamanan dalam setiap perjalanan Anda.</p>
                      <button class="btn btn-link" id="btnShowMore4" onclick="toggleDescription(4)">Tampilkan Selengkapnya</button>
                    </div>
                    <div class="card-footer text-muted">
                      <span class="price">Rp 250.000</span>
                      <!-- Tombol Edit dan Hapus -->
                      <div class="d-flex justify-content-end mt-2">
                        <a href="{{ route('produk.edit', 4) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Produk E -->
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Produk 5">
                    <div class="card-body">
                      <h5 class="card-title">Produk E</h5>
                      <p class="card-text" id="deskripsiProduk5">Deskripsi singkat tentang Produk E. Produk ini sangat cocok untuk keperluan di kantor.</p>
                      <p id="deskripsiFull5" class="card-text d-none">Deskripsi lengkap tentang Produk E. Produk ini sangat cocok untuk digunakan di kantor, dengan desain yang elegan dan fungsional. Membantu Anda untuk bekerja lebih produktif dan nyaman.</p>
                      <button class="btn btn-link" id="btnShowMore5" onclick="toggleDescription(5)">Tampilkan Selengkapnya</button>
                    </div>
                    <div class="card-footer text-muted">
                      <span class="price">Rp 300.000</span>
                      <!-- Tombol Edit dan Hapus -->
                      <div class="d-flex justify-content-end mt-2">
                        <a href="{{ route('produk.edit', 5) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Produk F -->
                <div class="col">
                  <div class="card h-100">
                    <img src="{{ asset('assets/img/logoekraf.png') }}" class="card-img-top" alt="Produk 6">
                    <div class="card-body">
                      <h5 class="card-title">Produk F</h5>
                      <p class="card-text" id="deskripsiProduk6">Deskripsi singkat tentang Produk F. Produk ini ideal untuk keperluan perjalanan.</p>
                      <p id="deskripsiFull6" class="card-text d-none">Deskripsi lengkap tentang Produk F. Produk ini ideal untuk keperluan perjalanan jauh, seperti tas ransel untuk hiking atau bepergian. Kuat dan tahan lama dengan banyak ruang penyimpanan.</p>
                      <button class="btn btn-link" id="btnShowMore6" onclick="toggleDescription(6)">Tampilkan Selengkapnya</button>
                    </div>
                    <div class="card-footer text-muted">
                      <span class="price">Rp 350.000</span>
                      <!-- Tombol Edit dan Hapus -->
                      <div class="d-flex justify-content-end mt-2">
                        <a href="{{ route('produk.edit', 6) }}" class="btn btn-sm btn-warning me-2">Edit</a>
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

  <!-- JavaScript untuk Pencarian dan Toggle Deskripsi -->
  <script>
    // Fungsi untuk mencari produk berdasarkan input
    function searchTable() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toLowerCase();
      table = document.getElementById("eventTable");
      tr = table.getElementsByTagName("tr");

      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        var matchFound = false;

        // Loop melalui setiap sel di baris
        for (var j = 0; j < td.length; j++) {
          if (td[j]) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toLowerCase().indexOf(filter) > -1) {
              matchFound = true;
              break;
            }
          }
        }

        // Menampilkan baris jika ada kecocokan, jika tidak sembunyikan
        if (matchFound) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }

    // Fungsi untuk menampilkan atau menyembunyikan deskripsi produk
    function toggleDescription(productId) {
      // Menyembunyikan deskripsi lengkap produk lain
      var allDescriptions = document.querySelectorAll('.card-text.d-none');
      allDescriptions.forEach(function(desc) {
        desc.classList.add('d-none');
      });

      // Menampilkan deskripsi lengkap produk yang diklik
      var fullDesc = document.getElementById("deskripsiFull" + productId);
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
