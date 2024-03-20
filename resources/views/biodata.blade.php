@extends('layout.main')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md overflow-hidden">
    <div class="px-6 py-8">
      <h1 class="text-3xl font-bold mb-4 text-center text-gray-800">Biodata</h1>
      <div class="mb-8">
        <div class="flex items-center mb-2">
          <div class="w-8 h-8 mr-2 rounded-full bg-blue-500 flex items-center justify-center">
            <i class="fas fa-user text-white"></i>
          </div>
          <p class="text-lg leading-relaxed"><span class="font-semibold text-gray-700">Nama:</span> Al-Hafiid Ar-Rasyid</p>
        </div>
        <div class="flex items-center mb-2">
          <div class="w-8 h-8 mr-2 rounded-full bg-blue-500 flex items-center justify-center">
            <i class="fas fa-map-marker-alt text-white"></i>
          </div>
          <p class="text-lg leading-relaxed"><span class="font-semibold text-gray-700">Tempat, Tanggal Lahir:</span> Pontianak, 17 April 2004</p>
        </div>
        <div class="flex items-center mb-2">
          <div class="w-8 h-8 mr-2 rounded-full bg-blue-500 flex items-center justify-center">
            <i class="fas fa-graduation-cap text-white"></i>
          </div>
          <p class="text-lg leading-relaxed"><span class="font-semibold text-gray-700">Pendidikan:</span> Prodi Sistem Informasi Universitas Tanjungpura</p>
        </div>
        <div class="flex items-center mb-2">
          <div class="w-8 h-8 mr-2 rounded-full bg-blue-500 flex items-center justify-center">
            <i class="fas fa-futbol text-white"></i>
          </div>
          <p class="text-lg leading-relaxed"><span class="font-semibold text-gray-700">Hobi:</span> Olahraga</p>
        </div>
      </div>
      <div class="text-center">
        <img src="{{ asset('assets/img/fotosaya.jpeg') }}" alt="Foto Profil" class="mt-4 mx-auto rounded-full" style="width: 200px; height: 200px; object-fit: cover;">
      </div>
    </div>
  </div>
</div>
@endsection
