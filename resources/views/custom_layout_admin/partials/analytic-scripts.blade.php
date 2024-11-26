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
                min: 0,
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
                    offsetY: 5, // Adjust the vertical position of the title if it's cropped
                }
            }
        };

        const chart = new ApexCharts(document.querySelector("#saleschart"), options);
        chart.render();
    });
</script>
