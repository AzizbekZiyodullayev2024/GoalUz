<!-- resources/views/components/header.blade.php -->

<header class="shadow px-60">
    <!-- Reklama banneri -->
    <div class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-700 text-white px-6 py-4 flex items-center justify-between">
        <div>
            <h1 class="text-4xl sm:text-5xl font-extrabold uppercase">Bepul propan</h1>
            <p class="text-xl italic">Avtomobillar soni cheklangan!</p>
        </div>
        <img src="{{ asset('images/cherry.png') }}" alt="Chery Car" class="h-24 hidden md:block">
    </div>

    <!-- Navigatsiya menyusi -->
    <nav class="bg-[#0056A3] text-white">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
            <!-- Chap logo -->
            <a href="#" class="text-white text-2xl font-extrabold tracking-wide flex items-center">
                <span class="text-white mr-1"></span><span class="text-white font-bold">SPORTS.</span><span class="text-white">uz</span>
            </a>

            <!-- O‘rtadagi menyu -->
            <ul class="hidden md:flex space-x-6 text-sm font-medium">
                <li><a href="/" class="hover:text-gray-200">LIVE - O'yinlar</a></li>
                <li><a href="/" class="hover:text-gray-200">Musobaqalar</a></li>
                <li><a href="/" class="hover:text-gray-200">Futbol</a></li>
                <li><a href="/" class="hover:text-gray-200">O'zbek sporti</a></li>
                <li><a href="/" class="hover:text-gray-200">Boks</a></li>
                <li><a href="/" class="hover:text-gray-200">Shaxmat</a></li>
                <li><a href="/" class="hover:text-gray-200">Boshqalar</a></li>
                <li><a href="/" class="hover:text-gray-200">Minbar</a></li>
            </ul>

            <!-- O‘ngdagi ikonka va til -->
            <div class="flex items-center space-x-4 text-lg">
                <button class="hover:text-gray-300"><i class="fas fa-search"></i></button>
                <button class="hover:text-gray-300"><i class="fas fa-user-circle"></i></button>
                <button class="hover:text-gray-300"><i class="fas fa-moon"></i></button>
                <select class="bg-[#0056A3] text-white border-none focus:outline-none text-sm">
                    <option>OZ</option>
                    <option>RU</option>
                </select>
            </div>
        </div>
    </nav>
</header>
