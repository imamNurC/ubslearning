<!-- Bootstrap core JavaScript
================================================= -->
<!-- Placed at the end of the document so the pages load faster -->
{{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}

{{-- <script>

    function openModalBeli() {
        const modal = document.getElementById('hs-scale-animation-modal');
        const overlay = document.getElementById('modal-overlay');

        // Show the modal
        modal.classList.remove('hidden');
        modal.classList.add('pointer-events-auto', 'opacity-100');
        modal.querySelector('.hs-overlay-animation-target').classList.remove('scale-95', 'opacity-0');

        // Show the overlay
        overlay.classList.remove('hidden');
    }

    function closeModalBeli() {
        const modal = document.getElementById('hs-scale-animation-modal');
        const overlay = document.getElementById('modal-overlay');

        // Hide the modal
        modal.classList.add('hidden');
        modal.classList.remove('pointer-events-auto', 'opacity-100');
        modal.querySelector('.hs-overlay-animation-target').classList.add('scale-95', 'opacity-0');

        // Hide the overlay
        overlay.classList.add('hidden');
    }
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


</script> --}}
