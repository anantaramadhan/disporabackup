<section class="d-flex flex-column align-items-center">
    <h1>Informasi Buat Kamu</h1>

    {{-- button navigasi artikel dan event --}}
    <div class="container-xxl gap-4 d-flex flex-row justify-content-center py-4">
        <button id="tombolSatu" class="btn btn-primary w-25 rounded-5">Event</button>
        <Button id="tombolDua" class="btn btn-outline-black w-25 rounded-5">Artikel</Button>
    </div>

    {{-- content event dan artikel --}}
    <div class="container-fluid d-flex flex-column flex-lg-row justify-content-center gap-4 mb-5">
        <div class="card rounded-4 overflow-hidden zoom-card">
            <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="imageInformasi">
            <div class="p-4">
                <h3 class="fw-bold">Judul</h3>
                <p>Deskripsi</p>
                <div class="w-100 d-flex justify-content-between align-items-end">
                    <div class="d-flex flex-column">
                        <p class="m-0 fw-semibold">tanggal</p>
                        <p class="m-0 fw-semibold">Waktu</p>
                    </div>
                    <a href="">Selengkapnya ></a>
                </div>
            </div>
        </div>

        <div class="card rounded-4 overflow-hidden zoom-card">
            <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="imageInformasi">
            <div class="p-4">
                <h3 class="fw-bold">Judul</h3>
                <p>Deskripsi</p>
                <div class="w-100 d-flex justify-content-between align-items-end">
                    <div class="d-flex flex-column">
                        <p class="m-0 fw-semibold">tanggal</p>
                        <p class="m-0 fw-semibold">Waktu</p>
                    </div>
                    <a href="">Selengkapnya ></a>
                </div>
            </div>
        </div>

        <div class="card rounded-4 overflow-hidden zoom-card">
            <img src="{{ asset('assets/img/logoekraf.png') }}" alt="" class="imageInformasi">
            <div class="p-4">
                <h3 class="fw-bold">Judul</h3>
                <p>Deskripsi</p>
                <div class="w-100 d-flex justify-content-between align-items-end">
                    <div class="d-flex flex-column">
                        <p class="m-0 fw-semibold">tanggal</p>
                        <p class="m-0 fw-semibold">Waktu</p>
                    </div>
                    <a href="">Selengkapnya ></a>
                </div>
            </div>
        </div>
    </div>
</section>