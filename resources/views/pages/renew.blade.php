@extends('layouts.default')
@section('content')
<div class="box-header">
    <div class="container">
        <div class="col-md-12 text-center">
            <h5 class="mb-0 text-22 text-brown">รายละเอียดผู้เอาประกัน</h5>
            <p class="text-14">
            	ชื่อ : <strong class="font-bold">คุณจำลองตัวอย่าง</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	เบอร์โทรศัพท์ : <strong class="font-bold">088-888-8888</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	รุ่นรถ : <strong class="font-bold">Honda / City (1500) / 2016</strong>
            </p>
            <p class="text-14">
            	บริษัทประกันภัย : <strong class="font-bold">อลิอันซ์ประกันภัย</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	เลขที่กรมธรรม์ : <strong class="font-bold">IAAA123456789</strong>
            </p>
            <p class="text-14">
            	วันเริ่มต้น : <strong class="font-bold">15 ธันวาคม 2553</strong>
            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            	วันสิ้นสุด : <strong class="font-bold">15 ธันวาคม 2554</strong>
            </p>
        </div>
    </div>
</div>

<div class="container mb-5 pt-5" id="maindivcontent">
	<div class="row mb-3">
		<div class="col-md-12 text-center">
			<p class="text-18 text-gray2 mb-2"><img src="{{ Config::get('app.url_assets') }}assets/img/icon02.png" alt="icon" height="20"> อลิอันซ์ประกันภัย</p>
			<p class="text-18">ป1 ซุปเปอร์จิ๋ว ซ่อมห้าง ไม่มีDD ทุน 200,000 </p>
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td class="text-center bg-gray">เบี้ยประกันภัยเดิม</td>
						<td class="text-center">เบี้ยประกันภัยต่ออายุ</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center bg-gray">
							<div class="py-4">
								<p class="mb-1 text-48">9,500</p>
								<p class="text-16 text-gray2">บาท / ปี</p>
							</div>
						</td>
						<td class="text-center">
							<div class="py-4">
								<p class="mb-1 text-48">9,300</p>
								<p class="text-16 text-gray2">บาท / ปี</p>
			                    <a data-toggle="modal" data-target="#interest" class="btn btn-yellow py-2 px-3 mt-3 btn-sm"
			                    data-title="ประกันภัยไทยวิวัฒน์" 
			                    data-caption="ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 200,000" 
			                    data-price="9000" 
			                    data-producttype="1"
			                    data-icon="[ins_icon]" 
			                    data-makevalue="[make_value]"
			                    data-modelvalue="[model_value]"
			                    data-motortype="[motor_type]"
			                    data-seat="[seat]"
			                    data-cc="[car_cc]"
			                    >สนใจต่อประกัน</a>
								<!-- <a href="#" class="btn btn-yellow py-2 px-3 mt-3 btn-sm">สนใจต่อประกัน</a> -->
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="text-center click-collapsed bg-brown py-2">
							<span class="text-12 mb-0">รายละเอียดความคุ้มครองที่ต่างกัน</span>
							<button class="pull-right closefooter"><i class="fa fa-chevron-up text-white" aria-hidden="true"></i></button>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td class="text-center bg-gray">
							<p>ทุนประกัน</p>
							<p class="text-gray3">200,000 บาท</p>
						</td>
						<td class="text-center">
							<p>ทุนประกัน</p>
							<p>150,000 บาท</p>
						</td>
					</tr>
					<tr>
						<td class="text-center bg-gray">
							<p>ซ่อม</p>
							<p class="text-gray3">ห้าง</p>
						</td>
						<td class="text-center">
							<p>ซ่อม</p>
							<p>อู่</p>
						</td>
					</tr>	
				</tfoot>
			</table>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-md-4 col-xs-12 contentDiv px-3" data-idx="[idx]">
		    <div class="card rounded-0 mb-4 card-item">
		        <div class="overlay">
		            <img src="http://atc-th.com/krungsri/ksa-admin/uploads/promotion/1539738758ribbon.png" style="height:60px; width: auto;" class="mr-1" alt="">
		            <!-- <img src="{{ Config::get('app.url_assets') }}assets/img/special.png" style="height:60px;" alt=""> -->
		        </div>
		        <div class="card-header rounded-0">
		        <!-- <img src="{{ Config::get('app.url_assets') }}assets/img/" style="height:30px;margin-top:-2px;" alt=""> -->
		            <p><img src="http://atc-th.com/krungsri/ksa-admin/uploads/insurer/1539629250icon01.png" style="height:30px; width: auto; margin-top:-2px;" alt="" class="d-inline-block"> ประกันภัยไทยวิวัฒน์</p>
		        </div>
		        <div class="card-body rounded-0 pt-4 pb-2">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <p class="text-header-card mb-3 px-4">ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 200,000</p>
		                    <h2 class="font-weight-bold text-40">9,000 <span class="text-18 font-weight-normal">บาท / ปี</span></h2>
		                    
		                    <a href="#" class="btn btn-default mx-0 btn-theme3">ชั้น 1</a>
		                    <a href="#" class="btn btn-default mx-0 btn-theme3">โปรโมชั่น</a>
		                    <!-- 
		                    
		                    
		                    <a href="#" class="btn btn-default mx-0 btn-theme3">ผ่อน 10 ด.</a>
		                   
		                    
		                    
		                    -->
		                    <div class="mt-4">
		                        <a href="#" class="text-card">อ่านรายละเอียด <i class="fa fa-chevron-right"></i></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="card-footer rounded-0">
		            <div class="row">
		                <div class="col-6">
		                    <div class="form-check">
		                        <input type="checkbox" class="form-check-input cbCompare" 
		                        data-title="ประกันภัยไทยวิวัฒน์" 
		                        data-caption="ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 200,000" 
		                        data-price="9000" 
		                        data-catid="1"
		                        data-all="[json]" 
		                        id="checkboxCompare1">
		                        <!--  // mg add data-all -->
		                        <label class="form-check-label" for="checkboxCompare1">เปรียบเทียบ</label>
		                    </div>
		                </div>
		                <div class="col-6 text-right">
		                    <a data-toggle="modal" data-target="#interest" class="btn btn-warning btn-theme"
		                    data-title="ประกันภัยไทยวิวัฒน์" 
		                    data-caption="ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 200,000" 
		                    data-price="9000" 
		                    data-producttype="1"
		                    data-icon="[ins_icon]" 
		                    data-makevalue="[make_value]"
		                    data-modelvalue="[model_value]"
		                    data-motortype="[motor_type]"
		                    data-seat="[seat]"
		                    data-cc="[car_cc]"
		                    >สนใจประกันนี้</a>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="col-md-4 col-xs-12 contentDiv px-3" data-idx="[idx]">
		    <div class="card rounded-0 mb-4 card-item">
		        <div class="overlay">
		            <img src="http://atc-th.com/krungsri/ksa-admin/uploads/promotion/1539738758ribbon.png" style="height:60px; width: auto;" class="mr-1" alt="">
		            <!-- <img src="{{ Config::get('app.url_assets') }}assets/img/special.png" style="height:60px;" alt=""> -->
		        </div>
		        <div class="card-header rounded-0">
		        <!-- <img src="{{ Config::get('app.url_assets') }}assets/img/" style="height:30px;margin-top:-2px;" alt=""> -->
		            <p><img src="http://atc-th.com/krungsri/ksa-admin/uploads/insurer/1539629250icon01.png" style="height:30px; width: auto; margin-top:-2px;" alt="" class="d-inline-block"> ประกันภัยไทยวิวัฒน์</p>
		        </div>
		        <div class="card-body rounded-0 pt-4 pb-2">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <p class="text-header-card mb-3 px-4">ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 200,000</p>
		                    <h2 class="font-weight-bold text-40">9,000 <span class="text-18 font-weight-normal">บาท / ปี</span></h2>
		                    
		                    <a href="#" class="btn btn-default mx-0 btn-theme3">ชั้น 1</a>
		                    <a href="#" class="btn btn-default mx-0 btn-theme3">โปรโมชั่น</a>
		                    <!-- 
		                    
		                    
		                    <a href="#" class="btn btn-default mx-0 btn-theme3">ผ่อน 10 ด.</a>
		                   
		                    
		                    
		                    -->
		                    <div class="mt-4">
		                        <a href="#" class="text-card">อ่านรายละเอียด <i class="fa fa-chevron-right"></i></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="card-footer rounded-0">
		            <div class="row">
		                <div class="col-6">
		                    <div class="form-check">
		                        <input type="checkbox" class="form-check-input cbCompare" 
		                        data-title="ประกันภัยไทยวิวัฒน์" 
		                        data-caption="ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 200,000" 
		                        data-price="9000" 
		                        data-catid="2"
		                        data-all="[json]" 
		                        id="checkboxCompare2">
		                        <!--  // mg add data-all -->
		                        <label class="form-check-label" for="checkboxCompare2">เปรียบเทียบ</label>
		                    </div>
		                </div>
		                <div class="col-6 text-right">
		                    <a data-toggle="modal" data-target="#interest" class="btn btn-warning btn-theme"
		                    data-title="ประกันภัยไทยวิวัฒน์" 
		                    data-caption="ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 200,000" 
		                    data-price="9000" 
		                    data-producttype="1"
		                    data-icon="[ins_icon]" 
		                    data-makevalue="[make_value]"
		                    data-modelvalue="[model_value]"
		                    data-motortype="[motor_type]"
		                    data-seat="[seat]"
		                    data-cc="[car_cc]"
		                    >สนใจประกันนี้</a>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="col-md-4 col-xs-12 contentDiv px-3" data-idx="[idx]">
		    <div class="card rounded-0 mb-4 card-item">
		        <div class="overlay">
		            <img src="http://atc-th.com/krungsri/ksa-admin/uploads/promotion/1539738758ribbon.png" style="height:60px; width: auto;" class="mr-1" alt="">
		            <!-- <img src="{{ Config::get('app.url_assets') }}assets/img/special.png" style="height:60px;" alt=""> -->
		        </div>
		        <div class="card-header rounded-0">
		        <!-- <img src="{{ Config::get('app.url_assets') }}assets/img/" style="height:30px;margin-top:-2px;" alt=""> -->
		            <p><img src="http://atc-th.com/krungsri/ksa-admin/uploads/insurer/1539629250icon01.png" style="height:30px; width: auto; margin-top:-2px;" alt="" class="d-inline-block"> ประกันภัยไทยวิวัฒน์</p>
		        </div>
		        <div class="card-body rounded-0 pt-4 pb-2">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <p class="text-header-card mb-3 px-4">ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 200,000</p>
		                    <h2 class="font-weight-bold text-40">9,000 <span class="text-18 font-weight-normal">บาท / ปี</span></h2>
		                    
		                    <a href="#" class="btn btn-default mx-0 btn-theme3">ชั้น 1</a>
		                    <a href="#" class="btn btn-default mx-0 btn-theme3">โปรโมชั่น</a>
		                    <!-- 
		                    
		                    
		                    <a href="#" class="btn btn-default mx-0 btn-theme3">ผ่อน 10 ด.</a>
		                   
		                    
		                    
		                    -->
		                    <div class="mt-4">
		                        <a href="#" class="text-card">อ่านรายละเอียด <i class="fa fa-chevron-right"></i></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="card-footer rounded-0">
		            <div class="row">
		                <div class="col-6">
		                    <div class="form-check">
		                        <input type="checkbox" class="form-check-input cbCompare" 
		                        data-title="ประกันภัยไทยวิวัฒน์" 
		                        data-caption="ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 200,000" 
		                        data-price="9000" 
		                        data-catid="3"
		                        data-all="[json]" 
		                        id="checkboxCompare3">
		                        <!--  // mg add data-all -->
		                        <label class="form-check-label" for="checkboxCompare3">เปรียบเทียบ</label>
		                    </div>
		                </div>
		                <div class="col-6 text-right">
		                    <a data-toggle="modal" data-target="#interest" class="btn btn-warning btn-theme"
		                    data-title="ประกันภัยไทยวิวัฒน์" 
		                    data-caption="ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 200,000" 
		                    data-price="9000" 
		                    data-producttype="1"
		                    data-icon="[ins_icon]" 
		                    data-makevalue="[make_value]"
		                    data-modelvalue="[model_value]"
		                    data-motortype="[motor_type]"
		                    data-seat="[seat]"
		                    data-cc="[car_cc]"
		                    >สนใจประกันนี้</a>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-4 offset-sm-4">
			<a href="{{$custom}}" class="btn btn-gray2 py-2 px-4">
				<span clas="text-14"><img src="{{ Config::get('app.url_assets') }}assets/img/iconsearch.png" alt=""> ค้นหาประกันรถ ตามงบของคุณ </span> <strong>คลิกเลย</strong>
			</a>
		</div>
	</div>
</div>
<style>
button.closefooter { background: transparent; border:0; }
</style>
@stop

@section('script')
<script>
$(document).ready(function() {

	$('.closefooter').click(function(event) {
		if ($(this).children('.fa').hasClass('fa-chevron-up')) {
			$(this).children('.fa').removeClass('fa-chevron-up').addClass('fa-chevron-down');
		} else {
			$(this).children('.fa').removeClass('fa-chevron-down').addClass('fa-chevron-up');
		}
		$('table tfoot').fadeToggle('fast');
	});
});
</script>
@stop