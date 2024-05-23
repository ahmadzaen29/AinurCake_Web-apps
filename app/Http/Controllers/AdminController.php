<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
public function index()
{
return view('admin.index');
}

public function login(Request $request)
{
$admin_username = $request->input('admin_username');
$admin_password = $request->input('admin_password');

// Lakukan validasi login di sini
$admin = DB::table('cake_shop_admin_registrations')
->where('admin_username', $admin_username)
->first();

if ($admin && Hash::check($admin_password, $admin->admin_password)) {
Session::put('user_admin_id', $admin->admin_id);
Session::put('user_admin_username', $admin_username);
return redirect()->route('admin.dashboard')->with('login_success', true);
}

return redirect()->route('admin.index')->with('login_error', true);
}

public function dashboard()
{
if (session('user_admin_id')) {
$admin_username = session('user_admin_username');
$userCount = DB::table('cake_shop_users_registrations')->count();
$pengeluaran_hari_ini = DB::table('pengeluaran')->whereDate('tgl_pengeluaran', today())->sum('jumlah');
$pemasukan_hari_ini = DB::table('cake_shop_orders')->whereDate('order_date', today())->sum('total_amount');
$pemasukan = DB::table('cake_shop_orders')->sum('total_amount');
$pengeluaran = DB::table('pengeluaran')->sum('jumlah');
$uang = $pemasukan - $pengeluaran;

$sekarang = DB::table('cake_shop_orders')->whereDate('order_date', today())->value('total_amount');

return view('admin.dashboard', compact('admin_username', 'userCount', 'pengeluaran_hari_ini', 'pemasukan_hari_ini',
'pemasukan', 'pengeluaran', 'uang', 'sekarang'));
}

return redirect()->route('admin.index');
}

 // Method untuk menampilkan form lupa kata sandi
 public function showForgotPasswordForm()
 {
     return view('admin.forgot_password');
 }

 // Method untuk menangani proses pengiriman email lupa kata sandi
 public function sendResetPasswordEmail(Request $request)
 {
     $request->validate([
         'email' => 'required|email'
     ]);

     $status = Password::sendResetLink($request->only('email'));

     return $status === Password::RESET_LINK_SENT
                 ? back()->with(['success' => __($status)])
                 : back()->withErrors(['email' => __($status)]);
 }

 // Method untuk menampilkan form reset kata sandi
 public function showResetPasswordForm(Request $request)
 {
     return view('admin.reset_password', ['email' => $request->email]);
 }

 // Method untuk menangani proses reset kata sandi
 public function resetPassword(Request $request)
 {
     $request->validate([
         'email' => 'required|email',
         'password' => 'required|confirmed|min:8',
         'token' => 'required'
     ]);

     $status = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
         $user->password = Hash::make($password);
         $user->save();
     });

     return $status == Password::PASSWORD_RESET
                 ? redirect()->route('admin.login')->with('success', __($status))
                 : back()->withErrors(['email' => [__($status)]]);
 }

 public function account()
    {
        if (Session::has('user_admin_id') && Session::get('user_admin_id') != null) {
            $admin_username = Session::get('user_admin_username');
            $admin_id = Session::get('user_admin_id');

            $admin = DB::table('cake_shop_admin_registrations')->where('admin_id', $admin_id)->first();

            return view('admin.account_admin', compact('admin_username', 'admin'));
        } else {
            return redirect()->route('account_admin');
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

    // Fetch the current admin details
    // $admin = Admin::find($admin_id);
    $admin = DB::table('cake_shop_admin_registrations')->where('admin_id', $admin_id)->first();

    // Validate old password
    if (!Hash::check($old_password, $admin->admin_password)) {
        // If old password is incorrect, redirect with error message
        return redirect()->back()->with('edit_error', true);
    }

    // Update admin details
    DB::table('cake_shop_admin_registrations')
        ->where('admin_id', $admin_id)
        ->update([
            'admin_username' => $admin_username,
            'admin_email' => $admin_email,
            'admin_password' => bcrypt($new_password), // Update password only if new password is provided
        ]);

    // Redirect with success message
    return redirect()->route('admin.account_admin')->with('edit_success', true);
}

}