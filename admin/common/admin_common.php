
<div class="showChart">
<?php
  function getPuchase($cateId){
    $query = "select sum(purchase) as 'purchase' from product where cate_id like '$cateId%'";
    $amount= 0;
    foreach(pdo_query($query) as $r){
      $amount = $r;
    }
    return $amount;
  }
  function getIncome(){
    $query = "select b.title, sum(b.price_sale*a.amount) as income FROM orders a INNER join product b on a.product_id = b.product_id GROUP by a.product_id;";
    // $income = 0;
    // foreach(pdo_query($query) as $r){
    //   $income = $r;
    // }
    return pdo_query($query);
  }
?>
<canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>
                        

</div>

<script>

    let showChart = document.getElementById('myChart');

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
const data = google.visualization.arrayToDataTable([
  
  ['1', 'Mhl'],
  <?php

    foreach(getIncome() as $r){
      echo "['{$r['title']}',{$r['income']}],";
    }
    ?>
]);

const options = {
  title:'Thông tin doanh thu ($)'
};

const chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
/////////////////////////

var xValues = [ "Macbook","Iphone", "Apple Watch", "Phụ kiện"];
var yValues = [<?= getPuchase(1)['purchase']?>, <?= getPuchase(2)['purchase']?>,<?= getPuchase(3)['purchase']?>,<?= getPuchase(4)['purchase']?>]
var barColors = ["red", "green","blue","orange"];

new Chart("myChart1", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Số lượng sản phẩm bán ra"
    }
  }
});

////////////////////////

document.querySelector('.watchChart').addEventListener('click', function(){
    showChart.classList.toggle('display');
});
</script>


