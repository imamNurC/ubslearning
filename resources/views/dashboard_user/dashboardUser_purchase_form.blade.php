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
                id="time"
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
                class="pt-3 pb-2 pr-12 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200 file:bg-transparent file:border-0 file:bg-gray-100 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:text-gray-700 file:cursor-pointer"
            />
            <label for="image" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Upload Gambar</label>
            <span class="text-sm text-red-600 hidden" id="image-error">Gambar wajib diunggah</span>
        </div>
        
        <button
          id="button"
          type="button"
          class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none"
        >
          Konfirmasi Pembelian
        </button>
      </form>
    </div>
  </div>
  
<script>
'use strict'

document.getElementById('button').addEventListener('click', toggleError)

function toggleError() {
  const inputs = document.querySelectorAll('input[required]')
  const imageInput = document.getElementById('image')
  const imageErrorMessage = document.getElementById('image-error')
  let hasError = false

  inputs.forEach((input) => {
    const label = input.nextElementSibling
    const errorMessage = input.nextElementSibling.nextElementSibling

    // // Debugging log untuk melihat input dan nilai-nya
    console.log(`Input: ${input.name}, Value: '${input.value.trim()}'`)

    if (input.id === 'id-transaction') {
      return;
    }

    if (input.value.trim() === '') {
      errorMessage.classList.remove('hidden')
      input.classList.add('border-red-600')
      label.classList.add('text-red-600')
      hasError = true
    } else {
      errorMessage.classList.add('hidden')
      input.classList.remove('border-red-600')
      label.classList.remove('text-red-600')
    }
  })

  // Validasi untuk gambar
  if (!imageInput.files.length) {
    imageErrorMessage.classList.remove('hidden')
    imageInput.classList.add('border-red-600')
    hasError = true
  } else {
    imageErrorMessage.classList.add('hidden')
    imageInput.classList.remove('border-red-600')
  }

  // Debugging log untuk melihat apakah ada error
  if (hasError) {
    console.log('Ada error, periksa input yang kosong atau tidak valid.')
  } else {
    console.log('Form sudah valid, tidak ada error.')
  }
}

// Set waktu lokal pada input time
const timeInput = document.getElementById('time');
const currentTime = new Date();
const hours = String(currentTime.getHours()).padStart(2, '0');
const minutes = String(currentTime.getMinutes()).padStart(2, '0');
timeInput.value = `${hours}:${minutes}`;

</script>
@endsection