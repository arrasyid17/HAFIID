@extends('layout.main')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full px-3">
      <h1 class="text-3xl font-bold mb-4">Buku Tamu</h1>
      <form action="" method="POST">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Nama:</label>
          <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
          <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
          <label for="message" class="block text-sm font-medium text-gray-700">Pesan:</label>
          <textarea id="message" name="message" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
        </div>
        <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600">Kirim</button>
      </form>
    </div>
  </div>
</div>

@if(request()->isMethod('post'))
<div class="w-full px-6 py-3 mx-auto mt-4 bg-green-200 text-green-700 rounded-md">Pesan berhasil dikirim!</div>
@endif

@endsection
