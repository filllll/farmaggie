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
	<nav class="main-menu">
		<ul>
			<li>
				<a href="{{ URL::asset('farm/dashboard')}}">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
						แผงควบคุม
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-cogs" aria-hidden="true"></i>
					<span class="nav-text">
						จัดการฟาร์ม
					</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="{{ URL::asset('farm/addfarm')}}">
							เพิ่มฟาร์มใหม่
						</a>
					</li>
					<li>
						<a class="subnav-text" href="grids.html">
							แก้ไขข้อมูลฟาร์ม
						</a>
					</li>
					<li>
						<a class="subnav-text" href="grids.html">
							ลบฟาร์ม
						</a>
					</li>
				</ul>
			</li>


			<ul>

				<li>
					<a href="typography.html">
						<i class="icon-font nav-icon"></i>
						<span class="nav-text">
							วิธีการใช้งาน
						</span>
					</a>
				</li>
				<li>
					<a href="error.html">
						<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
						<span class="nav-text">
							คำถามที่พบบ่อย
						</span>
					</a>
				</li>
			</ul>
			<ul class="logout">
				<li>
					<a href="farm/login">
						<i class="icon-off nav-icon"></i>
						<span class="nav-text">
							ออกจากระบบ
						</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="wrapper scrollable">
			<nav class="user-menu">
				<a href="javascript:;" class="main-menu-access">
					<i class="icon-proton-logo"></i>
					<i class="icon-reorder"></i>
				</a>
			</nav>
			<section class="title-bar">
				<div class="logo">
					<h1><a href="{{ URL::asset('farm/dashboard')}}"><img src="{{ URL::asset('images/logo.png')}}" alt="" />Farmaggie</a></h1>
				</div>
				<div class="full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
					</section>
				</div>

				<div class="header-right">
					<div class="profile_details_left">
						<div class="header-right-left">
							<!--notifications of menu start -->
							<ul class="nofitications-dropdown">
								<li class="dropdown head-dpdn">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
									<ul class="dropdown-menu anti-dropdown-menu w3l-msg">
										<li>
											<div class="notification_header">
												<h3>คุณมี 3 ข้อความใหม่</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="{{ URL::asset('images/1.png')}}" alt=""></div>
											<div class="notification_desc">
												<p>คำถามที่พบบ่อย</p>
												<p><span>1 ชั่วโมงก่อน</span></p>
											</div>
											<div class="clearfix"></div>
										</a></li>
										<li class="odd"><a href="#">
											<div class="user_img"><img src="{{ URL::asset('images/1.png')}}" alt=""></div>
											<div class="notification_desc">
												<p>วิธีใช้งานเบื้องต้น </p>
												<p><span>1 ชั่วโมงก่อน</span></p>
											</div>
											<div class="clearfix"></div>
										</a></li>
										<li><a href="#">
											<div class="user_img"><img src="{{ URL::asset('images/1.png')}}" alt=""></div>
											<div class="notification_desc">
												<p>ยินดีต้อนรับสู่ Farmaggie </p>
												<p><span>1 ชั่วโมงก่อน</span></p>
											</div>
											<div class="clearfix"></div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">ดูข้อความทั้งหมด</a>
											</div>
										</li>
									</ul>
								</li>
								<li class="dropdown head-dpdn">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">2</span></a>
									<ul class="dropdown-menu anti-dropdown-menu agile-notification">
										<li>
											<div class="notification_header">
												<h3>คุณมี 2 การแจ้งเตือนใหม่</h3>
											</div>
										</li>
										<li class="odd"><a href="#">
											<div class="user_img"><img src="{{ URL::asset('images/1.png')}}" alt=""></div>
											<div class="notification_desc">
												<p>Lorem ipsum dolor amet </p>
												<p><span>1 ชั่วโมงก่อน</span></p>
											</div>
											<div class="clearfix"></div>
										</a></li>
										<li><a href="#">
											<div class="user_img"><img src="{{ URL::asset('images/3.png')}}" alt=""></div>
											<div class="notification_desc">
												<p>เพิ่มฟาร์มกันดีไหม </p>
												<p><span>1 ชั่วโมงก่อน</span></p>
											</div>
											<div class="clearfix"></div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">ดูการแจ้งเตือนทั้งหมด</a>
											</div>
										</li>
									</ul>
								</li>

								<div class="clearfix"> </div>
							</ul>
						</div>
						<div class="profile_details">
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">
											<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span>
											<div class="clearfix"></div>
										</div>
									</a>
									<ul class="dropdown-menu drp-mnu">
										<li> <a href="#"><i class="fa fa-cog"></i> การตั้งค่า</a> </li>
										<li> <a href="#"><i class="fa fa-user"></i> โปรไฟล์</a> </li>
										<li> <a href="farm/login"><i class="fa fa-sign-out"></i> ออกจากระบบ</a> </li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</section>
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
