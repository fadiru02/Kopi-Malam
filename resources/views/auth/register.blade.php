<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex items-center justify-center p-4 lg:p-8">
        <div class="max-w-6xl w-full bg-white shadow-[0_2px_15px_-3px_rgba(6,81,237,0.2)] rounded-2xl overflow-hidden">
            <div class="grid md:grid-cols-2 items-center">

                <div class="p-8 lg:p-12">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-10 text-center md:text-left">
                            <h1 class="text-slate-900 text-3xl font-extrabold tracking-tight">Create Account</h1>
                            <p class="text-sm mt-4 text-slate-500">
                                Already have an account?
                                <a href="{{ route('login') }}"
                                    class="text-blue-600 font-semibold hover:underline ml-1">Sign in here</a>
                            </p>
                        </div>

                        @if ($errors->any())
                            <div
                                class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 text-red-700 text-sm rounded animate-pulse">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <div class="space-y-5">
                            <div>
                                <label class="text-slate-800 text-xs font-bold uppercase tracking-wider block mb-2">Full
                                    Name</label>
                                <input name="name" type="text" value="{{ old('name') }}" required
                                    class="w-full text-slate-900 text-sm border-b-2 border-gray-100 focus:border-blue-600 px-1 py-3 outline-none transition-colors bg-transparent"
                                    placeholder="Enter your full name" />
                            </div>

                            <div>
                                <label
                                    class="text-slate-800 text-xs font-bold uppercase tracking-wider block mb-2">Email
                                    Address</label>
                                <input name="email" type="email" value="{{ old('email') }}" required
                                    class="w-full text-slate-900 text-sm border-b-2 border-gray-100 focus:border-blue-600 px-1 py-3 outline-none transition-colors bg-transparent"
                                    placeholder="name@example.com" />
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label
                                        class="text-slate-800 text-xs font-bold uppercase tracking-wider block mb-2">Password</label>
                                    <input name="password" type="password" required
                                        class="w-full text-slate-900 text-sm border-b-2 border-gray-100 focus:border-blue-600 px-1 py-3 outline-none transition-colors bg-transparent"
                                        placeholder="••••••••" />
                                </div>
                                <div>
                                    <label
                                        class="text-slate-800 text-xs font-bold uppercase tracking-wider block mb-2">Confirm</label>
                                    <input name="password_confirmation" type="password" required
                                        class="w-full text-slate-900 text-sm border-b-2 border-gray-100 focus:border-blue-600 px-1 py-3 outline-none transition-colors bg-transparent"
                                        placeholder="••••••••" />
                                </div>
                            </div>
                        </div>

                        <div class="mt-12">
                            <button type="submit"
                                class="w-full py-4 px-4 text-sm font-bold tracking-widest uppercase rounded-lg text-white bg-blue-600 hover:bg-blue-700 shadow-xl shadow-blue-100 transition-all active:scale-[0.98] cursor-pointer">
                                Register Now
                            </button>
                        </div>
                    </form>
                </div>

                <div class="hidden md:block w-full h-full min-h-[550px] relative">
                    <div class="absolute inset-0 bg-indigo-600/60 z-10"></div>
                    <img src="https://readymadeui.com/team-image.webp"
                        class="absolute inset-0 w-full h-full object-cover" alt="login img" />

                    <div class="absolute inset-0 flex flex-col items-center justify-center z-20 p-8 text-center">
                        <h2 class="text-white text-4xl font-bold">KopagMalam</h2>
                        <p class="text-white/90 text-base mt-6 max-w-sm leading-relaxed">
                            Sign in to your account and explore a world of possibilities. Your journey begins here.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>