<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Daftar Akun Baru</h5>
                    <p class="text-center small">Masukkan data Anda untuk membuat akun</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama Lengkap</label>
                      <input type="text" name="name" class="form-control" id="yourName" placeholder="Masukkan nama lengkap" required>
                      <div class="invalid-feedback">Harap masukkan nama lengkap Anda.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPhone" class="form-label">Nomor Telepon</label>
                      <input type="text" name="phone" class="form-control" id="yourPhone" placeholder="Masukkan nomor telepon" required>
                      <div class="invalid-feedback">Harap masukkan nomor telepon Anda.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Masukkan email Anda" required>
                      <div class="invalid-feedback">Harap masukkan email yang valid.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Kata Sandi</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Masukkan kata sandi" required>
                      <div class="invalid-feedback">Harap masukkan kata sandi Anda!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Daftar</button>
                    </div>

                    <div class="col-12">
                      <p class="small mb-0">Sudah punya akun? <a href="{{ route('masuk') }}">Masuk ke akun</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

</body>

</html>
