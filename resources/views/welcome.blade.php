<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KopagMalam | Coffee & Community</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white font-sans text-slate-900">

    @include('components.navbar')
    
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span
                        class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-widest uppercase bg-blue-50 text-blue-600 rounded-full">
                        Freshly Brewed Every Night
                    </span>
                    <h1 class="text-5xl lg:text-7xl font-black text-slate-900 leading-[1.1] mb-8">
                        The Best Coffee for Your <span class="text-blue-600">Late Night</span> Hustle.
                    </h1>
                    <p class="text-lg text-slate-500 mb-10 max-w-lg leading-relaxed">
                        Nikmati sensasi kopi pilihan yang dipanggang dengan hati untuk menemani produktivitas dan momen
                        istirahat Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="/Menu"
                            class="px-8 py-4 bg-slate-900 text-white rounded-xl font-bold text-center hover:bg-slate-800 transition transform hover:-translate-y-1 shadow-2xl shadow-slate-300">
                            Order Now
                        </a>
                        <a href="/About"
                            class="px-8 py-4 bg-white border border-slate-200 text-slate-900 rounded-xl font-bold text-center hover:bg-slate-50 transition">
                            About
                        </a>
                    </div>
                </div>
                <div class="relative h-auto flex justify-center items-center">
                    <div class="absolute -inset-4 bg-blue-100/50 rounded-full blur-3xl"></div>
                    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Coffee Image"
                        class="relative rounded-3xl shadow-2xl transform lg:rotate-3 hover:rotate-0 transition duration-500 w-full max-w-sm object-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-16">Why KopagMalam?</h2>
            <div class="grid md:grid-cols-3 gap-12 text-left">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition group">
                    <div
                        class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-600 transition">
                        <svg class="w-6 h-6 text-blue-600 group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Flash Delivery</h3>
                    <p class="text-slate-500 text-sm">Pengiriman super cepat ke lokasi Anda kapan saja.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition group">
                    <div
                        class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-600 transition">
                        <svg class="w-6 h-6 text-blue-600 group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Flash Delivery</h3>
                    <p class="text-slate-500 text-sm">Pengiriman super cepat ke lokasi Anda kapan saja.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition group">
                    <div
                        class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-600 transition">
                        <svg class="w-6 h-6 text-blue-600 group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Flash Delivery</h3>
                    <p class="text-slate-500 text-sm">Pengiriman super cepat ke lokasi Anda kapan saja.</p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>