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


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const chartData = @json($chartData);

        const options = {
            series: [{
                name: 'Transactions',
                data: chartData.totals
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
                text: 'Transactions Over the Last 7 Days',
                align: 'center'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            xaxis: {
                categories: chartData.dates,  // Now this will contain day names like 'Monday', 'Tuesday', etc.
                title: {
                    text: 'Day'
                },
            },
            yaxis: {
                title: {
                    text: 'Number of Transactions',
                    style: {
                        fontSize: '14px', // Adjust the font size if necessary
                        fontWeight: 'bold'
                    },
                },
                labels: {
                    formatter: function (value) {
                        return value.toFixed(0);
                    }
                },
                title: {
                    offsetX: 0, // Move title to the left if needed
                    offsetY: 10, // Adjust the vertical position of the title if it's cropped
                }
            }
        };

        const chart = new ApexCharts(document.querySelector("#saleschart"), options);
        chart.render();
    });
</script>

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