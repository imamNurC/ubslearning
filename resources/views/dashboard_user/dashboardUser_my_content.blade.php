@extends('custom_layout_users.bases.userbase')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<body class="font-poppins bg-gray-50">
    @csrf
    <div class="container mx-auto px-4 py-4">
        <h2 class="text-center text-3xl font-bold mb-4"> Daftar Konten Terbeli</h2>
        <div class="flex flex-col mt-4">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Foto Konten
                                </th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Nama Konten
                                </th>
                            </tr>
                        </thead>
                
                        <tbody class="bg-white">
                            @forelse($purchasedContents as $transactions)
                                {{-- <tr data-id="{{ $transactions->id_content }}" class="cursor-pointer"> --}}
                                <tr data-id="{{ $transactions->id_content }}" data-name="{{ $transactions->content_name }}" class="cursor-pointer">                                    
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-32 h-20">
                                                <img class="w-full h-full object-cover" src="{{ asset('storage/'.$transactions->image_path) }}" alt="{{ $transactions->content_name }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $transactions->content_name }}</div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="px-6 py-4 text-center text-gray-500">
                                        Tidak ada konten yang ditemukan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Function to convert a string to a slug (basic version)
            function generateSlug(text) {
                return text
                    .toString() // Convert to string
                    .toLowerCase() // Convert to lowercase
                    .normalize('NFD') // Normalize accented characters (e.g. é -> e)
                    .replace(/[\u0300-\u036f]/g, '') // Remove diacritical marks
                    .replace(/[^a-z0-9 -]/g, '') // Remove non-alphanumeric characters except space and hyphen
                    .replace(/\s+/g, '-') // Replace spaces with hyphens
                    .replace(/-+/g, '-'); // Remove multiple consecutive hyphens
            }

            $('tr.cursor-pointer').on('click', function() {
                var contentId = $(this).data('id'); // If you need this internally
                var contentName = $(this).data('name'); // If you need this to generate slug
                var slug = generateSlug(contentName); // Assuming you have a function to generate the slug
                var username = '{{ $customer->username }}'; // Get the username from the view

                // Send data to the server using AJAX
                $.ajax({
                    url: '{{ route("store.session") }}', // Route to store session controller
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', // CSRF token for protection
                        username: username,
                        slug: slug // Send the slug instead of content_id
                    },
                    success: function(response) {
                        console.log(response); // Log the server response

                        // Redirect to the content section page
                        window.location.href = '{{ route("show.content", ["username" => ":username", "slug" => ":slug"]) }}'
                            .replace(':username', username)
                            .replace(':slug', slug); // Use the slug in the URL
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error); // Handle any errors
                    }
                });
            });



        });
    </script>
</body>
@endsection

