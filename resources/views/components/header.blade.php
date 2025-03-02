<header
    class="py-2 px-4 md:px-16 lg:px-32 xl:px-64 flex items-center fixed inset-x-0 top-0 backdrop-blur bg-primary-accent-bg/70 shadow-lg shadow-primary-gray-borders z-10">
    <div class="flex items-center">
        <img src="{{ asset('img/logo.png') }}" alt="Klik Gontoran" class="size-16">
        <a href="{{ route('home') }}"
            class="font-montserrat font-bold text-transparent bg-gradient-to-r from-primary-accent-solid to-primary-accent-text bg-clip-text text-2xl focus-visible:outline-primary-accent-borders focus-visible:outline-2">
            Klik Gontoran
        </a>
    </div>

    <div class="hidden lg:flex items-center justify-stretch flex-grow">
        <nav class="flex flex-grow justify-center items-center gap-x-4">
            <x-nav-link href="{{ route('home') }}"
                class="hover:bg-primary-accent-bg transition border hover:border-primary-accent-borders px-4 py-1 rounded capitalize {{ request()->routeIs('home') ? 'bg-primary-accent-bg border-primary-accent-borders' : 'border-transparent' }} focus-visible:outline-primary-accent-borders focus-visible:outline-2">
                Beranda
            </x-nav-link>
            <x-nav-link href="{{ route('product.index') }}"
                class="hover:bg-primary-accent-bg transition border hover:border-primary-accent-borders px-4 py-1 rounded capitalize {{ request()->routeIs('product.*') ? 'bg-primary-accent-bg border-primary-accent-borders' : 'border-transparent' }} focus-visible:outline-primary-accent-borders focus-visible:outline-2">
                Daftar UMKM
            </x-nav-link>
        </nav>
        <button
            class="bg-primary-accent-item-2 hover:bg-primary-accent-item px-6 py-2 text-primary-accent-text-2 rounded capitalize transition focus-visible:outline-primary-accent-borders focus-visible:outline-2">
            Profil Desa
        </button>
    </div>

    <div id="responsive-navbar"
        class="fixed top-28 inset-x-4 md:inset-x-16 z-40 min-h-max bg-primary-accent-bg p-8 -translate-y-[200%] opacity-0 transition rounded shadow-lg border border-primary-accent-borders shadow-primary-gray-borders">
        <nav class="flex flex-col gap-y-4">
            <x-nav-link href="{{ route('home') }}"
                class="text-primary-accent-text capitalize pb-4 border-b border-primary-accent-borders focus-visible:outline-primary-accent-borders focus-visible:outline-2">
                Beranda
            </x-nav-link>
            <x-nav-link href="{{ route('product.index') }}"
                class="text-primary-accent-text capitalize pb-4 border-b border-primary-accent-borders focus-visible:outline-primary-accent-borders focus-visible:outline-2">
                Daftar UMKM
            </x-nav-link>
        </nav>
    </div>

    <button id="menu-button"
        class="text-primary-accent-text-2 text-xl flex items-center fixed right-4 md:right-16 z-[60] lg:hidden">
        <i class='bx bx-menu'></i>
    </button>
    <button id="close-menu-button"
        class="hidden text-primary-accent-text-2 text-xl items-center fixed right-4 md:right-16 z-[60] lg:hidden">
        <i class='bx bx-x'></i>
    </button>
</header>
