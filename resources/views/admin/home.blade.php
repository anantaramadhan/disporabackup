<!DOCTYPE html>
<html lang="en">

@include('components.head')
@include('admin.layouts.scripts')

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.sidebar')



<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
  </div><!-- End Page Title -->

 

  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <!-- START: Venue Cards in One Row -->
<div class="row">
  <!-- Data Pengguna -->
  <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
    <div class="card info-card sales-card">
      <div class="card-body">
        <h5 class="card-title">Data Pengguna</h5>
        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-people"></i>
          </div>
          <div class="ps-3">
            <h6>145</h6>
            <span class="text-success small pt-1 fw-bold">12%</span>
            <span class="text-muted small pt-2 ps-1">increase</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Usaha -->
  <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
    <div class="card info-card revenue-card">
      <div class="card-body">
        <h5 class="card-title">Total Usaha</h5>
        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-shop"></i>
          </div>
          <div class="ps-3">
            <h6>234</h6>
            <span class="text-success small pt-1 fw-bold">8%</span>
            <span class="text-muted small pt-2 ps-1">increase</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Artikel -->
  <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
    <div class="card info-card customers-card">
      <div class="card-body">
        <h5 class="card-title">Artikel </h5>
        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-book"></i>
          </div>
          <div class="ps-3">
            <h6>1244</h6>
            <span class="text-danger small pt-1 fw-bold">12%</span>
            <span class="text-muted small pt-2 ps-1">decrease</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pengajuan Event -->
  <div class="col-xxl-3 col-md-6 col-sm-12 mb-3">
    <div class="card info-card customers-card">
      <div class="card-body">
        <h5 class="card-title">Pengajuan Event</h5>
        <div class="d-flex align-items-center">
          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-calendar-check"></i>
          </div>
          <div class="ps-3">
            <h6>27</h6>
            <span class="text-warning small pt-1 fw-bold">5 Pending</span>
            <span class="text-muted small pt-2 ps-1">this month</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: Venue Cards -->


          <!-- Data User + News dalam 1 baris -->
          <div class="row">
            <!-- Data User -->
            <div class="col-lg-8">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Data User <span>| Today</span></h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor telepon</th>
                        <th scope="col">Usaha</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">0001</a></th>
                        <td>Ananta Ramadhan</td>
                        <td><a href="#" class="text-primary">anantaramadhan@gmail.com</a></td>
                        <td>08449535823</td>
                        <td><span class="badge bg-success">Seni Kriya</span></td>
                      </tr>

                      <tr>
                        <th scope="row"><a href="#">0001</a></th>
                        <td>Ananta Ramadhan</td>
                        <td><a href="#" class="text-primary">anantaramadhan@gmail.com</a></td>
                        <td>08449535823</td>
                        <td><span class="badge bg-success">Seni Kriya</span></td>
                      </tr>

                      <tr>
                        <th scope="row"><a href="#">0001</a></th>
                        <td>Ananta Ramadhan</td>
                        <td><a href="#" class="text-primary">anantaramadhan@gmail.com</a></td>
                        <td>08449535823</td>
                        <td><span class="badge bg-success">Seni Kriya</span></td>
                      </tr>

                      <tr>
                        <th scope="row"><a href="#">0001</a></th>
                        <td>Ananta Ramadhan</td>
                        <td><a href="#" class="text-primary">anantaramadhan@gmail.com</a></td>
                        <td>08449535823</td>
                        <td><span class="badge bg-success">Seni Kriya</span></td>
                      </tr>
                      <!-- Tambah data lainnya jika diperlukan -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!-- News & Updates -->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body pb-0">
                  <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>
                  <div class="news">
                    <div class="post-item clearfix">
                      <img src="{{ asset('assets/img/news-1.jpg') }}" alt="">
                      <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                      <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                    </div>
                    <div class="post-item clearfix">
                      <img src="{{ asset('assets/img/news-2.jpg') }}" alt="">
                      <h4><a href="#">Quidem autem et impedit</a></h4>
                      <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                    </div>
                    <div class="post-item clearfix">
                      <img src="{{ asset('assets/img/news-3.jpg') }}" alt="">
                      <h4><a href="#">Id quia et ut maxime similique</a></h4>
                      <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                    </div>
                    <div class="post-item clearfix">
                      <img src="{{ asset('assets/img/news-3.jpg') }}" alt="">
                      <h4><a href="#">Id quia et ut maxime similique</a></h4>
                      <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                    </div>
                    <div class="post-item clearfix">
                      <img src="{{ asset('assets/img/news-3.jpg') }}" alt="">
                      <h4><a href="#">Id quia et ut maxime similique</a></h4>
                      <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Row -->

        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->

</body>
</html>
