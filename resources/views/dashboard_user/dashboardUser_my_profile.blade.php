@extends('custom_layout_users.bases.userbase')

@section('content')

<style>
/* efek transisi pesan  */
#error-message, #success-message {
    transition: opacity 0.5s ease-in-out;
}

</style>

<div class="container mx-auto px-4 py-8">
    @if ($errors->any())
        <div id="error-message" class="bg-red-500 text-white p-4 mb-4 rounded">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @elseif (session('success'))
        <div id="success-message" class="bg-green-500 text-white p-4 mb-4 rounded">
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
                            <span id="password-display">{{ str_repeat('*', min(10, strlen($customer->password))) }}</span>
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

<!-- Modal untuk Edit Profil -->
<div id="editProfileModal" class="hidden fixed inset-0 bg-black bg-opacity-70 z-[70]">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                Edit Profile
            </h3>
            <form action="{{ route('profile.update', $customer->username) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-4">
                    <div class="col-span-2">
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $customer->name) }}" class="mt-1 block w-full" required>
                    </div>
                    <div class="col-span-2">
                        <label for="image" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                        <label for="image" class="mt-1 inline-block bg-gray-200 text-gray-700 px-3 py-2 rounded cursor-pointer">
                            Choose File
                        </label>
                        <input type="file" id="image" name="image" class="hidden" onchange="previewImage(event)">
                        <img id="profile-preview" src="#" alt="Profile Picture" class="object-cover rounded-full w-24 h-24 mt-4" style="display: none;">
                    </div>
                </div>
                
                <div class="mt-4 flex justify-end">
                    <button type="button" id="closeModalBtn" class="bg-gray-400 text-white px-4 py-2 rounded mr-2" onclick="closeModal()">
                        Cancel
                    </button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal untuk ganti password -->
<div id="changePasswordModal" class="hidden fixed inset-0 bg-black bg-opacity-70 z-[70]">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                Change Password
            </h3>
            <form action="{{ route('profile.changePassword', $customer->username) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="old_password" class="block text-sm font-medium text-gray-700">Old Password</label>
                    <input type="password" id="old_password" name="old_password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>
                <div class="mb-4">
                    <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                    <input type="password" id="new_password" name="new_password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>
                <div class="mb-4">
                    <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                    <input type="password" id="confirm_password" name="new_password_confirmation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="button" id="closeChangePasswordModal" class="bg-gray-400 text-white px-4 py-2 rounded mr-2" onclick="closeChangePassword()">
                        Cancel
                    </button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    // Fungsi untuk membuka modal
    function openModal() {
        const modal = document.getElementById('editProfileModal');
        modal.classList.remove('hidden');
    }

    // Fungsi untuk menutup modal
    function closeModal() {
        resetPreview();
        const modal = document.getElementById('editProfileModal');
        modal.classList.add('hidden');
    }

    // Fungsi untuk membuka modal Change Password
    function openChangePassword() {
        const modal = document.getElementById('changePasswordModal');
        modal.classList.remove('hidden'); // Menghapus class hidden untuk menampilkan modal
    }

    // Fungsi untuk menutup modal Change Password
    function closeChangePassword() {
        const modal = document.getElementById('changePasswordModal');
        modal.classList.add('hidden'); // Menambahkan kembali class hidden untuk menyembunyikan modal
    }

    //preview image di modal
    function previewImage(event) {
        var file = event.target.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            // Menampilkan preview gambar setelah dipilih
            var imgPreview = document.getElementById('profile-preview');
            imgPreview.src = e.target.result;
            imgPreview.style.display = 'block'; // Menampilkan elemen gambar
        }

        // Membaca file sebagai URL
        if (file) {
            reader.readAsDataURL(file);
        }
    }

     // Fungsi untuk mereset preview gambar saat modal ditutup
     function resetPreview() {
    var imgPreview = document.getElementById('profile-preview');
    var inputFile = document.getElementById('image');
    
    // Sembunyikan gambar preview dan reset input file
    imgPreview.style.display = 'none'; // Menyembunyikan gambar preview
    inputFile.value = '';  // Reset file input
    }

    // Script untuk menghilangkan pesan setelah 3 detik
    setTimeout(() => {
        const errorMessage = document.getElementById('error-message');
        const successMessage = document.getElementById('success-message');

        if (errorMessage) {
            errorMessage.style.opacity = '0'; // Buat elemen memudar
            setTimeout(() => {
                errorMessage.style.display = 'none'; // Hilangkan elemen sepenuhnya
            }, 500); // Waktu untuk animasi memudar
        }

        if (successMessage) {
            successMessage.style.opacity = '0'; // Buat elemen memudar
            setTimeout(() => {
                successMessage.style.display = 'none'; // Hilangkan elemen sepenuhnya
            }, 500); // Waktu untuk animasi memudar
        }
    }, 3000);

</script>

@endsection


