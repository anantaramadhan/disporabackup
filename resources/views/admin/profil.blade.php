<!DOCTYPE html>
<html lang="id">

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profil</h1>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Profile" class="rounded-circle">
              <h2>Eko Pranoto</h2>
              <h3>Admin</h3>
            </div>
          </div>
        </div>

        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Informasi</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
                </li>
              </ul>

              <div class="tab-content pt-2">
                <!-- Profile Overview -->
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Detail Profil</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama</div>
                    <div class="col-lg-9 col-md-8">Eko Pranoto</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nomor Telepon</div>
                    <div class="col-lg-9 col-md-8">(+62) 486-3538 -29071</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">disporangkgmail.com</div>
                  </div>
                </div>

                <!-- Profile Edit -->
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <!-- Profile Edit Form -->
                  <form id="editProfileForm">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
                </div>
              </div><!-- End Bordered Tabs -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- Modal Berhasil Edit Profil -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Berhasil Edit Profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Profil Anda telah berhasil diperbarui.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Gagal Edit Profil -->
  <div class="modal fade" id="failureModal" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="failureModalLabel">Gagal Edit Profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Terjadi kesalahan saat memperbarui profil. Silakan coba lagi.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Script untuk Modal dan Pengeditan -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Menangani form submission untuk edit profil
    document.getElementById("editProfileForm").onsubmit = function (event) {
      event.preventDefault(); // Menghentikan pengiriman form

      // Simulasikan pengeditan profil (gantilah dengan pengiriman data ke server)
      let success = Math.random() > 0.5;  // Simulasi keberhasilan atau kegagalan secara acak

      if (success) {
        // Menampilkan modal Berhasil Edit Profil
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
      } else {
        // Menampilkan modal Gagal Edit Profil
        var failureModal = new bootstrap.Modal(document.getElementById('failureModal'));
        failureModal.show();
      }
    };
  </script>

</body>
</html>
