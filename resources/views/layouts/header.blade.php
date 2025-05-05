<header class="bg-white shadow-sm p-4 flex items-center justify-between">
    <div class="flex items-center gap-2">
        <button id="menuToggle" class="md:hidden mr-2 text-gray-700">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    
    <div class="flex items-center gap-3">
        <div class="h-8 w-8 rounded-full bg-primary flex items-center justify-center text-white">
            <i class="fas fa-user"></i>
        </div>
        <span class="font-medium">{{ Auth::user()->name }}</span>
        <div class="relative group">
            <button class="text-gray-700 focus:outline-none">
                <i class="fas fa-caret-down"></i>
            </button>
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10 hidden group-hover:block">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>