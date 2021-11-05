@extends('app')

@section('content')
<div class="panel-body">
</div>
@endsection

@section ('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
   $.ajax(
        {
            url: "/statistik",
            type: 'GET',
            success: function (data) {
                console.log(data.golongan);
                var barChartData = {
                    labels:data.golongan,
                    datasets: [{
                        label: 'Total',
                        backgroundColor: "purple",
                        data: data.total
                    }]
                };               
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myBar = new Chart(ctx, {
                    type: 'bar',
                    data: barChartData,
                    options: {
                        elements: {
                            rectangle: {
                                borderWidth: 2,
                                borderColor: '#c1c1c1',
                                borderSkipped: 'bottom'
                            }
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        responsive: true,
                        title: {
                            display: true,
                            text: 'Data Karyawan'
                        }
                    }
                });
            }
        }
        )
</script>
@endsection