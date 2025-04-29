<header class="bg-white shadow-sm p-4 flex items-center justify-between">
    <div class="flex items-center gap-2">
        <button id="menuToggle" class="md:hidden mr-2 text-gray-700">
            <i class="fas fa-bars"></i>
        </button>
        
        {{-- <div class="relative flex-grow max-w-md">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            <input 
                type="search" 
                placeholder="Cari buku..." 
                class="w-full pl-10 pr-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
            >
        </div> --}}
    </div>
    
    <div class="flex items-center gap-3">
        <div class="h-8 w-8 rounded-full bg-primary flex items-center justify-center text-white">
            <i class="fas fa-user"></i>
        </div>
        <span class="font-medium">Admin</span>
    </div>
</header>