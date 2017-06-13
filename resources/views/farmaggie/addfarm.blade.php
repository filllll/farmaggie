<!DOCTYPE html>
@include ('layouts.head')
@include ('layouts.sidebar')
@include ('layouts.header')
<body class="dashboard-page">
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

	@include ('layouts.footer')

</section>

</body>
</html>
