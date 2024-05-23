<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    // Fungsi untuk menampilkan halaman daftar pesanan
    public function index()
    {
        // Ambil data dari tabel cake_shop_orders
        $orders = DB::table('cake_shop_orders')->get();
        $cake_shop_orders_detail = DB::table('cake_shop_orders_detail')->get();
        $admin_username = session('user_admin_username');

        return view('admin.view_orders', compact('orders', 'cake_shop_orders_detail', 'admin_username'));
    }

    // Fungsi untuk menghapus pesanan
    public function deleteOrders(Request $request)
    {
        // Ambil ID pesanan dari query string
        $orders_id = $request->query('orders_id');

        // Hapus pesanan berdasarkan ID
        DB::table('cake_shop_orders')->where('orders_id', $orders_id)->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('admin.view_orders')->with('delete_msg', 'Order has been deleted successfully!');
    }

    // Fungsi untuk menghapus detail pesanan
    public function deleteOrdersDetail(Request $request)
    {
        // Ambil ID pesanan dari query string
        $orders_id = $request->query('orders_id');

        // Hapus detail pesanan berdasarkan ID
        DB::table('cake_shop_orders_detail')->where('orders_id', $orders_id)->delete();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('admin.view_orders')->with('delete_msg', 'Order has been deleted successfully!');
    }

    // Fungsi untuk menampilkan detail pesanan
    public function getOrder(Request $request, $order_id)
    {
        // Ambil data pesanan berdasarkan ID
        $order = DB::table('cake_shop_orders')->where('orders_id', $order_id)->first();

        // Kembalikan data dalam format JSON
        return response()->json($order);
    }

    // Fungsi untuk mengupdate pesanan
    public function updateOrder(Request $request)
    {
        // Ambil data pesanan dari request
        $data = $request->only(['orders_id', 'users_username', 'order_date', 'delivery_date', 'payment_method', 'total_amount', 'status']);

        // Update data pesanan berdasarkan ID
        DB::table('cake_shop_orders')->where('orders_id', $data['orders_id'])->update($data);

        // Kembalikan respons
        return response()->json(['message' => 'Order updated successfully']);
    }

    // Fungsi untuk mengupdate detail pesanan
    public function updateOrderDetail(Request $request)
    {
        // Ambil data detail pesanan dari request
        $data = $request->only(['orders_detail_id', 'product_name', 'quantity']);

        // Update data detail pesanan berdasarkan ID
        DB::table('cake_shop_orders_detail')->where('orders_detail_id', $data['orders_detail_id'])->update($data);

        // Kembalikan respons
        return response()->json(['message' => 'Order detail updated successfully']);
    }
}