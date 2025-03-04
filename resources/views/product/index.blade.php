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
            <div class="mx-auto mt-10 border-t border-primary-accent-borders">
                <div class="mt-10">
                    <form class="max-w-md lg:mx-auto" action="{{ route('product.index') }}">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        <label for="search"
                            class="mb-2 text-sm font-medium text-primary-accent-text sr-only">Search</label>
                        <div class="relative">
                            <input type="search" id="search" name="search"
                                class="block w-full p-4 ps-10 text-sm text-primary-accent-text border border-primary-accent-borders rounded-lg bg-primary-gray-bg placeholder:text-primary-gray-item-3 focus-visible:outline-primary-accent-borders focus-visible:outline-2"
                                placeholder="Cari jajanan" required />
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-primary-gray-item-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <button type="submit"
                                class="text-primary-accent-text absolute end-2.5 bottom-2.5 bg-primary-accent-item-2 hover:bg-primary-accent-item focus:ring-4 focus:outline-none focus:ring-primary-accent-borders font-medium rounded-lg text-sm px-4 py-2">Search</button>
                        </div>
                    </form>
                    {{ $products->links() }}
                </div>
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-primary-accent-borders pt-5 sm:pt-10 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    @forelse ($products as $product)
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="overflow-hidden rounded shadow shadow-primary-accent-item-3">
                                <img src="{{ Storage::url($product->image) }}" alt="Thumbnail" class="rounded">
                            </div>
                            <div class="mt-8 flex items-center gap-x-4 text-xs">
                                <a href="?category={{ $product->category->slug }}"
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
                                <div class="mt-3 line-clamp-2 text-sm/6 text-primary-gray-text">{!! $product->content !!}</div>
                            </div>
                            <div class="relative mt-8 flex items-center gap-x-4">
                                <img src="https://avatar.iran.liara.run/public" alt=""
                                    class="size-10 rounded-full bg-gray-50">
                                <div class="text-sm/6">
                                    <p class="font-semibold text-gray-900">
                                        <span class="absolute inset-0"></span>
                                        {{ $product->owner }}
                                    </p>
                                    <p class="text-gray-600">Owner</p>
                                </div>
                            </div>
                        </article>
                    @empty
                        @if (request()->has('search'))
                            <section class="col-span-full">
                                <div class="py-8 px-4 mx-auto lg:py-16 lg:px-6">
                                    <div class="text-center">
                                        <p
                                            class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl font-montserrat">
                                            Tidak ada hasil untuk "{{ request('search') }}".
                                        </p>
                                        <p class="mb-4 text-lg font-light text-primary-gray-text">
                                            Maaf, kami tidak dapat menemukan produk yang Anda cari. Silakan coba kata kunci
                                            lain atau lihat daftar UMKM kami.
                                        </p>
                                        <a href="{{ route('product.index') }}"
                                            class="inline-flex text-primary-accent-text bg-primary-accent-item-2 hover:bg-primary-accent-item focus:ring-4 focus:outline-none focus:ring-primary-gray-borders font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4">
                                            Lihat daftar UMKM
                                        </a>
                                    </div>
                                </div>
                            </section>
                        @else
                            <section class="col-span-full">
                                <div class="py-8 px-4 mx-auto lg:py-16 lg:px-6">
                                    <div class="text-center">
                                        <p
                                            class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl font-montserrat">
                                            Maaf UMKM belum tersedia.
                                        </p>
                                        <p class="mb-4 text-lg font-light text-primary-gray-text">
                                            Untuk sementara ini, kami belum memiliki UMKM yang tersedia. Anda bisa melihat
                                            profile desa terlebih dahulu.
                                        </p>
                                        <a href="https://gontoran.digitaldesa.id" target="_blank"
                                            class="inline-flex text-primary-accent-text bg-primary-accent-item-2 hover:bg-primary-accent-item focus:ring-4 focus:outline-none focus:ring-primary-gray-borders font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4">
                                            Profile Desa
                                        </a>
                                    </div>
                                </div>
                            </section>
                        @endif
                    @endforelse
                </div>
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
