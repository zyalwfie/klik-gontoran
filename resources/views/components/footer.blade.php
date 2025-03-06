<footer class="bg-primary-accent-bg px-4 py-6 md:px-16 lg:px-32 xl:px-64">
	<div class="mx-auto max-w-screen-xl">
		<div class="md:flex md:justify-between">
			<div class="mb-6 md:mb-0">
				<a class="flex items-center focus-visible:outline-primary-accent-borders focus-visible:outline-2"
					href="{{ route("home") }}">
					<img alt="Klik Gontoran Logo" class="mr-3 h-12" src="{{ asset("img/logo.png") }}" />
					<span
						class="font-montserrat font-bold text-transparent bg-gradient-to-r from-primary-accent-solid to-primary-accent-text bg-clip-text text-2xl">
						Klik Gontoran
					</span>
				</a>
			</div>
			<div class="grid grid-cols-2 gap-8 sm:gap-6">
				<div>
					<h2 class="mb-6 text-sm font-semibold text-primary-accent-text">Navigasi</h2>
					<ul class="text-primary-gray-text">
						<li class="mb-4">
							<a class="hover:underline" href="{{ route("home") }}">Beranda</a>
						</li>
						<li>
							<a class="hover:underline" href="{{ route("product.index") }}">Daftar UMKM</a>
						</li>
					</ul>
				</div>
				<div>
					<h2 class="mb-6 text-sm font-semibold text-primary-accent-text">Ikuti kami</h2>
					<ul class="text-primary-gray-text">
						<li class="mb-4">
							<a class="hover:underline" href="https://www.facebook.com/gontoran.gontoran.3" target="_blank">Facebook</a>
						</li>
						<li class="mb-4">
							<a class="hover:underline"
								href="https://www.instagram.com/kkn.desagontoran25?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
								target="_blank">Instagram</a>
						</li>
						<li class="mb-4">
							<a class="hover:underline" href="https://youtube.com/@kantordesagontoran2789?si=zZfBvSaXCAQVRMMp"
								target="_blank">Youtube</a>
						</li>
						<li>
							<a class="hover:underline" href="https://www.tiktok.com/@kkn.desagontoran25?is_from_webapp=1&sender_device=pc"
								target="_blank">Tiktok</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<hr class="my-6 border-primary-accent-borders sm:mx-auto lg:my-8" />
		<div class="sm:flex sm:items-center sm:justify-between">
			<span class="text-sm text-primary-gray-text sm:text-center">
				&copy; 2025 <a class="hover:underline" href="{{ route("home") }}">Klik Gontoran&trade;</a>. All Rights
				Reserved.
			</span>
			<div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
				<a class="text-primary-gray-text hover:text-primary-gray-text-2" href="https://www.facebook.com/gontoran.gontoran.3"
					target="_blank">
					<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
						<path clip-rule="evenodd"
							d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
							fill-rule="evenodd" />
					</svg>
				</a>
				<a class="text-primary-gray-text hover:text-primary-gray-text-2"
					href="https://www.instagram.com/kkn.desagontoran25?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
					target="_blank">
					<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
						<path clip-rule="evenodd"
							d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
							fill-rule="evenodd" />
					</svg>
				</a>
				<a class="text-primary-gray-text hover:text-primary-gray-text-2"
					href="https://youtube.com/@kantordesagontoran2789?si=zZfBvSaXCAQVRMMp" target="_blank">
					<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" height="24" viewBox="0 0 24 24" width="24"
						xmlns="http://www.w3.org/2000/svg">
						<path clip-rule="evenodd"
							d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
							fill-rule="evenodd" />
					</svg>
				</a>
				<a class="text-primary-gray-text hover:text-primary-gray-text-2"
					href="https://www.tiktok.com/@kkn.desagontoran25?is_from_webapp=1&sender_device=pc" target="_blank">
					<svg class="h-5 w-5" fill="currentColor" height="24" viewBox="0 0 24 24" width="24"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z">
						</path>
					</svg>
				</a>
			</div>
		</div>
	</div>
</footer>
