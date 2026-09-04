@extends('layouts.app')

@section('title', 'Manajemen Kategori Alat')
@section('header-title', 'Manajemen Kategori Alat')

@section('content')
<div class="bg-white border border-slate-200 rounded-lg shadow-sm overflow-hidden">
    <!-- Card Header & Search / Add Button -->
    <div class="px-6 py-4 border-b border-slate-100 flex flex-col md:flex-row justify-between items-center gap-4">
        <h2 class="text-sm font-bold text-slate-700">Daftar Kategori Alat</h2>
        <div class="flex items-center gap-3 w-full md:w-auto">
            <input type="text" placeholder="Cari nama kategori..." class="border border-slate-300 rounded-md px-3 py-1.5 text-xs text-slate-600 focus:outline-none focus:border-indigo-500 w-full md:w-64">
            <button class="bg-slate-800 text-white text-xs px-4 py-1.5 rounded-md hover:bg-slate-700 transition">Cari</button>
            <a href="{{ route('admin.kategori.create') }}" class="bg-blue-600 text-white text-xs font-semibold px-4 py-1.5 rounded-md hover:bg-blue-700 transition whitespace-nowrap">+ Tambah Kategori</a>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-slate-200 text-[11px] font-bold text-slate-500 tracking-wider uppercase bg-slate-50/50">
                    <th class="py-3 px-6 w-16">NO</th>
                    <th class="py-3 px-6">NAMA KATEGORI</th>
                    <th class="py-3 px-6 text-right w-48">AKSI</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-xs text-slate-600">
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="py-4 px-6">1</td>
                    <td class="py-4 px-6 font-medium text-slate-800">furniture</td>
                    <td class="py-4 px-6 text-right">
                        <div class="inline-flex items-center gap-1.5 justify-end">
                            <a href="#" class="bg-amber-400 hover:bg-amber-500 text-white px-3 py-1 rounded text-xs font-medium transition">Edit</a>
                            <form action="#" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="py-4 px-6">2</td>
                    <td class="py-4 px-6 font-medium text-slate-800">Jaringan & Konektivitas</td>
                    <td class="py-4 px-6 text-right">
                        <div class="inline-flex items-center gap-1.5 justify-end">
                            <a href="#" class="bg-amber-400 hover:bg-amber-500 text-white px-3 py-1 rounded text-xs font-medium transition">Edit</a>
                            <form action="#" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="py-4 px-6">3</td>
                    <td class="py-4 px-6 font-medium text-slate-800">Multimedia & Audio Visual</td>
                    <td class="py-4 px-6 text-right">
                        <div class="inline-flex items-center gap-1.5 justify-end">
                            <a href="#" class="bg-amber-400 hover:bg-amber-500 text-white px-3 py-1 rounded text-xs font-medium transition">Edit</a>
                            <form action="#" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection