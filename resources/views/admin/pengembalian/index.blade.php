@extends('layouts.app')

@section('title', 'Manajemen Pengembalian Alat')
@section('header-title', 'Manajemen Pengembalian Alat')

@section('content')
<div class="bg-white border border-slate-200 rounded-lg shadow-sm overflow-hidden">
    <!-- Card Header & Filter Search -->
    <div class="px-6 py-4 border-b border-slate-100 flex flex-col lg:flex-row justify-between items-center gap-4">
        <h2 class="text-sm font-bold text-slate-700">Daftar Riwayat Pengembalian</h2>
        <form action="{{ route('admin.pengembalian.index') }}" method="GET" class="flex items-center gap-2 w-full lg:w-auto">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari nama peminjam / status..." class="border border-slate-300 rounded-md px-3 py-1.5 text-xs text-slate-600 focus:outline-none focus:border-indigo-500 w-full sm:w-64">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-xs px-4 py-1.5 rounded-md transition">Cari</button>
        </form>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-slate-200 text-[11px] font-bold text-slate-500 tracking-wider uppercase bg-slate-50/50">
                    <th class="py-3 px-6 w-16">NO</th>
                    <th class="py-3 px-6">PEMINJAM</th>
                    <th class="py-3 px-6">ALAT YANG DIKEMBALIKAN</th>
                    <th class="py-3 px-6">TGL PINJAM / PENGEMBALIAN</th>
                    <th class="py-3 px-6">DENDA</th>
                    <th class="py-3 px-6">STATUS</th>
                    <th class="py-3 px-6 text-right w-28">AKSI</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-xs text-slate-600">
                @forelse($pengembalians as $index => $item)
                <tr class="hover:bg-slate-50/50 transition">
                    <td class="py-4 px-6 text-slate-500">{{ $pengembalians->firstItem() + $index }}</td>
                    <td class="py-4 px-6 font-medium text-slate-800">{{ $item->peminjaman->user->name ?? '-' }}</td>
                    <td class="py-4 px-6 text-slate-600">
                        <!-- Sesuaikan dengan relasi data alat Anda -->
                        • {{ $item->peminjaman->alat->nama_alat ?? 'Alat' }}
                    </td>
                    <td class="py-4 px-6 text-slate-500">
                        Pinjam: {{ $item->peminjaman->tanggal_pinjam ?? '-' }}<br>
                        Kembali: {{ $item->tanggal_kembalikan ?? $item->updated_at }}
                    </td>
                    <td class="py-4 px-6 text-slate-600">Rp {{ number_format($item->denda ?? 0, 0, ',', '.') }}</td>
                    <td class="py-4 px-6">
                        <span class="px-2.5 py-1 text-[10px] font-semibold text-emerald-600 bg-emerald-100 rounded-full">
                            {{ $item->status ?? 'Dikembalikan' }}
                        </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <form action="{{ route('admin.pengembalian.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs font-medium transition shadow-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="py-6 text-center text-slate-400 text-xs">Belum ada data riwayat pengembalian.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="px-6 py-4 border-t border-slate-100">
        {{ $pengembalians->withQueryString()->links() }}
    </div>
</div>
@endsection