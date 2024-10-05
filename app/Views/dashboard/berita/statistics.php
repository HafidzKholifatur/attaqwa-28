<!DOCTYPE html>
<html>
<head>
    <title>News Chart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Statistik Berita Masuk</h4>
        </div> 
        <div class="card-body">
            <canvas id="beritaChart" width="400" height="200"></canvas>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('beritaChart').getContext('2d');
    var beritaChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php foreach($beritaData as $month => $count): ?>
                    '<?= $month; ?>',
                <?php endforeach; ?>
            ],
            datasets: [{
                label: 'News Count',
                data: [
                    <?php foreach($beritaData as $count): ?>
                        <?= $count; ?>,
                    <?php endforeach; ?>
                ],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 5,
                        callback: function(value) {
                            return value % 5 === 0 ? value : '';
                        }
                    }
                }
            }
        }
    });
</script>

</body>
</html>
