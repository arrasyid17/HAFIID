@extends('layout.main')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full px-3">
      <h1 class="text-3xl font-bold mb-4">Biodata</h1>
      <p class="text-lg leading-relaxed">Informasi biodata Anda dapat ditambahkan di sini.</p>
      <p class="text-lg leading-relaxed">Nama: Al-Hafiid Ar-Rasyid</p>
      <p class="text-lg leading-relaxed">Tempat, Tanggal Lahir: Pontianak, 17 April 2004</p>
      <p class="text-lg leading-relaxed">Pendidikan: Prodi Sistem Informasi Universitas Tanjungpura</p>
      <p class="text-lg leading-relaxed">Hobi: Olahraga</p>
      <img src="{{ asset('assets/img/fotosaya.jpeg') }}" alt="Foto Profil" class="mt-4" style="max-width: 100%; max-height: 100%;">
    </div>
  </div>
</div>
@endsection
