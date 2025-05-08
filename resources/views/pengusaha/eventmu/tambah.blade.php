<!DOCTYPE html>
<html lang="id">

@include('pengusaha.layouts.head')
@include('pengusaha.layouts.scripts')

<body>

    @include('pengusaha.layouts.header')
    @include('pengusaha.layouts.sidebar')

    <main id="main" class="main" style="margin-bottom: 35px;">
        <div class="pagetitle">
            <h1>Pengajuan Event</h1>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Pengajuan Event</h5>

                            <!-- Form untuk menambah event -->
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <!-- Nama Event -->
                                    <div class="col-12">
                                        <label for="namaEvent" class="form-label">Nama Event</label>
                                        <input type="text" name="nama_event" class="form-control" id="namaEvent"
                                            placeholder="Masukkan nama event" required>
                                    </div>

                                    <!-- Tanggal Event -->
                                    <div class="col-12 mt-3">
                                        <label for="tanggalEvent" class="form-label">Tanggal Event</label>
                                        <input type="date" name="tanggal_event" class="form-control" id="tanggalEvent"
                                            required>
                                    </div>

                                    <!-- Lokasi Event -->
                                    <div class="col-12 mt-3">
                                        <label for="lokasiEvent" class="form-label">Lokasi Event</label>
                                        <input type="text" name="lokasi_event" class="form-control" id="lokasiEvent"
                                            placeholder="Masukkan lokasi event" required readonly>
                                    </div>

                                    <!-- Peta Lokasi Event -->
                                    <div class="col-12 mt-3">
                                        <label for="map" class="form-label">Pilih Lokasi di Peta</label>
                                        <div id="map" style="width: 100%; height: 400px;"></div>
                                        <input type="hidden" name="latitude" id="latitude">
                                        <input type="hidden" name="longitude" id="longitude">
                                    </div>

                                    <!-- Deskripsi Event -->
                                    <div class="col-12 mt-3">
                                        <label for="deskripsiEvent" class="form-label">Deskripsi Event</label>
                                        <textarea name="deskripsi_event" class="form-control" id="deskripsiEvent" rows="4"
                                            placeholder="Masukkan deskripsi event" required></textarea>
                                    </div>

                                    <!-- Foto Event -->
                                    <div class="col-12 mt-3">
                                        <label for="fotoEvent" class="form-label">Foto Event</label>
                                        <input type="file" name="foto_event" class="form-control" id="fotoEvent"
                                            accept="image/*" required>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100">Ajukan Event</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=places" async defer></script>

    <script>
        var map, marker;

        function initMap() {
            // Set initial map center to a default location (e.g., Jakarta)
            var initialLocation = { lat: -6.2088, lng: 106.8456 }; // Latitude and Longitude for Jakarta

            map = new google.maps.Map(document.getElementById("map"), {
                center: initialLocation,
                zoom: 13,
            });

            // Create marker
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
                // Set the location text input to show the location name
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

        // Function to get location name from lat, lng
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
    </script>

</body>

</html>
