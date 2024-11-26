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


<div id="modal-overlay" class="hidden fixed inset-0 bg-black bg-opacity-70 z-[70]"></div>
<div id="hs-scale-animation-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
    <div class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
            <div class="items-center py-3 px-4 border-b">
                <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800 text-center">
                    <span id="content-name">Nama Konten</span>
                </h3>
            </div>
            <div class="p-4 overflow-y-auto">
                <img id="content-image" src="" alt="Gambar Produk" class="w-full rounded-xl">
                <p class="mt-2 text-gray-800">
                    <strong>Harga:</strong> <span id="content-price"></span><br>
                    <strong>Kategori:</strong> <span id="content-category"></span><br>
                </p>
                <div id="video-container" class="mt-4">
                    {{-- Isi Video Nya --}}
                </div>
                <p class="mt-4 text-gray-600" id="content-description">
                    Deskripsi panjang akan ditampilkan di sini.
                </p>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-red-500 text-white shadow-sm hover:bg-red-600 focus:outline-none" onclick="closeModal()">
                    Close
                </button>
                <button 
                    type="button" 
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" 
                >
                    <a href="{{ route('purchaseForm.show', ['username' => Auth::user()->username]) }}">
                    Beli Konten
                    </a>
                </button>

            </div>
        </div>
    </div>
</div>