@extends('layouts.app')

@section('title', $product->title)

@section('content')
    <section class="py-36">
        <div class="gap-16 items-center mx-auto max-w-screen-xl lg:grid lg:grid-cols-2">
            <div class="font-light text-gray-500 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-accent-text-2">
                    {{ $product->title }}
                </h2>
                <p class="mb-4 text-primary-gray-text">
                    {{ $product->content }}
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg"
                    src="{{ $product->image }}"
                    alt="{{ $product->title }}">
                <img class="mt-4 w-full lg:mt-10 rounded-lg"
                    src="{{ $product->image }}"
                    alt="{{ $product->title }}">
            </div>
        </div>
    </section>
@endsection

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
