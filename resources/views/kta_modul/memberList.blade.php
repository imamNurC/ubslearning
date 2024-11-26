@extends('kta_layout.bases.search_layout')

@section('content')




<div class="p-4">
    <div class="flex space-x-4 flex-wrap">
        @if($members->isEmpty())
            <p>No members found for your search query.</p>
        @else
            @foreach($members as $member)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="relative h-48 w-full overflow-hidden rounded-t-lg">
                    <img class="absolute inset-0 h-full w-full object-cover rounded-t-lg" src="{{ asset('storage/uploads/' . $member->foto_kta) }}" alt="{{ $member->nama_kta }}" />
                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $member->nama_kta }}</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Nickname: <span class="font-semibold">{{ $member->nickname_kta }}</span></p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Phone: <span class="font-semibold">{{ $member->nohp_kta }}</span></p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Email: <span class="font-semibold">{{ $member->email_kta }}</span></p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Position: <span class="font-semibold">{{ $member->jabatan_kta }}</span></p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Status: <span class="font-semibold text-green-600">{{ ucfirst($member->status_kta) }}</span></p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Joined: <span class="font-semibold">{{ $member->bergabung_kta }}</span></p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Expires: <span class="font-semibold">{{ $member->kadaluarsa_kta }}</span></p>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>


    

@endsection