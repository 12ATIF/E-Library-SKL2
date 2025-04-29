<aside id="mobileSidebar" class="fixed inset-y-0 left-0 w-64 bg-white shadow-md z-50 transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden">
    <div class="p-4 flex justify-between items-center border-b">
        <div class="flex items-center gap-2">
            <i class="fas fa-book text-primary text-xl"></i>
            <h1 class="text-xl font-bold">E-Library</h1>
        </div>
        <button id="closeMobileMenu" class="text-gray-600">
            <i class="fas fa-times"></i>
        </button>
    </div>
    
    <nav class="flex-1 p-4">
        <p class="text-xs font-medium text-gray-500 mb-2">MENU</p>
        <ul class="space-y-2">
            <li>
                <a href="index.html" class="flex items-center gap-2 p-2 rounded-md bg-primary text-white">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="tambah-buku.html" class="flex items-center gap-2 p-2 rounded-md text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-plus"></i>
                    <span>Tambah Buku</span>
                </a>
            </li>
            <li>
                <a href="pengaturan.html" class="flex items-center gap-2 p-2 rounded-md text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-cog"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
        </ul>
    </nav>
    
    <div class="p-4 border-t">
        <a href="login.html" class="flex items-center gap-2 p-2 rounded-md text-gray-700 hover:bg-gray-100">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>