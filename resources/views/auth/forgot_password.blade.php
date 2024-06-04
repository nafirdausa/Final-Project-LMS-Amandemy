<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="max-w-md w-full bg-white p-8 shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Forgot Password</h2>
        <p class="text-gray-600 mb-4">Please enter your email address. We will send you a link to reset your password.</p>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email Address</label>
                <input type="email" name="email" id="email" class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none focus:border-blue-500" placeholder="Enter your email address" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Reset Password</button>
        </form>
    </div>
</body>

</html>
