@extends('layouts.app')

@section('title', 'Profile Perusahaan')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-center text-green-700 mb-6">Tentang Perusahaan Kami</h1>
    
    <div class="bg-green-50 shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-2xl font-semibold text-green-800">Visi Kami</h2>
        <p class="mt-2 text-gray-600">
            Visi kami adalah untuk menciptakan sebuah platform yang memudahkan petani dan konsumen dalam proses distribusi produk pertanian dan peternakan, memastikan kualitas yang terbaik untuk dunia yang lebih baik.
        </p>
    </div>

    <div class="bg-green-50 shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-2xl font-semibold text-green-800">Misi Kami</h2>
        <ul class="mt-2 list-disc list-inside text-gray-600">
            <li>Menjadi penghubung yang handal antara petani, peternak, dan konsumen.</li>
            <li>Meningkatkan efisiensi dalam distribusi produk pertanian dan peternakan.</li>
            <li>Memberikan layanan yang transparan dan berkualitas tinggi kepada semua pihak yang terlibat.</li>
        </ul>
    </div>

    <div class="bg-green-50 shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-2xl font-semibold text-green-800">Sejarah Perusahaan</h2>
        <p class="mt-2 text-gray-600">
            Perusahaan kami didirikan pada tahun 2020 dengan tujuan untuk mengoptimalkan rantai pasokan produk pertanian dan peternakan di Indonesia. Kami bekerja sama dengan berbagai petani dan peternak lokal untuk menyediakan produk berkualitas tinggi kepada konsumen.
        </p>
    </div>

    <div class="bg-green-50 shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-2xl font-semibold text-green-800">Tim Kami</h2>
        <p class="mt-2 text-gray-600">
            Tim kami terdiri dari profesional yang berpengalaman di bidang pertanian, peternakan, dan teknologi informasi, yang bekerja keras untuk memberikan layanan terbaik kepada pelanggan kami.
        </p>
    </div>

    <div class="bg-green-50 shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-2xl font-semibold text-green-800">Lokasi Kami</h2>
        <div id="map" style="width: 100%; height: 400px;"></div>
    </div>
</div>

<script>
    // Initialize the map
    var map = L.map('map').setView([-7.28125, 109.224167], 10); // Replace with your coordinates and zoom level

    // Add OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    // Add a marker for your company location
    L.marker([-7.28125, 109.224167]).addTo(map) // Replace with your coordinates
        .bindPopup('MakFarm') // Replace with your company name
        .openPopup();
</script>
@endsection