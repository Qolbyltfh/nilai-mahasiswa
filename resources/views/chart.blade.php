<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="row">
    <div class="col-12">
        <h3 style="text-align: center">Chart Perolehan Nilai Mahasiswa Keseluruhan</h3>
    </div>
</div>
<div class="row" style="width:50%; margin: 0 auto">
    <div class="chart-container" style="position: relative; height:30vh;">
        <canvas id="myChart"></canvas>
    </div>
</div>

<script type="text/javascript">
    const data = {
        labels: [
            'A',
            'B',
            'C',
            'D'
        ],
        datasets: [{
            label: 'Orang',
            data: [2, 5, 2, 1],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)',
                'rgb(235, 64, 52)'
            ],
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>