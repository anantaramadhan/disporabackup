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

              <!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Masuk ke Akun Anda</h5>
                    <p class="text-center small">Masukkan username & password Anda untuk masuk</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nama</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" placeholder="Masukkan username Anda" required>
                        <div class="invalid-feedback">Harap masukkan nama Anda.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Kata Sandi</label>
                      <div class="input-group has-validation">
                        <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Masukkan password Anda" required>
                        <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                          <i class="bi bi-eye-slash" id="toggleIcon"></i>
                        </button>
                      </div>
                      <div class="invalid-feedback">masukkan kata sandi Anda!</div>
                    </div>

                    <div class="col-12">
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Masuk</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Belum punya akun? <a href="{{ route('daftar') }}">Buat akun</a></p>
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

  <script>
    // Script untuk toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function (e) {
      const passwordField = document.getElementById('yourPassword');
      const toggleIcon = document.getElementById('toggleIcon');

      // Toggle antara password dan text
      if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove('bi-eye-slash');
        toggleIcon.classList.add('bi-eye');
      } else {
        passwordField.type = "password";
        toggleIcon.classList.remove('bi-eye');
        toggleIcon.classList.add('bi-eye-slash');
      }
    });
  </script>

</body>

</html>
