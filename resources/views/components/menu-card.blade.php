@props(['menu' => false])
<div
    class="min-w-[140px] max-w-[250px] bg-white shadow-sm rounded-lg overflow-hidden p-1 mb-14 mx-2 lg:mb-10 lg:mx-0 dark:bg-slate-800">

    <img src="/image/Telur_Balado.jpg" alt="Paket Fest A" class="w-full h-[130px] object-cover rounded-sm" />

    <div class="p-3 flex flex-col justify-between ">
        <div>
            <a href="menu/{{ $menu->slug }}" class="text-base font-bold text-gray-800 hover:underline dark:text-white">
                {{ $menu->name }}
            </a>
            <p class="text-sm text-gray-700 my-1 dark:text-slate-400">Lauk Pauk</p>
            <p class="text-sm text-gray-600 mt-1 font-semibold dark:text-slate-300">
                Rp{{ number_format($menu->price, 0, ',', '.') }}</p>
        </div>


        <button
            class="mt-3 w-full bg-pink-100 dark:bg-pink-500 text-pink-600 dark:text-white font-medium text-sm py-1.5 rounded-lg border border-pink-300 dark:border-pink-600 hover:bg-pink-200 dark:hover:bg-pink-600 transition">
            Tambah
        </button>
    </div>
</div>
