@extends('layouts.app')

@section('title', 'Klik Gontoran')

@section('content')
    <section class="my-36 flex flex-col lg:flex-row gap-y-8 gap-x-16 items-center justify-between">
        <div class="flex flex-col gap-y-4 max-w-sm">
            <h1 class="text-4xl font-bold font-montserrat">Selamat datang di Klik Gontoran</h1>
            <p>Kami menyediakan berbagai informasi dan layanan terbaik untuk mendukung usaha dan komunitas lokal.</p>
            <div class="flex gap-x-4">
                <a href="{{ route('product.index') }}"
                    class="flex-grow text-center rounded border-primary-accent-borders bg-primary-accent-item-2 text-primary-accent-text px-4 py-2 transition hover:bg-primary-accent-item focus-visible:outline-primary-accent-borders focus-visible:outline-2">
                    Detail UMKM
                </a>
                <a href="/admin"
                    class="flex-grow text-center rounded border-primary-accent-borders border text-primary-accent-text px-4 py-2 transition hover:bg-primary-accent-item hover:border-transparent focus-visible:outline-primary-accent-borders focus-visible:outline-2">
                    Halaman Admin
                </a>
            </div>
        </div>

        <div class="border-2 shadow-2xl shadow-primary-accent-item-3 border-primary-accent-borders p-1 rounded-full">
            <img src="{{ asset('img/pic1.jpeg') }}" alt="Thumbnail" class="size-64 object-cover rounded-full">
        </div>
    </section>

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-36">
        <div class="border-2 shadow-2xl shadow-primary-accent-item-3 border-primary-accent-borders p-1 rounded">
            <img src="{{ asset('img/pic1.jpeg') }}" alt="Thumbnail" class="object-cover rounded">
        </div>

        <div class="flex flex-col gap-y-2">
            <h3 class="bg-white font-montserrat text-3xl font-bold">
                Cerita Kami
            </h3>
            <p class="font-light">
                Di Klik Gontoran, kami percaya bahwa setiap usaha lokal memiliki cerita dan potensi besar untuk berkembang.
                Berangkat dari semangat gotong royong dan inovasi, kami hadir untuk memberikan dukungan bagi UMKM desa agar
                dapat dikenal lebih luas, baik secara lokal maupun nasional.
            </p>
        </div>
    </section>

    <section class="flex flex-col gap-y-4">
        <h3 class="bg-white font-montserrat text-3xl font-bold">Galeri</h3>
        <div class="slider" reverse="true"
            style="
        --height: 200px;
        --width: 200px;
        --quantity: 6;
        ">
            <div class="list">
                <div class="item" style="--position: 1"><img src="{{ asset('img/pic1.jpeg') }}" alt="Thumbnail"
                        class="rounded"></div>
                <div class="item" style="--position: 2"><img src="{{ asset('img/pic3.jpeg') }}" alt="Thumbnail"
                        class="rounded"></div>
                <div class="item" style="--position: 3"><img src="{{ asset('img/pic2.jpeg') }}" alt="Thumbnail"
                        class="rounded"></div>
                <div class="item" style="--position: 4"><img src="{{ asset('img/pic3.jpeg') }}" alt="Thumbnail"
                        class="rounded"></div>
                <div class="item" style="--position: 5"><img src="{{ asset('img/pic2.jpeg') }}" alt="Thumbnail"
                        class="rounded"></div>
                <div class="item" style="--position: 6"><img src="{{ asset('img/pic1.jpeg') }}" alt="Thumbnail"
                        class="rounded"></div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .slider {
            width: 100%;
            height: var(--height);
            overflow: hidden;
            mask-image: linear-gradient(to right,
                    transparent,
                    #000 10% 90%,
                    transparent);
        }

        .slider .list {
            display: flex;
            width: 100%;
            min-width: calc(var(--width) * var(--quantity));
            position: relative;
        }

        .slider .list .item {
            width: var(--width);
            height: var(--height);
            position: absolute;
            left: 100%;
            animation: autoRun 10s linear infinite;
            transition: filter 0.5s;
            animation-delay: calc((10s / var(--quantity)) * (var(--position) - 1) - 10s) !important;
        }

        .slider .list .item img {
            width: 100%;
        }

        .slider:hover .item {
            animation-play-state: paused !important;
            filter: grayscale(1);
        }

        .slider .item:hover {
            filter: grayscale(0);
        }

        .slider[reverse="true"] .item {
            animation: reversePlay 10s linear infinite;
        }

        @keyframes reversePlay {
            from {
                left: calc(var(--width) * -1);
            }

            to {
                left: 100%;
            }
        }

        @keyframes autoRun {
            from {
                left: 100%;
            }

            to {
                left: calc(var(--width) * -1);
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        const menuButton = document.querySelector('#menu-button');
        const closeMenuButton = document.querySelector('#close-menu-button');
        const responsiveNavbar = document.querySelector('#responsive-navbar');

        menuButton.addEventListener('click', () => {
            responsiveNavbar.classList.remove('-translate-y-[200%]', 'opacity-0');
            menuButton.classList.add('hidden');
            closeMenuButton.classList.remove('hidden');
        });

        closeMenuButton.addEventListener('click', closeNavbar);

        document.addEventListener('click', (event) => {
            if (!responsiveNavbar.contains(event.target) && !menuButton.contains(event.target)) {
                closeNavbar();
            }
        });

        function closeNavbar() {
            responsiveNavbar.classList.add('-translate-y-[200%]', 'opacity-0');
            menuButton.classList.remove('hidden');
            closeMenuButton.classList.add('hidden');
        }
    </script>
@endpush
