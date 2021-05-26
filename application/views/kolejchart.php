<script type="text/javascript"> src="https://www.gstatic.com/charts/loader.js" </script>

<div class="container">
	<div class="jumbotron">
		<h1> Total Member of Each College </h1>
	</div>
	<script>
		google.charts.load('current',{'package':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart(){

			var data = google.visualization.arrayToDataTable([
				['College','Number of member'],
				<?php 
				foreach ($number_of_member as $college){
					echo"['".$college['fld_member_college']."',".$college['membernumber']."],";
				}
				 ?>
				]);

				var options = {
					title: 'Number of member'
				};

				var chart = new google.visualization.PieChart(document.getElementById('piechart'));

				chart.draw(data, options);

		}
	</script>
	<div id="piechart2" style="width:900px; height: 500px;"></div>
	
</div>