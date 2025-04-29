<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library Admin Dashboard</title>
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
<body class="bg-gray-100">

    <div>
        {{-- Header --}}
        @include('layouts.header')
    
        <div class="flex min-h-screen">
            {{-- Sidebar --}}
            @include('layouts.sidebar')
    
            {{-- Main Content Area --}}
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('mobileSidebar').classList.remove('hidden');
        });

        document.getElementById('closeMobileMenu').addEventListener('click', function() {
            document.getElementById('mobileSidebar').classList.add('hidden');
        });
    </script>
</body>
</html>