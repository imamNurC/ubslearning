@extends('custom_layout_users.bases.userbase')
@section('content')
<style>
    .-z-1 {
      z-index: -1;
    }
  
    .origin-0 {
      transform-origin: 0%;
    }
  
    input:focus ~ label,
    input:not(:placeholder-shown) ~ label,
    textarea:focus ~ label,
    textarea:not(:placeholder-shown) ~ label,
    select:focus ~ label,
    select:not([value='']):valid ~ label {
      /* @apply transform; scale-75; -translate-y-6; */
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
        skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
      --tw-scale-x: 0.75;
      --tw-scale-y: 0.75;
      --tw-translate-y: -1.5rem;
    }
  
    input:focus ~ label,
    select:focus ~ label {
      /* @apply text-black; left-0; */
      --tw-text-opacity: 1;
      color: rgba(0, 0, 0, var(--tw-text-opacity));
      left: 0px;
    }
  </style>

  
  <div class="min-h-screen bg-gray-100 p-0 sm:p-12">
    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
      <h1 class="text-2xl font-bold mb-8">Form Pembelian</h1>
      <form id="form" action="{{ route('purchase.store') }}" method="POST" novalidate>
        @csrf
        <div class="relative z-0 w-full mb-5" hidden>
            <input
              type="text"
              name="id_transaction"
              id="id-transaction"
              placeholder=" "
              readonly
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="id-transaction" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Id Transaction</label>
            <span class="text-sm text-red-600 hidden" id="error">Id Transaction is required</span>
          </div>

          <div class="relative z-0 w-full mb-5" hidden>
            <input
              type="text"
              name="id_customer"
              id="id-customer"
              value="{{ session('customer.id_customer') }}"
              placeholder=" "
              required
              readonly
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="id-customer" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Id Customer</label>
            <span class="text-sm text-red-600 hidden" id="error">Id Customer is required</span>
          </div>

        <div class="relative z-0 w-full mb-5">
          <input
            type="text"
            name="name"
            id="name"
            value="{{ session('customer.name') }}"
            placeholder=" "
            required
            readonly
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Name</label>
          <span class="text-sm text-red-600 hidden" id="error">Name is required</span>
        </div>

        <div class="relative z-0 w-full mb-5">
            <input
              type="text"
              name="number_phone"
              id="number-phone"
              value="{{ session('customer.number_phone') }}"
              placeholder=" "
              required
              readonly
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="number-phone" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Number Phone</label>
            <span class="text-sm text-red-600 hidden" id="error">Number Phone is required</span>
          </div>
  
        <div class="relative z-0 w-full mb-5">
          <input
            type="email"
            name="email"
            id="email"
            value="{{ session('customer.email') }}"
            placeholder=" "
            required
            readonly
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Email Address</label>
          <span class="text-sm text-red-600 hidden" id="error">Email address is required</span>
        </div>

        <div class="relative z-0 w-full mb-5" hidden>
          <input
            type="text"
            name="id_content"
            id="id-content"
            value="{{  session('contentData.id') }}"
            placeholder=" "
            required
            readonly
            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
          />
          <label for="id-content" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Id Content</label>
          <span class="text-sm text-red-600 hidden" id="error">Id Content is required</span>
        </div>

        <div class="relative z-0 w-full mb-5">
            <input
              type="text"
              name="content_name"
              id="content-name"
              value="{{ session('contentData.name') }}"
              placeholder=" "
              required
              readonly
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            {{-- {{ dd(session('contentData.image')) }} --}}
            <img src="{{ session('contentData.image') }}" class="w-full h-full object-cover rounded-lg">
            <label for="content-name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Content Name</label>
            <span class="text-sm text-red-600 hidden" id="error">Content Name is required</span>
          </div>

          <div class="relative z-0 w-full mb-5">
            <input
              type="text"
              name="price"
              id="price"
              value="{{ session('contentData.price') }}"
              placeholder=" "
              required
              readonly
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
            />
            <label for="price" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Price</label>
            <span class="text-sm text-red-600 hidden" id="error">Price is required</span>
          </div>
  
        <div class="flex flex-row space-x-4">
          <div class="relative z-0 w-full mb-5">
            <input
              type="text"
              name="date"
              id="date-order"
              placeholder=" "
              value="{{ date('Y-m-d') }}"
              class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
              readonly
            />
            <label for="date" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Date</label>
            <span class="text-sm text-red-600 hidden" id="error">Date is required</span>
          </div>

          <div class="relative z-0 w-full">
            <input
                type="time"
                name="time"
                id="time-order"
                placeholder=" "
                value="{{ date('H:i') }}"
                class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200"
                readonly
            />
            <label for="time" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Time</label>
            <span class="text-sm text-red-600 hidden" id="error">Time is required</span>
        </div>
        </div>
  
        <div class="relative z-0 w-full mb-5">
            <input
                type="file"
                name="image"
                id="image"
                accept="image/*"
                {{-- required --}}
                class="pt-3 pb-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:text-gray-700 file:cursor-pointer"
                
            />
            <label for="image" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Upload Bukti pembayaran</label>
            <span class="text-sm text-red-600 hidden" id="image-error">Gambar wajib diunggah</span>
        </div>
        
        <button
          id="button"
          type="submit"
          class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none"
        >
          Konfirmasi Pembelian
        </button>

        <button
          id="btnDisable"
          {{-- type="submit" --}}
          class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-gray-500 hover:bg-gray-600 hover:shadow-lg focus:outline-none"
        >
          sudah langganan Konten ini 
        </button>
      </form>
    </div>
  </div>

 
  


<script>
'use strict'

$(document).ready(function() {
    // Button click event for validation and showing modal



    const idCust = $('#id-customer').val()
    const idCont = $('#id-content').val()

    // console.log(idCust,idCont);
    $.ajax({
            url: `/check-accepted-req/${idCust}/${idCont}/accepted`, // API endpoint to check the status
            method: 'GET',
            async :false,
            success: function(response) {
              console.log(response);
              
              if (response.status == 'accepted') {
                  $('#btnDisable').show();
                  $('#button').prop('disabled', true);
                  $('#button').hide();
                  $('#btnDisable').prop('disabled', true);
              }

            } 
    });
    
    // $('#btnDisable').hide();
    // $('#button').click(function () {
    //     toggleError(); // Fungsi validasi
    //       const hasError = $('.text-red-600:not(.hidden)').length > 0;

    //       // If there is no error, show the modal
    //       if (!hasError) {
    //           // showModal(transactionId);
    //       }    
    // });

    $('#wa-wa').on('click', function (e) {
      e.preventDefault(); // Mencegah pengiriman form default

      // Ambil data dari form
      let judul_konten = $('#content-name').val();
      let oleh = $('#name').val();
      let price = $('#price').val();
      let date = $('#date-order').val();
      let time = $('#time-order').val();

      
      // Kirim data ke server menggunakan AJAX
      $.ajax({
        url: '/wa', // Pastikan route ini benar
        type: 'POST',
        data: {
          judul_konten: judul_konten,
          oleh: oleh,
          price: price,
          dateOrd : date,
          timeOrd : time,
          _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
          // Cek apakah ada URL untuk WhatsApp
          console.log(response);
          
          if (response.url) {
            // Tampilkan URL atau buka modal
            $('#result').html(`<a href="${response.url}" target="_blank">Klik di sini untuk membuka WhatsApp</a>`);
            
            // Tampilkan modal
            $('#modal').removeClass('hidden');
            window.open(response.url, '_blank');
          } else {
            alert('Tidak ada URL yang diterima');
          }
        },
        error: function () {
          alert('Terjadi kesalahan, coba lagi!');
        }
      });
    });        


    // Function to toggle error messages
    function toggleError() {
        const $inputs = $('input[required]');
        const $imageInput = $('#image');
        const $imageErrorMessage = $('#image-error');
        let hasError = false;

        $inputs.each(function() {
            const $input = $(this);
            const $label = $input.next();
            const $errorMessage = $input.next().next();

            // Debugging log for input and its value
            // console.log(`Input: ${$input.attr('name')}, Value: '${$input.val().trim()}'`);

            if ($input.attr('id') === 'id-transaction') {
                return;
            }

            if ($input.val().trim() === '') {
                $errorMessage.removeClass('hidden');
                $input.addClass('border-red-600');
                $label.addClass('text-red-600');
                hasError = true;
            } else {
                $errorMessage.addClass('hidden');
                $input.removeClass('border-red-600');
                $label.removeClass('text-red-600');
            }
        });

        // Validate image input
        if ($imageInput[0].files.length === 0) {
            $imageErrorMessage.removeClass('hidden');
            $imageInput.addClass('border-red-600');
            hasError = true;
        } else {
            $imageErrorMessage.addClass('hidden');
            $imageInput.removeClass('border-red-600');
        }

        // Debugging log for error status
        if (hasError) {
            console.log('Ada error, periksa input yang kosong atau tidak valid.');
        } else {
            console.log('Form sudah valid, tidak ada error.');
        }
    }

    // Set local time to the time input
    const $timeInput = $('#time');
    const currentTime = new Date();
    const hours = String(currentTime.getHours()).padStart(2, '0');
    const minutes = String(currentTime.getMinutes()).padStart(2, '0');
    $timeInput.val(`${hours}:${minutes}`);

});



// Function to show the modal
function showModal(idCust, idCont) {
    const $modal = $('#modal');
    const $countdownElement = $('#countdown');
    const $qrContainer = $('#qr-container');
    const $successChecklist = $('#success-checklist');
    const $failChecklist = $('#fail-checklist');
    const $modalDescription = $('#modal-description');
    const $qrisImage = $('#qris-image');
    let countdownTime = 5 * 60; // 5 minutes in seconds
    let countdownInterval;

    // Show the modal
    $modal.removeClass('hidden');
    $('#close-modal').hide();
    $successChecklist.addClass('hidden'); // Hide success checklist initially
    $failChecklist.addClass('hidden'); // Hide success checklist initially

    // Function to check the transaction status
    function checkTransactionStatus() {
        $.ajax({
            url: `/check-transaction-status/${idCust}/${idCont}`, // API endpoint to check the status
            method: 'GET',
            success: function(response) {
                if (response.status === 'accepted') {
                    clearInterval(countdownInterval); // Stop the countdown
                    $countdownElement.text('00:00');
                    $qrContainer.addClass('hidden');
                    $successChecklist.removeClass('hidden');

                    $.ajax({
                      url: '/accepted-status', // API endpoint untuk memperbarui status
                      method: 'POST',
                      data: {
                          _token: $('meta[name="csrf-token"]').attr('content'),
                          id_customer: '{{ session('customer.id_customer') }}', // Mengirim id_customer dari session
                          id_content: '{{ session('contentData.id') }}', // Mengirim id_content dari session
                          status: 'accepted' // Status yang ingin di-update
                      },
                      success: function(response) {
                        $('#close-modal').show();
                        $('#cancel-modal').hide();
                        $('#close-modal').click(function() {
                          $modal.addClass('hidden');
                          $('#button').hide();
                          $('#btnDisable').show();
                          $('#btnDisable').prop('disabled', true);
                        })


                      },
                      error: function(xhr, status, error) {
                          console.log('Gagal memperbarui status:', error); // Menampilkan error jika gagal
                      }
                  });
                    $modalDescription.text('Pembayaran berhasil diterima! cek halaman konten secara berkala');
                    $('#refresh-status').hide();
                    
                } else if (response.status === 'declined') {
                    clearInterval(countdownInterval); // Stop the countdown
                    $countdownElement.text('00:00');
                    $qrContainer.addClass('hidden');
                    $failChecklist.removeClass('hidden');

                    $.ajax({
                      url: `/declined-status/${idCust}/${idCont}/declined`, // API endpoint to decline the status
                      method: 'POST',
                      data: {
                          _token: $('meta[name="csrf-token"]').attr('content')
                      },
                      success: function() {
                        $('#close-modal').show();
                        $('#cancel-modal').hide();
                        $('#close-modal').click(function() {
                          $modal.addClass('hidden');
                          
                        })
                      }
                  });
                  $modalDescription.text('Pembayaran Di tolak!, cek lagi pesanan anda atau hubungi admin');
                  $('#refresh-status').hide();

                } else if (response.status === 'pending') {
                    console.log('Status masih pending, menunggu pembayaran.');
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText); // Show error in the console
            }
        });
    }

    // Start countdown
    countdownInterval = setInterval(function() {
        const minutes = Math.floor(countdownTime / 60);
        const seconds = countdownTime % 60;
        $countdownElement.text(`${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`);

        if (countdownTime <= 0) {
            clearInterval(countdownInterval); // Stop the countdown when time is up
            $countdownElement.text('00:00');
            $.ajax({
                url: `/declined-status/${idCust}/${idCont}/declined`, // API endpoint to decline the status
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function() {
                    alert('Waktu habis, transaksi ditolak.');
                    $modal.addClass('hidden'); // Close the modal
                }
            });
        } else {
            countdownTime--;
        }
    }, 1000);

    $('#refresh-status').click(function() {
        checkTransactionStatus();  
    });

    // Button to close the modal
    $('#cancel-modal').click(function() {
        clearInterval(countdownInterval); // Stop the countdown if the modal is closed
        $.ajax({
          url: `/declined-status/${idCust}/${idCont}/declined`, // API endpoint to decline the status
          method: 'POST',
          data: {
              _token: $('meta[name="csrf-token"]').attr('content')
          },
          success: function() {
              alert('canceled') 
          }
        });
        
        $modal.addClass('hidden');
    });
}


    // Mechanism for submitting purchase form data to admin notification
    $('#form').submit(function (e) {
        e.preventDefault();
        
        const formData = new FormData(this);

        const priceValue = parseInt($('#price').val().trim(), 10);
        formData.set('price', priceValue);

        $.ajax({
            url: '{{ route('purchase.store') }}',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                // const idCustomerValue = $('#id_customer').val();
                if (response.success) {
                  showModal(response.data.id_customer, response.data.id_content);
                    // alert('Transaksi berhasil!');
                } else {
                    alert('Terjadi kesalahan.');
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText); // Display any error received from the server
            }
        });
    });


</script>
@endsection