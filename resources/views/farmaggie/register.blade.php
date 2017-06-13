<!doctype html>
<html lang="th">
<head>
	<title>Farmaggie :: สมัครสมาชิก</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- font files -->
  <link rel="icon" href="{{ URL::asset('icon.png')}}">
	<link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Roboto|Athiti') }}" rel="stylesheet">
	<!-- /font files -->
	<!-- css files -->
	<link href="{{ URL::asset('css/style.css') }}" rel='stylesheet' type='text/css' media="all" />
	<link rel="stylesheet" href="{{ URL::asset('css/j-forms.css') }}">

	<!-- /css files -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>

</head>
<body>
	<h1 class="header-w3ls">มาร่วมเป็นครอบครัว Farmaggie</h1>
	<div class="content-w3ls">
		<div class="form-w3ls">
			<form method="post" action="{{ route('farm') }}" >
				{{ csrf_field() }}
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div class="content-wthree1">
					<div class="grid-agileits1">
						<div class="form-control">
							<div class="main-row">
								<label class="header">คำนำหน้าชื่อ <span>*</span></label>
								<select name="name_title" required>
									<option value="none" selected disabled>เลือก</option>
									<option value="นาย">นาย</option>
									<option value="นาง">นาง</option>
									<option value="น.ส.">นางสาว</option>
									<option value="พล.ต.อ.">พลตำรวจเอก</option>
									<option value="พล.ต.อ. หญิง">พลตำรวจเอก หญิง</option>
									<option value="พล.ต.ท">พลตำรวจโท</option>
									<option value="พล.ต.ท หญิง">พลตำรวจโท หญิง</option>
									<option value="พล.ต.ต">พลตำรวจตรี</option>
									<option value="พล.ต.ต หญิง">พลตำรวจตรี หญิง</option>
									<option value="พ.ต.อ.">พันตำรวจเอก</option>
									<option value="พ.ต.อ. หญิง">พันตำรวจเอก หญิง</option>
									<option value="พ.ต.อ.(พิเศษ)">พันตำรวจเอกพิเศษ</option>
									<option value="พ.ต.อ.(พิเศษ) หญิง">พันตำรวจเอกพิเศษ หญิง</option>
									<option value="พ.ต.ท.">พันตำรวจโท</option>
									<option value="พ.ต.ท. หญิง">พันตำรวจโท หญิง</option>
									<option value="พ.ต.ต.">พันตำรวจตรี</option>
									<option value="พ.ต.ต. หญิง">พันตำรวจตรี หญิง</option>
									<option value="ร.ต.อ.">ร้อยตำรวจเอก</option>
									<option value="ร.ต.อ. หญิง">ร้อยตำรวจเอก หญิง</option>
									<option value="ร.ต.ท.">ร้อยตำรวจโท</option>
									<option value="ร.ต.ท. หญิง">ร้อยตำรวจโท หญิง</option>
									<option value="ร.ต.ต.">ร้อยตำรวจตรี</option>
									<option value="ร.ต.ต. หญิง">ร้อยตำรวจตรี หญิง</option>
									<option value="ด.ต.">นายดาบตำรวจ</option>
									<option value="ด.ต. หญิง">ดาบตำรวจหญิง</option>
									<option value="ส.ต.อ.">สิบตำรวจเอก</option>
									<option value="ส.ต.อ. หญิง">สิบตำรวจเอก หญิง</option>
									<option value="ส.ต.ท.">สิบตำรวจโท</option>
									<option value="ส.ต.ท. หญิง">สิบตำรวจโท หญิง</option>
									<option value="ส.ต.ต.">สิบตำรวจตรี</option>
									<option value="ส.ต.ต. หญิง">สิบตำรวจตรี หญิง</option>
									<option value="จ.ส.ต.">จ่าสิบตำรวจ</option>
									<option value="จ.ส.ต. หญิง">จ่าสิบตำรวจ หญิง</option>
									<option value="พลฯ">พลตำรวจ</option>
									<option value="พลฯ หญิง">พลตำรวจ หญิง</option>
									<option value="พล.อ.">พลเอก</option>
									<option value="พล.อ. หญิง">พลเอก หญิง</option>
									<option value="พล.ท.">พลโท</option>
									<option value="พล.ท. หญิง">พลโท หญิง</option>
									<option value="พล.ต.">พลตรี</option>
									<option value="พล.ต.หญิง">พลตรี หญิง</option>
									<option value="พ.อ.">พันเอก</option>
									<option value="พ.อ.หญิง">พันเอก หญิง</option>
									<option value="พ.อ.(พิเศษ)">พันเอกพิเศษ</option>
									<option value="พ.อ.(พิเศษ) หญิง">พันเอกพิเศษ หญิง</option>
									<option value="พ.ท.">พันโท</option>
									<option value="พ.ท.หญิง">พันโท หญิง</option>
									<option value="พ.ต.">พันตรี</option>
									<option value="พ.ต.หญิง">พันตรี หญิง</option>
									<option value="ร.อ.">ร้อยเอก</option>
									<option value="ร.อ.หญิง">ร้อยเอก หญิง</option>
									<option value="ร.ท.">ร้อยโท</option>
									<option value="ร.ท.หญิง">ร้อยโท หญิง</option>
									<option value="ร.ต.">ร้อยตรี</option>
									<option value="ร.ต.หญิง">ร้อยตรี หญิง</option>
									<option value="ส.อ.">สิบเอก</option>
									<option value="ส.อ.หญิง">สิบเอก หญิง</option>
									<option value="ส.ท.">สิบโท</option>
									<option value="ส.ท.หญิง">สิบโท หญิง</option>
									<option value="ส.ต.">สิบตรี</option>
									<option value="ส.ต.หญิง">สิบตรี หญิง</option>
									<option value="จ.ส.อ.">จ่าสิบเอก</option>
									<option value="จ.ส.อ.หญิง">จ่าสิบเอก หญิง</option>
									<option value="จ.ส.ท.">จ่าสิบโท</option>
									<option value="จ.ส.ท.หญิง">จ่าสิบโท หญิง</option>
									<option value="จ.ส.ต.">จ่าสิบตรี</option>
									<option value="จ.ส.ต.หญิง">จ่าสิบตรี หญิง</option>
									<option value="พลฯ">พลทหารบก</option>
									<option value="ว่าที่ พ.ต.">ว่าที่ พ.ต.</option>
									<option value="ว่าที่ พ.ต. หญิง">ว่าที่ พ.ต. หญิง</option>
									<option value="ว่าที่ ร.อ.">ว่าที่ ร.อ.</option>
									<option value="ว่าที่ ร.อ. หญิง">ว่าที่ ร.อ. หญิง</option>
									<option value="ว่าที่ ร.ท.">ว่าที่ ร.ท.</option>
									<option value="ว่าที่ ร.ท. หญิง">ว่าที่ ร.ท. หญิง</option>
									<option value="ว่าที่ ร.ต.">ว่าที่ ร.ต.</option>
									<option value="ว่าที่ ร.ต. หญิง">ว่าที่ ร.ต. หญิง</option>
									<option value="พล.ร.อ.">พลเรือเอก</option>
									<option value="พล.ร.อ.หญิง">พลเรือเอก หญิง</option>
									<option value="พล.ร.ท.">พลเรือโท</option>
									<option value="พล.ร.ท.หญิง">พลเรือโท หญิง</option>
									<option value="พล.ร.ต.">พลเรือตรี</option>
									<option value="พล.ร.ต.หญิง">พลเรือตรี หญิง</option>
									<option value="น.อ.">นาวาเอก</option>
									<option value="น.อ.หญิง">นาวาเอก หญิง</option>
									<option value="น.อ.(พิเศษ)">นาวาเอกพิเศษ</option>
									<option value="น.อ.(พิเศษ) หญิง">นาวาเอกพิเศษ หญิง</option>
									<option value="น.ท.">นาวาโท</option>
									<option value="น.ท.หญิง">นาวาโท หญิง</option>
									<option value="น.ต.">นาวาตรี</option>
									<option value="น.ต.หญิง">นาวาตรี หญิง</option>
									<option value="ร.อ.">เรือเอก</option>
									<option value="ร.อ.หญิง">เรือเอก หญิง</option>
									<option value="ร.ท.">เรือโท</option>
									<option value="ร.ท.หญิง">เรือโท หญิง</option>
									<option value="ร.ต.">เรือตรี</option>
									<option value="ร.ต.หญิง">เรือตรี หญิง</option>
									<option value="พ.จ.อ.">พันจ่าเอก</option>
									<option value="พ.จ.อ.หญิง">พันจ่าเอก หญิง</option>
									<option value="พ.จ.ท.">พันจ่าโท</option>
									<option value="พ.จ.ท.หญิง">พันจ่าโท หญิง</option>
									<option value="พ.จ.ต.">พันจ่าตรี</option>
									<option value="พ.จ.ต.หญิง">พันจ่าตรี หญิง</option>
									<option value="จ.อ.">จ่าเอก</option>
									<option value="จ.อ.หญิง">จ่าเอก หญิง</option>
									<option value="จ.ท.">จ่าโท</option>
									<option value="จ.ท.หญิง">จ่าโท หญิง</option>
									<option value="จ.ต.">จ่าตรี</option>
									<option value="จ.ต.หญิง">จ่าตรี หญิง</option>
									<option value="พลฯ">พลทหารเรือ</option>
									<option value="พล.อ.อ.">พลอากาศเอก</option>
									<option value="พล.อ.อ.หญิง">พลอากาศเอก หญิง</option>
									<option value="พล.อ.ท.">พลอากาศโท</option>
									<option value="พล.อ.ท.หญิง">พลอากาศโท หญิง</option>
									<option value="พล.อ.ต.">พลอากาศตรี</option>
									<option value="พล.อ.ต.หญิง">พลอากาศตรี หญิง</option>
									<option value="น.อ.">นาวาอากาศเอก</option>
									<option value="น.อ.หญิง">นาวาอากาศเอก หญิง</option>
									<option value="น.อ.(พิเศษ)">นาวาอากาศเอกพิเศษ</option>
									<option value="น.อ.(พิเศษ) หญิง">นาวาอากาศเอกพิเศษ หญิง</option>
									<option value="น.ท.">นาวาอากาศโท</option>
									<option value="น.ท.หญิง">นาวาอากาศโท หญิง</option>
									<option value="น.ต.">นาวาอากาศตรี</option>
									<option value="น.ต.หญิง">นาวาอากาศตรี หญิง</option>
									<option value="ร.อ.">เรืออากาศเอก</option>
									<option value="ร.อ.หญิง">เรืออากาศเอก หญิง</option>
									<option value="ร.ท.">เรืออากาศโท</option>
									<option value="ร.ท.หญิง">เรืออากาศโท หญิง</option>
									<option value="ร.ต.">เรืออากาศตรี</option>
									<option value="ร.ต.หญิง">เรืออากาศตรี หญิง</option>
									<option value="พ.อ.อ.">พันจ่าอากาศเอก</option>
									<option value="พ.อ.อ.หญิง">พันจ่าอากาศเอก หญิง</option>
									<option value="พ.อ.ท.">พันจ่าอากาศโท</option>
									<option value="พ.อ.ท.หญิง">พันจ่าอากาศโท หญิง</option>
									<option value="พ.อ.ต.">พันจ่าอากาศตรี</option>
									<option value="พ.อ.ต.หญิง">พันจ่าอากาศตรี หญิง</option>
									<option value="จ.อ.">จ่าอากาศเอก</option>
									<option value="จ.อ.หญิง">จ่าอากาศเอก หญิง</option>
									<option value="จ.ท.">จ่าอากาศโท</option>
									<option value="จ.ท.หญิง">จ่าอากาศโท หญิง</option>
									<option value="จ.ต.">จ่าอากาศตรี</option>
									<option value="จ.ต.หญิง">จ่าอากาศตรี หญิง</option>
									<option value="พลฯ">พลทหารอากาศ</option>
									<option value="หม่อม">หม่อม</option>
									<option value="ม.จ.">หม่อมเจ้า</option>
									<option value="ม.ร.ว.">หม่อมราชวงศ์</option>
									<option value="ม.ล.">หม่อมหลวง</option>
									<option value="ดร.">ดร.</option>
									<option value="ศ.ดร.">ศ.ดร.</option>
									<option value="ศ.">ศ.</option>
									<option value="ผศ.ดร.">ผศ.ดร.</option>
									<option value="ผศ.">ผศ.</option>
									<option value="รศ.ดร.">รศ.ดร.</option>
									<option value="รศ.">รศ.</option>
									<option value="นพ.">นพ.</option>
									<option value="พญ.">แพทย์หญิง</option>
									<option value="นสพ.">สัตวแพทย์</option>
									<option value="สพญ.">สพญ.</option>
									<option value="ทพ.">ทพ.</option>
									<option value="ทพญ.">ทพญ.</option>
									<option value="ภก.">เภสัชกร</option>
									<option value="ภกญ.">ภกญ.</option>
									<option value="พระ">พระ</option>
									<option value="พระครู">พระครู</option>
									<option value="พระมหา">พระมหา</option>
									<option value="พระสมุห์">พระสมุห์</option>
									<option value="พระอธิการ">พระอธิการ</option>
									<option value="สามเณร">สามเณร</option>
									<option value="แม่ชี">แม่ชี</option>
									<option value="บาทหลวง">บาทหลวง</option>
								</select>

							</div>

							<div class="form-control">
								<label class="header">ชื่อ-สกุล<span>*</span></label>
								<input type="text" id="surname" name="name" placeholder="ชื่อ" title="โปรดกรอกชื่อ" required>
								<input type="text" id="surname" name="surname" placeholder="สกุล" title="โปรดกรอกชื่อสกุล" required>
							</div>


							<div class="form-control">
								<div class="grid-w3layouts1">
									<div class="w3-agile1">
										<label class="rating">เพศ<span>*</span></label>
										<ul>
											<li>
												<input type="radio" id="a-option" name="sex" value="male">
												<label for="a-option">ชาย </label>
												<div class="check"></div>
											</li>
											<li>
												<input type="radio" id="b-option" name="sex" value="female">
												<label for="b-option">หญิง</label>
												<div class="check"><div class="inside"></div></div>
											</li>
											<div class="clear"></div>
										</ul>
									</div>

								</div>
							</div>

							<div class="clear"></div>
						</div>


						<div class="form-control">
							<label class="header">วัน-เดือน-ปีเกิด(ค.ศ.)<span>*</span></label>
							<input type="date" id="name" name="birthdate" placeholder="01-01-2017" title="โปรดกรอก วัน-เดือน-ปีเกิด" required>
						</div>

						<div class="form-control">
							<label class="header">อีเมล <span>*</span></label>
							<input type="email" id="email" name="email" placeholder="mail@example.com" title="โปรดกรอกอีเมลล์" required>
						</div>
						<div class="form-control">
							<label class="header">สร้างรหัสผ่าน <span>*</span></label>
							<input type="password" id="name" name="pass1" placeholder="รหัสผ่าน" title="โปรดกรอกรหัสผ่าน" required>
						</div>
						<div class="form-control">
							<label class="header">ยืนยันรหัสผ่าน <span>*</span></label>
							<input type="password" id="name" name="pass2" placeholder="ยืนยันรหัสผ่าน" title="โปรดกรอกรหัสผ่าน" required>
						</div>
						<div class="form-control">
							<label class="header">เบอร์โทรศัพท์ <span>*</span></label>
							<input type="text" id="name" name="mobile" placeholder="081-xxx-xxxx" title="โปรดกรอกเบอร์โทรศัพท์" required>
						</div>
					</div>
				</div>

				<div class="form-control">
					<div class="main-row">
						<label class="header">สัญชาติ <span>*</span></label>
						<select name="country">
							<option value="none" selected disabled>เลือก</option>
							@foreach ($nations as $nation)
							<option value="{{ $nation->nation_name }}">
								{{ $nation->nation_name }}
							</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="form-control">
					<div class="main-row">
						<label class="header">วุฒิการศึกษาสูงสุด <span>*</span></label>
						<select name="education">
							<option value="none" selected="" disabled="">เลือก</option>
							<option value="ประถมศึกษาหรือต่ำกว่า">ประถมศึกษาหรือต่ำกว่า</option>
							<option value="มัธยมศึกษาตอนต้น">มัธยมศึกษาตอนต้น</option>
							<option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย</option>
							<option value="ปวช.">ปวช.</option>
							<option value="ปวส.">ปวส.</option>
							<option value="ปริญญาตรี">ปริญญาตรี</option>
							<option value="ปริญญาโท">ปริญญาโท</option>
							<option value="ปริญญาเอก">ปริญญาเอก</option>
						</select>
					</div>
				</div>

				<div class="content-wthree2">
					<div class="grid-w3layouts1">
						<div class="w3-agile1">
							<label class="rating">สถานภาพ<span>*</span></label>
							<ul>
								<li>
									<input type="radio" id="c-option" name="status" value="single">
									<label for="c-option">โสด</label>
									<div class="check"><div class="inside"></div></div>
								</li>
								<li>
									<input type="radio" id="d-option" name="status" value="married">
									<label for="d-option">สมรส</label>
									<div class="check"><div class="inside"></div></div>
								</li>
								<li>
									<input type="radio" id="f-option" name="status" value="divorced">
									<label for="f-option">หย่าร้าง</label>
									<div class="check"><div class="inside"></div></div>
								</li>
								<li>
									<input type="radio" id="g-option" name="status" value="widowed">
									<label for="g-option">ม่าย</label>
									<div class="check"><div class="inside"></div></div>
								</li>
							</ul>
						</div>

					</div>

					<div class="clear"></div>
				</div>

				<div class="w3ls-btn">
					<div class="form-control">
						<label class="header">ที่อยู่ที่สามารถติดต่อได้<span>*</span></label>
						<input type="text" id="address" name="add_no" placeholder="เลขที่" title="โปรดกรอกเลขที่สำหรับที่อยู่" required="">
						<input type="text" id="address" name="add_moo" placeholder="หมู่" title="โปรดกรอกหมู่" required="">
						<input type="text" id="address" name="add_soi" placeholder="ซอย/ตรอก" title="โปรดกรอกซอย/ตรอก" required="">
						<input type="text" id="address" name="add_road" placeholder="ถนน" title="โปรดกรอกถนน" required="">
						<input type="text" id="address" name="add_dis" placeholder="อำเภอ/เขต" title="โปรดกรอกอำเภอ/เขต" required="">
						<input type="text" id="address" name="add_subdis" placeholder="ตำบล/แขวง" title="โปรดกรอกตำบล/แขวง" required="">
						<input type="text" id="address" name="add_province" placeholder="จังหวัด" title="โปรดกรอกจังหวัด" required="">
						<input type="text" id="address" name="add_zip" placeholder="รหัสไปรษณีย์" title="โปรดกรอกรหัสไปรษณีย์" required="">
						<input type="text" id="address" name="add_face" placeholder="ชื่อบัญชี Facebook">
						<input type="text" id="address" name="add_line" placeholder="ชื่อไอดี Line">
					</div>
				</div>

				<div class="w3ls-btn">
					<div class="contact-forms">
						<label class="rating">อัพโหลดรูปโปรไฟล์ (ขนาดไม่เกิน xx KB )</label>
						<label class="input append-small-btn">
							<div class="upload-btn">
								อัพโหลด
								<input type="file" name="file1" onchange="document.getElementById('file1_input').value = this.value;">
							</div>
						</label>
						<div class="wthreesubmitaits">
							<input type="submit" name="submit" value="สมัครสมาชิก">
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>

	<p class="copyright">© 2017 Farmaggie | Fruary Company All Rights Reserved</p>


</body>
</html>
