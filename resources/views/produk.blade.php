@extends('layout.main')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full px-3">
      <h1 class="text-3xl font-bold mb-4">Produk</h1>
      <p class="text-lg leading-relaxed"> "Nike Air Jordan merupakan salah satu ikon dalam dunia sepatu olahraga, terkenal dengan desain yang inovatif dan kualitas yang tak tertandingi. Gambar sepatu Nike Air Jordan ini menggambarkan sebuah karya seni yang menggabungkan kekuatan teknologi dan gaya. Didesain dengan detail yang sempurna, sepatu ini menampilkan perpaduan warna yang menarik dan logo khas Air Jordan yang memberikan sentuhan eksklusif. Dengan kenyamanan dan performa yang luar biasa, sepatu Nike Air Jordan menjadi pilihan utama bagi para pecinta sneakers yang ingin tampil trendi dan berkelas di setiap langkah mereka.".</p>
      <img src="{{ asset('assets/img/gambarsepatu.jpg') }}" alt="Gambar Sepatu" style="max-width: 100%; height: auto;">
    </div>
  </div>
</div>
@endsection
