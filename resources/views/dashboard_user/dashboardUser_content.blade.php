@extends('custom_layout_users.bases.userbase')
@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto text-black">
    @if(isset($content))
        <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('storage/' . $content->image_path) }}" alt="{{ $content->content_name }}">
        <div class="pt-4">
            <h2 class="text-2xl font-semibold mt-2 mb-4">{{ $content->content_name }}</h2>
            <div class="text-black text-justify">{!! $content->deskripsi_panjang !!}</div>
        </div>
    @else
        <p class="text-gray-500">Konten tidak ditemukan.</p>
    @endif
</div>
@endsection
