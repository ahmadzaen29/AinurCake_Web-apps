<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sumber;
use App\Models\Pengeluaran;
use App\Models\Catatan;
use Illuminate\Support\Facades\Auth;

class PengeluaranController extends Controller
{
    public function index()
    {
        // Ambil data sumber dari tabel sumber
        $sumbers = Sumber::whereIn('id_sumber', [11, 12, 13, 14])->get();

        // Ambil data pengeluaran dari tabel pengeluaran
        $pengeluarans = Pengeluaran::whereIn('id_sumber', [11, 12, 13, 14])->get()->groupBy('id_sumber');

        // Persiapkan data untuk ditampilkan
        $sumberData = [];
        foreach ($sumbers as $sumber) {
            $sumberData[$sumber->id_sumber] = [
                'nama' => $sumber->nama,
                'jumlah' => $pengeluarans[$sumber->id_sumber]->sum('jumlah') ?? 0,
                'count' => ($pengeluarans[$sumber->id_sumber]->count() ?? 0) * 4,
                'count_text' => $pengeluarans[$sumber->id_sumber]->count() ?? 0
            ];
        }

        // Ambil catatan dari tabel catatan
        $catatan1 = Catatan::find(3);
        $catatan2 = Catatan::find(4);

        // Ambil nama admin dari session atau dari user yang sedang masuk
        $admin_username = Auth::user()->name ?? session('user_admin_username') ?? 'Guest';

        // Ambil data transaksi pengeluaran
        $transaksi_pengeluaran = Pengeluaran::all();

        // Kembalikan view bersama dengan data
        return view('admin.pengeluaran', compact('sumberData', 'catatan1', 'catatan2', 'admin_username', 'transaksi_pengeluaran'));
    }
}