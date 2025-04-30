@extends('layouts.app')

@section('content')
    
<main class="flex-1 p-4 sm:p-6">
    <div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <h1 class="text-xl sm:text-2xl font-bold text-gray-900">Detail Buku</h1>
        <div class="flex flex-wrap gap-2">
            <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-blue-600">Edit</button>
            <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-red-600">Delete</button>
            <a href="index.html" class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md">Kembali</a>
        </div>
    </div>

    <!-- Book Details Card -->
    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
        <div class="p-4 sm:p-6 border-b">
            <h2 class="text-lg font-medium" id="bookTitle">Atomic Habits</h2>
        </div>
        <div class="p-4 sm:p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <div class="mb-4">
                        <h3 class="text-sm font-medium text-gray-500">Penerbit</h3>
                        <p class="mt-1" id="bookPublisher">Penguin Random House</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-sm font-medium text-gray-500">Tahun Terbit</h3>
                        <p class="mt-1" id="bookYear">2018</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-sm font-medium text-gray-500">Jumlah Halaman</h3>
                        <p class="mt-1" id="bookPages">320</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-500">Deskripsi</h3>
                    <p class="mt-1" id="bookDescription">Tiny Changes, Remarkable Results: An Easy & Proven Way to Build Good Habits & Break Bad Ones</p>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection