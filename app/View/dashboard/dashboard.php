<?php
include_once '../app/View/dashboard/includes/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php include_once '../app/View/dashboard/includes/asside.php'; ?>

        <main class="col-md-10 p-3 main-content">
            <div class="d-flex gap-4 " style="margin-bottom:30px;">
            <div class="shadow-sm p-3 d-grid mb-3 bg-body rounded" style="width: 250px; height:150px; position: relative; ">
                    <div class="text-center" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
                        <span style="font-size: 2em; opacity: 0.3;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/> </svg>
                        </span>
                    </div>
                    Total Events: <?=$eventCount?>
                </div>
            <div class="shadow-sm d-grid p-3 mb-3 bg-body rounded" style="width: 250px; height:150px;  position: relative; ">
            <div class="text-center" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
                        <span style="font-size: 2em; opacity: 0.3;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/> </svg>
                        </span>
                    </div>
                 Total Reservations :  <?=$reservationCount?>  
                
            </div>
            <div class="shadow-sm d-grid p-3 mb-3 bg-body rounded" style="width: 250px; height:150px;  position: relative; ">
            <div class="text-center" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
                        <span style="font-size: 2em; opacity: 0.3;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/> <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.20c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/> <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/> <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/> </svg>
                        </span>
                    </div>
               cheffer  d affaire :0
              
               </div>
            <div class="shadow-sm  d-grid p-3 mb-3 bg-body rounded" style="width: 250px; height:150px;  position: relative; ">
            <div class="text-center" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
                        <span style="font-size: 2em; opacity: 0.3;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/> <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> </svg>
                        </span>
                    </div>
               total Users :100
             
            </div>
            </div>
          
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="mychart">
                    <div class="row d-flex">
                        <div class="col-md-5">
                            <canvas id="eventChart" width="1000" height="400"></canvas>
                        </div>
                        <div class="col-md-5">
                            <canvas id="reservationChart" width="1000" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const eventCanvas = document.getElementById('eventChart').getContext('2d');
    const eventChart = new Chart(eventCanvas, {
        type: 'bar',
        data: {
            labels: ['Events'],
            datasets: [{
                label: 'Number of Events',
                data: [<?= $eventCount ?>], 
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

    const reservationCanvas = document.getElementById('reservationChart').getContext('2d');
    const reservationChart = new Chart(reservationCanvas, {
        type: 'bar',
        data: {
            labels: ['Reservations'],
            datasets: [{
                label: 'Number of Reservations',
                data: [<?= $reservationCount ?>], 
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
