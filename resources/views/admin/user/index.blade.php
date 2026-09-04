@extends('layouts.app')

@section('title', 'Manajemen Pengguna Sistem')
@section('header-title', 'Daftar Pengguna Sistem')

@section('content')
<div class="bg-white border border-slate-200 rounded-lg shadow-sm overflow-hidden">
    <!-- Card Header & Filter Search / Add Button -->
    <div class="px-6 py-4 border-b border-slate-100 flex flex-col lg:flex-row justify-between items-center gap-4">
        <h2 class="text-sm font-bold text-slate-700">Daftar Pengguna Sistem</h2>
        <div class="flex flex-wrap items-center gap-2 w-full lg:w-auto">
            <input type="text" placeholder="Cari nama atau email..." class="border border-slate-300 rounded-md px-3 py-1.5 text-xs text-slate-600 focus:outline-none focus:border-indigo-500 w-full sm:w-56">
            <select class="border border-slate-300 rounded-md px-3 py-1.5 text-xs text-slate-600 focus:outline-none focus:border-indigo-500 bg-white">
                <option value="">Semua Role</option>
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
                <option value="peminjam">Peminjam</option>
            </select>
            <button class="bg-slate-800 text-white text-xs px-4 py-1.5 rounded-md hover:bg-slate-700 transition">Cari</button>
            <a href="#" class="bg-blue-600 text-white text-xs font-semibold px-4 py-1.5 rounded-md hover:bg-blue-700 transition whitespace-nowrap ml-auto lg:ml-0">+ Tambah User</a>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-slate-200 text-[11px] font-bold text-slate-500 tracking-wider uppercase bg-slate-50/50">
                    <th class="py-3 px-6 w-16">NO</th>
                    <th class="py-3 px-6">NAMA</th>
                    <th class="py-3 px-6">EMAIL</th>
                    <th class="py-3 px-6">ROLE</th>
                    <th class="py-3 px-6">NO. HP</th>
                    <th class="py-3 px-6 text-right w-44">AKSI</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-xs text-slate-600">
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="py-4 px-6 text-slate-500">1</td>
                    <td class="py-4 px-6 font-medium text-slate-800">Bagus Karim</td>
                    <td class="py-4 px-6 text-slate-500">admin@gmail.com</td>
                    <td class="py-4 px-6">
                        <span class="px-2.5 py-1 text-[10px] font-semibold text-purple-600 bg-purple-100 rounded-full">Admin</span>
                    </td>
                    <td class="py-4 px-6 text-slate-600">081234567890</td>
                    <td class="py-4 px-6 text-right">
                        <div class="inline-flex items-center gap-1.5 justify-end">
                            <a href="#" class="bg-amber-400 hover:bg-amber-500 text-white px-3 py-1 rounded text-xs font-medium transition shadow-sm">Edit</a>
                            <form action="#" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition shadow-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="py-4 px-6 text-slate-500">2</td>
                    <td class="py-4 px-6 font-medium text-slate-800">Arif Muhammad</td>
                    <td class="py-4 px-6 text-slate-500">petugas@gmail.com</td>
                    <td class="py-4 px-6">
                        <span class="px-2.5 py-1 text-[10px] font-semibold text-blue-600 bg-blue-100 rounded-full">Petugas</span>
                    </td>
                    <td class="py-4 px-6 text-slate-600">082345678901</td>
                    <td class="py-4 px-6 text-right">
                        <div class="inline-flex items-center gap-1.5 justify-end">
                            <a href="#" class="bg-amber-400 hover:bg-amber-500 text-white px-3 py-1 rounded text-xs font-medium transition shadow-sm">Edit</a>
                            <form action="#" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition shadow-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="py-4 px-6 text-slate-500">3</td>
                    <td class="py-4 px-6 font-medium text-slate-800">Rian Setiawan</td>
                    <td class="py-4 px-6 text-slate-500">rian@gmail.com</td>
                    <td class="py-4 px-6">
                        <span class="px-2.5 py-1 text-[10px] font-semibold text-emerald-600 bg-emerald-100 rounded-full">Peminjam</span>
                    </td>
                    <td class="py-4 px-6 text-slate-600">083456789012</td>
                    <td class="py-4 px-6 text-right">
                        <div class="inline-flex items-center gap-1.5 justify-end">
                            <a href="#" class="bg-amber-400 hover:bg-amber-500 text-white px-3 py-1 rounded text-xs font-medium transition shadow-sm">Edit</a>
                            <form action="#" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition shadow-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection