<!DOCTYPE html>
	@include ('layouts.head')
	@include ('layouts.sidebar')
	@include ('layouts.header')

<body class="dashboard-page">
			<div class="main-grid">
				<div class="agile-grids">
            <div class="panel panel-widget forms-panel">
							<div class="progressbar-heading general-heading">
								<h4>ฟาร์มที่ #1</h4>
							</div>
							<div class="clearfix"> </div>

					<div class="col-md-4 charts-right">
						<!-- area-chart -->
							<div id="graph4"></div>
							<script>
								Morris.Donut({
									element: 'graph4',
									data: [
									{value: 75, label: 'สุกรเต็มวัย', formatted: '85%' },
									{value: 20, label: 'ลูกสุกร', formatted: '10%' },
									{value: 5, label: 'สุกรป่วย', formatted: '5%' }
									],
									formatter: function (x, data) { return data.formatted; }
								});
							</script>


						<!-- //area-chart -->

					</div>

					<div class="col-md-8 agile-last-left">

							<div class="area-grids-heading">
								<h3>รายรับรายจ่าย</h3>
							</div>
							<canvas id="mixed-chart" width="800" height="384"></canvas>
						<script>
						new Chart(document.getElementById("mixed-chart"), {
							type: 'bar',
							data: {
							labels: ["มกรา", "กุมภา", "มีนา", "เมษา", "พฤษภา", "มิถุนา"],
							datasets: [{
								label: "รายรับ",
								type: "line",
								borderColor: "#8e5ea2",
								data: [12000,5000,6750,7340,15000,11100],
								fill: false
								}, {
								label: "รายจ่าย",
								type: "line",
								borderColor: "#3e95cd",
								data: [20000,15000,7830,2470,1110,9870],
								fill: false
								}, {
								label: "รายรับ",
								type: "bar",
								backgroundColor: "rgba(0,0,0,0.2)",
								data: [12000,5000,6750,7340,15000,11100],
								}, {
								label: "รายจ่าย",
								type: "bar",
								backgroundColor: "rgba(0,0,0,0.2)",
								backgroundColorHover: "#3e95cd",
								data: [20000,15000,7830,2470,1110,9870]
								}
							]
							},
							options: {
							title: {
								display: true,
								text: 'ย้อนหลังหกเดือน'
							},
							legend: { display: false }
							}
						});
						</script>

					</div>
				    <div class="clearfix"> </div>


			  <div class="agile-bottom-grids">
				<div class="col-md-12 agile-bottom-right">
						<div class="area-grids-heading">
							<h3>ยอดการขายสุกรย้อนหลัง 6 เดือน</h3>
						</div>
						<div id="graph9"></div>
						<script>
							var day_data = [
							{"elapsed": "มกราคม", "value": 15},
							{"elapsed": "กุมภาพันธ์", "value": 24},
							{"elapsed": "มีนาคม", "value": 36},
							{"elapsed": "เมษายน", "value": 79},
							{"elapsed": "พฤษภาคม", "value": 48},
							{"elapsed": "มิถุนายน", "value": 78}
							];
							Morris.Line({
								element: 'graph9',
								data: day_data,
								xkey: 'elapsed',
								ykeys: ['value'],
								labels: ['value'],
								parseTime: false
							});
						</script>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

</div>

	   @include ('layouts.footer')
	</section>
	<script src="{{ URL::asset('js/bootstrap.js')}}"></script>
</body>
</html>
