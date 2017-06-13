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
									<h3>2</h3>
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
									<h3>696</h3>
									<a href="#">จำนวนสุกร</a>
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
									<h3>1,960 </h3>
									<a href="#">ราคาสุกรวันนี้</a>
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
									<h3>ดี</h3>
									<a href="#">คุณภาพฟาร์ม</a>
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
				</div>
				<div class="agile-last-grids">
					<div class="col-md-4 agile-last-left">
						<div class="agile-last-grid">
							<div class="area-grids-heading">
								<h3>ราคาสุกรย้อนหลัง 4 วัน</h3>
							</div>
							<div id="graph7"></div>
							<script>
							// This crosses a DST boundary in the UK.
							Morris.Area({
								element: 'graph7',
								data: [
								{x: '07-06-2560 10:00:00', y: 1120, z: 1950},
								{x: '08-06-2560 10:00:00', y: 1150, z: 1900},
								{x: '09-06-2560 10:00:00', y: 1270, z: 1870},
								{x: '10-06-2560 10:00:00', y: 1100, z: 1920}
								],
								xkey: 'x',
								ykeys: ['y', 'z'],
								labels: ['ลูกสุกร', 'สุกรเต็มวัย']
							});
						</script>

					</div>
				</div>

				<div class="col-md-4 agile-last-left agile-last-right">
					<div class="agile-last-grid">
						<div class="area-grids-heading">
							<h3>ยอดการขายสุกรย้อนหลัง 4 เดือน</h3>
						</div>
						<div id="graph9"></div>
						<script>
							var day_data = [
							{"elapsed": "กุมภาพันธ์", "value": 34},
							{"elapsed": "มีนาคม", "value": 24},
							{"elapsed": "เมษายน", "value": 56},
							{"elapsed": "พฤษภาคม", "value": 78}
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
	   @include ('layouts.footer')
	</section>
</body>
</html>
