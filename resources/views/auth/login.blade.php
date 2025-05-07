<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ekraf.IN / Login</title>

  @include('admin.layouts.scripts')
  @include('admin.layouts.head')

  <script src="https://apis.google.com/js/platform.js" async defer></script>
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

                  <!-- Header -->
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Masuk ke Akun Anda</h5>
                    <p class="text-center small">Masukkan email & kata sandi Anda untuk masuk</p>
                  </div>

                  <!-- Form Login -->
                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Harap masukkan email Anda.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Kata Sandi</label>
                      <div class="input-group">
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                          <i class="bi bi-eye"></i>
                        </button>
                        <div class="invalid-feedback">Harap masukkan kata sandi Anda!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Masuk</button>
                    </div>

                  </form>

                  <!-- Pembatas -->
                  <div class="d-flex align-items-center my-3">
                    <hr class="flex-grow-1">
                    <span class="px-2 text-muted">Masuk Atau Daftar</span>
                    <hr class="flex-grow-1">
                  </div>

                  <!-- Tombol Login Google -->
                  <div class="mb-3">
                    <a href="#" class="btn btn-light d-flex align-items-center justify-content-center border rounded-pill w-100 py-2">
                      <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" width="20" class="me-2" alt="Google">
                      Dengan Google
                    </a>
                  </div>

                </div>
              </div>

              <!-- Footer -->
              <div class="credits">
                Dirancang oleh <a href="https://bootstrapmade.com/">Ekraf.IN Teams</a>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Back to Top -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Script -->
  <script>
    function onSignIn(googleUser) {
      var profile = googleUser.getBasicProfile();
      console.log('ID: ' + profile.getId());
      console.log('Nama: ' + profile.getName());
      console.log('Email: ' + profile.getEmail());
    }

    function signOut() {
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
        console.log('User signed out.');
      });
    }

    // Toggle visibility of password
    document.addEventListener('DOMContentLoaded', function () {
      const passwordInput = document.getElementById('yourPassword');
      const toggleButton = document.getElementById('togglePassword');
      const toggleIcon = toggleButton.querySelector('i');

      toggleButton.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        toggleIcon.classList.toggle('bi-eye');
        toggleIcon.classList.toggle('bi-eye-slash');
      });
    });
  </script>
</body>

</html>
