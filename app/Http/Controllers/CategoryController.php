<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('cake_shop_category')->get();
        $admin_username = session('user_admin_username');
        return view('admin.view_category', compact('categories', 'admin_username'));
    }

    public function addCategory()
    {
        return view('admin.add_category');
    }

    public function insertCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_image' => 'required|array',
            'category_image.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $category_name = $request->input('category_name');
        $image_paths = [];

        if ($request->hasFile('category_image')) {
            foreach ($request->file('category_image') as $image) {
                $new_image_name = time() . '-' . $image->getClientOriginalName();
                $path = $image->storeAs('public/uploads', $new_image_name);
                $image_paths[] = $new_image_name;
            }
        }

        DB::table('cake_shop_category')->insert([
            'category_name' => $category_name,
            'category_image' => json_encode($image_paths)
        ]);

        return redirect()->route('admin.view_category')->with('add_msg', 1);
    }

    public function editCategory(Request $request)
    {
        $category_id = $request->input('hidden_category');
        $category_name = $request->input('category_name');
        $image_paths = [];

        if ($request->hasFile('category_image')) {
            $images = $request->file('category_image');
            foreach ($images as $image) {
                $new_image_name = time() . '-' . $image->getClientOriginalName();
                $path = $image->storeAs('public/uploads', $new_image_name);
                $image_paths[] = $new_image_name;
            }
        } else {
            $existing_category = DB::table('cake_shop_category')->where('category_id', $category_id)->first();
            $image_paths = json_decode($existing_category->category_image, true) ?? [];
        }

        DB::table('cake_shop_category')
            ->where('category_id', $category_id)
            ->update([
                'category_name' => $category_name,
                'category_image' => json_encode($image_paths)
            ]);

        return redirect()->route('admin.view_category')->with('edit_msg', 1);
    }

    public function getCategory(Request $request)
    {
        $category_id = $request->input('id');
        $category = DB::table('cake_shop_category')->where('category_id', $category_id)->first();
        return response()->json($category);
    }
    public function deleteCategory(Request $request)
    {
        $category_id = $request->input('cat_id');
        DB::table('cake_shop_category')->where('category_id', $category_id)->delete();
        return redirect()->route('admin.view_category');
    }
}
