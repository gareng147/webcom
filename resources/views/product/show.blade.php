<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>
    <h1>{{ $product->nama }}</h1>
    <img src="{{ asset('images/' . $product->gambar) }}" alt="{{ $product->nama }}" class="w-full h-48 object-cover rounded-lg">
    <p><strong>Harga:</strong> Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
    <p><strong>Deskripsi:</strong> {{ $product->deskripsi }}</p>
</body>
</html>
