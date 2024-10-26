@extends('custom_layout.bases.adminbase')
@section('content')

{{-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Management Interface</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head> --}}

<head>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

    <div class="max-w-7xl mx-auto">
        <!-- Form Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-bold mb-6">Content Manage</h2>
            <form id="recordForm" class="space-y-4" action="/content-manage" method="POST" >
                @csrf
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Judul Konten</label>
                        <input type="text" name="content_name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Judul">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="text" name="price" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Harga">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Youtube Url</label>
                        <input type="text" name="youtube_url" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Youtube Url">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select name="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option>Makanan</option>
                            <option>Traveling</option>
                            <option>Edukasi</option>
                            <option>Hobi</option>
                        </select>
                    </div>       
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <div id="editor-container" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                             style="min-height: 150px;"></div>
                    </div>
                    <input type="hidden" name="deskripsi" id="deskripsi" placeholder="Deskripsi">
                </div>
                <div class="flex justify-end space-x-3">
                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Clear ❌</button>
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">Save ✅</button>
                </div>
            </form>
        </div>

        <!-- Table Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <h2 class="text-2xl font-bold mb-4 md:mb-0">Records</h2>
                <div class="w-full md:w-64">
                    <input type="search" placeholder="🔍 Search records..." class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Content Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Youtube Url</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Kategori</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Deskripsi</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($data as $value)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">{{ $value->content_name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $value->price }}</td>
                                <td class="px-6 py-4 whitespace-nowrap"><a href="{{ $value->youtube_url }}" target="_blank" class="text-blue-600 hover:underline">{{ $value->youtube_url }}</a></td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $value->kategori }}</td>
                                <td class="px-6 py-4 whitespace-nowrap max-w-sm max-h-20 overflow-y-auto">{{ $value->deskripsi }}</td>
                                <td class="px-6 py-4 whitespace-nowrap space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800">✏️</button>
                                    <button class="text-red-600 hover:text-red-800">🗑️</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            </div>
            

            <div class="flex justify-between items-center mt-4">
                <div class="text-sm text-gray-700">
                    Showing 1 to 1 of 1 entries
                </div>
                <div class="space-x-2">
                    <button class="px-3 py-1 border rounded-md hover:bg-gray-50 disabled:opacity-50">Previous</button>
                    <button class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700">1</button>
                    <button class="px-3 py-1 border rounded-md hover:bg-gray-50 disabled:opacity-50">Next</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        
        var quill = new Quill('#editor-container', {
            theme: 'snow'
        });

        document.querySelector('form').onsubmit = function() {
            document.querySelector('#deskripsi').value = quill.root.innerHTML;
        };
    </script>
@endpush