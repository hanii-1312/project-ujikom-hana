@extends('layouts.app')

@section('title', 'Tambah Kategori - Panel Admin')
@section('header-title', 'Tambah Kategori Baru')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        
        <div class="p-6 border-b border-gray-200 flex items-center justify-between">
            <h3 class="text-lg font-bold text-gray-800">Form Tambah Kategori</h3>
            <a href="{{ route('admin.kategori.index') }}" 
               class="bg-gray-200 hover:bg-gray-300 text-gray-700 text-sm font-semibold px-4 py-2 rounded-lg transition">
                Kembali
            </a>
        </div>

        <form action="{{ route('admin.kategori.store') }}" method="POST" class="p-6 space-y-4">
            @csrf

            <div>
                <label for="nama_kategori" class="block text-sm font-medium text-gray-700 mb-1">
                    Nama Kategori <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       name="nama_kategori" 
                       id="nama_kategori" 
                       value="{{ old('nama_kategori') }}"
                       placeholder="Masukkan nama kategori (contoh: Elektronik, Alat Ukur)"
                       class="w-full px-3 py-2 text-sm border @error('nama_kategori') border-red-500 @else border-gray-300 @enderror rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                       required>
                @error('nama_kategori')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                <a href="{{ route('admin.kategori.index') }}" 
                   class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-lg text-sm font-semibold transition">
                    Batal
                </a>
                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg text-sm font-semibold transition shadow-sm">
                    Simpan Kategori
                </button>
            </div>
        </form>

    </div>
</div>
@endsection