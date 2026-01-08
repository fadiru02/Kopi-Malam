<nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo KopagMalam" class="h-20 w-auto">
                    <span class="text-2xl font-black italic text-blue-600 tracking-tighter">KOPAGMALAM.</span>
                </div>

                <div class="hidden md:flex space-x-10 text-sm font-semibold uppercase tracking-widest text-slate-600">
                    <a href="/" class="hover:text-blue-600 transition">Home</a>
                    <a href="/menu" class="hover:text-blue-600 transition">Menu</a>
                    <a href="#" class="hover:text-blue-600 transition">About</a>
                    <a href="#" class="hover:text-blue-600 transition">Locations</a>
                </div>

                <div class="flex items-center space-x-4">
                    @auth
                        <div class="flex items-center space-x-4">
                            <span class="text-sm font-medium text-slate-500">Hi, {{ Auth::user()->name }}</span>

                            @if(Auth::user()->role === 'owner')
                                <a href="/admin" class="text-sm font-bold text-blue-600 hover:underline">Dashboard Admin</a>
                            @elseif(Auth::user()->role === 'employee')
                                <a href="/employee" class="text-sm font-bold text-blue-600 hover:underline">Panel Kerja</a>
                            @endif

                            <form action="{{ route('logout') }}" method="POST" class="inline">
                                @csrf
                                <button type="submit"
                                    class="bg-slate-900 text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-slate-800 transition shadow-lg shadow-slate-200">
                                    Logout
                                </button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-bold text-slate-600 hover:text-blue-600">Sign
                            In</a>
                        <a href="{{ route('register') }}"
                            class="bg-blue-600 text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                            Join Now
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>