<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - E-Library Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#10b981',
                            dark: '#059669'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <div class="flex-1 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg shadow-md w-full max-w-md overflow-hidden">
            <div class="p-6 text-center">
                <div class="flex justify-center mb-4">
                    <i class="fas fa-book text-primary text-4xl"></i>
                </div>
                <h1 class="text-2xl font-bold mb-1">Daftar Akun</h1>
                <p class="text-gray-500 mb-6">Buat akun baru untuk mengakses perpustakaan</p>
                
                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <form action="{{ route('register') }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="text-left">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="John Doe" value="{{ old('name') }}">
                    </div>
                    
                    <div class="text-left">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="user@example.com" value="{{ old('email') }}">
                    </div>
                    
                    <div class="text-left">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    
                    <div class="text-left">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    
                    <button type="submit" class="w-full py-2 px-4 bg-primary hover:bg-primary-dark text-white rounded-md">Daftar</button>
                </form>
                
                <div class="mt-6 text-sm text-gray-600">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}" class="text-primary hover:underline">Masuk</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-transparent mt-auto">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center">
                <div class="flex space-x-6 mb-4">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-facebook"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-instagram"></i>
                        <span class="sr-only">Instagram</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-twitter"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fab fa-github"></i>
                        <span class="sr-only">GitHub</span>
                    </a>
                </div>
                <div class="flex flex-wrap justify-center gap-4 mb-4">
                    <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Tentang Kami</a>
                    <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Kebijakan Privasi</a>
                    <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Syarat & Ketentuan</a>
                    <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Kontak</a>
                </div>
                <p class="text-sm text-gray-500">&copy; 2025 E-Library. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>