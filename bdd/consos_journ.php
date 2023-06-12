<canvas id="myChart"></canvas>

<script>
    jQuery(function ($) {

        console.log($.cookie("consos_journ"));
        let cj = $.cookie("consos_journ");
        // cj = cj.split(",");

        cj = JSON.parse(cj);

        // console.log(cj);
    });

    // Paramétrage du graphique
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai'],
            datasets: [{
                label: 'Consommation journalière',
                data: [0, 200, 400, 600, 800, 1000, 1200, 1400, 1600, 1800]
            }]
        },
        options: {
            title: {
                display: true
                // text: 'Ventes mensuelles'
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>