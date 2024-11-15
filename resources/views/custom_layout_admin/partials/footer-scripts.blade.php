<!-- Bootstrap core JavaScript
================================================= -->
<!-- Placed at the end of the document so the pages load faster -->
{{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}

<script>
    var options = {
       series: [{
           name: "Desktops",
           data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
       }],
       chart: {
       height: 350,
       type: 'line',
       zoom: {
           enabled: false
       }
       },
       dataLabels: {
       enabled: false
       },
       stroke: {
       curve: 'straight'
       },
       title: {
       text: 'Product Trends by Month',
       align: 'left'
       },
       grid: {
       row: {
           colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
           opacity: 0.5
       },
       },
       xaxis: {
       categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
       }
       };

       var chart = new ApexCharts(document.querySelector("#chart"), options);
       chart.render();
</script>