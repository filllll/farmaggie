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
