<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto px-4 py-10">
        <!-- Header -->
        <div class="flex flex-wrap justify-between items-center mb-6">
            <h1 class="text-2xl font-bold mb-4 sm:mb-0">Dashboard Admin</h1>
            <button 
                id="addButton"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
                onclick="openModal('addModal')"
            >
                + Tambah Produk
            </button>
        </div>

        <!-- Table Produk -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-left">
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Gambar</th>
                            <th class="px-6 py-3">Nama Produk</th>
                            <th class="px-6 py-3">Harga</th>
                            <th class="px-6 py-3">Deskripsi</th>
                            <th class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($products as $product)
                            <tr>
                                <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('images/' . $product['gambar']) }}" alt="Gambar Produk" class="w-16 h-16 object-cover">
                                </td>
                                <td class="px-6 py-4">{{ $product->nama }}</td>
                                <td class="px-6 py-4">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                                <td class="px-6 py-4 truncate">{{ $product->deskripsi }}</td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <button 
                                        class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600"
                                        onclick="openEditModal({{ $product->id }})"
                                    >
                                        Edit
                                    </button>
                                    <button 
                                        class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600"
                                        onclick="deleteProduct({{ $product->id }})"
                                    >
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Produk -->
    <div id="addModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 max-w-md md:w-full md:max-w-md">
            <h2 class="text-xl font-bold mb-4">Tambah Produk</h2>
            <form id="addProductForm" enctype="multipart/form-data" method="POST" action="{{ route('admin.products.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nama Produk</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700">Harga</label>
                    <input type="number" id="price" name="price" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Deskripsi</label>
                    <textarea id="description" name="description" rows="4" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300"></textarea>
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700">Gambar Produk</label>
                    <input type="file" id="image" name="image" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2" onclick="closeModal('addModal')">Batal</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    
    <div id="editModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 max-w-md md:w-full md:max-w-md">
            <h2 class="text-xl font-bold mb-4">Edit Produk</h2>
            <form id="editProductForm" enctype="multipart/form-data" method="POST" action="{{ route('admin.product.update', '$product->id') }}">
                @csrf
                @method('PUT')
    
                <div class="mb-4">
                    <label for="editName" class="block text-gray-700">Nama Produk</label>
                    <input type="text" id="editName" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                </div>
    
                <div class="mb-4">
                    <label for="editPrice" class="block text-gray-700">Harga</label>
                    <input type="number" id="editPrice" name="price" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                </div>
    
                <div class="mb-4">
                    <label for="editDescription" class="block text-gray-700">Deskripsi</label>
                    <textarea id="editDescription" name="description" rows="4" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300"></textarea>
                </div>
    
                <div class="mb-4">
                    <label for="editImage" class="block text-gray-700">Gambar Produk</label>
                    <input type="file" id="editImage" name="image" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                </div>
    
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2" onclick="closeModal('editModal')">Batal</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    

    <div class="fixed bottom-4 left-4">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                Logout
            </button>
        </form>
    </div>
    
    

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        function openEditModal(productId) {
            fetch(`/admin/products/${productId}/edit`)
            .then(response => response.json())
            .then(product => {
                console.log(product);
                document.getElementById('editName').value = product.nama;
                document.getElementById('editPrice').value = product.harga;
                document.getElementById('editDescription').value = product.deskripsi;
                document.getElementById('editProductForm').action = `/admin/products/${productId}`;
                openModal('editModal');
            })
            .catch(error => console.error('Error:', error));
        }

        function deleteProduct(productId) {
            if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
                fetch(`/admin/products/${productId}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        _method: 'DELETE'
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert('Produk dihapus!');
                    location.reload();
                })
                .catch(error => console.error('Error:', error));
            }
        }
    </script>
</body>
</html>
