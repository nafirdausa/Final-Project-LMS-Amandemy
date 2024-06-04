<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="h-screen flex">
    <div class="flex flex-col justify-between hidden md:flex md:w-1/2 h-full bg-gradient-to-b from-blue-700 to-blue-400">
        <div class="mx-auto my-14">
            <img src="/assets/img/logo_lms1.png" alt="Logo" width="80">
        </div>
        <div class="m-auto text-center text-white">
            <h3 class="mt-5 text-2xl font-semibold">Learning online is easier<br> than ever before with LMS!</h3>
            <img src="/assets/img/img_login.png" alt="Gambar" class="mt-5 mx-auto" width="450">
        </div>
    </div>
    <div class="w-full md:w-1/2 flex flex-col justify-center items-center px-4">
        <h3 class="font-extrabold text-2xl">Log in to your Account</h3>
        <p class="mb-5">Welcome! Select method to log in:</p>
        <div class="flex flex-col md:flex-row items-center md:justify-center mb-2">
            <button type="button" class="btn-google rounded-md mr-2 bg-gray-200 me-2 px-4 py-2 mb-2 md:mb-0 md:me-2 flex items-center">
                <img class="btn bg-gray-200 mb-1 mr-2 inline-block" src="/assets/icon/google_symbol.svg.png" alt="Google" width="20">Google
            </button>
            <button type="button" class="btn-facebook rounded-md ml-2 bg-gray-200 ms-2 px-4 py-2 md:ms-2 flex items-center">
                <img class="btn bg-gray-200 mb-1 mr-2 inline-block" src="/assets/icon/facebook_symbol.svg.png" alt="Facebook" width="20">Facebook
            </button>
        </div>
        <p class="my-4 text-gray-400">OR</p>
        <!-- error message -->
        @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif
        <form action="{{ route('login.auth') }}" method="POST" class="w-full max-w-sm">
            @csrf
            <div class="form-group mb-3">
                <input type="text" name="username" id="username" class="form-control border border-2 border-gray-300 rounded-md px-3 py-2 w-full @error('username') border-red-500 @enderror" placeholder="Masukkan username" required>
                @error('username')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3 relative">
                <input type="password" name="password" id="password" class="form-control border border-2 border-gray-300 rounded-md px-3 py-2 w-full @error('password') border-red-500 @enderror" placeholder="Masukkan password" required>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                    <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 px-3 py-2 focus:outline-none">
                        <svg class="h-6 w-6 text-gray-500" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.412 5 12 5c4.588 0 8.268 2.943 9.542 7-1.274 4.057-4.954 7-9.542 7-4.588 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex items-center justify-between mb-3">
                <label for="remember" class="text-gray-500">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    Remember me
                </label>
                <a href="{{ route('forgot.password') }}" class="text-blue-500 hover:underline">Forgot password?</a>
            </div>
            <button type="submit" class="btn bg-blue-500 text-white px-4 py-2 rounded-md w-full">Login</button>
        </form>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            passwordInput.type === 'password' ? passwordInput.type = 'text' : passwordInput.type = 'password';
        }
    </script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
</body>

</html>
