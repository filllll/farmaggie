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

	@include ('layouts.sidebar')
	@include ('layouts.header')
	
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
