<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

  @include('pengusaha.layouts.header')
  @include('pengusaha.layouts.sidebar')

  <main id="main" class="main" style="margin-buttom: 35px;">
    <div class="pagetitle">
      <h1>Tambah Produk</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Tambah Produk</h5>

              <form action="{{ url('/produk/tambah') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                  <div class="col-12">
                    <label for="namaProduk" class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="namaProduk" placeholder="Masukkan nama produk" required>
                  </div>

                  <div class="col-12 mt-3">
                    <label for="hargaProduk" class="form-label">Harga Produk</label>
                    <input type="number" name="harga_produk" class="form-control" id="hargaProduk" placeholder="Masukkan harga produk" required>
                  </div>

                  <div class="col-12 mt-3">
                    <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
                    <textarea name="deskripsi_produk" class="form-control" id="deskripsiProduk" rows="4" placeholder="Masukkan deskripsi produk" required></textarea>
                  </div>

                  <div class="col-12 mt-3">
                    <label for="fotoProduk" class="form-label">Foto Produk</label>
                    <input type="file" name="foto_produk" class="form-control" id="fotoProduk" accept="image/*" required>
                  </div>

                  <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary w-100">Tambah Produk</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

</body>

</html>
