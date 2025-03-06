@extends("layouts.app")

@section("title", $title)

@section("content")
	<div class="bg-white py-36">
		<div class="mx-auto max-w-7xl">
			<div class="mx-auto max-w-2xl lg:mx-0">
				<h2
					class="text-pretty bg-gradient-to-r from-primary-accent-solid to-primary-accent-text bg-clip-text text-4xl font-semibold tracking-tight text-primary-accent-text-2 text-transparent sm:text-5xl">
					{{ $h2Title }}
				</h2>
				<p class="mt-2 text-lg/8 text-primary-gray-text">
					{{ $h2Description }}
				</p>
			</div>
			<div class="mx-auto mt-10 border-t border-primary-accent-borders">
				<div class="mt-10">
					<form action="{{ route("product.index") }}" class="max-w-md lg:mx-auto">
						@if (request("category"))
							<input name="category" type="hidden" value="{{ request(" category") }}">
						@endif
						<label class="sr-only mb-2 text-sm font-medium text-primary-accent-text" for="search">Search</label>
						<div class="relative">
							<input
								class="block w-full rounded-lg border border-primary-accent-borders bg-primary-gray-bg p-4 ps-10 text-sm text-primary-accent-text placeholder:text-primary-gray-item-3 focus-visible:outline-2 focus-visible:outline-primary-accent-borders"
								id="search" name="search" placeholder="Cari jajanan" required type="search" />
							<div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
								<svg aria-hidden="true" class="h-4 w-4 text-primary-gray-item-3" fill="none" viewBox="0 0 20 20"
									xmlns="http://www.w3.org/2000/svg">
									<path d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" stroke-linecap="round" stroke-linejoin="round"
										stroke-width="2" stroke="currentColor" />
								</svg>
							</div>
							<button
								class="absolute bottom-2.5 end-2.5 rounded-lg bg-primary-accent-item-2 px-4 py-2 text-sm font-medium text-primary-accent-text hover:bg-primary-accent-item focus:outline-none focus:ring-4 focus:ring-primary-accent-borders"
								type="submit">Search</button>
						</div>
					</form>
					{{ $products->links() }}
				</div>
				<div
					class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-primary-accent-borders pt-5 sm:pt-10 lg:mx-0 lg:max-w-none lg:grid-cols-3">
					@forelse ($products as $product)
						<article class="flex max-w-xl flex-col items-start justify-between">
							<div class="overflow-hidden rounded shadow shadow-primary-accent-item-3">
								<img src="{{ Storage::url($product->image[0]) }}" alt="Thumbnail" class="rounded">
								{{-- <img alt="Thumbnail" class="rounded" src="{{ $product->image }}"> --}}
							</div>
							<div class="mt-8 flex items-center text-xs">
								<a
									class="text-primary-accent-textr relative z-10 rounded-full bg-primary-accent-item-2 px-3 py-1.5 font-medium hover:bg-primary-accent-item"
									href="?category={{ $product->category->slug }}">{{ $product->category->name }}</a>
							</div>
							<div class="mt-4 text-xs">
								<span
									class="flex items-center gap-x-1 rounded-full border border-primary-accent-borders p-1 text-primary-gray-text">
									<svg class="h-5 w-5" class="size-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" stroke-linecap="round"
											stroke-linejoin="round" />
									</svg>
									<span class="line-clamp-1">
										{{ $product->address }}
									</span>
								</span>
							</div>
							<div class="group relative">
								<h3
									class="mt-5 line-clamp-1 text-lg/6 font-semibold text-primary-gray-text-2 group-hover:text-primary-gray-text">
									<a href="{{ route("product.show", $product->slug) }}">
										<span class="absolute inset-0"></span>
										{{ $product->title }}
									</a>
								</h3>
								<div class="mt-3 line-clamp-2 text-sm/6 text-primary-gray-text">{!! $product->content !!}
								</div>
							</div>
							<div class="relative mt-8 flex items-center gap-x-4">
								<img alt="" class="size-10 rounded-full bg-gray-50" src="https://avatar.iran.liara.run/public">
								<div class="text-sm/6">
									<p class="font-semibold text-gray-900">
										<span class="absolute inset-0"></span>
										{{ $product->owner->name }}
									</p>
									<p class="text-gray-600">Owner</p>
								</div>
							</div>
						</article>
					@empty
						@if (request()->has("search"))
							<section class="col-span-full">
								<div class="mx-auto px-4 py-8 lg:px-6 lg:py-16">
									<div class="text-center">
										<p class="mb-4 font-montserrat text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
											Tidak ada hasil untuk "{{ request("search") }}".
										</p>
										<p class="mb-4 text-lg font-light text-primary-gray-text">
											Maaf, kami tidak dapat menemukan produk yang Anda cari. Silakan coba kata kunci
											lain atau lihat daftar UMKM kami.
										</p>
										<a
											class="my-4 inline-flex rounded-lg bg-primary-accent-item-2 px-5 py-2.5 text-center text-sm font-medium text-primary-accent-text hover:bg-primary-accent-item focus:outline-none focus:ring-4 focus:ring-primary-gray-borders"
											href="{{ route(" product.index") }}">
											Lihat daftar UMKM
										</a>
									</div>
								</div>
							</section>
						@else
							<section class="col-span-full">
								<div class="mx-auto px-4 py-8 lg:px-6 lg:py-16">
									<div class="text-center">
										<p class="mb-4 font-montserrat text-3xl font-bold tracking-tight text-gray-900 md:text-4xl">
											Maaf UMKM belum tersedia.
										</p>
										<p class="mb-4 text-lg font-light text-primary-gray-text">
											Untuk sementara ini, kami belum memiliki UMKM yang tersedia. Anda bisa melihat
											profile desa terlebih dahulu.
										</p>
										<a
											class="my-4 inline-flex rounded-lg bg-primary-accent-item-2 px-5 py-2.5 text-center text-sm font-medium text-primary-accent-text hover:bg-primary-accent-item focus:outline-none focus:ring-4 focus:ring-primary-gray-borders"
											href="https://gontoran.digitaldesa.id" target="_blank">
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

@push("scripts")
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
