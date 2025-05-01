<!DOCTYPE html>
<html lang="en">


@include('components.head')

<style>
    body {
        padding-top: 73px;
        background-color: white;
    }
</style>


<body>

    @include('landingPage.layouts.header')

    {{-- section penjelasan nganjuk.ekraf --}}
    <section class="container-xxl py-5 d-flex flex-column flex-md-row">

        <div class="input-group mb-2 mb-md-0 d-flex flex-row rounded-pill overflow-hidden py-1 px-4" style="border: 1px solid #ced4da;">
            <span class="input-group-text bg-white border-0 ps-3 w-auto">
                <svg class="w-100 h-auto text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                </svg>
            </span>
            <input type="text" class="form-control border-0 ps-2 " style="outline: none; "
                placeholder="Cari Artikel Berdasarkan Judul">
        </div>
        <div class="dropdown ms-0 ms-md-3">
            <button class="btn btn-primary w-100 py-2 px-5 rounded-pill dropdown-toggle" type="button" id="dropdownTanggal"
                data-bs-toggle="dropdown" aria-expanded="false">
                Tanggal
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownTanggal">
                <li><a class="dropdown-item" href="#">Terbaru</a></li>
                <li><a class="dropdown-item" href="#">Terlama</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Rentang Tanggal...</a></li>
            </ul>
        </div>
    </section>

    {{-- section event --}}
    <section class="container-xxl gap-4 d-flex flex-column-reverse flex-lg-row">
        <?php

        //data card atas
        $data = [
            [
                'gambar' => 'assets/svg/arsitektur.svg',
                'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
                'sumber' => 'Detik.com',
                'tanggal' => '1 Mei 2025',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
            ],
            [
                'gambar' => 'assets/svg/arsitektur.svg',
                'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
                'sumber' => 'Detik.com',
                'tanggal' => '1 Mei 2025',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
            ],
            [
                'gambar' => 'assets/svg/arsitektur.svg',
                'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
                'sumber' => 'Detik.com',
                'tanggal' => '1 Mei 2025',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
            ],
            [
                'gambar' => 'assets/svg/arsitektur.svg',
                'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
                'sumber' => 'Detik.com',
                'tanggal' => '1 Mei 2025',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
            ],
            [
                'gambar' => 'assets/svg/arsitektur.svg',
                'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
                'sumber' => 'Detik.com',
                'tanggal' => '1 Mei 2025',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
            ],
            [
                'gambar' => 'assets/svg/arsitektur.svg',
                'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
                'sumber' => 'Detik.com',
                'tanggal' => '1 Mei 2025',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
            ],
            [
                'gambar' => 'assets/svg/arsitektur.svg',
                'title' => 'Animasi Jumbo tembus 1 juta penayangan per 17 April 2025',
                'sumber' => 'Detik.com',
                'tanggal' => '1 Mei 2025',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum eratLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce magna orci, porta et purus molestie, tempus eleifend eros. Pellentesque elementum felis at dolor dictum pretium. Phasellus ac interdum erat',
            ],
        ];

        // fungsi sort kata
        function potong_kata($teks, $jumlahKata = 30)
        {
            $kataArray = explode(' ', $teks); // Pecah teks jadi array kata
            if (count($kataArray) > $jumlahKata) {
                $kataPotong = array_slice($kataArray, 0, $jumlahKata);
                return implode(' ', $kataPotong) . '...';
            } else {
                return $teks;
            }
        }

        function potong_judul($teks, $jumlahKata = 10)
        {
            $kataArray = explode(' ', $teks); // Pecah teks jadi array kata
            if (count($kataArray) > $jumlahKata) {
                $kataPotong = array_slice($kataArray, 0, $jumlahKata);
                return implode(' ', $kataPotong) . '...';
            } else {
                return $teks;
            }
        }
        ?>

        {{-- div content --}}
        <div class="w-auto">
            {{-- event hari ini --}}
            <div class="w-100 h-auto text-black mb-4">
                <h2 class="fw-bold mb-3">Hari Ini</h2>

                <?php foreach ($data as $item): ?>
                <div class="card rounded-4 overflow-hidden d-flex flex-row">
                    <div class="w-25 h-25 d-flex justify-content-center overflow-hidden">
                        <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" style="width: 251px; height: 251px;">
                    </div>

                    <div class="w-75 p-3 d-flex flex-column justify-content-between">
                        <div class="w-100">
                            <h5 class="m-0 fw-bold"><?= potong_judul($item['title']) ?></h5>
                            <p class="m-0 d-none d-md-flex"><?= potong_kata($item['description']) ?></p>
                        </div>

                        <div class="d-flex flex-column ">
                            <p class="m-0 fw-semibold text"><?= $item['sumber'] ?></p>
                            <div class="d-flex flex-row w-100 justify-content-between">
                                <p class="m-0"><?= $item['tanggal'] ?></p>
                                <a href="">Selengkapnya > </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            {{-- event besok --}}
            <div class="w-100 h-auto text-black">
                <h2 class="fw-bold mb-3">Besok</h2>

                <?php foreach ($data as $item): ?>
                <div class="card rounded-4 overflow-hidden d-flex flex-row">
                    <div class="w-25 h-25 d-flex justify-content-center overflow-hidden">
                        <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" style="width: 251px; height: 251px;">
                    </div>

                    <div class="w-75 p-3 d-flex flex-column justify-content-between">
                        <div class="w-100">
                            <h5 class="m-0 fw-bold"><?= potong_judul($item['title']) ?></h5>
                            <p class="m-0 d-none d-md-flex"><?= potong_kata($item['description']) ?></p>
                        </div>

                        <div class="d-flex flex-column ">
                            <p class="m-0 fw-semibold text"><?= $item['sumber'] ?></p>
                            <div class="d-flex flex-row w-100 justify-content-between">
                                <p class="m-0"><?= $item['tanggal'] ?></p>
                                <a href="">Selengkapnya > </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        {{-- content event populer --}}
        <div class="w-100 ">
            <h2 class="fw-bold mb-3">Populer</h2>

            <?php foreach ($data as $item): ?>
            <div class="card w-100 rounded-4 overflow-hidden d-flex flex-column">
                <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="w-100">

                <div class="w-auto p-3 d-flex flex-column justify-content-between">
                    <div class="w-auto mb-4">
                        <h5 class="m-0 fw-bold"><?= potong_judul($item['title']) ?></h5>
                        <p class="m-0"><?= potong_kata($item['description']) ?></p>
                    </div>

                    <div class="w-auto d-flex flex-column ">
                        <p class="m-0 fw-semibold text"><?= $item['sumber'] ?></p>
                        <div class="d-flex flex-row w-100 justify-content-between">
                            <p class="m-0"><?= $item['tanggal'] ?></p>
                            <a href="">Selengkapnya > </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    @include('landingPage.layouts.footer')
</body>

</html>
