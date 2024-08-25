<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.product.home', compact(['products', 'total']));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'item_name' => 'required',
            'unit_price' => 'required',
            'stock_qty' => 'required',
            'inventory_value' => 'required',
        ]);
        $data = Product::create($validation);
        if ($data) {
            session()->flash('success', 'Product Add Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin.products/create'));
        }
    }
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products'));
    }

    public function delete($id)
    {
        $products = Product::findOrFail($id)->delete();
        if ($products) {
            session()->flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/products'));
            // return Redirect::back();
        } else {
            session()->flash('error', 'Product Not Delete successfully');
            return redirect(route('admin/products'));
            // return Redirect::back();
        }
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $item_name = $request->item_name;
        $unit_price = $request->unit_price;
        $stock_qty = $request->stock_qty;
        $inventory_value = $request->inventory_value;

        $products->item_name = $item_name;
        $products->unit_price = $unit_price;
        $products->stock_qty = $stock_qty;
        $products->inventory_value = $inventory_value;
        $data = $products->save();
        if ($data) {
            session()->flash('success', 'Product Update Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin/products/update'));
        }
    }
}