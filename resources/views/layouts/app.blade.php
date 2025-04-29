<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>
    
    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    {{-- Custom Tailwind Configuration --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#10b981',
                            dark: '#059669'
                        }
                    },
                    width: {
                        'sidebar-full': '16rem',
                        'sidebar-mini': '4rem'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 flex h-screen overflow-hidden">
    {{-- Sidebar Mobile --}}
    @include('layouts.sidebar-mobile')
    
    {{-- Sidebar Desktop --}}
    @include('layouts.sidebar')
    
    <div id="mainContentWrapper" class="flex-1 flex flex-col transition-all duration-300 ease-in-out">
        {{-- Header --}}
        @include('layouts.header')
        
        {{-- Main Content --}}
        <main class="flex-1 overflow-y-auto p-6 w-full">
            @yield('content')
        </main>
    </div>

    <script>
        // Sidebar State Management
        const desktopSidebar = document.getElementById('desktopSidebar');
        const desktopSidebarToggle = document.getElementById('desktopSidebarToggle');
        const mainContentWrapper = document.getElementById('mainContentWrapper');

        // Fungsi untuk menyimpan state sidebar
        function saveSidebarState(isCollapsed) {
            localStorage.setItem('sidebarCollapsed', isCollapsed);
        }

        // Fungsi untuk memuat state sidebar
        function loadSidebarState() {
            const isCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
            
            if (isCollapsed) {
                // Kondisi sidebar collapse
                desktopSidebar.classList.remove('w-sidebar-full');
                desktopSidebar.classList.add('w-sidebar-mini');
                mainContentWrapper.classList.add('md:pl-16');
                
                // Sembunyikan teks
                desktopSidebar.querySelectorAll('.sidebar-text').forEach(el => {
                    el.classList.add('hidden');
                });
            } else {
                // Kondisi sidebar expand
                desktopSidebar.classList.remove('w-sidebar-mini');
                desktopSidebar.classList.add('w-sidebar-full');
                mainContentWrapper.classList.remove('md:pl-16');
                
                // Tampilkan teks
                desktopSidebar.querySelectorAll('.sidebar-text').forEach(el => {
                    el.classList.remove('hidden');
                });
            }
        }

        // Toggle Sidebar
        desktopSidebarToggle.addEventListener('click', () => {
            const isCurrentlyCollapsed = desktopSidebar.classList.contains('w-sidebar-mini');
            
            if (isCurrentlyCollapsed) {
                // Expand sidebar
                desktopSidebar.classList.remove('w-sidebar-mini');
                desktopSidebar.classList.add('w-sidebar-full');
                mainContentWrapper.classList.remove('md:pl-16');
                
                // Tampilkan teks
                desktopSidebar.querySelectorAll('.sidebar-text').forEach(el => {
                    el.classList.remove('hidden');
                });
                
                // Simpan state
                saveSidebarState(false);
            } else {
                // Collapse sidebar
                desktopSidebar.classList.remove('w-sidebar-full');
                desktopSidebar.classList.add('w-sidebar-mini');
                mainContentWrapper.classList.add('md:pl-16');
                
                // Sembunyikan teks
                desktopSidebar.querySelectorAll('.sidebar-text').forEach(el => {
                    el.classList.add('hidden');
                });
                
                // Simpan state
                saveSidebarState(true);
            }
        });

        // Muat state sidebar saat halaman dimuat
        document.addEventListener('DOMContentLoaded', loadSidebarState);

        // Toggle Mobile Sidebar
        const menuToggle = document.getElementById('menuToggle');
        const closeMobileMenu = document.getElementById('closeMobileMenu');
        const mobileSidebar = document.getElementById('mobileSidebar');

        menuToggle.addEventListener('click', () => {
            mobileSidebar.classList.remove('-translate-x-full');
        });

        closeMobileMenu.addEventListener('click', () => {
            mobileSidebar.classList.add('-translate-x-full');
        });
    </script>
</body>
</html>