<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans text-gray-800">
    <header class="flex justify-between items-center py-4 px-8 md:py-4 bg-white text-blue-800 shadow-md sticky top-0 z-50">
    {{-- <header class="flex justify-between items-center p-4 bg-white text-blue-900 shadow-md sticky top-0 z-50"> --}}
        <div class="text-2xl font-bold">
            <img src="{{asset('assets/img/studyroom.jpg')}}" alt="logo" width="150" height="150">
        </div>
        <nav class="flex items-center text-white">
            @auth
                <a href="{{ route('user_siswa.home') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700">Home</a>
                <a href="{{ route('dashboard.siswa.course') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700">Course</a>
                <a href="{{ route('dashboard.siswa.report') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700">Report</a>
                <a href="{{ route('dashboard.siswa.portofolio') }}" class="text-gray-600 hover:text-blue-700 active:text-blue-700">Portofolio</a>
                <div class="profile ml-4">
                    <img src="{{asset('assets/images/default_profile.png')}}" alt="Profile Picture" class="w-10 h-10 rounded-full">
                </div>
            @else
                <a href="{{ route('user_siswa.home') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700">Home</a>
                <a href="{{ route('dashboard.siswa.course') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700">Course</a>
                <a href="{{ route('dashboard.siswa.report') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700">Report</a>
                <a href="{{ route('dashboard.siswa.portofolio') }}" class="text-gray-600 hover:text-blue-700 active:text-blue-700">Portofolio</a>
                <div>
                    <a href="{{ route('login') }}" class="mx-4 bg-blue-700 text-white text-md font-bold py-2 px-6 rounded">Login</a>
                </div>
            @endauth
        </nav>
    </header>
    <main class="p-4 md:p-8">
        @yield('content')
    </main>
    <footer class="text-white">
        <div class="bg-blue-900 p-8 flex flex-wrap justify-between">
            <div class="max-w-xs">
                <div class="text-2xl font-bold mb-4">StudyRoom</div>
                <p>E-LEARNING Fakultas Teknik & Teknologi Informasi Universitas Jenderal Achmad Yani, Yogyakarta. Jalan
                    Ringroad Barat, Banyuraden, Gamping, Sleman, Yogyakarta</p>
            </div>
            <div class="mb-4 md:mt-0">
                <h3 class="text-xl mb-2">Pranala</h3>
                <ul class="list-none space-y-2">
                    <li><a href="#" class="text-white hover:underline">SMA N Madesu</a></li>
                    <li><a href="#" class="text-white hover:underline">IPA</a></li>
                    <li><a href="#" class="text-white hover:underline">IPS</a></li>
                    <li><a href="#" class="text-white hover:underline">Bahasa</a></li>
                </ul>
            </div>
            <div class="mb-4 md:mt-0">
                <h3 class="text-xl mb-2">Ikuti Kami</h3>
                <a href="#" class="block text-white hover:underline">Facebook</a>
                <a href="#" class="block text-white hover:underline">Twitter</a>
            </div>
            <div class="mb-4 md:mt-0 max-w-xs">
                <h3 class="text-xl mb-2">SMA Negeri Madesu</h3>
                <p>Jl. Silangkar km 07 Ringroad Barat, Banyuraden, Gamping, Sleman, Yogyakarta</p>
                <p>Phone: +62-251-025-540</p>
                <p>Email: mnd@smadesu.id</p>
            </div>
        </div>
        <div class="text-center bg-blue-950 p-2">
            <p>Fakultas Teknik & Teknologi Informasi, Universitas Jendral Achmad Yani Yogyakarta @ 2018 - 2023.</p>
        </div>
    </footer>
</body>

</html>
