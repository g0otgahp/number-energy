<!doctype html>
<html lang="en">
<title>กราฟ</title>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>

<script src="node_modules/Chart.js/dist/Chart.js"></script>
<script>
    var myChart = new Chart({...})
</script>

<body>
  <div class="container-fluid">
    <!-- No Header Card -->
    <div class="block-header text-center">
      <h1>กราฟ</h1>
    </div>
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
        <div class="card">
          <div class="body">
            <div class="row">
              <canvas id="myChart" height="150"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</body>

<?php
$Maxday = date('t');  //ระบุจำนวนวัน Max
$label = date('M');   //ระบุชื่อเดือน
$array = array(       //ระบุจำนวน
  'test' => 3,4,11,14,22,12,12,14,15,11,16,12,17,18,12,12,11,18,9,8,7,22,18,12,12,11,18,9,8,7,22
);

?>
<script>
var ctx = document.getElementById("myChart");
var myChart =
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
          <?php for ($i=1; $i <=$Maxday ; $i++) {
            echo $i.",";
          }?>
        ],
        datasets: [{
            label: "จำนวน",
            data: [
              <?php foreach ($array as $row) {
                echo $row.",";
              }?>
            ],
            //สีกราฟ
            // backgroundColor: [
            //     'rgba(255, 99, 132, 0.2)',
            //     'rgba(54, 162, 235, 0.2)',
            //     'rgba(255, 206, 86, 0.2)',
            //     'rgba(75, 192, 192, 0.2)',
            //     'rgba(153, 102, 255, 0.2)',
            //     'rgba(255, 159, 64, 0.2)'
            // ],
            // สีเส้นขอบ
            // borderColor: [
            //     'black',
            //     'rgba(54, 162, 235, 1)',
            //     'rgba(255, 206, 86, 1)',
            //     'rgba(75, 192, 192, 1)',
            //     'rgba(153, 102, 255, 1)',
            //     'rgba(255, 159, 64, 1)'
            // ],
            borderWidth: 1 // ขนาดเส้นขอบ
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>


</html>
