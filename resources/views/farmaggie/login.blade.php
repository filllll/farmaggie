<!DOCTYPE HTML>
<html>
<head>
<title>Farmaggie :: เข้าสู่ระบบ</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Custom Theme files -->
<link rel="icon" href="{{ URL::asset('icon.png')}}">
<link href="{{ URL::asset('css/style1.css') }}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{ URL::asset('css/bootstrap-social.css') }}" rel="stylesheet" type="text/css" media="all"/>

<!-- //Custom Theme files -->
<!-- web-font -->
 <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- //web-font -->
<!-- pop-up-box -->
<script src="js/jquery-2.2.3.min.js"></script>
<script>
	$(document).ready(function() {
		$('.popup-top-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
	});
</script>
<!-- //pop-up-box -->
</head>
<body>
	<!-- login starts here -->
	<div class="login agile">
<h2>เข้าสู่ระบบ Farmaggie</h2>
		<div class="w3agile-border">
			<div class="login-main login-agileits">
				<h1>เข้าสู่ระบบ</h1>
				<form action="#" method="post">
					<p>อีเมล</p>
					<input type="text" placeholder="mail@example.com" name="email" required="">
					<p>รหัสผ่าน</p>
					<input type="password" placeholder="รหัสผ่าน" name="password" required="">
					<input type="submit" value="เข้าสู่ระบบ">
				</form>
        <a class="btn btn-block btn-social btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-facebook']);">
            <span class="fa fa-facebook"></span> เข้าสู่ระบบด้วย Facebook
          </a>
				<h3>ยังไม่ได้สมัครสมาชิก <a href="{{ URL::asset('farm/register') }}"> สมัครเลย !</a></h3>
			</div>
		</div>

	</div>
	<!-- //login ends here -->
	<!-- copyrights -->
	<div class="copy-rights wthree">
		<p>© 2017 Farmaggie | Fruary Company All Rights Reserved</a> </p>
	</div>
	<!-- //copyright -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
</body>
</html>
