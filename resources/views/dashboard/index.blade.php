@extends('layouts.app')

@section('content')
<main class="flex-1 p-6">
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
        <a href="create.html" class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-md flex items-center gap-2">
            <i class="fas fa-plus"></i>
            Tambah Buku
        </a>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-sm font-medium text-gray-500 mb-2">Total Buku</h3>
            <p class="text-2xl font-bold">128</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-sm font-medium text-gray-500 mb-2">Buku Dipinjam</h3>
            <p class="text-2xl font-bold">42</p>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-sm font-medium text-gray-500 mb-2">Anggota</h3>
            <p class="text-2xl font-bold">56</p>
        </div>
    </div>

    <!-- Books Table -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="p-6 border-b">
            <h2 class="text-lg font-medium">Daftar Buku</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-50 text-left">
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Buku</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Penerbit</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Deskripsi</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun Terbit</th>
                        <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">Atomic Habits</td>
                        <td class="px-6 py-4 whitespace-nowrap">Penguin Random House</td>
                        <td class="px-6 py-4 max-w-xs truncate">Tiny Changes, Remarkable Results: An Easy & Proven Way to Build Good Habits & Break Bad Ones</td>
                        <td class="px-6 py-4 whitespace-nowrap">2018</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex gap-2">
                                <a href="show.html?id=1" class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50 text-blue-600">Edit</a>
                                <button class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50 text-red-600">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">Sapiens: A Brief History of Humankind</td>
                        <td class="px-6 py-4 whitespace-nowrap">Harper</td>
                        <td class="px-6 py-4 max-w-xs truncate">A book that explores the history of the human species from the emergence of Homo sapiens in Africa.</td>
                        <td class="px-6 py-4 whitespace-nowrap">2015</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex gap-2">
                                <a href="show.html?id=2" class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50 text-blue-600">Edit</a>
                                <button class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50 text-red-600">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">Educated</td>
                        <td class="px-6 py-4 whitespace-nowrap">Random House</td>
                        <td class="px-6 py-4 max-w-xs truncate">A memoir about a young girl who leaves her survivalist family and goes on to earn a PhD from Cambridge University.</td>
                        <td class="px-6 py-4 whitespace-nowrap">2018</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex gap-2">
                                <a href="show.html?id=3" class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50 text-blue-600">Edit</a>
                                <button class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50 text-red-600">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">The Alchemist</td>
                        <td class="px-6 py-4 whitespace-nowrap">HarperOne</td>
                        <td class="px-6 py-4 max-w-xs truncate">A novel about a young Andalusian shepherd who dreams of finding worldly treasures and embarks on a journey.</td>
                        <td class="px-6 py-4 whitespace-nowrap">1988</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex gap-2">
                                <a href="show.html?id=4" class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50 text-blue-600">Edit</a>
                                <button class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50 text-red-600">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">Thinking, Fast and Slow</td>
                        <td class="px-6 py-4 whitespace-nowrap">Farrar, Straus and Giroux</td>
                        <td class="px-6 py-4 max-w-xs truncate">A book that summarizes research on human judgment and decision-making.</td>
                        <td class="px-6 py-4 whitespace-nowrap">2011</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex gap-2">
                                <a href="show.html?id=5" class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50 text-blue-600">Edit</a>
                                <button class="px-3 py-1 border border-gray-300 rounded-md hover:bg-gray-50 text-red-600">Delete</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection