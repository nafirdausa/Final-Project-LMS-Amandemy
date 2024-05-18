<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <style>
        .left-div {
            background: linear-gradient(to bottom, #2E3FC2, #8F94B9);
            color: white;
            padding: 40px;
            height: 100vh;
            /* Tinggi 100% viewport */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .right-div {
            padding: 20px;
            height: 100vh;
            /* Tinggi 100% viewport */
        }
    </style> --}}
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-5 d-flex flex-column text-center justify-content-between" 
            style="background: linear-gradient(to bottom, #2E3FC2, #8F94B9); height: 100vh;">
                <div>
                    <img src="/assets/img/logo_lms1.png" alt="Logo" width="60">
                </div>
                <div class="mt-5 text-white">
                    <!-- <p>Ini adalah teks di dalam div kiri.</p> -->
                    <h3>Learning online is easier <br>
                        than ever before with LMS!</h3>
                </div>
                <div>
                    <img src="/assets/img/img_login.png" alt="Gambar" width="450">
                </div>
            </div>
            <div class="col-md-4 mx-auto d-flex flex-column text-center justify-content-center">
                <h3 class="fw-bold">Log in to your Account</h3>
                <p>Welcome! Select method to log in:</p>
                <div class="mt-3 mb-3">
                    <button type="button" class="btn btn-light px-4 me-2"><img class="mb-1 me-2" src="/assets/icon/google_symbol.svg.png" alt="Google" width="20">Google</button>
                    <button type="button" class="btn btn-light px-4 ms-2"><img class="mb-1 me-2" src="/assets/icon/facebook_symbol.svg.png" alt="Facebook" width="20">Facebook</button>
                </div>
                <p class="fw-light">OR</p>

                <!-- error message -->
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('login.auth') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="username" id="username" class="form-control fw-light @error('username') is-invalid @enderror" placeholder="Masukkan username" required>
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" id="password" class="form-control fw-light @error('password') is-invalid @enderror" placeholder="Masukkan password" required>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>