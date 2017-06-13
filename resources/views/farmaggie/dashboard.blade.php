<!DOCTYPE html>
<head>
	<title>แผงควบคุม :: Farmaggie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}">
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="{{ URL::asset('css/dashboard.css')}}" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<link href='{{ URL::asset('//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')}}' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="{{ URL::asset('css/font.css')}}" type="text/css"/>
	<link href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- //font-awesome icons -->
	<script src="{{ URL::asset('js/jquery2.0.3.min.js')}}"></script>
	<script src="{{ URL::asset('js/modernizr.js')}}"></script>
	<script src="{{ URL::asset('js/jquery.cookie.js')}}"></script>
	<script src="{{ URL::asset('js/screenfull.js')}}"></script>
	<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}



			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
		});
	</script>
	<!-- charts -->
	<script src="{{ URL::asset('js/raphael-min.js')}}"></script>
	<script src="{{ URL::asset('js/morris.js')}}"></script>
	<link rel="stylesheet" href="{{ URL::asset('css/morris.css')}}">
	<!-- //charts -->
	<!--skycons-icons-->
	<script src="{{ URL::asset('js/skycons.js')}}"></script>
	<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
		var theme = $.cookie('protonTheme') || 'default';
		$('body').removeClass (function (index, css) {
			return (css.match (/\btheme-\S+/g) || []).join(' ');
		});
		if (theme !== 'default') $('body').addClass(theme);
	</script>
	@include ('layouts.sidebar')
	@include ('layouts.header')
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
									<a href="#">จำนวนสุกรในฟาร์ม</a>
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
									<a href="#">ราคาสุกรวันนี้ (ต่อตัว)</a>
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
									<a href="#">คุณภาพฟาร์มโดยรวม</a>
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
		<!-- footer -->
		<div class="footer">
			<p>© 2017 Farmaggie . All Rights Reserved</a></p>
		</div>
		<!-- //footer -->
	</section>
	<script src="{{ URL::asset('js/bootstrap.js')}}"></script>

</body>
</html>
