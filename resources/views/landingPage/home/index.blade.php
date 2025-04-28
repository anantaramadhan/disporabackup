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

    {{-- section ajakan --}}
    @include('landingPage.home.components.invit')

    {{-- section penjelasan singkat tentang webssite --}}
    @include('landingPage.home.components.aboutWeb')

    {{-- section Nganjuk Creative Hub --}}
    @include('landingPage.home.components.nganjukCreativeHub')

    {{-- section creative center --}}
    @include('landingPage.home.components.creativeCenter')


    {{-- Section Event dan Artikel --}}
    @include('landingPage.home.components.infromation')

    @include('landingPage.layouts.footer')

    <script src="{{ asset('assets/js/animate.js') }}"></script>

</body>

</html>
