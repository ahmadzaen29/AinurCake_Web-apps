<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB facade
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('cake_shop_product')
    ->join('cake_shop_category', 'cake_shop_product.product_category', '=', 'cake_shop_category.category_id',)
    ->select('cake_shop_product.product_id', 'cake_shop_product.product_name', 'cake_shop_product.product_price', 'cake_shop_product.unit', 'cake_shop_product.product_description', 'cake_shop_product.product_image', 'cake_shop_category.category_name') // Pastikan nama kolom sesuai
    ->get();

    $admin_username = session('user_admin_username');
    $categories = Category::all(); // Tambahkan ini untuk mendapatkan daftar kategori


    return view('admin.view_product', compact('products', 'admin_username','categories'));
    }

    public function addProduct()
    {
        $categories = Category::all();
        return view('admin.add_product', compact('categories'));
    }


    public function insertProduct(Request $request)
{
    $request->validate([
        'product_id' => 'required|integer',
        'product_name' => 'required|string|max:100',
        'product_category' => 'required|integer',
        'product_price' => 'required|string|max:100',
        'unit' => 'required|string|max:50',
        'product_description' => 'required|string|max:300',
        'product_image' => 'required|array',
        'product_image.*' => 'image|mimes:jpeg,png,jpg|max:2048'
    ]);

    $product_id = $request->input('product_id');
    $product_name = $request->input('product_name');
    $product_category = $request->input('product_category');
    $product_price = $request->input('product_price');
    $unit = $request->input('unit');
    $product_description = $request->input('product_description');
    $image_paths = [];

    if ($request->hasFile('product_image')) {
        foreach ($request->file('product_image') as $image) {
            $new_image_name = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('public/uploads', $new_image_name);
            $image_paths[] = $new_image_name;
        }
    }

    DB::table('cake_shop_product')->insert([
        'product_id' => $product_id,
        'product_name' => $product_name,
        'product_category' => $product_category,
        'product_price' => $product_price,
        'unit' => $unit,
        'product_description' => $product_description,
        'product_image' => json_encode($image_paths)
    ]);

    return redirect()->route('admin.view_product')->with('add_msg', 2);
}
//edit product
public function update(Request $request)
{
    $request->validate([
        'product_name' => 'required',
        'product_category' => 'required',
        'product_price' => 'required | numeric',
        'product_unit' => 'required',
        'product_description' => 'required',
    ]);
    $hidden_id = $request->input('hidden_product');
    $product_name = $request->input('product_name');
    $product_price = $request->input('product_price');
    $product_unit = $request->input('product_unit');
    $product_description = $request->input('product_description');
    $new_product = $request->input('new_product');

    // Fetch the current admin details
    // $admin = Admin::find($admin_id);
    $admin = DB::table('cake_shop_orders')->where('hidden_product', $hidden_id)->first();

    // Validate old password
    if (!Hash::check($product_name, $product_price,$product_unit,$product_description, $admin->admin_edit_product)) {
        // If old password is incorrect, redirect with error message
        return redirect()->back()->with('edit_error', true);
    }

    // Update admin details
    DB::table('cake_shop_product')
        ->where('hidden_product', $hidden_id)
        ->update([
            'admin_username' => $product_name,
            'product_price' => $product_price,
            'product_unit' => $product_unit,
            'product_description' => $product_description,

            'admin_password' => bcrypt($new_product), // Update password only if new password is provided
        ]);

    // Redirect with success message
    return redirect()->route('admin.edit_product')->with('edit_success', true);
}
    public function destroy($id)
    {
        $product = DB::table('cake_shop_product')->where('product_id', $id)->first();

        // Hapus gambar produk dari penyimpanan
        $images = explode(', ', $product->product_image);
        foreach ($images as $image) {
            Storage::delete('public/uploads/' . $image);
        }

        DB::table('cake_shop_product')->where('product_id', $id)->delete();

        return redirect()->route('admin.view_product')->with('success', 'Product deleted successfully');
    }
}