<!-- Bootstrap core JavaScript
================================================= -->
<!-- Placed at the end of the document so the pages load faster -->
{{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>

    


    // Function to get location and submit form
    function getLocationAndSubmit() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(submitFormWithLocation, submitFormWithoutLocation);
        } else { 
            submitFormWithoutLocation();
        }
    }

    // Function to handle geolocation and submit the form if location is available
    function submitFormWithLocation(position) {
        // Get latitude and longitude
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        // Create hidden input fields for latitude and longitude using jQuery
        var latitudeInput = $('<input>', {
            type: 'hidden',
            name: 'latitude',
            value: latitude
        });

        var longitudeInput = $('<input>', {
            type: 'hidden',
            name: 'longitude',
            value: longitude
        });

        // Append hidden inputs to the form using jQuery
        $('#registerForm').append(latitudeInput, longitudeInput);

        // Submit the form
        $('#registerForm').submit();
    }

    // If geolocation is not available, simply submit the form without latitude and longitude
    function submitFormWithoutLocation() {
        $('#registerForm').submit();
    }
    

    // Collect all selected data, add hidden inputs for names, and submit the form
    $('#registerForm').on('submit', function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Collect the name and id values for the locations
        const provinceId = $('#province').val();
        const provinceName = $('#province option:selected').text();
        
        const regencyId = $('#regency').val();
        const regencyName = $('#regency option:selected').text();
        
        const districtId = $('#district').val();
        const districtName = $('#district option:selected').text();
        
        const villageId = $('#village').val();
        const villageName = $('#village option:selected').text();

        // Add hidden input fields for names to the form
        $('<input>').attr({
            type: 'hidden',
            name: 'nama_provinsi',
            value: provinceName
        }).appendTo('#registerForm');

        $('<input>').attr({
            type: 'hidden',
            name: 'nama_kab_kota',
            value: regencyName
        }).appendTo('#registerForm');

        $('<input>').attr({
            type: 'hidden',
            name: 'nama_kecamatan',
            value: districtName
        }).appendTo('#registerForm');

        $('<input>').attr({
            type: 'hidden',
            name: 'nama_kelurahan',
            value: villageName
        }).appendTo('#registerForm');

        // Now submit the form with both ID and name data
        this.submit(); // Submit the form
    });
</script>