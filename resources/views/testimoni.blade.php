@extends('layouts.app')

@section('title', 'Testimoni Pelanggan')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold text-gray-800">Testimoni Pelanggan dan Mitra</h1>

    <!-- Testimoni Pelanggan -->
    <div class="testimonial bg-white rounded-lg shadow-md p-6 mt-4 flex items-center">
        <img src="https://via.placeholder.com/80" alt="Pelanggan 1" class="rounded-full w-20 h-20 mr-4">
        <div class="content flex-1">
            <h3 class="text-lg font-semibold text-gray-900">Sarah M.</h3>
            <p class="text-gray-600 mt-2">"Produk dari MAK Farm selalu segar dan berkualitas! Saya senang mengetahui bahwa saya mendukung petani lokal dengan setiap pembelian saya. Highly recommended!"</p>
        </div>
    </div>

    <div class="testimonial bg-white rounded-lg shadow-md p-6 mt-4 flex items-center">
        <img src="https://via.placeholder.com/80" alt="Pelanggan 2" class="rounded-full w-20 h-20 mr-4">
        <div class="content flex-1">
            <h3 class="text-lg font-semibold text-gray-900">Rizky A.</h3>
            <p class="text-gray-600 mt-2">"Pelayanan pelanggan di MAK Farm luar biasa. Mereka selalu siap membantu dan memberikan informasi yang saya butuhkan. Produk organiknya terbaik!"</p>
        </div>
    </div>

    <!-- Cerita Mitra -->
    <div class="testimonial bg-white rounded-lg shadow-md p-6 mt-4 flex items-center">
        <img src="https://via.placeholder.com/80" alt="Mitra 1" class="rounded-full w-20 h-20 mr-4">
        <div class="content flex-1">
            <h3 class="text-lg font-semibold text-gray-900">Pak Budi, Petani Organik</h3>
            <p class="text-gray-600 mt-2">"Bermitra dengan MAK Farm membantu saya menjangkau lebih banyak pelanggan. Mereka benar-benar peduli dengan kesejahteraan petani dan kualitas produk."</p>
        </div>
    </div>

    <div class="testimonial bg-white rounded-lg shadow-md p-6 mt-4 flex items-center">
        <img src="https://via.placeholder.com/80" alt="Mitra 2" class="rounded-full w-20 h-20 mr-4">
        <div class="content flex-1">
            <h3 class="text-lg font-semibold text-gray-900">Ibu Siti, Peternak Lokal</h3>
            <p class="text-gray-600 mt-2">"Sebagai mitra MAK Farm, saya merasa dihargai. Mereka memastikan produk peternakan kami sampai ke konsumen dengan kualitas terbaik. Terima kasih MAK Farm!"</p>
        </div>
    </div>
</div>
@endsection
