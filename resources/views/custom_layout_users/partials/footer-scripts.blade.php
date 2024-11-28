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

<script>
    let isViewCountUpdated = false;
    const updatedViewCounts = new Set();

    // Fungsi untuk membuka modal
    function openModalProfile() {
        const modal = document.getElementById('editProfileModal');
        modal.classList.remove('hidden');
    }

    // Fungsi untuk menutup modal
    function closeModalProfile() {
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

    function openModal(button) {
        document.getElementById('content-name').textContent = '';
        document.getElementById('content-price').textContent = '';
        document.getElementById('content-category').textContent = '';
        document.getElementById('content-description').textContent = '';
        document.getElementById('content-image').src = '';
        
        const id = button.getAttribute('data-id');
        const modal = document.getElementById('hs-scale-animation-modal');
        const overlay = document.getElementById('modal-overlay');
        const videoContainer = document.getElementById('video-container');

        //ambil data customer
        const customerData = {
            id_customer: "{{ auth()->user()->id_customer }}",
            name: "{{ auth()->user()->name }}",
            number_phone: "{{ auth()->user()->phone_number }}",
            email: "{{ auth()->user()->email }}"
        };

        const contentData = {
            id: button.getAttribute('data-id'),
            name: button.getAttribute('data-name'),
            price: button.getAttribute('data-price'),
            image: button.getAttribute('data-image')
        };


        // Ambil data dari tombol
        const name = button.getAttribute('data-name');
        const price = button.getAttribute('data-price');
        const category = button.getAttribute('data-category');
        const description = button.getAttribute('data-description');
        const image = button.getAttribute('data-image');
        const youtubeUrl = button.getAttribute('data-youtube');
        

        const videoId = youtubeUrl.split('v=')[1].split('&')[0];

        const iframe = `<iframe width="100%" height="315" src="https://www.youtube.com/embed/${videoId}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
        videoContainer.innerHTML = iframe;

        fetch(`/get-content-description/${id}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('content-description').innerHTML = data.description;
        })
        .catch(error => {
            console.error('Error fetching description:', error);
            document.getElementById('content-description').innerHTML = 'Deskripsi tidak tersedia.';
        });

        // Isi data ke dalam modal
        document.getElementById('content-name').textContent = name;
        document.getElementById('content-price').textContent = `Rp. ${price}`;
        document.getElementById('content-category').textContent = category;
        // console.log(description);
        document.getElementById('content-description').innerHTML = description;
        document.getElementById('content-image').src = image;

        //Menambah view count
        if (!updatedViewCounts.has(id)) {
        fetch(`/update-view-count/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Pastikan CSRF token
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log('View count updated:', data);
            updatedViewCounts.add(id);
        })
        .catch(error => console.error('Error updating view count:', error));
    }


        // Menyimpan data produk ke session
        fetch('/save-product-to-session', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                contentData: contentData,
                customer: customerData,
            })
        })
            .then(response => response.json())
            .then(data => {
                console.log('Response from server:', data.message);
                // alert(data.message); // Tampilkan pesan jika diperlukan
        })
            .catch(error => console.error('Error:', error));



        // Show the modal
        modal.classList.remove('hidden');
        modal.classList.add('pointer-events-auto', 'opacity-100');
        modal.querySelector('.hs-overlay-animation-target').classList.remove('scale-95', 'opacity-0');

        // Show the overlay
        overlay.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('hs-scale-animation-modal');
        const overlay = document.getElementById('modal-overlay');
        const videoContainer = document.getElementById('video-container');

        const iframe = videoContainer.querySelector('iframe');
        if (iframe) {
            iframe.src = 'about:blank';
        }

        // Hide the modal
        modal.classList.add('hidden');
        modal.classList.remove('pointer-events-auto', 'opacity-100');
        modal.querySelector('.hs-overlay-animation-target').classList.add('scale-95', 'opacity-0');

        // Hide the overlay
        overlay.classList.add('hidden');

        videoContainer.innerHTML = '';
    }

    const buttons = document.querySelectorAll('[data-youtube]');
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                openModal(this);
            });
        });

 

</script>