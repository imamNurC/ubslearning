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


 {{-- Ini modal untuk menunggu konfirmasi --}}
 <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
        <h2 class="text-xl font-semibold mb-4 text-center">Konfirmasi Pembelian</h2>
        <p id="modal-description" class="text-gray-700 mb-6 text-center">
            Silahkan Scan QRIS Dibawah Ini Lalu Lakukan Pembayaran Dalam :
            <span id="countdown" class="font-bold text-red-500"></span>
        </p>
        <div id="qr-container" class="flex justify-center mb-6">
            <img id="qris-image" src="{{ asset('image/contoh qris.jpg') }}" alt="Pencitraan QRIS" class="w-auto h-48 object-contain rounded-xl">
        </div>

        <!-- Success Checklist Container -->
        <div id="success-checklist" class="hidden mb-6">
            <p class="text-green-500 font-semibold text-center">Pembayaran Diterima!</p>
            <ul class="list-disc pl-6 text-gray-700">
                <li>Status transaksi: Diterima</li>
                <li>QRIS sudah discan</li>
                <li>Hubungi Admin apabila konten belum muncul</li>
            </ul>
        </div>

        <!-- Buttons -->
        <button id="refresh-status" class="w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600 mb-4 flex items-center justify-center gap-2">
            <!-- Refresh SVG Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0,0,256,256">
                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(9.84615,9.84615)"><path d="M13.8125,0c-5.93359,0 -9.73047,4.29297 -9.8125,10h-3.5c-0.19922,0 -0.40625,0.11328 -0.40625,0.3125c-0.10156,0.19922 -0.10156,0.39844 0,0.5l6,7.6875c0.10156,0.10156 0.20703,0.1875 0.40625,0.1875c0.19922,0 0.30469,-0.08594 0.40625,-0.1875l6,-7.6875c0.10156,-0.10156 0.10156,-0.30078 0,-0.5c-0.10156,-0.19922 -0.30469,-0.3125 -0.40625,-0.3125h-3.5c0.06641,-7.53516 3.92188,-9.21094 4.8125,-9.90625c0.19922,-0.10156 0.19922,-0.09375 0,-0.09375zM19.5,7.34375c-0.14844,0 -0.30469,0.05469 -0.40625,0.15625l-6,7.6875c-0.10156,0.19922 -0.09375,0.39844 -0.09375,0.5c0.10156,0.19922 0.30469,0.3125 0.40625,0.3125h3.59375c-0.06641,7.53516 -3.92187,9.21094 -4.8125,9.90625c-0.19922,0.10156 -0.19922,0.09375 0,0.09375c5.93359,0 9.73047,-4.29297 9.8125,-10h3.40625c0.19922,0 0.40625,-0.11328 0.40625,-0.3125c0.19922,-0.19922 0.19531,-0.39844 0.09375,-0.5l-6,-7.6875c-0.10156,-0.10156 -0.25781,-0.15625 -0.40625,-0.15625z"></path></g></g>
            </svg>
            Refresh Status
        </button>
        

        <button
            id="wa-wa"
            class="w-full px-4 py-2 text-white bg-green-500 rounded hover:bg-green-600 mb-4 flex items-center justify-center gap-2">
            <!-- WhatsApp SVG Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0,0,256,256">
                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8,8)"><path d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z"></path></g></g>
            </svg>
            Hubungi Admin
        </button>
    

        <button
            id="close-modal"
            class="w-full px-4 py-2 text-white bg-pink-500 rounded hover:bg-pink-600"
        >
            Tutup
        </button>
    </div>
</div>

