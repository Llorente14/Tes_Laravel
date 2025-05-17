<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="w-full max-w-dvw  ">
        {{-- Dekstop/Tablet View --}}
        <div class="max-w-6xl mx-auto py-10 px-4 hidden md:grid-cols-2 gap-8 md:grid">
            <!-- Gambar Produk -->
            <div>
                <img src="{{ asset('image/Telur_Balado.jpg') }}" alt="Telur Balado" class="rounded-lg shadow-lg">

            </div>

            <!-- Detail Produk -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">{{ $menu->name }}</h2>
                <p class="mt-2 text-gray-600 dark:text-slate-400">
                    Lauk Pauk
                </p>

                <!-- Harga -->
                <div class="text-2xl text-pink-600 dark:text-pink-500 mt-4 font-bold">
                    Rp{{ number_format($menu->price, 0, ',', '.') }}
                </div>

                <!-- Jumlah dan Tambah ke Keranjang -->
                <div class="flex items-center mt-6 space-x-4">
                    <div class="flex items-center border border-pink-300 dark:border-pink-500 rounded-lg  px-2">
                        <button class="text-lg text-center text-pink-600 dark:text-pink-400 px-2">-</button>
                        <input class=" text-gray-800 text-center border-x-1 border-y-0 border-pink-300 dark:border-pink-600 bg-transparent max-w-12 ring-0 dark:text-white focus:outline-none focus:ring-0" type="text" value="1">
                        <button class="text-lg text-center text-pink-600 dark:text-pink-400 px-2">+</button>
                    </div>
                    <button
                        class="flex-1 px-6 py-2 bg-pink-100 dark:bg-pink-600 text-pink-600 dark:text-white font-semibold rounded-lg border border-pink-300 dark:border-pink-700 hover:bg-pink-200 dark:hover:bg-pink-700 transition">
                        Add to Cart
                    </button>
                </div>

                <!-- Deskripsi -->
                <div class="mt-6 text-gray-700 dark:text-slate-300 text-sm">
                    <p>
                        {{ $menu->desc }}
                    </p>
                </div>
            </div>
        </div>

    </main>
</x-layout>
