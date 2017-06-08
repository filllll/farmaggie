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
<!-- tables -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/table-style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/basictable.css')}}" />
<script type="text/javascript" src="{{ URL::asset('js/jquery.basictable.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
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
										 <div class="user_img"><img src="{{ URL::asset('images/1.png')}}" alt=""></div>
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
									<li> <a href="#"><i class="fa fa-sign-out"></i> ออกจากระบบ</a> </li>
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
			<div class="agile-grids">
				<!-- input-forms -->
				<div class="grids">

					<div class="panel panel-widget forms-panel">
						<div class="progressbar-heading general-heading">
							<h4>เพิ่มฟาร์ม</h4>
						</div>
						<div class="forms">
								<h3 class="title1"></h3>
								<div class="form-three widget-shadow">
									<form class="form-horizontal" action="#" method="post">
										<div class="form-group">
											<label class="col-md-2 control-label">ชื่อฟาร์ม</label>
											<div class="col-md-8">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-address-book-o"></i>
													</span>
													<input type="text" class="form-control1" placeholder="ฟาร์มแสนสุข">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="farmtype" class="col-sm-2 control-label">ประเภทโรงเรือน</label>
											<div class="col-sm-8"><select name="farmtype" id="farmtype" class="form-control1">
												<option value="none" selected disabled>เลือก</option>
												<option>ปิด</option>
												<option>เปิด</option>
											</select></div>
										</div>
										<div class="form-group">
											<label for="farmcat" class="col-sm-2 control-label">ประเภทฟาร์ม</label>
											<div class="col-sm-8"><select name="farmcat" id="farmcat" class="form-control1">
												<option value="none" selected disabled>เลือก</option>
												<option>ฟาร์มอิสระ</option>
												<option>ฟาร์มแบบมีสัญญาผูกพัน</option>
											</select></div>
										</div>
										<div class="form-group">
											<label for="checkbox" class="col-sm-2 control-label">มาตรฐานฟาร์ม</label>
											<div class="col-sm-8">
												<div class="checkbox-inline"><label><input type="checkbox"> GAP</label></div>
												<div class="checkbox-inline"><label><input type="checkbox"> HACCP</label></div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">เบอร์ติดต่อฟาร์ม</label>
											<div class="col-md-8">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-phone"></i>
													</span>
													<input type="text" class="form-control1" placeholder="081-xxx-xxxx">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">หมายเหตุ</label>
											<div class="col-md-8">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-star-o"></i>
													</span>
													<input type="text" class="form-control1" placeholder="ใส่หรือไม่ใส่ก็ได้">
												</div>
											</div>
										</div>
										<div class="agile-tables">
											<div class="w3l-table-info">
												<table id="table-no-resize">
												<thead>
												  <tr>
													<th>พันธุ์</th>
													<th>จำนวน (ตัว)</th>
													<th>ราคา</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td><div class="col-sm-8"><select name="farmtype" id="farmtype" class="form-control1">
														<option value="none" selected disabled>เลือก</option>
														<option>ปิด</option>
														<option>เปิด</option>
													</select></div>
												</div></td>
													<td><div class="form-group">
														<div class="col-md-8">
															<div class="input-group">
																<span class="input-group-addon">
																	<i class="fa fa-pencil-square-o"></i>
																</span>
																<input type="text" class="form-control1">
															</div>
														</div>
													</div></td>
													<td><div class="form-group">
														<div class="col-md-8">
															<div class="input-group">
																<span class="input-group-addon">
																	<i class="fa fa-btc"></i>
																</span>
																<input type="text" class="form-control1">
															</div>
														</div>
													</div></td>
												  </tr>
													<tr>
													<td><div class="col-sm-8"><select name="farmtype" id="farmtype" class="form-control1">
														<option value="none" selected disabled>เลือก</option>
														<option>ปิด</option>
														<option>เปิด</option>
													</select></div>
												</div></td>
													<td><div class="form-group">
														<div class="col-md-8">
															<div class="input-group">
																<span class="input-group-addon">
																	<i class="fa fa-pencil-square-o"></i>
																</span>
																<input type="text" class="form-control1">
															</div>
														</div>
													</div></td>
													<td><div class="form-group">
														<div class="col-md-8">
															<div class="input-group">
																<span class="input-group-addon">
																	<i class="fa fa-btc"></i>
																</span>
																<input type="text" class="form-control1">
															</div>
														</div>
													</div></td>
												  </tr>
												</tbody>
											  </table>
											</div>
											<!-- //tables -->
										</div>
										<div class="clearfix"> </div>
										<button type="submit" class="btn btn-default w3ls-button">ยืนยันการเพิ่มฟาร์ม</button>

									</div>

									</form>
								</div>
						</div>

				</div>
				<!-- //input-forms -->
			</div>
		</div>
		<!-- footer -->
		<div class="footer">
			<p>© 2017 Farmaggie . All Rights Reserved</p>
		</div>
		<!-- //footer -->
	</section>
	<script src="{{ URL::asset('js/bootstrap.js')}}"></script>

</body>
</html>
