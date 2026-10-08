@extends('layouts.app')

@section('title', 'Dashboard Admin - Sistem Peminjaman')
@section('header-title', 'Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Ringkasan Aktivitas Sistem -->
    <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-6 py-4 rounded-lg shadow-sm">
        Selamat datang, {{ auth()->user()->name ?? 'Administrator' }}! Anda login sebagai hak akses <strong>{{ auth()->user()->role ?? 'admin' }}</strong>.
    </div>

    <!-- Log Aktivitas Terbaru -->
    <div class="bg-white border border-slate-200 rounded-lg shadow-sm overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-100">
            <h2 class="text-sm font-bold text-slate-700">Log Aktivitas Terbaru</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-slate-200 text-[11px] font-bold text-slate-500 tracking-wider uppercase bg-slate-50/50">
                        <th class="py-3 px-6">WAKTU</th>
                        <th class="py-3 px-6">USER</th>
                        <th class="py-3 px-6">AKTIVITAS</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-xs text-slate-600">
                    @forelse($logs as $log)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="py-4 px-6 text-slate-500">{{ $log->created_at }}</td>
                        <td class="py-4 px-6 font-medium text-slate-800">{{ $log->user->name ?? 'System' }}</td>
                        <td class="py-4 px-6 text-slate-600">{{ $log->aktivitas }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="py-4 px-6 text-center text-slate-400 italic">Belum ada aktivitas tercatat.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection