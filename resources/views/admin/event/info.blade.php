<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Informasi Event</h1>
    </div>

    <section class="section profile">
      <div class="row">

        <!-- Info Pengaju & Detail Event (Satu Card) -->
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">

              <!-- Info Pengaju -->
              <div class="d-flex flex-column align-items-center mb-4">
                <img src="{{ asset('assets/img/logoekraf.png') }}" alt="Profile" class="rounded-circle mb-2" style="width: 100px; height: 100px; margin-top: 20px;">
                <h2>Hermawan</h2>
                <h6 class="text-muted">Pengaju Event</h6>
              </div>

              <!-- Info Detail Event -->
              <h5 class="card-title mb-3">Detail Event</h5>
              <div class="row mb-3">
                <div class="col-lg-4 fw-bold">Nama Event</div>
                <div class="col-lg-8">Hus Creative</div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-4 fw-bold">Tanggal Event</div>
                <div class="col-lg-8">9 Juni 2025</div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-4 fw-bold">Lokasi Event</div>
                <div class="col-lg-8">Balai Budaya Kab. Nganjuk</div>
              </div>
              <div class="row mb-3">
                <div class="col-lg-4 fw-bold">Deskripsi</div>
                <div class="col-lg-8">Event kreatif kolaborasi seni dan budaya yang diadakan oleh komunitas lokal.</div>
              </div>

            </div>
          </div>
        </div>

        <!-- Foto Event -->
        <div class="col-xl-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Foto Event</h5>
              <div class="row g-2">
                <div class="col-6">
                  <img src="{{ asset('assets/img/logoekraf.png') }}" class="img-fluid rounded" alt="Foto 1">
                </div>
                <div class="col-6">
                  <img src="{{ asset('assets/img/logoekraf.png') }}" class="img-fluid rounded" alt="Foto 2">
                </div>
                <div class="col-12 mt-2">
                  <img src="{{ asset('assets/img/logoekraf.png') }}" class="img-fluid rounded" alt="Foto 3">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Lokasi Event (Map) -->
        <div class="col-xl-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lokasi Event</h5>
              <iframe src="https://maps.google.com/maps?q=nganjuk&t=&z=13&ie=UTF8&iwloc=&output=embed" style="width:100%; height:300px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>

</body>

</html>
