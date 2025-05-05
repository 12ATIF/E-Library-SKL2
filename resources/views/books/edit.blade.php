@extends('layouts.app')
@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Edit Buku</h1>
    <a href="{{ route('books.index') }}" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-center">
        <i class="fas fa-arrow-left mr-2"></i> Kembali
    </a>
</div>

@if ($errors->any())
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
    <ul class="list-disc pl-5">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Form Card -->
<div class="bg-white rounded-lg shadow-sm overflow-hidden">
    <div class="p-4 sm:p-6 border-b">
        <h2 class="text-lg font-medium">Form Edit Buku</h2>
    </div>
    <div class="p-4 sm:p-6">
        <form action="{{ route('books.update', $book) }}" method="POST" class="space-y-4 sm:space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Buku</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $book->name) }}" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan nama buku">
                </div>
                <div>
                    <label for="publisher" class="block text-sm font-medium text-gray-700 mb-1">Penerbit</label>
                    <input type="text" id="publisher" name="publisher" value="{{ old('publisher', $book->publisher) }}" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan nama penerbit">
                </div>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan deskripsi buku">{{ old('description', $book->description) }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                <div>
                    <label for="publication_year" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit</label>
                    <input type="number" id="publication_year" name="publication_year" value="{{ old('publication_year', $book->publication_year) }}" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan tahun terbit">
                </div>
                <div>
                    <label for="page_count" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Halaman</label>
                    <input type="number" id="page_count" name="page_count" value="{{ old('page_count', $book->page_count) }}" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan jumlah halaman">
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-end gap-2">
                <a href="{{ route('books.index') }}" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-center">Batal</a>
                <button type="submit" class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md">Update</button>
            </div>
        </form>
    </div>
</div>
    
@endsection