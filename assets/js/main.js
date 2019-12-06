jQuery(document).ready(function( $ ) {

	function canvasGrafico(vagasRegistradas) {
		if($('.canvas').length) {
			
			alert(vagasRegistradas);

			var doughnutData = 
			[
				{
					value: vagasRegistradas,
					color: "#f85c37"
				},
				{
					value: 40 - vagasRegistradas,
					color: "#ecf0f1"
				}
			];
			var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);
		};
	}	

	// if($('#canvas').length) {

	// 	var doughnutData = 
	// 	[
	// 		{
	// 			value: 70,
	// 			color: "#f85c37"
	// 		},
	// 		{
	// 			value: 30,
	// 			color: "#ecf0f1"
	// 		}
	// 	];
	// 	var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);
	// };

	if($('#canvas2').length) {
		var doughnutData = 
		[
			{
				value: 90,
				color: "#f85c37"
			},
			{
				value: 10,
				color: "#ecf0f1"
			}
		];
		var myDoughnut = new Chart(document.getElementById("canvas2").getContext("2d")).Doughnut(doughnutData);
	}

	if($('#canvas3').length) {
		var doughnutData = 
		[
			{
				value: 55,
				color: "#f85c37"
			},
			{
				value: 45,
				color: "#ecf0f1"
			}
		];
		var myDoughnut = new Chart(document.getElementById("canvas3").getContext("2d")).Doughnut(doughnutData);
	}

	if($('#canvas4').length) {
		var doughnutData = 
		[
			{
				value: 55,
				color: "#f85c37"
			},
			{
				value: 45,
				color: "#ecf0f1"
			}
		];
		var myDoughnut = new Chart(document.getElementById("canvas4").getContext("2d")).Doughnut(doughnutData);
	}
});
