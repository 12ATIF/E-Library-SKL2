<aside id="desktopSidebar" class="hidden md:flex w-sidebar-full bg-white shadow-md flex-col transition-all duration-300 ease-in-out">
    <div class="p-4 flex items-center gap-2 border-b relative">
        <i class="fas fa-book text-primary text-xl"></i>
        <h1 class="text-xl font-bold sidebar-text">E-Library</h1>
        <button id="desktopSidebarToggle" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
            <i class="fas fa-chevron-left"></i>
        </button>
    </div>
    
    <nav class="flex-1 p-4">
        <p class="text-xs font-medium text-gray-500 mb-2 sidebar-text">MENU</p>
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2 p-2 rounded-md {{ request()->routeIs('dashboard') ? 'bg-primary text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                    <i class="fas fa-home"></i>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('books.index') }}" class="flex items-center gap-2 p-2 rounded-md {{ request()->routeIs('books.index') ? 'bg-primary text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                    <i class="fas fa-book"></i>
                    <span class="sidebar-text">Buku</span>
                </a>
            </li>
            
            @if(Auth::user()->isAdmin())
            <li>
                <a href="{{ route('books.create') }}" class="flex items-center gap-2 p-2 rounded-md {{ request()->routeIs('books.create') ? 'bg-primary text-white' : 'text-gray-700 hover:bg-gray-100' }}">
                    <i class="fas fa-plus"></i>
                    <span class="sidebar-text">Tambah Buku</span>
                </a>
            </li>
            @endif
        </ul>
    </nav>
    
    <div class="p-4 border-t">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="flex items-center gap-2 p-2 rounded-md text-gray-700 hover:bg-gray-100 w-full text-left">
                <i class="fas fa-sign-out-alt"></i>
                <span class="sidebar-text">Logout</span>
            </button>
        </form>
    </div>
</aside>