@extends('layouts.app')

@section('content')
<div class="space-y-6 w-full">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
        <a href="tambah-buku.html" class="bg-primary text-white px-4 py-2 rounded-md flex items-center gap-2 hover:bg-primary-dark">
            <i class="fas fa-plus"></i>
            Tambah Buku
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-sm font-medium text-gray-500 mb-2">Total Buku</h3>
            <p class="text-2xl font-bold">128</p>
        </div>
        {{-- <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-sm font-medium text-gray-500 mb-2">Buku Dipinjam</h3>
            <p class="text-2xl font-bold">42</p>
        </div> --}}
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-sm font-medium text-gray-500 mb-2">Anggota</h3>
            <p class="text-2xl font-bold">56</p>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-sm">
        <div class="p-6 border-b flex justify-between items-center">
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection