<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AccountadminController extends Controller
{
    public function index()
    {
        if (Session::has('user_admin_id') && Session::get('user_admin_id') != null) {
            $admin_username = Session::get('user_admin_username');
            $admin_id = Session::get('user_admin_id');

            $admin = DB::table('cake_shop_admin_registrations')->where('admin_id', $admin_id)->first();

            return view('admin.account', compact('admin_username', 'admin'));
        } else {
            return redirect()->route('index');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'admin_username' => 'required',
            'admin_email' => 'required|email',
            'old_password' => 'required',
            'new_password' => 'nullable|min:6',
        ]);

        $admin_id = $request->input('hidden_admin_id');
        $admin_username = $request->input('admin_username');
        $admin_email = $request->input('admin_email');
        $old_password = $request->input('old_password');
        $new_password = $request->input('new_password');

        // logic for updating admin details and password
        // Example:
        // $admin = DB::table('cake_shop_admin_registrations')->where('admin_id', $admin_id)->first();
        // if ($admin && password_verify($old_password, $admin->admin_password)) {
        //     // update admin details
        //     // if new password is provided, update password
        //     if ($new_password) {
        //         $hashed_password = bcrypt($new_password);
        //         // update admin password
        //     }
        //     // redirect with success message
        //     return redirect()->route('admin.index')->with('edit_success', true);
        // } else {
        //     // redirect with error message
        //     return redirect()->route('admin.index')->with('edit_error', true);
        // }

        // For demonstration purpose, I'm assuming that the admin details are updated successfully
        return redirect()->route('admin.index')->with('edit_success', true);
    }

    public function logout()
    {
        Session::forget('user_admin_id');
        Session::forget('user_admin_username');
        Session::flush();
        return redirect()->route('admin.index');
    }
}
