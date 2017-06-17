<!DOCTYPE html>
	@include ('layouts.head')
	@include ('layouts.sidebar')
	@include ('layouts.header')

<body class="dashboard-page">
			<div class="main-grid">
				<div class="social grid">
					<div class="grid-info">
						<div class="col-md-3 top-comment-grid">
							<div class="comments likes">
								<div class="comments-icon">
									<i class="fa fa-circle-o-notch fa-spin fa-3x" style="color:white"></i>
								</div>
								<div class="comments-info likes-info">
									<h3>1</h3>
									<a href="#">จำนวนฟาร์ม</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments">
								<div class="comments-icon">
									<i class="fa fa-heartbeat fa-3x" style="color:white"></i>
								</div>
								<div class="comments-info">
									<h3>248</h3>
									<a href="#">จำนวนสุกร</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments tweets">
								<div class="comments-icon">
									<i class="fa fa-umbrella fa-3x" style="color:white"></i>
								</div>
								<div class="comments-info tweets-info">
									<h3>29°C </h3>
									<a href="#">สภาพอากาศ</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments views">
								<div class="comments-icon">
									<i class="fa fa-tachometer fa-3x" style="color:white"></i>
								</div>
								<div class="comments-info views-info">
									<a href="{{ URL::asset('farm/ranking') }}"><h3>ดี:#1</h3></a>
									<a href="#">คุณภาพฟาร์ม</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="social grid">
					<div class="grid-info">
						<div class="col-md-3 top-comment-grid">
							<div class="comments views">
								<div class="comments-icon">
									<i class="fa fa-btc fa-3x" style="color:white"></i>
								</div>
								<div class="comments-info views-info">
									<h3>1,960</h3>
									<a href="#">ราคาสุกรมีชีวิตหน้าฟาร์ม <br>(ต่อตัว)</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments tweets">
								<div class="comments-icon">
									<i class="fa fa-btc fa-3x" style="color:white"></i>
								</div>
								<div class="comments-info tweets-info">
									<h3>748</h3>
									<a href="#">ราคาอาหารสุกรเล็ก<br> (ต่อ 30 กก.)</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments">
								<div class="comments-icon">
									<i class="fa fa-btc fa-3x" style="color:white"></i>
								</div>
								<div class="comments-info">
									<h3>716 </h3>
									<a href="#">ราคาอาหารสุกรรุ่น <br>(ต่อ 30 กก.)</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments likes">
								<div class="comments-icon">
									<i class="fa fa-btc fa-3x" style="color:white"></i>
								</div>
								<div class="comments-info likes-info">
									<h3>693</h3>
									<a href="#">ราคาอาหารสุกรเนื้อ <br>(ต่อ 30 กก.)</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>

				<div class="agile-grids">
					<div class="col-md-4 charts-right">
						<!-- area-chart -->
						<div class="area-grids">
							<div class="area-grids-heading">
								<h3>ข้อมูลสุกรโดยรวม</h3>
							</div>
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

						</div>
						<!-- //area-chart -->
					</div>

					<div class="col-md-8 agile-last-left">
						<div class="agile-last-grid">
							<div class="area-grids-heading">
								<h3>รายรับรายจ่าย</h3>
							</div>
							<canvas id="mixed-chart" width="800" height="255"></canvas>
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
								backgroundColor: "rgba(164, 202, 200, 0.8)",
								data: [12000,5000,6750,7340,15000,11100],
								}, {
								label: "รายจ่าย",
								type: "bar",
								backgroundColor: "rgba(233, 129, 103, 0.8)",
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
					</div>
				    <div class="clearfix"> </div>
					</div>

			  <div class="agile-bottom-grids">
				<div class="col-md-12 agile-bottom-right">
					<div class="agile-bottom-grid">
						<div class="area-grids-heading">
							<h3>ยอดการขายสุกรย้อนหลัง 6 เดือน (ตัว)</h3>
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
			</div>
			<div class="clearfix"> </div>
		</div>



	   @include ('layouts.footer')
	</section>
	<script src="{{ URL::asset('js/bootstrap.js')}}"></script>
</body>
</html>
