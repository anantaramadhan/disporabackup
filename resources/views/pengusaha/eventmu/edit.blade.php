<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

  @include('pengusaha.layouts.header')
  @include('pengusaha.layouts.sidebar')

  <main id="main" class="main" style="margin-bottom: 35px;">
    <div class="pagetitle">
      <h1>Edit Event</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Edit Event</h5>

              <!-- Form untuk edit event -->
              <form action="#" method="POST" enctype="multipart/form-data" id="editEventForm">
                @csrf
                @method('PUT') <!-- Menggunakan method PUT untuk update -->

                <div class="row">
                  <!-- Nama Event -->
                  <div class="col-12">
                    <label for="namaEvent" class="form-label">Nama Event</label>
                    <input type="text" name="nama_event" class="form-control" id="namaEvent" placeholder="Masukkan nama event" value="Festival Seni 2025" required>
                  </div>

                  <!-- Tanggal Event -->
                  <div class="col-12 mt-3">
                    <label for="tanggalEvent" class="form-label">Tanggal Event</label>
                    <input type="date" name="tanggal_event" class="form-control" id="tanggalEvent" value="2025-06-10" required>
                  </div>

                  <!-- Lokasi Event -->
                  <div class="col-12 mt-3">
                    <label for="lokasiEvent" class="form-label">Lokasi Event</label>
                    <input type="text" name="lokasi_event" class="form-control" id="lokasiEvent" placeholder="Masukkan lokasi event" value="Jakarta, Indonesia" required readonly>
                  </div>

                  <!-- Peta Lokasi Event -->
                  <div class="col-12 mt-3">
                    <label for="map" class="form-label">Pilih Lokasi di Peta</label>
                    <div id="map" style="width: 100%; height: 400px;"></div>
                    <input type="hidden" name="latitude" id="latitude" value="-6.2088">
                    <input type="hidden" name="longitude" id="longitude" value="106.8456">
                  </div>

                  <!-- Deskripsi Event -->
                  <div class="col-12 mt-3">
                    <label for="deskripsiEvent" class="form-label">Deskripsi Event</label>
                    <textarea name="deskripsi_event" class="form-control" id="deskripsiEvent" rows="4" placeholder="Masukkan deskripsi event" required>Event seni tahunan yang akan diadakan pada bulan Juni 2025.</textarea>
                  </div>

                  <!-- Foto Event -->
                  <div class="col-12 mt-3">
                    <label for="fotoEvent" class="form-label">Foto Event</label>
                    <input type="file" name="foto_event" class="form-control" id="fotoEvent" accept="image/*">
                    <img src="path_to_image.jpg" alt="Foto Event" width="100" class="mt-2">
                  </div>

                  <!-- Tombol Aksi -->
                  <div class="d-flex justify-content-between">
                    <!-- Tombol Batal dan Simpan -->
                    <div class="ms-auto">
                      <button type="reset" class="btn btn-danger me-2">
                        <i class="bi bi-x-circle"></i> Batal
                      </button>
                      <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-lg"></i> Simpan
                      </button>
                    </div>
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
          Event Anda telah berhasil disimpan.
        </div>
        <div class="modal-footer">
          <a href="{{ route('eventmu.edit') }}" class="btn btn-success">Kembali ke Daftar Event</a>
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
          Terjadi kesalahan saat menyimpan event Anda. Silakan coba lagi.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Google Maps API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=places" async defer></script>

  <script>
    var map, marker;

    function initMap() {
      var initialLocation = { lat: parseFloat(document.getElementById('latitude').value) || -6.2088, lng: parseFloat(document.getElementById('longitude').value) || 106.8456 };

      map = new google.maps.Map(document.getElementById("map"), {
        center: initialLocation,
        zoom: 13,
      });

      marker = new google.maps.Marker({
        position: initialLocation,
        map: map,
        draggable: true,
      });

      // Update latitude and longitude hidden inputs when the marker is dragged
      google.maps.event.addListener(marker, "dragend", function () {
        var position = marker.getPosition();
        document.getElementById("latitude").value = position.lat();
        document.getElementById("longitude").value = position.lng();
        geocodePosition(position);
      });

      // Set the location name when map is clicked
      google.maps.event.addListener(map, "click", function (event) {
        var position = event.latLng;
        marker.setPosition(position);
        document.getElementById("latitude").value = position.lat();
        document.getElementById("longitude").value = position.lng();
        geocodePosition(position);
      });
    }

    function geocodePosition(position) {
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode({ location: position }, function (results, status) {
        if (status === "OK" && results[0]) {
          document.getElementById("lokasiEvent").value = results[0].formatted_address;
        } else {
          alert("Geocode failed: " + status);
        }
      });
    }

    // Handle form submission
    document.getElementById("editEventForm").onsubmit = function (event) {
      event.preventDefault();

      // Simulate success or failure after form submission (Replace with real validation or API request)
      let success = Math.random() > 0.5;  // Randomly simulate success or failure

      if (success) {
        // Show success modal
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
      } else {
        // Show failure modal
        var failureModal = new bootstrap.Modal(document.getElementById('failureModal'));
        failureModal.show();
      }
    };
  </script>

</body>

</html>
