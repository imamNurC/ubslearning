@extends('custom_layout_users.bases.userbase')

@section('content')

<div class="container mx-auto px-4 py-8">
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 mb-4 rounded">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @elseif (session('success'))
        <div class="bg-green-500 text-white p-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif
    <section class="w-full overflow-hidden mb-80">
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:px-6 flex items-center">
                <!-- Foto Profil -->
                <img src="{{ Storage::url($customer->image_path) }}" alt="Profile Picture" class="object-cover h-12 w-12 rounded-full mr-4">
                
                <!-- Judul dan Deskripsi -->
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $customer->username }}
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        This is some information about you
                    </p>
                </div>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:p-0 mb-10">
                <dl class="sm:divide-y sm:divide-gray-200">
                    <!-- Data lainnya -->
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Full name</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $customer->name }}</dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Phone number</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $customer->phone_number }}</dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Email address</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $customer->email }}</dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Password</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 flex justify-between items-center">
                            <span id="password-display">{{ str_repeat('*', strlen($customer->password)) }}</span>
                            <!-- Tombol Change Password -->
                            <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded" onclick="openChangePassword()">Change Password</button>
                        </dd>
                    </div>                    
                </dl>
                
                <div class="mt-20 flex justify-center">
                    <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded" onclick="openModal()">Update Profile</button>
                </div>
            </div>
        </div>
        
    </section>
</div>
@endsection



