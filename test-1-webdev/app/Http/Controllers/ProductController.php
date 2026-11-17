<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // READ (list)
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    // CREATE (form)
    public function create()
    {
        return view('products.create');
    }

    // CREATE (simpan)
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    // READ (detail) - Route Model Binding
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // UPDATE (form) - Route Model Binding
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // UPDATE (simpan) - Route Model Binding
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diupdate');
    }

    // DELETE - Route Model Binding
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }
}
