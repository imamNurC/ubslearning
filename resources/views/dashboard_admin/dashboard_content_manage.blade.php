@extends('custom_layout_admin.bases.adminbase')
@section('content')

<head>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

</style> 
<div class="max-w-7xl mx-auto">
    <!-- Form Section -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <h2 class="text-2xl font-bold mb-6">Content Manage</h2>
        <form id="recordForm" class="space-y-4" action="/content-manage" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="editId" name="id_content">
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Judul Konten</label>
                    <input type="text" id="content_name" name="content_name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Judul">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="text" id="price" name="price" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Harga">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Youtube Url</label>
                    <input type="text" id="youtube_url" name="youtube_url" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Youtube Url">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select name="kategori" id="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
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

                <div id="editorDeskripsiPanjang">
                    <label class="block text-sm font-medium text-gray-700">Deskripsi Panjang</label>
                        <div id="editor-container-panjang" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                            style="min-height: 150px;"></div>
                </div>
                <input type="hidden" name="deskripsi_panjang" id="deskripsiPanjang" placeholder="Deskripsi Panjang">

                <div class="mt-20">
                    <label class="block text-sm font-medium text-gray-700">Upload Gambar</label>
                    <input type="file" id="image" name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                
            </div>
            <div class="flex justify-end space-x-3">
                <button type="button" id="clearButton" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Clear ❌</button>
                <button type="submit" id="saveButton" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700">Save ✅</button>
            </div>
        </form>
    </div>

    <!-- Table Section -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6">
            <h2 class="text-2xl font-bold mb-4 md:mb-0">Records</h2>
            <form action="/content-manage" method="GET" class="w-full md:w-64">
                <input type="search" name="search" placeholder="🔍 Search records..." class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </form>
            
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 hidden">Id Content</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Content Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Count View</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Count Buy</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Youtube Url</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Kategori</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Deskripsi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100">Deskripsi Panjang</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($data as $value)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap" hidden>{{ $value->id_content }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $value->content_name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $value->price }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $value->count_view }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $value->count_buy }}</td>
                            <td class="px-6 py-4 whitespace-nowrap"><a href="{{ $value->youtube_url }}" target="_blank" class="text-blue-600 hover:underline">{{ $value->youtube_url }}</a></td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $value->kategori }}</td>
                            <td class="px-6 py-4 whitespace-nowrap max-w-sm max-h-20 overflow-y-auto">{{ $value->deskripsi }}</td>
                            <td class="px-6 py-4 whitespace-nowrap max-w-sm max-h-20 overflow-y-auto">{{ $value->deskripsi_panjang }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($value->image_path)
                                    <img src="{{ asset('storage/' . $value->image_path) }}" alt="Content Image" class="w-16 h-16 object-cover rounded">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap space-x-2">
                                <button class="text-blue-600 hover:text-blue-800" onclick="editRecord({{ $value->id_content }}, '{{ $value->content_name }}', '{{ $value->price }}', '{{ $value->youtube_url }}', '{{ $value->kategori }}', '{{ $value->deskripsi }}', '{{ $value->deskripsi_panjang }}')">✏️</button>
                                <button class="text-red-600 hover:text-red-800" onclick="confirmDelete({{ $value->id_content }})">🗑️</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="flex justify-between items-center mt-4">
            <div class="text-sm text-gray-700">
                Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} entries  
            </div>
            <div class="space-x-2">
                {{ $data->links() }}
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

        var quillDeskripsiPanjang = new Quill('#editor-container-panjang', {
            theme: 'snow'
        });

        document.querySelector('form').onsubmit = function() {
            document.querySelector('#deskripsi').value = quill.root.innerHTML;
            document.querySelector('#deskripsiPanjang').value = quillDeskripsiPanjang.root.innerHTML;

            console.log('Deskripsi:', document.querySelector('#deskripsi').value);
            console.log('Deskripsi Panjang:', document.querySelector('#deskripsi_panjang').value);
};

        document.getElementById('clearButton').onclick = function() {

            // Clear the input fields
            document.getElementById('content_name').value = '';
            document.getElementById('price').value = '';
            document.getElementById('youtube_url').value = '';
            document.getElementById('kategori').value = 'Makanan';
            quill.setText('');
            quillDeskripsiPanjang.setText('');
            document.getElementById('deskripsi').value = '';
            document.getElementById('deskripsiPanjang').value = '';
            document.getElementById('editId').value = '';
            document.getElementById('saveButton').innerText = 'Save ✅';
        };

        function editRecord(id_content, content_name, price, youtube_url, kategori, deskripsi, deskripsiPanjang) {
            document.getElementById('content_name').value = content_name;
            document.getElementById('price').value = price;
            document.getElementById('youtube_url').value = youtube_url;
            document.getElementById('kategori').value = kategori;

            quill.root.innerHTML = deskripsi; 
            document.getElementById('deskripsi').value = deskripsi;

            quillDeskripsiPanjang.root.innerHTML = deskripsiPanjang;
            document.getElementById('deskripsiPanjang').value = deskripsiPanjang;

            document.getElementById('recordForm').action = `/content-manage/update/${id_content}`;
            document.querySelector('button[type="submit"]').textContent = 'Update ✏️';
}



        function confirmDelete(id_content) {
            if (confirm('Apakah Anda yakin ingin menghapus record ini?')) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/content-manage/delete/${id_content}`;
                form.innerHTML = `
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                `;
                document.body.appendChild(form);
                form.submit();
            }
        }


        //searching
        $(document).ready(function() {
            $('input[name="search"]').on('input', function() {
                let query = $(this).val();

                $.ajax({
                    url: '/content-manage',
                    method: 'GET',
                    data: { search: query },
                    success: function(data) {
                        $('tbody').html(data);
                    }
                });
            });
        });


    </script>
@endpush
