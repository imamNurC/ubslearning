<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
@extends('custom_layout.adminlayout')
@section('content')
<!-- component -->
<style>
  .login_img_section {
  background: linear-gradient(rgba(2,2,2,.7),rgba(0,0,0,.7)),url(https://images.unsplash.com/photo-1650825556125-060e52d40bd0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80) center center;
}

input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 30px transparent inset;
    box-shadow: 0 0 0 30px transparent inset;
}
</style>
<div class="h-screen flex">
          <div class="hidden lg:flex w-full lg:w-1/2 login_img_section
          justify-around items-center">
            <div 
                  class=" 
                  bg-black 
                  opacity-20 
                  inset-0 
                  z-0"
                  >

                  </div>
            <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
              <h1 class="text-white font-bold text-4xl font-sans">Simple App</h1>
              <p class="text-white mt-1">The simplest app to use</p>
              <div class="flex justify-center lg:justify-start mt-6">
                  <a href="/register" class="hover:bg-indigo-700 hover:text-white hover:-translate-y-1 transition-all duration-500 bg-white text-indigo-800 mt-4 px-4 py-2 rounded-2xl font-bold mb-2">Get Started</a>
              </div>
            </div>
          </div>
          <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
            <div class="w-full px-8 md:px-32 lg:px-24">
            <form class="bg-white rounded-md shadow-2xl p-5" action="/login" method="POST">
              @csrf
              @if (session('success'))
                <div class="max-w-lg mx-auto mt-6">
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.remove();">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a1 1 0 011.415 0l.035.035a1 1 0 010 1.415L11.415 12l4.383 4.383a1 1 0 01-1.415 1.415L10 13.415 5.652 17.8a1 1 0 01-1.415-1.415L8.585 12 4.2 7.652a1 1 0 011.415-1.415L10 10.585l4.348-4.933z"/></svg>
                        </span>
                    </div>
                </div>
              @endif
              @if (session('loginError'))
                <div class="max-w-lg mx-auto mt-6">
                    <div class="bg-red-100 border border-red-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('loginError') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.remove();">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a1 1 0 011.415 0l.035.035a1 1 0 010 1.415L11.415 12l4.383 4.383a1 1 0 01-1.415 1.415L10 13.415 5.652 17.8a1 1 0 01-1.415-1.415L8.585 12 4.2 7.652a1 1 0 011.415-1.415L10 10.585l4.348-4.933z"/></svg>
                        </span>
                    </div>
                </div>
              @endif
              <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
              <p class="text-sm font-normal text-gray-600 mb-8">Welcome Back</p>
              <div>
                <div class="flex items-center border-2 mb-2 py-2 px-3 rounded-2xl">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                  </svg>
                  <input id="email" class="pl-2 w-full outline-none border-none focus:outline-none focus:ring-0 @error('email') border-red-500 @enderror" type="email" name="email" placeholder="Email Address" autofocus required autocomplete="off" onfocus="this.removeAttribute('readonly');" readonly value="{{ old('email') }}"/>              
                </div>
              @error('email')
                  <span class="text-red-500">{{ $message }}</span>
              @enderror
              </div>
                
              <div>
                <div class="relative flex items-center border-2 mb-2 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clipRule="evenodd" />
                    </svg>
                    <input class="pl-2 w-full outline-none border-none focus:outline-none focus:ring-0 @error('password') border-red-500 @enderror" type="password" name="password" id="password" placeholder="Password" required/>
                    <button type="button" id="togglePassword" class="absolute right-3 text-gray-500">
                        <i class="mdi mdi-eye-outline"></i>
                    </button>
                </div>
                @error('password')
                    <span class="text-red-500 mt-1">{{ $message }}</span> <!-- Tambahkan margin atas untuk spasi -->
                @enderror
            </div>
            
            

              <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Login</button>
              <div class="flex justify-between mt-4">
                <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Forgot Password ?</span>

                <a href="/register" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Don't have an account yet?</a>
              </div>
              
            </form>
            </div>
            
          </div>
      </div>
@endsection

<script>

  document.addEventListener('DOMContentLoaded', function() {
          const togglePasswordButton = document.getElementById('togglePassword');
          const passwordInput = document.getElementById('password');
  
          togglePasswordButton.addEventListener('click', function() {
              const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
              passwordInput.setAttribute('type', type);
              this.innerHTML = type === 'password' 
                  ? '<i class="mdi mdi-eye-outline"></i>' 
                  : '<i class="mdi mdi-eye-off-outline"></i>';
          });
      });
    
  document.getElementById('email').addEventListener('animationstart', function() {
          this.removeAttribute('readonly');
      });

  </script>





