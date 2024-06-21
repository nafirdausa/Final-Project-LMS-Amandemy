<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="{{asset('assets/img/lognew.png')}}">
    <title>@yield('title')</title>
    <style>
        .container-animate {
            width: 100%;
            height: 100%;
            background-image: radial-gradient(circle, rgb(126, 176, 241), transparent 20%, rgb(255, 252, 252));
            background-size: cover;
            background-repeat: no-repeat;
            background-color: rgb(126, 176, 241)  ;
        }  
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-up {
            animation: fadeUp 2s ease-out forwards;
        }   

        .btn-login {
             display: inline-block;
             border-radius: 4px;
             background-color: #19269b;
             border: none;
             color: #FFFFFF;
             text-align: center;
             font-size: 16  px;
             font-weight: bold;
             padding: 7px;
             width: 90px;
             transition: all 0.5s;
             cursor: pointer;
             margin: 5px;
        }

        .btn-login a {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .btn-login a:after {
            content: '»';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -15px;
            transition: 0.5s;
        }

        .btn-login:hover a {
            padding-right: 15px;
        }

        .btn-login:hover a:after {
            opacity: 1;
            right: 0;
        }

        .btn-on {
            position: relative;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            padding-block: 0.5rem;
            padding-inline: 1.25rem;
            background-color: rgb(0 107 179);
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffff;
            gap: 10px;
            font-weight: bold;
            border: 3px solid #ffffff4d;
            outline: none;
            overflow: hidden;
            font-size: 20px;
        }
        
        .icon {
            width: 24px;
            height: 24px;
            transition: all 0.3s ease-in-out;
        }
        
        .btn-on:hover {
            transform: scale(1.05);
            border-color: #fff9;
        }
        
        .btn-on:hover .icon {
            transform: translate(4px);
        }
        
        .btn-on:hover::before {
            animation: shine 1.5s ease-out infinite;
        }
        
        .btn-on::before {
            content: "";
            position: absolute;
            width: 100px;
            height: 100%;
            background-image: linear-gradient(
              120deg,
              rgba(255, 255, 255, 0) 30%,
              rgba(255, 255, 255, 0.8),
              rgba(255, 255, 255, 0) 70%
            );
            top: 0;
            left: -100px;
            opacity: 0.6;
        }

        @keyframes shine {
            0% {
              left: -100px;
            }
          
            60% {
              left: 100%;
            }
          
            to {
              left: 100%;
            }
        }
    </style>
</head>

<body class="font-sans text-gray-800">
    <header
        class="flex justify-between items-center py-4 px-8 md:py-4 bg-white text-blue-800 shadow-md sticky top-0 z-50">
        <div class="text-2xl font-bold">
            <a href="{{ route('hero') }}">
                <img src="{{asset('assets/img/barunew.png')}}" alt="logo" width="200" height="200">
            </a>
        </div>
        <nav class="flex items-center text-white">
            @auth
                <a href="{{ route('user_siswa.home') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700">Home</a>
                <a href="{{ route('dashboard.siswa.course') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700">Course</a>
                <a href="{{ route('dashboard.siswa.report') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700">Report</a>
                <a href="{{ route('dashboard.siswa.portofolio') }}" class="text-gray-600 hover:text-blue-700 active:text-blue-700">Portofolio</a>
                <a href="{{ route('dashboard.siswa.forum') }}" class="ms-4 text-gray-600 hover:text-blue-700 active:text-blue-700">Forum</a>
                <div class="profile ml-4">
                    <button class="text-white font-semibold rounded inline-flex items-center" type="button" id="dropdownButton">
                        <img src="{{asset('assets/images/user.png')}}" alt="Profile Picture" class="w-10 h-10 rounded-full">
                    </button>
                    <div class="dropdown-menu absolute right-3 rounded-md shadow-lg bg-red ring-1 ring-black ring-opacity-5 hidden" id="dropdownMenu">
                        <div class="py-1">
                            <a href="{{ route('logout') }}" class="block px-4 py-1 text-sm text-black fw-bold hover:bg-red-500" style="font-weight: bold">Logout</a>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ route('user_siswa.home') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700 font-semibold">Home</a>
                <a href="{{ route('dashboard.siswa.course') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700 font-semibold">Course</a>
                <a href="{{ route('dashboard.siswa.report') }}" class="mr-4 text-gray-600 hover:text-blue-700 active:text-blue-700 font-semibold">Report</a>
                <a href="{{ route('dashboard.siswa.portofolio') }}" class="text-gray-600 hover:text-blue-700 active:text-blue-700 font-semibold">Portofolio</a>
                <a href="{{ route('dashboard.siswa.forum') }}" class="ms-4 text-gray-600 hover:text-blue-700 active:text-blue-700 font-semibold">Portofolio</a>
                <div>
                    <button class="btn-login">
                        <a href="{{ route('login') }}">Login</a>
                    </button>
                </div>
            @endauth
        </nav>
    </header>
    <main class="p-4 md:p-8">
        @yield('content')
    </main>

    <footer class="text-white">
        <div class="bg-blue-900 p-8 flex flex-wrap justify-between">
            <div data-aos="fade-down"></div>
            <div class="max-w-xs">
                <div class="text-2xl font-bold mb-4">StudyRoom</div>
                <p>E-LEARNING MA Negeri Madesu, Yogyakarta. Jalan
                    Ringroad Barat, Banyuraden, Gamping, Sleman, Yogyakarta</p>
            </div>
            <div class="mb-4 md:mt-0">
                <h3 class="text-xl mb-2" style="font-weight: bold">INSTANSI</h3>
                <ul class="list-none space-y-2">
                    <li><a href="#" class="text-white hover:underline">SMA</a></li>
                    <li><a href="#" class="text-white hover:underline">SMU</a></li>
                    <li><a href="#" class="text-white hover:underline">SMK</a></li>
                    <li><a href="#" class="text-white hover:underline">UNIVERSITAS</a></li>
                </ul>
            </div>
            <div class="mb-4 md:mt-0">
                <h3 class="text-xl mb-2" style="font-weight: bold">IKUTI KAMI</h3>
                <div>
                    <button class="p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                        <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" /></svg>
                        <a href="#" class="block text-white hover:underline">Facebook</a>
                      </button>
                </div>
                <div>
                    <button class="p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                        <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
                        <a href="#" class="block text-white hover:underline">Twitter</a>
                      </button>
                </div>
            </div>
            <div class="mb-4 md:mt-0 max-w-xs">
                <h3 class="text-xl mb-2" style="font-weight: bold">KONTAK</h3>
                <p>Jl. Silangkar km 07 Ringroad Barat, Banyuraden, Gamping, Sleman, Yogyakarta</p>
                <p>Phone: +62-251-025-540</p>
                <p>Email: studyroom@gmail.com</p>
            </div>
        </div>
        <div class="text-center bg-blue-950 p-2">
            <p>MA Negeri Madesu Yogyakarta @ 2018 - 2024.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const elements = document.querySelectorAll('.fade-up-element');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-up');
                    entry.target.classList.remove('opacity-0');
                } else {
                    entry.target.classList.remove('fade-up');
                    entry.target.classList.add('opacity-0');
                }
            });
        }, {
            threshold: 0.1
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    });

        document.getElementById('dropdownButton').addEventListener('click', function() {
            document.getElementById('dropdownMenu').classList.toggle('hidden');
        });
    </script>
</body>

</html>
