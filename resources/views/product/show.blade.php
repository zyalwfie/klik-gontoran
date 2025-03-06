@extends("layouts.app")

@section("title", $product->title)

@section("content")
	<section class="py-36">
		<div class="mx-auto max-w-screen-xl items-center gap-16 lg:grid lg:grid-cols-2">
			<div class="font-light text-gray-500 sm:text-lg">
				<div class="flex items-center gap-x-2 mb-2">
					<a class="text-primary-gray-text-2" href="{{ route("product.index") }}">
						<svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path>
						</svg>
					</a>
					<p class="text-primary-accent-text font-lora">{{ $product->owner->name }}</p>
				</div>
				<h2 class="mb-4 text-4xl font-extrabold tracking-tight text-primary-accent-text-2 font-montserrat">
					{{ $product->title }}
				</h2>
				<div class="flex flex-col xl:flex-row gap-y-2 justify-between items-start xl:items-center font-lora mb-4">
					<span class="rounded-full text-sm bg-primary-accent-item-2 px-2 text-primary-gray-text">
						{{ $product->category->name }}
					</span>
					<span
						class="flex items-center text-sm py-1 gap-x-1 rounded-full border border-primary-accent-borders px-2 text-primary-gray-text">
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
				<div class="mb-4 text-primary-gray-text">
					{!! $product->content !!}
				</div>
				<div>
					<a
						class="flex items-center justify-center gap-2 rounded bg-primary-accent-item-2 fill-primary-accent-text px-5 py-2.5 text-sm font-medium text-primary-accent-text hover:bg-primary-accent-item focus:outline-none focus:ring-4 focus:ring-primary-gray-borders"
						href="https://api.whatsapp.com/send?phone={{ $product->owner->phone }}" target="_blank">
						<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
							<path clip-rule="evenodd"
								d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"
								fill-rule="evenodd">
							</path>
						</svg>
						<span class="flex items-center transition-all">Beli Jajan</span>
					</a>
				</div>
			</div>
			<div class="mt-8 grid grid-cols-2 gap-4">
				@foreach ($product->image as $item)
					<img alt="{{ $product->title }}"
						class="@if ($loop->last) mt-4 @endif size-52 object-cover rounded-lg"
						src="{{ Storage::url($item) }}">
				@endforeach
				{{-- <img alt="{{ $product->title }}" class="lg:size-52 rounded-lg object-cover" src="{{ $product->image }}">
				<img alt="{{ $product->title }}" class="lg:mt-4 lg:size-52 rounded-lg object-cover" src="{{ $product->image }}"> --}}
			</div>
		</div>
	</section>
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
