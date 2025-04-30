@extends('layouts.app')
@section('content')

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

@endsection