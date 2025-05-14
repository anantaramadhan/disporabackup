<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Terima Usaha</h1>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body pt-4">
              <!-- Kolom Pencarian Terpisah -->
              <div class="d-flex justify-content-between mb-3">
                <input type="text" id="searchInput" class="form-control w-50" placeholder="Cari Event..." onkeyup="searchTable()">
                <!-- Button Filter -->
                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-funnel"></i> Filter
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Filter 1</a>
                  <a class="dropdown-item" href="#">Filter 2</a>
                </div>
              </div>

              <!-- Tabel Data Event -->
              <table class="table table-hover" id="eventTable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Usaha</th>
                    <th>Pengelola</th>
                    <th>Nomor Telp</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="d-flex align-items-center">
                      <span>PT Hus Creative</span>
                    </td>
                    <td>Hermawan</td>
                    <td>67657676676767</td>
                    <td>Ngluyu</td>
                    <td>
                      <a href="{{ route('event.info') }}" class="btn btn-sm btn-primary">Info</a>
                      <button class="btn btn-sm btn-danger">Tolak</button>
                      <button class="btn btn-sm btn-success">Terima</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="d-flex align-items-center">
                     <span>PT Hus Creative</span>
                    </td>
                    <td>Hermawan</td>
                    <td>67657676676767</td>
                    <td>Ngluyu</td>
                    <td>
                      <a href="{{ route('event.info') }}" class="btn btn-sm btn-primary">Info</a>
                      <button class="btn btn-sm btn-danger">Tolak</button>
                      <button class="btn btn-sm btn-success">Terima</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td class="d-flex align-items-center">
                       <span>PT Hus Creative</span>
                    </td>
                    <td>Hermawan</td>
                    <td>67657676676767</td>
                    <td>Ngluyu</td>
                    <td>
                      <a href="{{ route('event.info') }}" class="btn btn-sm btn-primary">Info</a>
                      <button class="btn btn-sm btn-danger">Tolak</button>
                      <button class="btn btn-sm btn-success">Terima</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Modal Event Diterima -->
  <div class="modal fade" id="eventAcceptedModal" tabindex="-1" aria-labelledby="eventAcceptedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eventAcceptedModalLabel">Event Diterima</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Berhasil menerima event.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Event Ditolak -->
  <div class="modal fade" id="eventRejectedModal" tabindex="-1" aria-labelledby="eventRejectedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eventRejectedModalLabel">Event Ditolak</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Event berhasil ditolak.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript untuk Pencarian -->
  <script>
    function searchTable() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toLowerCase();
      table = document.getElementById("eventTable");
      tr = table.getElementsByTagName("tr");

      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        var matchFound = false;

        // Loop through each cell in the row
        for (var j = 0; j < td.length; j++) {
          if (td[j]) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toLowerCase().indexOf(filter) > -1) {
              matchFound = true;
              break;
            }
          }
        }

        // Show the row if any match is found, else hide it
        if (matchFound) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }

    // Menangani klik pada tombol Terima
    const acceptButtons = document.querySelectorAll('.btn-success');
    acceptButtons.forEach(button => {
      button.addEventListener('click', function () {
        var acceptedModal = new bootstrap.Modal(document.getElementById('eventAcceptedModal'));
        acceptedModal.show();
      });
    });

    // Menangani klik pada tombol Tolak
    const rejectButtons = document.querySelectorAll('.btn-danger');
    rejectButtons.forEach(button => {
      button.addEventListener('click', function () {
        var rejectedModal = new bootstrap.Modal(document.getElementById('eventRejectedModal'));
        rejectedModal.show();
      });
    });
  </script>

</body>

</html>
