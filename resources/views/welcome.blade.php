<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PhumYerng</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
        @endif

        <style>
            body { font-family: 'Instrument Sans', sans-serif; }
            .hero-gradient {
                background: linear-gradient(135deg, #f3f4f6 0%, #ffffff 100%);
            }
        </style>
    </head>
    <body class="bg-white text-[#1b1b18] antialiased">
        
        <header class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
                <div class="flex items-center gap-8">
                    <a href="/" class="text-xl font-bold tracking-tighter uppercase">PhumYerng</a>
                    <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-500">
                        <a href="#" class="hover:text-black transition">New Arrivals</a>
                        <a href="#" class="hover:text-black transition">Collections</a>
                        <a href="#" class="hover:text-black transition">Sale</a>
                    </nav>
                </div>

                <div class="flex items-center gap-4">
                    @if (Route::has('login'))
                        <div class="flex items-center gap-2">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm font-medium px-4 py-2 bg-black text-white rounded-full">Login As Admin</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-black transition">Sign in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-sm font-medium px-5 py-2 border border-black rounded-full hover:bg-black hover:text-white transition">Join Now</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </header>

        <main class="pt-20">
            <section class="hero-gradient min-h-[80vh] flex items-center">
                <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center w-full">
                    <div class="space-y-8">
                        <span class="inline-block px-4 py-1.5 bg-black text-white text-[10px] font-bold uppercase tracking-[0.2em] rounded-full">New Collection 2026</span>
                        <h1 class="text-6xl lg:text-8xl font-bold leading-[0.9] tracking-tighter">
                            Style for the <br><span class="text-gray-400 italic">Modern Soul.</span>
                        </h1>
                        <p class="text-lg text-gray-500 max-w-md leading-relaxed">
                            Discover carefully curated apparel that balances timeless elegance with contemporary street culture.
                        </p>
                        <div class="flex flex-wrap gap-4 pt-4">
                            <a href="#" class="px-8 py-4 bg-black text-white rounded-full font-semibold hover:opacity-90 transition shadow-xl shadow-black/10">Shop Men</a>
                            <a href="#" class="px-8 py-4 bg-white border border-gray-200 rounded-full font-semibold hover:border-black transition">Shop Women</a>
                        </div>
                    </div>
                    
                    <div class="relative hidden lg:block">
                        <div class="aspect-[4/5] bg-gray-200 rounded-2xl overflow-hidden shadow-2xl">
                             <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1000&auto=format&fit=crop" alt="Fashion Model" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-lg border border-gray-100 max-w-[200px]">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Sustainable</p>
                            <p class="text-sm font-medium italic leading-snug text-gray-700">"Quality that lasts longer than a season."</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="max-w-7xl mx-auto px-6 py-24">
                <div class="flex items-end justify-between mb-12">
                    <h2 class="text-3xl font-bold tracking-tight">Essential Picks</h2>
                    <a href="#" class="text-sm font-bold border-b-2 border-black pb-1 hover:text-gray-500 hover:border-gray-500 transition">View All</a>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="group cursor-pointer">
                        <div class="aspect-[3/4] bg-gray-100 rounded-xl overflow-hidden mb-4 relative">
                            <img src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="T-shirts">
                            <div class="absolute bottom-4 left-4">
                                <span class="bg-white px-3 py-1 rounded text-xs font-bold shadow-sm">Basic Essentials</span>
                            </div>
                        </div>
                        <h3 class="font-bold text-lg">Premium Heavyweight Tee</h3>
                        <p class="text-gray-500">$45.00</p>
                    </div>

                    <div class="group cursor-pointer">
                        <div class="aspect-[3/4] bg-gray-100 rounded-xl overflow-hidden mb-4 relative">
                            <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="Jackets">
                            <div class="absolute bottom-4 left-4">
                                <span class="bg-white px-3 py-1 rounded text-xs font-bold shadow-sm">Outerwear</span>
                            </div>
                        </div>
                        <h3 class="font-bold text-lg">Tech Bomber Jacket</h3>
                        <p class="text-gray-500">$185.00</p>
                    </div>

                    <div class="group cursor-pointer">
                        <div class="aspect-[3/4] bg-gray-100 rounded-xl overflow-hidden mb-4 relative">
                            <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="Jeans">
                            <div class="absolute bottom-4 left-4">
                                <span class="bg-white px-3 py-1 rounded text-xs font-bold shadow-sm">Denim</span>
                            </div>
                        </div>
                        <h3 class="font-bold text-lg">Slim Raw Indigo Denim</h3>
                        <p class="text-gray-500">$120.00</p>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-gray-50 border-t border-gray-100 py-12">
            <div class="max-w-7xl mx-auto px-6 text-center text-gray-400 text-sm">
                <p>&copy; 2026 PhumYerng Clothing. All rights reserved.</p>
            </div>
        </footer>

    </body>
</html>