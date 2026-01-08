<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu | KopagMalam</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    @include('components.navbar')
    <section>
        <div class="py-12">
            <div class="mx-auto lg:max-w-7xl px-4">
                <div class="text-center mb-12 mt-24">
                    <h1 class="text-4xl font-black text-slate-900">Daftar Menu</h1>
                    <p class="text-slate-500 mt-2">Pilih kopi favoritmu untuk menemani malam ini.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @forelse($menus as $menu)
                        <div
                            class="bg-white shadow-sm border border-slate-200 rounded-2xl p-3 hover:shadow-xl transition-all duration-300 group">
                            <div class="aspect-[12/11] bg-slate-100 rounded-xl p-4 overflow-hidden relative">
                                <span
                                    class="absolute top-3 left-3 z-10 px-3 py-1 text-[10px] font-bold uppercase rounded-full 
                                    {{ $menu->type == 'Pagi' ? 'bg-orange-100 text-orange-600' : ($menu->type == 'Malam' ? 'bg-indigo-100 text-indigo-600' : 'bg-green-100 text-green-600') }}">
                                    {{ $menu->type }}
                                </span>

                                @if($menu->image)
                                    <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->nama }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                                @else
                                    <img src="https://placehold.co/400x400?text=No+Image"
                                        class="w-full h-full object-contain" />
                                @endif
                            </div>

                            <div class="flex items-center justify-between mt-4">
                                <h5 class="text-base font-bold text-slate-900 truncate">{{ $menu->nama }}</h5>
                                <h6 class="text-base text-blue-600 font-black">
                                    Rp{{ number_format($menu->harga, 0, ',', '.') }}</h6>
                            </div>

                            <p class="text-slate-500 text-[13px] mt-2 line-clamp-2">{{ $menu->deskripsi }}</p>

                            <div class="flex items-center gap-2 mt-6">
                                <button class="bg-pink-50 hover:bg-pink-100 p-2.5 rounded-xl transition-colors group/heart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                        class="fill-pink-400 group-hover/heart:fill-pink-600" viewBox="0 0 64 64">
                                        <path
                                            d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z">
                                        </path>
                                    </svg>
                                </button>
                                <button
                                    class="w-full bg-slate-900 hover:bg-blue-600 text-white text-sm font-bold py-2.5 rounded-xl transition-all active:scale-95 shadow-md">
                                    Tambah ke Keranjang
                                </button>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-20">
                            <p class="text-slate-400">Belum ada menu yang tersedia saat ini.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</body>

</html>