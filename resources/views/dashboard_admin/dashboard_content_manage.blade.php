@extends('custom_layout_admin.bases.adminbase')
@section('content')

<head>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/autofill/2.3.7/css/autoFill.dataTables.min.css" rel="stylesheet">
    <style>
        /* Custom style for disabled fields */
        input:disabled, textarea:disabled, select:disabled {
            background-color: #f0f0f0;  /* Light gray background */
            color: #888; /* Darker gray text */
            border: 1px solid #ccc; /* Light border */
            cursor: not-allowed; /* Show the "not-allowed" cursor */
            opacity: 0.6; /* Reduce opacity for a darker look */
        }

    </style>
</head>

<div class="max-w-7xl mx-auto">
    <!-- Form Section -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-12">
        <h2 class="text-2xl font-bold mb-6">Manajemen Konten</h2>

        <form id="recordForm" action="/content-manage" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <input type="hidden" id="editId" name="id_content">
    
            <!-- Form Fields (Content Name, Price, etc.) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="content_name" class="block text-sm font-medium text-gray-700">Content Name</label>
                    <input type="text" id="content_name" name="content_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
    
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" id="price" name="price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
    
                <div>
                    <label for="youtube_url" class="block text-sm font-medium text-gray-700">Youtube URL</label>
                    <input type="url" id="youtube_url" name="youtube_url" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
    
                <div>
                    <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select id="kategori" name="kategori" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
    
                <div class="col-span-1 md:col-span-2">
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <div id="editor-container" class="mt-1"></div>
                    <input type="hidden" id="deskripsi" name="deskripsi">
                </div>
    
                <div class="col-span-1 md:col-span-2 mt-12">
                    <label for="deskripsi_panjang" class="block text-sm font-medium text-gray-700">Deskripsi Panjang</label>
                    <div id="editor-container-panjang" class="mt-1"></div>
                    <input type="hidden" id="deskripsi_panjang" name="deskripsi_panjang">
                </div>
    
                <div class="col-span-1 md:col-span-2 mt-12">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" id="image" name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
            </div>
            <div class="flex justify-end space-x-4">
                <button type="button" id="clearButton" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">Clear</button>
                <button type="submit" id="saveButton" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Save ✅</button>
                <button type="button" id="editButton" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600" style="display:none;">Edit</button>
                <button type="button" id="updateButton" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600" style="display:none;">Update</button>
                <button type="button" id="deleteButton" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600" style="display:none;">Delete</button>
                <button type="button" id="cancelButton" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600" style="display:none;">Cancel</button>
            </div>
        </form>
    </div>

    <!-- Table Section -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6">
            <h2 class="text-2xl font-bold mb-4 md:mb-0">Records</h2>
        </div>

        <div class="overflow-x-auto">
            <table id="content-table" class="display">
                <thead>
                    <tr>
                        <th>Content Name</th>
                        <th>Price</th>
                        <th>count_view</th>
                        <th>count_buy</th>
                        <th>Kategori</th>
                        <th>youtube_url</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Populate table rows with your data -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/autofill/2.3.7/js/dataTables.autoFill.min.js"></script>
<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow'
        });

        var quillDeskripsiPanjang = new Quill('#editor-container-panjang', {
            theme: 'snow'
        });
    $(document).ready(function() {
        console.log("DataTables initialized");
        var table = $('#content-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('content.data') }}',
                type: 'GET',
                dataSrc: function(json) {
                    console.log(json);  // Debugging untuk melihat apa yang diterima
                    return json.data;  // Pastikan json.data berisi array data yang akan ditampilkan
                }
            },
            columns: [
                { data: 'content_name' },  // Nama Konten
                { data: 'price' },         // Harga
                { data: 'count_view' },    // Jumlah View
                { data: 'count_buy' },     // Jumlah Pembelian
                { data: 'kategori' },      // Kategori
                { data: 'youtube_url' },    // URL Youtube
            ]
        });

        $('#content-table tbody').on('click', 'tr', function() {
            var data = table.row(this).data();
            $('#content_name').val(data.content_name).prop('disabled', true);
            $('#price').val(data.price).prop('disabled', true);
            $('#youtube_url').val(data.youtube_url).prop('disabled', true);
            $('#kategori').val(data.kategori).prop('disabled', true);
            $('#deskripsi').val(data.deskripsi).prop('disabled', true);
            $('#deskripsi_panjang').val(data.deskripsi_panjang).prop('disabled', true);
            $('#image').val(data.image).prop('disabled', true);
            quill.setText(data.deskripsi);
            quillDeskripsiPanjang.setText(data.deskripsi_panjang);
            quill.enable(false);
            quillDeskripsiPanjang.enable(false);
            quillDeskripsiPanjang.root.innerHTML = data.deskripsi_panjang;
            quillDeskripsiPanjang.setContents(quillDeskripsiPanjang.clipboard.convert(data.deskripsi_panjang));
            $('#editId').val(data.id_content);
            $('#saveButton').hide();
            $('#clearButton').hide();
            $('#editButton').show();
            $('#deleteButton').show();
            $('#cancelButton').show();
        });

        $('#editButton').on('click', function() {
            $('#content_name').prop('disabled', false);
            $('#price').prop('disabled', false);
            $('#youtube_url').prop('disabled', false);
            $('#kategori').prop('disabled', false);
            $('#image').prop('disabled', false);
            quill.enable(true);
            quillDeskripsiPanjang.enable(true);
            $('#updateButton').show();
            $('#editButton').hide();
        });

        
        $('#updateButton').on('click', function() {
            var id = $('#editId').val(); // Get the id of the content to be updated
            var data = {
                content_name: $('#content_name').val(),
                price: $('#price').val(),
                youtube_url: $('#youtube_url').val(),
                kategori: $('#kategori').val(),
                deskripsi: quill.root.innerHTML,
                deskripsi_panjang: quillDeskripsiPanjang.root.innerHTML,
                _token: $('meta[name="csrf-token"]').attr('content') // CSRF token for security
            };

            console.log(data);
            

            // AJAX request to update the record
            $.ajax({
                url: '/content-manage/update/' + id, // Use the route with the ID parameter
                type: 'POST',
                data: data,
                success: function(response) {
                    // Handle success
                    alert('Record updated successfully!');
                    table.ajax.reload(); // Reload the table if you're using DataTables
                    clearForm();
                    quill.enable(true);
                    quillDeskripsiPanjang.enable(true);
                    $('#deleteButton').hide();
                    $('#cancelButton').hide();
                    $('#updateButton').hide();
                    $('#saveButton').show();
                },
                error: function(xhr, status, error) {
                    // Handle error
                    alert('An error occurred while updating the record.');
                    $('#deleteButton').hide();
                    $('#cancelButton').hide();
                    $('#updateButton').hide();
                }
            });
        });

        $('#deleteButton').on('click', function() {
            var id = $('#editId').val();
            if (confirm('Are you sure you want to delete this record?')) {
                $.ajax({
                    url: '/content-manage/delete/' + id,
                    type: 'POST', // Using POST instead of DELETE
                    data: {
                        _method: 'DELETE', // Emulating DELETE method
                        _token: $('meta[name="csrf-token"]').attr('content') // CSRF Token
                    },
                    success: function(result) {
                        table.ajax.reload();
                        clearForm();
                        quill.enable(true);
                        quillDeskripsiPanjang.enable(true);
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred while deleting the record.');
                    }
                });
            }
        });


        $('#cancelButton').on('click', function() {
            clearForm();
            quill.enable(true);
            quillDeskripsiPanjang.enable(true);
        });

        function clearForm() {
            document.getElementById('content_name').value = '';
            document.getElementById('price').value = '';
            document.getElementById('youtube_url').value = '';
            document.getElementById('kategori').value = '';
            quill.setText('');
            quillDeskripsiPanjang.setText('');
            document.getElementById('deskripsi').value = '';
            document.getElementById('deskripsi_panjang').value = '';
            document.getElementById('editId').value = '';
            document.getElementById('saveButton').innerText = 'Save ✅';
            $('#saveButton').show();
            $('#clearButton').show();
            $('#editButton').hide();
            $('#deleteButton').hide();
            $('#cancelButton').hide();
            $('#updateButton').hide();
            $('#content_name').prop('disabled', false);
            $('#price').prop('disabled', false);
            $('#youtube_url').prop('disabled', false);
            $('#kategori').prop('disabled', false);
            $('#image').prop('disabled', false);
            quill.enable(false);
            quillDeskripsiPanjang.enable(false);
            // $('#content_name').prop('disabled', true);
            // $('#price').prop('disabled', true);
            // $('#youtube_url').prop('disabled', true);
            // $('#kategori').prop('disabled', true);
            // $('#image').prop('disabled', true);
        }


        

        document.querySelector('form').onsubmit = function() {
            document.querySelector('#deskripsi').value = quill.root.innerHTML;
            document.querySelector('#deskripsi_panjang').value = quillDeskripsiPanjang.root.innerHTML;

            console.log('Deskripsi:', document.querySelector('#deskripsi').value);
            console.log('Deskripsi Panjang:', document.querySelector('#deskripsi_panjang').value);
        };

        document.getElementById('clearButton').onclick = function() {
            clearForm();
        };
    });
</script>
@endpush