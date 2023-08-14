<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var options = {
	title: {
		text: "Number of Active Users in Website"
	},
	axisY: {
		includeZero: true
	},
	data: [{
		type: "column",
		yValueFormatString: "#,###",
		indexLabel: "{y}",
      	color: "#546BC1",
		dataPoints: [
			{ label: "Homepage", y: 196 },
			{ label: "Renew Pass", y: 263 },
			{ label: "Calendar", y: 134 },
			{ label: "Verification before scroll", y: 216 },
			{ label: "Support", y: 174 },
			{ label: "Verification after scroll", y: 122 },
			{ label: "Login", y: 182 }
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

function updateChart() {
	var performance, deltaY, yVal;
	var dps = options.data[0].dataPoints;
	for (var i = 0; i < dps.length; i++) {
		deltaY = Math.round(2 + Math.random() * (-2 - 2));
		yVal = deltaY + dps[i].y > 0 ? dps[i].y + deltaY : 0;
		dps[i].y = yVal;
	}
	options.data[0].dataPoints = dps;
	$("#chartContainer").CanvasJSChart().render();
};
updateChart();

setInterval(function () { updateChart() }, 500);

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<button onclick="history.back()">Go Back</button>
</body>
</html>