@extends('layouts.app')

@section('title', $product->title)

@section('content')
    <section class="py-36">
        <div class="gap-16 items-center mx-auto max-w-screen-xl lg:grid lg:grid-cols-2">
            <div class="font-light text-gray-500 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-primary-accent-text-2">
                    {{ $product->title }}
                </h2>
                <div class="mb-4 text-primary-gray-text">
                    {!! $product->content !!}
                </div>
                <div>
                    <a href="https://api.whatsapp.com/send?phone=6282147321636" target="_blank"
                        class="flex justify-center items-center gap-2 text-sm font-medium text-primary-accent-text fill-primary-accent-text bg-primary-accent-item-2 hover:bg-primary-accent-item focus:ring-4 focus:outline-none focus:ring-primary-gray-borders rounded px-5 py-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263">
                            </path>
                        </svg>
                        <span class="transition-all flex items-center">Beli Jajan</span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                @foreach ($product->image as $item)
                    <img class="@if ($loop->last) mt-4 @endif size-52 object-cover rounded-lg"
                        src="{{ Storage::url($item) }}" alt="{{ $product->title }}">
                @endforeach
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
