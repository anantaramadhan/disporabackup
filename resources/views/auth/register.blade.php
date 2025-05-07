<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ekraf.IN / Daftar</title>

  @include('admin.layouts.scripts')
  @include('admin.layouts.head')

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun Baru</h5>
                    <p class="text-center small">Masukkan data Anda untuk mendaftar</p>
                  </div>
                  <form class="row g-3 needs-validation" action="#" method="POST" novalidate>
                    <div class="col-12">
                      <label for="name" class="form-label">Nama Lengkap</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                      <div class="invalid-feedback">Harap masukkan nama lengkap Anda.</div>
                    </div>

                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email" required>
                      <div class="invalid-feedback">Harap masukkan email yang valid.</div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Kata Sandi</label>
                      <div class="input-group">
                        <input type="password" name="password" class="form-control" id="password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                          <i class="bi bi-eye"></i>
                        </button>
                        <div class="invalid-feedback">Harap masukkan kata sandi.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="confirmPassword" class="form-label">Konfirmasi Kata Sandi</label>
                      <div class="input-group">
                        <input type="password" name="password_confirmation" class="form-control" id="confirmPassword" required>
                        <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                          <i class="bi bi-eye"></i>
                        </button>
                        <div class="invalid-feedback">Harap konfirmasi kata sandi Anda.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Daftar</button>
                    </div>

                    <div class="col-12 text-start">
                      <p class="small mb-0">Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a>.</p>
                    </div>
                  </form>
                </div>
              </div>

              <div class="credits">
                Dirancang oleh <a href="https://bootstrapmade.com/">Ekraf.IN Teams</a>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <script>
    // Toggle untuk Password dan Konfirmasi Password
    document.addEventListener('DOMContentLoaded', function () {
      const toggle = (inputId, buttonId) => {
        const input = document.getElementById(inputId);
        const button = document.getElementById(buttonId);
        const icon = button.querySelector('i');

        button.addEventListener('click', function () {
          const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
          input.setAttribute('type', type);
          icon.classList.toggle('bi-eye');
          icon.classList.toggle('bi-eye-slash');
        });
      };

      toggle('password', 'togglePassword');
      toggle('confirmPassword', 'toggleConfirmPassword');
    });
  </script>
</body>

</html>
