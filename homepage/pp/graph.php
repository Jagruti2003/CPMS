<?php
 
$dataPoints = array( 
	array("label"=>"Study Material", "y"=>64.02),
	array("label"=>"Training & Internship", "y"=>12.55),
	array("label"=>"SGGS library", "y"=>8.47),
	array("label"=>"On Website", "y"=>6.08),
	// array("label"=>"Edge", "y"=>4.29),
	// array("label"=>"Others", "y"=>4.59)
)
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Time Spent In Preparation"
	},
	subtitles: [{
		text: "Uptill Now!"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>