<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <main class="w-full max-w-dvw  grid grid-cols-2 md:px-10 md:grid-cols-3 lg:grid-cols-4  ">
        @foreach ($menus as $menu)

        <x-menu-card :$menu></x-menu-card>
        @endforeach

    </main>
</x-layout>







