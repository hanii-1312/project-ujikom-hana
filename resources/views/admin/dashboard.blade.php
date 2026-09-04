@extends('layouts.app')

@section('title', 'Dashboard Admin - Sistem Peminjaman')
@section('header-title', 'Manajemen Pengguna Sistem')

@section('content')
<div class="bg-white border border-slate-200 rounded-lg shadow-sm overflow-hidden">
    <!-- Card Header -->
    <div class="px-6 py-4 border-b border-slate-100">
        <h2 class="text-sm font-bold text-slate-700">Daftar Pengguna Sistem</h2>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-slate-200 text-[11px] font-bold text-slate-500 tracking-wider uppercase bg-slate-50/50">
                    <th class="py-3 px-6">NAMA</th>
                    <th class="py-3 px-6">EMAIL</th>
                    <th class="py-3 px-6">ROLE / HAK AKSES</th>
                    <th class="py-3 px-6">NO. HP</th>
                    <th class="py-3 px-6">AKSI</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-xs text-slate-600">
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="py-4 px-6 font-medium text-slate-800">Administrator</td>
                    <td class="py-4 px-6 text-slate-500">admin@app.com</td>
                    <td class="py-4 px-6">
                        <span class="px-2.5 py-1 text-[10px] font-semibold text-purple-600 bg-purple-100 rounded-full">Admin</span>
                    </td>
                    <td class="py-4 px-6 text-slate-400">-</td>
                    <td class="py-4 px-6 text-slate-400 italic">Kelola Data</td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="py-4 px-6 font-medium text-slate-800">Petugas Lab</td>
                    <td class="py-4 px-6 text-slate-500">petugas@app.com</td>
                    <td class="py-4 px-6">
                        <span class="px-2.5 py-1 text-[10px] font-semibold text-blue-600 bg-blue-100 rounded-full">Petugas</span>
                    </td>
                    <td class="py-4 px-6 text-slate-400">-</td>
                    <td class="py-4 px-6 text-slate-400 italic">Kelola Data</td>
                </tr>
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="py-4 px-6 font-medium text-slate-800">Siswa Peminjam</td>
                    <td class="py-4 px-6 text-slate-500">peminjam@app.com</td>
                    <td class="py-4 px-6">
                        <span class="px-2.5 py-1 text-[10px] font-semibold text-emerald-600 bg-emerald-100 rounded-full">Peminjam</span>
                    </td>
                    <td class="py-4 px-6 text-slate-400">-</td>
                    <td class="py-4 px-6 text-slate-400 italic">Kelola Data</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection