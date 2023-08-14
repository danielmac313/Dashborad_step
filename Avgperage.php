<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Avrage per age"
	},	
	axisY: {
		title: "pepole",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "time per sec",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "homepage avg time",
		legendText: "homepage avg time",
		showInLegend: true, 
		dataPoints:[
			{ label: "20-40", y: 2.6250 },
			{ label: "40-55", y: 3.4286 },
			{ label: "50-70", y: 6.3333 },
			{ label: "70-above", y: 8.0000 }
		]
	},
	{
		type: "column",	
		name: "Login avg time",
		legendText: "Login avg time",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:[
			{ label: "20-40", y: 3.0000 },
			{ label: "40-55", y: 3.7143 },
			{ label: "50-70", y: 6.3333 },
			{ label: "70-above", y: 13.0000 }
		]
	}]
});
chart.render();



function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<button onclick="history.back()">Go Back</button>
</body>
</html>