@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="relative bg-green-600 text-white">
    <img src="{{ asset('images/home.jpeg') }}" alt="Farm" class="w-full h-80 object-cover">
    <div class="absolute top-1/2 left-1/4 transform -translate-y-1/2">
        <h1 class="text-4xl font-bold">Dari Ladang dan Kandang,<br>Untuk Dunia yang Lebih Baik</h1>
    </div>
</section>
<section class="bg-white p-10 rounded-lg shadow-lg max-w-4xl mx-auto mt-10">
    <h1 class="text-3xl font-semibold text-green-600 mb-5">Service Quality</h1>
    <p class="text-lg mb-10">Kami hadir untuk menjadi solusi bagi Anda dalam sehari-hari</p>

    <!-- Circular Images with Tailwind -->
    <div class="text-center mb-8">
        <img src="https://via.placeholder.com/150" alt="Gambar Responsif" class="w-36 h-36 rounded-full object-cover mx-auto border-4 border-gray-300">
    </div>

    <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4">Harga Terjangkau</h3>
    <p class="text-lg mb-8">Kami menawarkan harga yang Terjangkau dan transparan, memastikan Anda mendapatkan harga terbaik untuk setiap produk yang dibeli.</p>

    <!-- Circular Image -->
    <div class="text-center mb-8">
        <img src="https://via.placeholder.com/150" alt="Gambar Responsif" class="w-36 h-36 rounded-full object-cover mx-auto border-4 border-gray-300">
    </div>

    <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4">Pengiriman Cepat dan Tepat Waktu</h3>
    <p class="text-lg mb-8">Dengan pengiriman yang efisien, produk sampai di tangan Anda tepat waktu dalam kondisi baik dan siap digunakan.</p>

    <!-- Circular Image -->
    <div class="text-center mb-8">
        <img src="https://via.placeholder.com/150" alt="Gambar Responsif" class="w-36 h-36 rounded-full object-cover mx-auto border-4 border-gray-300">
    </div>

    <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4">Toko Online yang Responsif</h3>
    <p class="text-lg">Website kami dirancang untuk memberikan pengalaman belanja yang optimal di semua perangkat, baik desktop, tablet, maupun smartphone.</p>
</section>
@endsection
