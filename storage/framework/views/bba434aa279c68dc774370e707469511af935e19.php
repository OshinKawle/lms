 <?php 
$revenu = $mrevenue['revenue'];
$booking = $mbooking['booking'];
?>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,  
    exportEnabled: true,
    title:{
        text: "Company Revenue by Month"
    },
    axisY: {
        title: "Revenue",
    },
    data: [{
        type: "splineArea",
        color: "rgba(54,158,173,.7)",
        markerSize: 5,
        xValueFormatString: "YYYY",
         indexLabel: "{y}",
        yValueFormatString: "#,##0.##",
        dataPoints: <?php echo json_encode($revenu,
                            JSON_NUMERIC_CHECK); ?>
    }]
    });
chart.render();




var dataPoints = [];

var chart1 = new CanvasJS.Chart("chartContainer1", {
    exportEnabled: true,
    animationEnabled: true,
    theme: "light2",
    title: {
        text: "Total Booking by Month"
    },
    axisY: {
        title: "Total Booking",
        titleFontSize: 24,
        includeZero: true
    },

    data: [{
        type: "column",
        yValueFormatString: "#,### 0",
        
        indexLabel: "{y}",
        dataPoints: <?php echo json_encode($booking,
                            JSON_NUMERIC_CHECK); ?>
    }]
});
  chart1.render();


}
</script><?php /**PATH D:\xampp\htdocs\vesta\resources\views/admin/dashboard/js.blade.php ENDPATH**/ ?>