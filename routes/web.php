<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LaporanBulananController;


Route::get('/', function () {
    return view('admin.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/account_admin', [AdminController::class, 'account'])->name('admin.account_admin');
    Route::post('/update_admin', [AdminController::class, 'update'])->name('admin.update_admin');
    Route::get('/view_users', [UserController::class, 'index'])->name('admin.view_users');
    Route::get('/delete_users/{users_id}', [UserController::class, 'delete'])->name('admin.delete_users');
    Route::get('/get_user_details', [UserController::class, 'getUserDetails'])->name('admin.get_user_details');
    Route::post('/edit_users', [UserController::class, 'editUser'])->name('admin.edit_users');

    // Category Routes
    Route::get('/view_category', [CategoryController::class, 'index'])->name('admin.view_category');
    Route::post('/edit_category', [CategoryController::class, 'editCategory'])->name('admin.edit_category');
    Route::get('/get_category', [CategoryController::class, 'getCategory'])->name('admin.get_category');
    Route::get('/delete_category', [CategoryController::class, 'deleteCategory'])->name('admin.delete_category');
    Route::post('/add_category', [CategoryController::class, 'addCategory'])->name('admin.add_category');

    // Routes for password reset functionality
    Route::get('/forgot_password', [AdminController::class, 'showForgotPasswordForm'])->name('admin.forgot_password');
    Route::post('/forgot_password', [AdminController::class, 'sendResetPasswordEmail'])->name('admin.send_reset_password_email');
    Route::get('/reset_password', [AdminController::class, 'showResetPasswordForm'])->name('admin.reset_password');
    Route::post('/reset_password', [AdminController::class, 'resetPassword'])->name('admin.reset_password_process');
    Route::get('/add_category', [CategoryController::class, 'addCategory'])->name('admin.add_category');
    Route::post('/insert_category', [CategoryController::class, 'insertCategory'])->name('admin.insert_category');
    Route::get('/view_category', [CategoryController::class, 'index'])->name('admin.view_category');

    Route::get('/view_product', [ProductController::class, 'index'])->name('admin.view_product');
    Route::post('/update_product/{id}', [ProductController::class, 'update'])->name('admin.update_product');

    Route::get('/view_product', [ProductController::class, 'index'])->name('admin.view_product'); // Tampilkan semua produk
    Route::get('/edit_product', [ProductController::class, 'edit'])->name('admin.edit_product'); // Halaman edit produk
    Route::post('/update_product', [ProductController::class, 'update'])->name('admin.update_product'); // Update produk
    Route::get('/delete_product/{id}', [ProductController::class, 'destroy'])->name('admin.delete_product'); // Hapus produk
    Route::get('/add_product', [ProductController::class, 'addProduct'])->name('admin.add_product');
    Route::post('/insert_product', [ProductController::class, 'insertProduct'])->name('admin.insert_product');

      // Routes for Pengeluaran functionality
    Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('admin.pengeluaran'); // Tampilkan pengeluaran

    // Routes for Order functionality
    Route::get('/view_orders.', [OrderController::class, 'index'])->name('admin.view_orders'); // Tampilkan Order
    Route::get('/delete_orders', [OrderController::class, 'deleteOrders'])->name('admin.delete_orders'); // Hapus order
    Route::get('/delete_orders_detail', [OrderController::class, 'deleteOrdersDetail'])->name('admin.delete_orders_detail'); // Hapus Order Detail

    Route::get('/laporan_bulanan', [LaporanBulananController::class, 'index'])->name('admin.laporan_bulanan'); // Tampilkan laporan bulanan
    Route::get('/print_report', [LaporanBulananController::class, 'printReport'])->name('admin.print_report');
});