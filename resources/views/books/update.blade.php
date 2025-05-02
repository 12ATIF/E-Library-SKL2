@extends('layouts.app')
@section('content')

                <!-- Form Card -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="p-4 sm:p-6 border-b">
                        <h2 class="text-lg font-medium">Update Data Buku</h2>
                    </div>
                    <div class="p-4 sm:p-6">
                        <form action="index.html" method="GET" class="space-y-4 sm:space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Nama Buku</label>
                                    <input type="text" id="title" name="title" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan nama buku">
                                </div>
                                <div>
                                    <label for="publisher" class="block text-sm font-medium text-gray-700 mb-1">Penerbit</label>
                                    <input type="text" id="publisher" name="publisher" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan nama penerbit">
                                </div>
                            </div>

                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                                <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan deskripsi buku"></textarea>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                                <div>
                                    <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Tahun Terbit</label>
                                    <input type="number" id="year" name="year" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan tahun terbit">
                                </div>
                                <div>
                                    <label for="pages" class="block text-sm font-medium text-gray-700 mb-1">Jumlah Halaman</label>
                                    <input type="number" id="pages" name="pages" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan jumlah halaman">
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row justify-end gap-2">
                                <a href="index.html" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 text-center">Batal</a>
                                <button type="submit" class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
    
@endsection