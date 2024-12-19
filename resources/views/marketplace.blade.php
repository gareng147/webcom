@extends('layouts.app')

@section('title', 'Marketplace')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold">Marketplace</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
        @foreach($products as $product)
        <div class="bg-white p-4 rounded-lg shadow-lg">
            <img src="{{ asset('images/' . $product['gambar']) }}" alt="{{ $product['nama'] }}" 
            class="w-full aspect-[4/3] object-cover rounded-lg">
            <h2 class="text-xl font-semibold mt-2">{{ $product['nama'] }}</h2>
            <p class="text-green-600 mt-2">Rp {{ number_format($product['harga'], 0, ',', '.') }}</p>
            
            <!-- Tombol Lihat Detail -->
            <button class="btn mt-4 bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400"
                onclick="showProductDetail({{ $product->id }})">
                Lihat Detail
            </button>
    
            <!-- Tombol Beli -->
            <a href="https://wa.me/6285931957787?text={{ urlencode('Halo, saya ingin membeli produk: ' . $product['nama']) }}" 
                target="_blank"
                class="btn mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 inline-block">
                Beli
            </a>
        </div>
        @endforeach
    </div>

    
    <div id="productModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden z-50">
        <div class="bg-white p-6 rounded-lg w-11/12 sm:w-3/4 lg:w-1/2 max-w-lg relative">
            <button class="absolute top-2 right-2 text-gray-500" onclick="closeProductModal()">&times;</button>
            <h2 id="modalProductName" class="text-2xl font-bold mb-4"></h2>
            <img id="modalProductImage" src="" alt="" class="w-full aspect-[4/3] object-cover rounded-lg">
            <p id="modalProductPrice" class="text-green-600 text-lg mb-4"></p>
            <p id="modalProductDescription" class="text-gray-700"></p>
        </div>
    </div>

    
    <div class="fixed bottom-4 left-4">
        <a 
            href="{{ auth()->check() ? route('admin.dashboard') : route('login') }}" 
            class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-blue-600">
            Admin
        </a>
    </div>

</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
const products = @json($products);

function showProductDetail(productId) {
    const product = products.find(p => p.id === productId);
    if (product) {
        document.getElementById('modalProductName').innerText = product.nama;
        document.getElementById('modalProductImage').src = "{{ asset('images/') }}/" + product.gambar;
        document.getElementById('modalProductPrice').innerText = "Rp " + new Intl.NumberFormat('id-ID').format(product.harga);
        document.getElementById('modalProductDescription').innerText = product.deskripsi || 'Deskripsi tidak tersedia.';

        document.getElementById('productModal').classList.remove('hidden');
    }
}

function closeProductModal() {
    document.getElementById('productModal').classList.add('hidden');
}
</script>
