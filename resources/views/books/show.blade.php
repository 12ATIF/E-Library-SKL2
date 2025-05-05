@extends('layouts.app')

@section('content')
    
<div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
    <h1 class="text-xl sm:text-2xl font-bold text-gray-900">Detail Buku</h1>
    <div class="flex flex-wrap gap-2">
        @if(Auth::user()->isAdmin())
        <a href="{{ route('books.edit', $book) }}" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-blue-600">Edit</a>
        
        <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-red-600">Hapus</button>
        </form>
        @endif
        
        <a href="{{ route('books.index') }}" class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md">Kembali</a>
    </div>
</div>

<!-- Book Details Card -->
<div class="bg-white rounded-lg shadow-sm overflow-hidden">
    <div class="p-4 sm:p-6 border-b">
        <h2 class="text-lg font-medium" id="bookTitle">{{ $book->name }}</h2>
    </div>
    <div class="p-4 sm:p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-500">Penerbit</h3>
                    <p class="mt-1" id="bookPublisher">{{ $book->publisher }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-500">Tahun Terbit</h3>
                    <p class="mt-1" id="bookYear">{{ $book->publication_year }}</p>
                </div>
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-500">Jumlah Halaman</h3>
                    <p class="mt-1" id="bookPages">{{ $book->page_count }}</p>
                </div>
            </div>
            <div>
                <h3 class="text-sm font-medium text-gray-500">Deskripsi</h3>
                <p class="mt-1" id="bookDescription">{{ $book->description }}</p>
            </div>
        </div>
    </div>
</div>

@endsection