<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); 

        return view('marketplace', compact('products'));
    }


    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    // Simpan gambar jika ada
    if ($request->hasFile('image')) {

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName); 
        
        $validatedData['gambar'] = $imageName;
    }

    // Simpan produk baru ke database
    Product::create([
        'nama' => $validatedData['name'],
        'harga' => $validatedData['price'],
        'deskripsi' => $validatedData['description'],
        'gambar' => $validatedData['gambar'] ?? null,  // Jika tidak ada gambar, simpan null
    ]);

    return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan!');
}



    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    // Validasi input
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    // Cek jika ada gambar yang diupload
    if ($request->hasFile('image')) {
        // Hapus gambar lama
        if ($product->gambar) {
            $oldImagePath = public_path('images/' . $product->gambar);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Hapus gambar lama
            }
        }

        // Simpan gambar baru ke public/images
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension(); // Nama file gambar
        $image->move(public_path('images'), $imageName); // Pindahkan gambar ke public/images

        // Update data gambar
        $validatedData['gambar'] = $imageName;
    }

    // Update produk
    $product->update([
        'nama' => $validatedData['name'],
        'harga' => $validatedData['price'],
        'deskripsi' => $validatedData['description'],
        'gambar' => isset($validatedData['gambar']) ? $validatedData['gambar'] : $product->gambar,
    ]);

    return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diupdate!');
}




    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus gambar dari folder public jika ada
        if ($product->gambar) {
            $oldImagePath = public_path('images/' . $product->gambar);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Menghapus gambar
            }
        }

        // Hapus produk dari database
        $product->delete();

        return response()->json(['message' => 'Produk dihapus!']);
    }



    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        return response()->json($product);
    }


}
