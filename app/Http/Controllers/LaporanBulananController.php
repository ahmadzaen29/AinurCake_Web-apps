<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanBulananController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel cake_shop_orders
        $orders = DB::table('cake_shop_orders')->get();
        $admin_username = session('user_admin_username');

        // Periksa apakah ada data
        if ($orders->isEmpty()) {
            // Jika tidak ada data, lakukan sesuatu, seperti mengembalikan pesan kesalahan atau mengirimkan data kosong ke view
            return view('admin.laporan_bulanan', compact('orders', 'admin_username'));
        }

        // Jika ada data, kirimkan data ke view
        return view('admin.laporan_bulanan', compact('orders', 'admin_username'));
    }

    public function printReport()
{
    // Di sini Anda dapat menambahkan logika untuk mencetak laporan, jika diperlukan
    // Misalnya, Anda dapat menggunakan fungsi PHP untuk membuat file PDF atau format laporan lainnya
    
    // Setelah selesai mencetak laporan, Anda dapat mengarahkan pengguna kembali ke halaman sebelumnya
    return redirect()->back()->with('success', 'Laporan berhasil dicetak!');
}
}