@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<section class="kontak">
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-green-500 text-white p-8 md:w-1/3">
            <h2 class="text-2xl font-bold mb-4">ayo hubungi kami</h2>
            <p class="mb-6">Kami terbuka untuk saran atau sekadar mengobrol</p>
            <div class="flex items-center mb-4">
                <i class="fas fa-map-marker-alt mr-4"></i>
                <div>
                    <p class="font-bold">Address:</p>
                    <p>Baturraden ,Banyumas , Jawa Tengah</p>
                </div>
            </div>
            <div class="flex items-center mb-4">
                <i class="fas fa-phone mr-4"></i>
                <div>
                    <p class="font-bold">Phone:</p>
                    <p>+62 3456 7890 123</p>
                </div>
            </div>
            <div class="flex items-center mb-4">
                <i class="fas fa-paper-plane mr-4"></i>
                <div>
                    <p class="font-bold">Email:</p>
                    <p>info@kangmak.com</p>
                </div>
            </div>
            <div class="flex items-center">
                <i class="fas fa-globe mr-4"></i>
                <div>
                    <p class="font-bold">Website</p>
                    <p>kangmak.com</p>
                </div>
            </div>
        </div>
        
        <div class="p-8 md:w-2/3">
            <h2 class="text-2xl font-bold mb-6">Pesan Kami</h2>
            <form action="#">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">NAMA LENGKAP</label>
                        <input type="text" id="name" name="name" placeholder="Name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">ALAMAT EMAIL</label>
                        <input type="email" id="email" name="email" placeholder="Email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="subject" class="block text-sm font-medium text-gray-700">SUBJECT</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">PESAN</label>
                    <textarea id="message" name="message" placeholder="Message" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
                </div>
                <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded-md shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Send Message</button>
            </form>
        </div>
    </div>
    </div>
</section>
@endsection

