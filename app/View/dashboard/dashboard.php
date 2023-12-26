<?php
include_once '../app/View/dashboard/includes/header.php';

?>

<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php'; ?>

        <main class="col-md-10 p-3 main-content">
           <div class="shadow-sm p-3 mb-3 bg-body rounded">
            dashboard
            </div>
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
           <div class="mychart">
           <div class="row d-flex">
                <div class="col-md-5"><canvas id="hotelChart" width="1000" height="400"></canvas></div>
                <div class="col-md-5"><canvas id="roomChart" width="1000" height="400"></canvas></div>
            </div>
           </div>

          </div>
        </main>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
  

    const hotelCanvas = document.getElementById('hotelChart').getContext('2d');
    const hotelChart = new Chart(hotelCanvas, {
        type: 'bar',
        data: {
            labels: ['Events'],
            datasets: [{
                label: 'Number of Events',
                data: [1,3],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const roomCanvas = document.getElementById('roomChart').getContext('2d');
    const roomChart = new Chart(roomCanvas, {
        type: 'bar',
        data: {
            labels: ['reservation'],
            datasets: [{
                label: 'Number of reservation',
                data: [1,2],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>