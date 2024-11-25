@extends('custom_layout_admin.bases.adminbase')
@section('content')


{{-- kotak konfirmasi pembelian --}}
<div class="p-4 bg-yellow-100 border-l-4 border-yellow-500 rounded-md">
    <h3 class="text-lg font-bold">Notifikasi Transaksi</h3>
    @if ($pendingTransactions->isEmpty())
        <p class="text-gray-600">Tidak ada transaksi yang perlu dikonfirmasi.</p>
    @else
        @foreach ($pendingTransactions as $transaction)
            <div class="flex items-center justify-between my-2 p-2 bg-white shadow-sm rounded-md">
                <div>
                    <p class="text-gray-700 font-medium">{{ $transaction->name }}</p>
                    <p class="text-sm text-gray-500">{{ $transaction->content_name }}</p>
                </div>
                <div>
                    <form method="POST" action="{{ route('admin.transactions.update', $transaction->id_transaction) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="accepted">
                        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md">Konfirmasi</button>
                    </form>
                    
                    <form method="POST" action="{{ route('admin.transactions.update', $transaction->id_transaction) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="declined">
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md">Tolak</button>
                    </form>
                    
                </div>
            </div>
        @endforeach
    @endif
</div>

@if (session('message'))
    <div class="p-4 mb-4 text-green-700 bg-green-100 rounded-md">
        {{ session('message') }}
    </div>
@endif




        
<div class="flex flex-col mt-8">
    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Name</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Type</th>
                        <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Phone</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($customers as $customer)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="object-cover h-12 w-12 rounded-full mr-4"
                                        src="{{ $customer->image_path ? asset('storage/' . $customer->image_path) : asset('default-avatar.png') }}"
                                            alt="{{ $customer->name }}">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium leading-5 text-gray-900">{{ $customer->username }}</div>
                                        <div class="text-sm leading-5 text-gray-500">{{ $customer->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ ucfirst($customer->type) }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $customer->phone_number }}</div>
                            </td>
                            <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection