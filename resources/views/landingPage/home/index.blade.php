<!DOCTYPE html>
<html lang="en">

@include('components.head')

<style>
    body {
        padding-top: 73px;
    }
</style>


<body class="d-flex flex-column bg-white min-vh-screen justify-content-between">
    @include('landingPage.layouts.header')

    <section class="scroll-section container-xxl mt-5 d-flex flex-column-reverse flex-lg-row align-items-center overflow-hidden" style="padding-top: 8rem; padding-bottom: 8rem;">
        <div class="d-flex flex-column mt-5 mt-lg-0 w-100">
            {{-- judul dan deskripsi section 1 --}}
            <h1 class="fw-bold d-flex flex-column" style="color: #011E34;">TEMUKAN <span
                    style="color: #407AA2;">KEBUTUHAN</span> KREATIFMU</h1>
            <p>Selamat datang di Nganjuk.Ekraf, jendela menuju kekayaan kreativitas Kabupaten Nganjuk! Temukan beragam
                produk unik dan inovatif dari para pelaku ekonomi kreatif lokal, mulai dari kerajinan tangan yang
                memukau hingga kuliner lezat yang menggugah selera. Mari dukung karya anak bangsa dan jadilah bagian
                dari geliat ekonomi kreatif Nganjuk. Jelajahi sekarang dan temukan inspirasi baru!</p>
            <button
                class="btn btn-outline-dark border-2 d-flex flex-row rounded-5 px-5 py-2 align-items-center justify-content-center">
                <p class="m-0  fw-semibold">Cari Kebutuhan Kreatifmu</p>
                <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </button>
        </div>

        <div class="d-flex position-relative w-100">
            <div class="box card text-center mb-0 rounded-4">
                <div class="card-body h-auto pt-3">
                    <p class="fs-5">Data Usaha Ekonomi Kreatif Kab. Nganjuk</p>
                    <h2 class="fw-bold fs-5">2000</h2>
                    <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
            </div>

            <img src="{{ asset('assets/svg/creative1.svg') }}" alt="" class="w-100 h-100">
            <div class="backgorundCircle"></div>
        </div>
    </section>

    @include('landingPage.layouts.footer')

    <script src="{{asset('assets/js/animate.js')}}"></script>

</body>

</html>
