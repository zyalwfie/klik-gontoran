@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="bg-white py-36">
        <div class="mx-auto max-w-7xl">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2
                    class="text-pretty text-primary-accent-text-2 text-4xl font-semibold tracking-tight sm:text-5xl text-transparent bg-gradient-to-r from-primary-accent-solid to-primary-accent-text bg-clip-text">
                    {{ $h2Title }}
                </h2>
                <p class="mt-2 text-lg/8 text-primary-gray-text">
                    {{ $h2Description }}
                </p>
            </div>
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-primary-accent-borders pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($products as $product)
                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="overflow-hidden shadow shadow-primary-accent-item-3">
                            <img src="{{ $product->image }}" alt="Thumbnail" class="rounded">
                        </div>
                        <div class="mt-8 flex items-center gap-x-4 text-xs">
                            <a href="#"
                                class="relative z-10 rounded-full px-3 py-1.5 font-medium bg-primary-accent-item-2 text-primary-accent-textr hover:bg-primary-accent-item">{{ $product->category->name }}</a>
                        </div>
                        <div class="group relative">
                            <h3
                                class="mt-5 text-lg/6 font-semibold text-primary-gray-text-2 group-hover:text-primary-gray-text line-clamp-1">
                                <a href="{{ route('product.show', $product->slug) }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $product->title }}
                                </a>
                            </h3>
                            <p class="mt-3 line-clamp-2 text-sm/6 text-primary-gray-text">{{ $product->content }}</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="https://avatar.iran.liara.run/public" alt=""
                                class="size-10 rounded-full bg-gray-50">
                            <div class="text-sm/6">
                                <p class="font-semibold text-gray-900">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        {{ $product->owner }}
                                    </a>
                                </p>
                                <p class="text-gray-600">Owner</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
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
