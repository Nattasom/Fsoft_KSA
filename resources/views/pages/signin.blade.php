@extends('layouts.default')
@section('content')

<div class="container py-3 mt-130" id="signin">
	<div class="row">
		<div class="col-md-12">
			<div class="bg-signin">
				<div class="row justify-content-center">
					<div class="col-md-5">
						<div class="card border-0 mt-5 shadow-lg">
							<div class="card-header bg-dark bg-boxhead-signin">
								<div class="row">
									<div class="col-md-12 text-center my-4">
										<h4 class="mb-0 text-white">ยินดีต้อนรับลูกค้า กรุงศรี ออโต้</h4>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row justify-content-center">
									<div class="col-md-10 text-center mt-4 mb-5">
										<form action="{{$action}}" method="post">
										<label for="" class="mb-3 text-5b">กรุณากรอกข้อมูลรถของคุณ</label>
										<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
										<input type="text" class="form-control input-sm mb-3" name="license" placeholder="ทะเบียนรถของคุณ" required>
										<select name="" id="" class="form-control select2 mb-4">
											<option value="">จังหวัด</option>
										</select>
										<button type="submit" class="btn btn-warning">เข้าสู่ระบบ</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="container py-3 mt-130">
	<div class="row">
		<div class="col-md-12">
			<div class="bg-signin">
				<div class="row justify-content-center">
					<div class="col-md-5">
						<div class="card border-0 mt-5">
							<div class="card-header bg-dark bg-boxhead-signin">
								<div class="row">
									<div class="col-md-12 text-center my-4">
										<h4 class="mb-0 text-white">ยินดีต้อนรับลูกค้า กรุงศรี ออโต้</h4>
									</div>
								</div>
							</div>
							<div class="card-header border-0 bg-e">
								<div class="row">
									<div class="col-md-12 text-center">
										<h6 for="" class="text-66">ทะเบียนรถ : <span>2ก-9241</span></h6>
										<h6 for="" class="text-66">เบอร์โทรศัพท์ : <span>091-xxx-x567</span></h6>
										<p class="text-red">* หากเปลี่ยนเบอร์โทรศัพท์ กรุณาติดต่อเจ้าหน้าที่ 0-2828-7888</p>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row justify-content-center mb-3">
									<div class="col-md-11 text-center">
										<div class="border-e5">
											<div class="row justify-content-center my-4">
												<div class="col-md-12 mb-2">
													<h5 class="text-49">Ref Code : JCBAA</h5>
													<p class="text-5b">กรุณากรอกรหัสความปลอดภัย SMS-OTP ที่ได้รับ :</p>
												</div>
												<div class="col-md-4">
													<input type="password" class="form-control mb-3" placeholder="******">
													<button class="btn btn-warning">ตกลง</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 text-center">
										<p class="text-b0">ขอรับรหัส OTP ใหม่ <a href="" class="text-49">ที่นี่</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<!-- <div class="container py-3 mt-130">
	<div class="row">
		<div class="col-md-12">
			<div class="bg-thankyou">
				<div class="text-overlay-thankyou">
					<h1 class="mb-4">ได้รับข้อมูลเรียบร้อยแล้ว</h1>
					<h5>คุณจำลอง ตัวอย่าง</h5>
					<p>เราจะติดต่อกลับใน</p>
					<p class="mb-4">วันจันทร์ที่ 15 ตุลาคม 2561 เวลา 09:00 - 10.00 น</p>
					<h5>ขอขอบคุณที่ไว้วางใจ</h5>
					<h5>กรุงศรี ออโต้ อินชัวรันส์ โบรกเกอร์</h5>
				</div>
			</div>
		</div>
	</div>
</div> -->
<style>
	.select2-container .select2-selection--single { height: 38px; border: 1px solid #dddddd !important; }
	.select2-container--default .select2-selection--single .select2-selection__rendered { line-height: 38px; }
	.select2-container--default .select2-selection--single .select2-selection__arrow { height: 38px; }

	body {
		background: #e5e5e5 !important;
	}
	#header {
		background: #fff;
	}
	::placehoder {
		text-align: center;
	}
</style>
@stop

@section('script')
<script>
	$(document).ready(function() {
	    $('.select2').select2({
			placeholder: "กรุณาเลือกจังหวัด",
			containerCssClass: 'mb-3'
	    });
	});
</script>
@stop