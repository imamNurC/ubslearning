<!-- Bootstrap core JavaScript
================================================= -->
<!-- Placed at the end of the document so the pages load faster -->
{{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}


{{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    const labels = {!!  json_encode($transaction_count->pluck('tanggal')) !!};
    const data = {!!  json_encode($transaction_count->pluck('sold_count')) !!};

    const options = {
        chart: {
            type: 'line',
            height: 400
        },
        series: [{
            name: 'Transaction per Week'
            data: data
        }],
        xaxis: {
            categories: labels,
            title: {
                text: 'Day'
            }
        },
        yaxis: {
            title: {
                text: 'Transaction'
            }
        },
        title: {
            text: 'Transaction per Day on Week'
            align: 'center'
        }
    };

    const chart = new ApexCharts(document.querySelector("#chart"),options);
    chart.render();
</script> --}}