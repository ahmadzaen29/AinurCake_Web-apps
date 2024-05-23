<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Check if user admin ID exists in session
        if (Session::has('user_admin_id') && Session::get('user_admin_id') != null) {
            // If user admin ID exists, retrieve admin username from session
            $admin_username = Session::get('admin_username');

            // Fetch categories
            $categories = DB::table('cake_shop_category')->get();

            // Fetch users
            $users = DB::table('cake_shop_users_registrations')->get();

            // Return the view with users, categories, and admin username
            return view('admin.view_users', compact('users', 'categories', 'admin_username'));
        } else {
            // If user admin ID doesn't exist in session or is null, redirect to admin index
            return redirect()->route('admin.index');
        }
    }

    public function getUserDetails(Request $request)
    {
        $users_id = $request->input('users_id');
        $user = DB::table('cake_shop_users_registrations')->where('users_id', $users_id)->first();
        return response()->json($user);
    }

    public function editUser(Request $request)
    {
        $users_id = $request->input('hidden_users');
        $users_username = $request->input('users_username');
        $users_email = $request->input('users_email');
        $users_mobile = $request->input('users_mobile');
        $users_address = $request->input('users_address');

        // Update data pengguna di database
        DB::table('cake_shop_users_registrations')
            ->where('users_id', $users_id)
            ->update([
                'users_username' => $users_username,
                'users_email' => $users_email,
                'users_mobile' => $users_mobile,
                'users_address' => $users_address,
            ]);

        // Set pesan sukses
        Session::flash('edit_msg', 1);

        // Redirect kembali ke halaman view_users
        return redirect()->route('admin.view_users');
    }

    public function delete($users_id)
    {
        // Hapus baris terkait di cake_shop_orders
        DB::table('cake_shop_orders')->where('users_id', $users_id)->delete();

        // Hapus baris dari cake_shop_users_registrations
        DB::table('cake_shop_users_registrations')->where('users_id', $users_id)->delete();

        return redirect()->route('admin.view_users');
    }
}