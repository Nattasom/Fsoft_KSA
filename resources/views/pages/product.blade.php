@extends('layouts.default')
@section('content')

<div class="box-header">
    <div class="container">
        <div class="col-md-12 text-center py-3">

			<div class="card card-yellow position-absolute card-bc d-block d-sm-none">
				<div class="card-header py-2">
					<p class="font-weight-bold mb"><a id="btnFilterForm"><img src="{{ Config::get('app.url_assets') }}assets/img/set.png" alt="" class="align-top">ปรับแต่งประกันรถตามงบ <span class="float-right"><i class="fa fa-angle-down" aria-hidden="true"></i></span></a></p>
				</div>
				<div class="card-body">
					<div class="show-text">
						<!-- Filter Val Zone -->
						<input type="hidden" id="hd-make-filter" value="{{$make_value}}"/>
						<input type="hidden" id="hd-model-filter" value="{{$model_value}}"/>
						<input type="hidden" id="hd-model-text-filter" value="{{$model_value}}"/>
						<input type="hidden" id="hd-model-year-filter" value="{{$model_year_value}}"/>
						<input type="hidden" id="hd-product-type-filter" value="{{$product_type_value}}"/>
						<input type="hidden" id="hd-premium-filter" value="{{$premium_value}}"/>
						<input type="hidden" id="hd-suminsured-filter" value=""/>
						<input type="hidden" id="hd-deduct-filter" value=""/>
						<input type="hidden" id="hd-claimtype-filter" value=""/>
						<input type="hidden" id="hd-drive-filter" value=""/>
						<input type="hidden" id="hd-flood-filter" value=""/>
						<input type="hidden" id="hd-tppd-min-filter" value=""/>
						<input type="hidden" id="hd-tppd-max-filter" value=""/>
						<input type="hidden" id="hd-insurer-filter" value=""/>
						<input type="hidden" id="hd-sperate-filter" value=""/>
						<input type="hidden" id="hd-record-start" value="0"/>
						<input type="hidden" id="hd-record-length" value="6"/>
						<input type="hidden" id="hd-order-field" value=""/>
						<input type="hidden" id="hd-order-type" value=""/>
						<!-- Filter Val Zone -->
						<p class="mb-1"><img src="{{ Config::get('app.url_assets') }}assets/img/car.png" alt="" height="10" class="align-middle">&nbsp;&nbsp;<span id="lbl-mb-car-text" class="text-brown title1">{{$car_text}}</span> </p>
						
						<p class="title2">เบี้ยเริ่มต้น <span id="lbl-mb-premium-text" class="lbl-start-premium">{{number_format($premium_value)}}</span> บาท/ปี</p>
						<p class="title3">ประกันชั้น <span id="lbl-mb-product-type">{{$product_type_text}}</span></p>
					</div>
					<div class="show-form">
						<div class="d-block d-sm-none">
							<!-- <select multiple="multiple" name="selectMain" class="select2" id="chooseShow" style="width:100%;">
							</select>

							<select multiple="multiple" name="selectMain" class="select2" id="chooseMain" style="width:100%;">
							</select> -->
							<div class="car-filter-tag" >
								<button type="button" id="tag-make" class="btn-pill btn btn-inverse btn-sm btn-filter-tag {{(!empty($make_value)) ? '':'d-none'}}" data-step="1">
									<span><span><span class="text">{{$make_value}}</span>
									<svg id="Layer_1" width="14.13" height="14.13" viewBox="0 0 14.13 14.13">
									<polygon points="14.13 1.41 12.72 0 7.07 5.65 1.41 0 0 1.41 5.65 7.07 0 12.72 1.41 14.13 7.07 8.48 12.72 14.13 14.13 12.72 8.48 7.07 14.13 1.41" fill="#959595"></polygon>
									</svg></span></span>
								</button>
								<button type="button" id="tag-model" class="btn-pill btn btn-inverse btn-sm btn-filter-tag {{(!empty($model_value)) ? '':'d-none'}}" data-step="2">
									<span><span><span class="text" >{{$model_text_value}}</span>
									<svg id="Layer_1" width="14.13" height="14.13" viewBox="0 0 14.13 14.13">
									<polygon points="14.13 1.41 12.72 0 7.07 5.65 1.41 0 0 1.41 5.65 7.07 0 12.72 1.41 14.13 7.07 8.48 12.72 14.13 14.13 12.72 8.48 7.07 14.13 1.41" fill="#959595"></polygon>
									</svg></span></span>
								</button>
								<button type="button" id="tag-year" class="btn-pill btn btn-inverse btn-sm btn-filter-tag {{(!empty($model_year_value)) ? '':'d-none'}}" data-step="3">
									<span><span><span class="text">{{$model_year_value}}</span>
									<svg id="Layer_1" width="14.13" height="14.13" viewBox="0 0 14.13 14.13">
									<polygon points="14.13 1.41 12.72 0 7.07 5.65 1.41 0 0 1.41 5.65 7.07 0 12.72 1.41 14.13 7.07 8.48 12.72 14.13 14.13 12.72 8.48 7.07 14.13 1.41" fill="#959595"></polygon>
									</svg></span></span>
								</button>
								<input type="text" class="form-control {{(!empty($model_year_value)) ? 'd-none':''}}" id="car-keyin" onkeyup="filterFunction()" placeholder="เลือกยี่ห้อรถ" />
							</div>
							<div class="dropdown car-filter-ddl">
								<button type="button" id="btn-ddl-car" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DROPDOWN</button>
								<div class="dropdown-menu"  aria-labelledby="dropdownMenuButton">
									<div class="content-zone" id="ddl-car-content" data-type="">
										<!-- <a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a> -->
									</div>
								</div>
							</div>
						</div>

						<div role="tabpanel" class="mt-3">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs nav-pills nav-justified" role="tablist">
								<li role="presentation" class="nav-item">
									<a href="#filter" aria-controls="filter" class="btn btn-yellow active show" role="tab" data-toggle="tab"><img src="{{ Config::get('app.url_assets') }}assets/img/Group-1.png" alt="" > กรองข้อมูล</a>
								</li>
								<li role="presentation" class="nav-item">
									<a href="#sort" aria-controls="sort" class="btn btn-yellow" role="tab" data-toggle="tab""><img src="{{ Config::get('app.url_assets') }}assets/img/sort.png" alt="" > เรียงลำดับข้อมูล</a>
								</li>
							</ul>
						
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active pt-4" id="filter">
									<div class="row mb-3">
										<div class="col-5 text-left">
											<p class="mb-0">เบี้ยเริ่มต้น <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
										</div>
										<div class="col-7 text-right">
											<p class="mb-0">
												<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#r1" data-input="#hd-premium-filter" data-rangeid="r1">
													<span class="text-33 lbl-start-premium" id="r1">{{number_format($premium_value)}}</span> บาท/ปี
												</a>
											</p>
										</div>
										<div class="col-12 mt-2">
											<div class="slider-range" datatoid="r1" data-href="#hd-premium-filter" data-href-label="#lbl-mb-premium-text" data-val="{{$premium_value}}" min="{{$premium_filter->Minimum}}"  max="{{$premium_filter->Maximum}}"></div>
										</div>
									</div>
									<div class="row mb-4">
										<div class="col-5 text-left">
											<p class="mb-0">ประกันชั้น <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
										</div>
										<div class="col-7 text-right">
											<div class="row mx-0 customizetype">
												<div class="col px-1 py-0 text-center"><a class="suminsured py-0 text-dark d-block border pr-type-check {{(in_array('1',$product_type)) ? 'active':''}}" data-value="1">1</a></div>
												<div class="col px-1 py-0 text-center"><a class="suminsured py-0 text-dark d-block border pr-type-check {{(in_array('2+',$product_type)) ? 'active':''}}" data-value="2+">2+</a></div>
												<div class="col px-1 py-0 text-center"><a class="suminsured py-0 text-dark d-block border pr-type-check {{(in_array('2',$product_type)) ? 'active':''}}" data-value="2">2</a></div>
												<div class="col px-1 py-0 text-center"><a class="suminsured py-0 text-dark d-block border pr-type-check {{(in_array('3+',$product_type)) ? 'active':''}}" data-value="3+">3+</a></div>
												<div class="col px-1 py-0 text-center"><a class="suminsured py-0 text-dark d-block border pr-type-check {{(in_array('3',$product_type)) ? 'active':''}}" data-value="3">3</a></div>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-5 text-left">
											<p class="mb-0">ทุนประกัน <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
										</div>
										<div class="col-7 text-right">
											<p class="mb-0">
												<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#lbl-suminsured-text" data-input="#hd-suminsured-filter"  data-rangeid="r2">
													<span class="text-33 lbl-start-suminsured" id="lbl-suminsured-text">{{number_format($suminsured_filter->Minimum)}}</span> บาท
												</a>
											</p>
										</div>
										<div class="col-12 mt-2">
											<div class="slider-range" datatoid="r2" data-val="0" data-href="#hd-suminsured-filter" data-href-label="#lbl-suminsured-text" min="{{$suminsured_filter->Minimum}}" max="{{$suminsured_filter->Maximum}}"></div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-5 text-left">
											<p class="mb-0">ค่าเสียหายส่วนแรก <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
										</div>
										<div class="col-7 text-right">
											<p>
												<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#lbl-deduct-text" data-input="#hd-deduct-filter" data-rangeid="r3">
													<span class="text-33" id="lbl-deduct-text">1,000</span> บาท
												</a>
											</p>
										</div>
										<div class="col-12 mt-2">
											<div class="slider-range" data-val="0" data-href="#hd-deduct-filter" data-href-label="#lbl-deduct-text" datatoid="r3" min="0" max="10000"></div>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-5 text-left">
											<p class="mb-0">ซ่อม <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
										</div>
										<div class="col-7">
											<div class="row">
												<div class="col-6 text-center">
													<p class="checkboxlist multiple claim-select" data-val="1"><img src="{{ Config::get('app.url_assets') }}assets/img/home.png" height="30" class="" /><br>อู่</p>
												</div>
												<div class="col-6 text-center">
													<p class="checkboxlist multiple claim-select" data-val="2"><img src="{{ Config::get('app.url_assets') }}assets/img/town.png" height="30" class="" /><br>ห้าง</p>
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-5 text-left">
											<p class="mb-0">ผู้ขับขี่ <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
										</div>
										<div class="col-7">
											<div class="row">
												<div class="col-6 text-center">
													<p class="checkboxlist driver-select" data-val="1"><img src="{{ Config::get('app.url_assets') }}assets/img/people.png" height="30" class="active" /><br>ระบุชื่อ</p>
												</div>
												<div class="col-6 text-center">
													<p class="checkboxlist driver-select" data-val="0"><img src="{{ Config::get('app.url_assets') }}assets/img/peoples.png" height="30" class="" /><br>ไม่ระบุชื่อ</p>
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-12">
											<!-- Filter -->
											<button class="btn btn-gray py-1 px-2" type="button" id="filterMore_mb">ปรับแต่งเพิ่มเติม</button>
											<div id="contentFilterMore_mb" class="px-0 py-3">
												<div class="row mb-3">
													<div class="col-12 text-left mb-1">
														<p class="mb-1">คุ้มครองน้ำท่วม <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
														<p class="text-rangemulti">
															<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#flood1-1" data-input="#" data-rangeid="flood1" data-rangetype="min">
																<span id="flood1-1">0 บาท</span>
															</a>
															<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#flood1-2" data-input="#hd-flood-filter" data-rangeid="flood1" data-rangetype="max">
																<span id="flood1-2" class="float-right">5,000 บาท</span>
															</a>
														</p>
													</div>
													<div class="col-12">
														<div class="slider-range-multiple" data-href1="#hd-flood-filter" data-href2="#hd-flood-filter" datatoid="flood1" min="0" max="10000"></div>
														<!-- <p class="mb-0 text-brown" style="font-size:18px;">211,045 บาท</p> -->
													</div>
												</div>
												<div class="row mb-3">
													<div class="col-12 text-left mb-1">
														<p class="mb-1">ทรัพย์สินส่วนบุคคลภายนอก <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
														<p class="text-rangemulti">
															<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#tppd1-1" data-input="#hd-tppd-min-filter" data-rangeid="tppd1" data-rangetype="min">
																<span id="tppd1-1">0 บาท</span>
															</a>
															<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#tppd1-2" data-input="#hd-tppd-max-filter" data-rangeid="tppd1" data-rangetype="max">
																<span id="tppd1-2" class="float-right">{{number_format($tppd_filter->Maximum)}} บาท</span>
															</a>
														</p>
													</div>
													<div class="col-12">
														<div class="slider-range-multiple" data-href1="#hd-tppd-min-filter" data-href2="#hd-tppd-max-filter" datatoid="tppd1" min="0" max="{{$tppd_filter->Maximum}}"></div>
														<!-- <p class="mb-0 text-brown" style="font-size:18px;">211,045 บาท</p> -->
													</div>
												</div>
												<p class="mb-2">บริษัทประกัน</p>
												<?php foreach ($insurer_filter as $key => $value) { ?>
												<div class="form-group mb-1">
													<div class="form-check text-left">
													<input class="form-check-input chk-insurer" type="checkbox" name="iss" value="{{$value->InsurerCode}}" id="isscb<?php echo $key;?>">
													<label class="form-check-label" for="isscb<?php echo $key;?>">
													{{$value->InsurerName}}
													</label>
													</div>
												</div>
												<?php } ?>
												<br>
												<p class="mb-2">วิธีการชำระเงิน</p>
												<div class="form-group mb-1">
													<div class="form-check text-left">
													<input class="form-check-input chk-sperate" type="checkbox" name="iss" value="1" id="isscbradiodesk00">
													<label class="form-check-label" for="isscbradiodesk00">
													ชำระครั้งเดียว
													</label>
													</div>
												</div>
												<?php foreach ($sperate_filter as $key => $value) { ?>
												<div class="form-group mb-1">
													<div class="form-check text-left">
													<input class="form-check-input chk-sperate" type="checkbox" name="iss" value="{{$value->SperatePayMonth}}" id="isscbradio<?php echo $key;?>">
													<label class="form-check-label" for="isscbradio<?php echo $key;?>">
													{{$value->Description}}
													</label>
													</div>
												</div>
												<?php } ?>
											</div>
											<button class="btn btn-gray py-1 px-2" type="button" id="closeFilterMore_mb">ลดการปรับแต่ง</button>
											<!-- Filter -->
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-12 text-center">
											<button class="btn btn-yellow px-3" type="button" id="confirm_filter" >ยืนยันข้อมูล</button>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane pt-4 text-left" id="sort">
									<div class="form-group">
										<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadiosmobile" id="exampleRadiosmobile1" value="premium_asc" checked>
										<label class="form-check-label" for="exampleRadiosmobile1">
										ราคา : ต่ำไปสูง
										</label>
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadiosmobile" id="exampleRadiosmobile2" value="premium_desc" >
										<label class="form-check-label" for="exampleRadiosmobile2">
										ราคา : สูงไปต่ำ
										</label>
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadiosmobile" id="exampleRadiosmobile3" value="ins_asc" >
										<label class="form-check-label" for="exampleRadiosmobile3">
										บริษัทประกัน : ก-ฮ
										</label>
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadiosmobile" id="exampleRadiosmobile4" value="ins_desc" >
										<label class="form-check-label" for="exampleRadiosmobile4">
										บริษัทประกัน : ฮ-ก
										</label>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<h2 class="d-none d-sm-block mb-0">เลือกประกันรถตามงบ</h2>
           <!--  <p><img src="{{ Config::get('app.url_assets') }}assets/img/icon/car-header.png" alt=""> Honda / City 1500cc / 2016 / ชั้น 1,3+,3 </p>
            <p>พบ 25 ประกันรถที่เหมาะกับคุณ</p>
            <a class="d-md-none d-lg-none float-right position-absolute" style="top:30%;right:15px;" data-toggle="modal" href='#modal-advance-filter'><img src="{{ Config::get('app.url_assets') }}/assets/img/Group.png" alt=""></a> -->
        </div>
    </div>
</div>


<div class="container mb-5 pt-5" id="maindivcontent">
	<div class="row">
		<div class="col-md-3 d-none d-sm-block">
	
			<div class="card card-yellow position-relative card-bc card-bc-pc d-none d-sm-block">
				<div class="card-header py-2">
					<p class="font-weight-bold mb"><img src="{{ Config::get('app.url_assets') }}assets/img/set.png" alt="" class="align-top">ปรับแต่งประกันรถตามงบ <a id="btnFilterForm2" class="float-right"><i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
				</div>
				<div class="card-body">
					<div class="show-text">
						<p class="mb-1"><img src="{{ Config::get('app.url_assets') }}assets/img/car.png" alt="" height="10" class="align-middle">&nbsp;&nbsp;<span class="text-brown title1">Honda / City (1500) / 2016</span> </p>
						<p class="title2">เบี้ยเริ่มต้น <span>8,000</span> บาท/ปี</p>
						<p class="title3">ประกันชั้น <span>1 / 3+ / 3</span></p>
					</div>
					<div class="show-form">
						<div class="d-block d-sm-none">
							<select multiple="multiple" name="selectMain" class="select2" id="chooseShow" style="width:100%;">
							</select>

							<select multiple="multiple" name="selectMain" class="select2" id="chooseMain" style="width:100%;">
							</select>
						</div>

						<div class="d-none d-sm-block">
							<select name="" id="desk-make" class="form-control mb-2">
								<option value="">เลือกยี่ห้อรถยนต์</option>
							</select>
							<select name="" id="desk-model" class="form-control mb-2">
								<option value="">เลือกรุ่นรถยนต์</option>
								<option value="">City</option>
							</select>
							<select name="" id="desk-year" class="form-control mb-2">
								<option value="">เลือกปีรถยนต์</option>
								<option value="">2016</option>
							</select>
						</div>

						<div class="row mb-3">
							<div class="col-12 text-center">
								<p class="mb-0">เบี้ยเริ่มต้น <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
							</div>
							<div class="col-12 text-center">
								<p class="mb-0">
									<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#lbl-mb-premium-text-desk" data-input="#hd-premium-filter" data-rangeid="rr1">
										<span class="" id="lbl-mb-premium-text-desk">{{$premium_value}}</span> บาท/ปี
									</a>
								</p>
							</div>
							<div class="col-12 mt-2">
								<div class="slider-range" datatoid="rr1" data-href="#hd-premium-filter" data-href-label="#lbl-mb-premium-text-desk" data-val="{{$premium_value}}" min="{{$premium_filter->Minimum}}"  max="{{$premium_filter->Maximum}}"></div>
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-4 text-left pt-3 pr-0">
								<p class="mb-0">ประกันชั้น <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
							</div>
							<div class="col-8 text-right">
								<div class="row mx-0 customizetype">
									<div class="col px-0 py-0 mr-1 text-center"><a class="py-0 text-dark d-block border">1</a></div>
									<div class="col px-0 py-0 mr-1 text-center"><a class="py-0 text-dark d-block border">2+</a></div>
									<div class="col px-0 py-0 mr-1 text-center"><a class="py-0 text-dark d-block border">2</a></div>
									<div class="col px-0 py-0 mr-1 text-center"><a class="py-0 text-dark d-block border">3+</a></div>
									<div class="col px-0 py-0 mr-1 text-center"><a class="py-0 text-dark d-block border">3</a></div>
								</div>
							</div>
						</div>

						<div role="tabpanel" class="mt-3">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs nav-pills nav-justified" role="tablist">
								<li role="presentation" class="nav-item">
									<a href="#filter_desk" aria-controls="filter_desk" class="btn btn-yellow py-2 active show" role="tab" data-toggle="tab"><img src="{{ Config::get('app.url_assets') }}assets/img/Group-1.png" alt="" > ปรับแต่ง</a>
								</li>
								<li role="presentation" class="nav-item">
									<a href="#sort_desk" aria-controls="sort_desk" class="btn btn-yellow py-2" role="tab" data-toggle="tab""><img src="{{ Config::get('app.url_assets') }}assets/img/sort.png" alt="" > เรียงลำดับ</a>
								</li>
							</ul>
						
							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active pt-4" id="filter_desk">
									<div class="row mb-3">
										<div class="col-5 text-left">
											<p class="mb-0">ทุนประกัน <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
										</div>
										<div class="col-7 text-right">
											<p class="mb-0">
												<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#lbl-suminsured-text-desk" data-input="#hd-suminsured-filter" data-rangeid="rr2">
													<span class="" id="lbl-suminsured-text-desk">300,000</span> บาท
												</a>
											</p>
										</div>
										<div class="col-12 mt-2">
											<div class="slider-range" datatoid="rr2" data-val="0" data-href="#hd-suminsured-filter" data-href-label="#lbl-suminsured-text-desk" min="{{$suminsured_filter->Minimum}}" max="{{$suminsured_filter->Maximum}}"></div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-5 text-left">
											<p class="mb-0">ค่าเสียหายส่วนแรก <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
										</div>
										<div class="col-7 text-right">
											<p>
												<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#lbl-deduct-text-desk" data-input="#hd-deduct-filter" data-rangeid="rr3">
													<span class="" id="lbl-deduct-text-desk">1,000</span> บาท
												</a>
											</p>
										</div>
										<div class="col-12 mt-2">
											<div class="slider-range" datatoid="rr3" data-val="0" data-href="#hd-deduct-filter" data-href-label="#lbl-deduct-text-desk" datatoid="r3" min="0" max="10000"></div>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-5 text-left">
											<p class="mb-0">ซ่อม <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
										</div>
										<div class="col-7">
											<div class="row">
												<div class="col-6 text-center">
													<p class="checkboxlist multiple claim-select-desk" data-val="1"><img src="{{ Config::get('app.url_assets') }}assets/img/home.png" height="30" class="" /><br>อู่</p>
												</div>
												<div class="col-6 text-center">
													<p class="checkboxlist multiple claim-select-desk" data-val="2"><img src="{{ Config::get('app.url_assets') }}assets/img/town.png" height="30" class="" /><br>ห้าง</p>
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-5 text-left">
											<p class="mb-0">ผู้ขับขี่ <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
										</div>
										<div class="col-7">
											<div class="row">
												<div class="col-6 text-center">
													<p class="checkboxlist driver-select-desk" data-val="1"><img src="{{ Config::get('app.url_assets') }}assets/img/people.png" height="30" class="active" /><br>ระบุชื่อ</p>
												</div>
												<div class="col-6 text-center">
													<p class="checkboxlist driver-select-desk" data-val="0"><img src="{{ Config::get('app.url_assets') }}assets/img/peoples.png" height="30" class="" /><br>ไม่ระบุชื่อ</p>
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-12">
											<!-- Filter -->
											<button class="btn btn-gray py-1 text-brown" type="button" id="filterMore">ปรับแต่งเพิ่มเติม</button>
											<div id="contentFilterMore" class="px-0 py-3">
												<div class="row mb-3">
													<div class="col-12 text-left mb-1">
														<p class="mb-1">คุ้มครองน้ำท่วม <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
														<p class="text-rangemulti">
															<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#rrr1-1" data-input="#" data-rangeid="rrr1" data-rangetype="min">
																<span id="rrr1-1">0 บาท</span>
															</a>
															<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#rrr1-2" data-input="#hd-flood-filter" data-rangeid="rrr1" data-rangetype="max">
																<span id="rrr1-2" class="float-right">5,000 บาท</span>
															</a>
														</p>
													</div>
													<div class="col-12">
														<div class="slider-range-multiple" datatoid="rrr1" data-href1="#hd-flood-filter" data-href2="#hd-flood-filter" datatoid="flood1" min="0" max="10000"></div>
														<!-- <p class="mb-0 text-brown" style="font-size:18px;">211,045 บาท</p> -->
													</div>
												</div>
												<div class="row mb-3">
													<div class="col-12 text-left mb-1">
														<p class="mb-1">ทรัพย์สินส่วนบุคคลภายนอก <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
														<p class="text-rangemulti">
															<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#rrr2-1" data-input="#hd-tppd-min-filter" data-rangeid="rrr2" data-rangetype="min">
																<span id="rrr2-1">0 บาท</span>
															</a>
															<a data-toggle="modal" data-target="#ModalFilterRange" data-form="#rrr2-2" data-input="#hd-tppd-max-filter" data-rangeid="rrr2" data-rangetype="max">
																<span id="rrr2-2" class="float-right">5,000 บาท</span>
															</a>
														</p>
													</div>
													<div class="col-12">
														<div class="slider-range-multiple" datatoid="rrr2" data-href1="#hd-tppd-min-filter" data-href2="#hd-tppd-max-filter" datatoid="tppd1" min="0" max="{{$tppd_filter->Maximum}}"></div>
														<!-- <p class="mb-0 text-brown" style="font-size:18px;">211,045 บาท</p> -->
													</div>
												</div>
												<p class="mb-2">บริษัทประกัน</p>
												<?php foreach ($insurer_filter as $key => $value) { ?>
												<div class="form-group mb-1">
													<div class="form-check text-left">
													<input class="form-check-input chk-insurer" type="checkbox" name="iss" value="{{$value->InsurerCode}}" id="isscbdesk<?php echo $key;?>">
													<label class="form-check-label" for="isscbdesk<?php echo $key;?>">
													{{$value->InsurerName}}
													</label>
													</div>
												</div>
												<?php } ?>
												<br>
												<p class="mb-2">วิธีการชำระเงิน</p>
												<?php 
												//$iss = array('ชำระครั้งเดียว','ผ่อน 12 เดือน','ผ่อน 10 เดือน','ผ่อน 6 เดือน','ผ่อน 4 เดือน','ผ่อน 3 เดือน');
												?>
												<div class="form-group mb-1">
													<div class="form-check text-left">
													<input class="form-check-input chk-sperate" type="checkbox" name="iss" value="1" id="isscbradio00">
													<label class="form-check-label" for="isscbradio00">
													ชำระครั้งเดียว
													</label>
													</div>
												</div>
												<?php foreach ($sperate_filter as $key => $value) { ?>
												<div class="form-group mb-1">
													<div class="form-check text-left">
													<input class="form-check-input chk-sperate" type="checkbox" name="iss" value="{{$value->SperatePayMonth}}" id="isscbradiodesk<?php echo $key;?>">
													<label class="form-check-label" for="isscbradiodesk<?php echo $key;?>">
													{{$value->Description}}
													</label>
													</div>
												</div>
												<?php } ?>
											</div>
											<button class="btn btn-gray py-1 text-brown" type="button" id="closeFilterMore">ลดการปรับแต่ง</button>
											<!-- Filter -->
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-12 text-center">
											<button class="btn btn-yellow px-3" type="button" id="confirm_filter_desk" >ยืนยันข้อมูล</button>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane pt-4" id="sort_desk">
									<div class="form-group">
										<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
										<label class="form-check-label" for="exampleRadios1">
										ราคา : ต่ำไปสูง
										</label>
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
										<label class="form-check-label" for="exampleRadios1">
										ราคา : สูงไปต่ำ
										</label>
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
										<label class="form-check-label" for="exampleRadios1">
										บริษัทประกัน : ก-ฮ
										</label>
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
										<label class="form-check-label" for="exampleRadios1">
										บริษัทประกัน : ฮ-ก
										</label>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>
		<div class="col-12 col-md-9">

			<!-- Content -->
		    <div class="row pt-2" id="contentAjax">
		    	
		    </div>
		    <div class="row">
		        <div class="col-md-12 text-center">
					<div id="lazy-loader" class="d-none">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>
					<br/>
		            <button id="lazyLoad" class="btn btn-default btn-theme2 py-2 px-4 d-none">ดูประกันรถเพิ่มเติม <i class="fa fa-chevron-right"></i></a>
		        </div>
		    </div>
		</div>
	</div>
</div>
<div id="card-template" class="d-none">

</div>

<!-- Modal -->
<div class="modal fade" id="ModalFilterRange" tabindex="-1" role="dialog" aria-labelledby="ModalFilterRangeLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form>
		  <div class="form-group">
		    <label for="title"></label>
		    <input type="number" class="form-control" id="" placeholder="" value="">
		    <input type="hidden" id="filter-form" value="">
		    <input type="hidden" id="filter-input" value="">
		    <input type="hidden" id="filter-rangeid" value="">
		    <input type="hidden" id="filter-rangetype" value="">
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="submitFilterRange" class="btn btn-sm btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@stop

<style>
	/*.modal-backdrop { opacity: 0 !important; }*/
	.select2-container { z-index: 9999999; }
	.select2-container--default.select2-container--focus .select2-selection--multiple { border: 1px solid #dddddd !important; }
	#chosen-select option.hidden { display: none; }
	.car-filter-tag { background: #fff; }
</style>

@section('script')
<script>
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
var car =$.parseJSON('{!!json_encode($make_value_list)!!}');//new Array('Toyota', 'Honda', 'Nissan', 'Isuzu', 'Mitsubishi');
var carmodel = new Array();
var year = new Array();

var dataList = [car,carmodel,year];
$(document).ready(function() {

	//car filter mobile
	if($("#hd-make-filter").val()!=""){
		getModelValueInit($("#hd-make-filter").val());
	}
	if($("#hd-model-filter").val()!=""){
		getModelYearValueInit($("#hd-model-filter").val());
	}
	$(document).on("focus","#car-keyin",function(){
		$(".car-filter-ddl .dropdown-menu").addClass("show");
	});
	$(document).on("click",".btn-filter-tag",function(){
		var step = $(this).attr("data-step");
		var limit = 3;
		for(var i = step;i <= limit;i++){
			$(".btn-filter-tag[data-step="+i+"]").addClass("d-none");
		}
		$(".car-filter-ddl .dropdown-menu").addClass("show");
		$("#car-keyin").removeClass("d-none");
		switch (step) {
			case "1":
				$("#car-keyin").attr("placeholder","เลือกยี่ห้อรถ");
				initOption(dataList[0], null,1);
				break;
			case "2":
				$("#car-keyin").attr("placeholder","เลือกรุ่นรถ");
				var dataObj = {id:$("#hd_make_value").val(),text:$(".btn-filter-tag[data-step=1] .text").text()};
				// getModelValue(data);
				initOption(dataList[1], dataObj,2);
					break;
			case "3":
				var dataObj = {id:$("#hd_model_value").val(),text:$(".btn-filter-tag[data-step=2] .text").text()};
				$("#car-keyin").attr("placeholder","เลือกปีรถ");
				initOption(dataList[2], dataObj,3);
				break;
			default:
				break;
		}
	});
	initOption(dataList[0],null,1);
	//car filter mobile


	$("#card-template").load("{{url('/template/productcard')}}");
	var w = $(window).width();
	if (w <= 768) {
		var hcardbc = $('.card-bc .show-text').height();
		$('#maindivcontent').css('margin-top', hcardbc+'px');

		$('.card-bc').children('.card-body').children('.show-form').hide();
		$('#btnFilterForm').click(function(event) {

			// console.log('click');
			if ( $(this).parents('.card-bc').hasClass('active') ) {
				//update label
				var product_type_text = "";
				var car_text = "";
				if($("#tag-make:not(.d-none) .text").length>0){
					car_text += $("#tag-make:not(.d-none) .text").text();
				}
				if($("#tag-model:not(.d-none) .text").length>0){
					car_text += " / " + $("#tag-model:not(.d-none) .text").text();
				}
				if($("#tag-year:not(.d-none) .text").length>0){
					car_text += " / " + $("#tag-year:not(.d-none) .text").text();
				}
				var i = 0;
				$(".pr-type-check[class*=active]").each(function(){
					if(i!=0){
						product_type_text += " / ";
					}
					product_type_text += $(this).text();
					i++;
				});
				$("#lbl-mb-car-text").text(car_text);
				$("#lbl-mb-product-type").text(product_type_text);
				//update label
				$(this).parents('.card-bc').removeClass('active');
				$(this).parents('.card-bc').children('.card-body').children('.show-form').slideUp(100);
				$(this).parents('.card-bc').children('.card-body').children('.show-text').slideDown(250);
				
				var hcardbc = $(this).parents('.card-bc').children('.card-body').children('.show-text').height();
				$('#maindivcontent').css('margin-top', hcardbc+'px');
			} else {
				$(this).parents('.card-bc').addClass('active');
				$(this).parents('.card-bc').children('.card-body').children('.show-text').slideUp(100);
				$(this).parents('.card-bc').children('.card-body').children('.show-form').slideDown(250);
				
				var hcardbc = $(this).parents('.card-bc').children('.card-body').children('.show-form').height();
				console.log(hcardbc);
				$('#maindivcontent').css('margin-top', hcardbc+'px');
			}
			// $(this).parents('.card-bc').children('.card-body').children('.show-form').slideDown('fast');
		});
	}

	$('#closeFilterMore').hide();
	$('#closeFilterMore_mb').hide();
	var cFilter = $('#contentFilterMore');
	var cFilter_mb = $('#contentFilterMore_mb');
	cFilter.hide();
	cFilter_mb.hide();
	$('#filterMore').click(function(event) {
		cFilter.addClass('active');
		cFilter.slideDown();	
		$('#filterMore').hide();
		$('#closeFilterMore').show();
	});
	$('#closeFilterMore').click(function(event) {
		cFilter.removeClass('active');
		cFilter.slideUp();	
		$('#filterMore').show();
		$('#closeFilterMore').hide();
	});

	$('#filterMore_mb').click(function(event) {
		cFilter_mb.addClass('active');
		cFilter_mb.slideDown();	
		$('#filterMore_mb').hide();
		$('#closeFilterMore_mb').show();
	});
	$('#closeFilterMore_mb').click(function(event) {
		cFilter_mb.removeClass('active');
		cFilter_mb.slideUp();	
		$('#filterMore_mb').show();
		$('#closeFilterMore_mb').hide();
	});



	$('.checkboxlist.multiple').click(function(){
		if ($(this).children('img').hasClass('active')) {
			$(this).children('img').removeClass('active');
		} else {
			$(this).children('img').addClass('active');	
		}
	});

	$('.checkboxlist:not(.multiple)').click(function(){
		$('.checkboxlist:not(.multiple)').children('img').removeClass('active');
		$(this).children('img').addClass('active');
	});
	$('.checkboxlist2').click(function(){
		$('.checkboxlist2').children('img').removeClass('active');
		$(this).children('img').addClass('active');
	});



	$('.customizetype a').click(function(event) {
		if ($(this).hasClass('disabled') == false) {
			// $('.customizetype a:not(.disabled)').removeClass('active');
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			} else {
				$(this).addClass('active');
			}
			
		}
		var active = false;
		$('.customizetype a').each(function(index, el) {
			if ($(this).hasClass('active')) { active = true; }
		});
		if (active) {
			$('[type="submit"]').removeClass('btn-gray').addClass('btn-yellow');
		}
	});	

	


	// Filter Desktop
	var deskMake = $('#desk-make');
	var deskModel = $('#desk-model');
	var deskYear = $('#desk-year');

	deskMake.html(setOption(car));
	deskMake.select2({ 
		placeholder: "กรุณาเลือกยี่ห้อรถยนต์",
		containerCssClass: 'mb-2'
	});

	@if (isset($make_value) && !empty($make_value))
	deskMake.val('{{$make_value}}').trigger('change');
	@endif

	@if (isset($model_value) && !empty($model_value))
	var sendData = {text:'{{$make_value}}', id:'{{$make_value}}'};
	getModelValue(sendData);
	deskModel.html(setOption(dataList[1], 1));
	deskModel.select2({ 
		placeholder: "กรุณาเลือกรุ่นรถยนต์",
		containerCssClass: 'mb-2'
	});
	deskModel.val('{{$model_value}}').trigger('change');
	@else
	var option = "<option></option>";
	deskModel.html(option);
	deskModel.select2({ 
		placeholder: "กรุณาเลือกรุ่นรถยนต์",
		containerCssClass: 'mb-2'
	});
	@endif

	@if (isset($model_year_value) && !empty($model_year_value))
	var sendData = {text:'{{$model_text_value}}', id:'{{$model_value}}'};
	getModelYearValue(sendData);
	deskYear.html(setOption(dataList[2], 2));
	deskYear.select2({ 
		placeholder: "กรุณาเลือกปีรถยนต์",
		containerCssClass: 'mb-2'
	});
	deskYear.val('{{$model_year_value}}').trigger('change');
	@else
	var option = "<option></option>";
	deskYear.html(option);
	deskYear.select2({ 
		placeholder: "กรุณาเลือกปีรถยนต์",
		containerCssClass: 'mb-2'
	});
	@endif


	

	deskMake.on('select2:select', function (e) {
		var data = e.params.data;
		$('#hd-make-filter').val(data.id);
		var sendData = {text:data.text, id:data.id};
		getModelValue(sendData);
		deskModel.html(setOption(dataList[1], 1));
		deskModel.select2({ 
			placeholder: "กรุณาเลือกรุ่นรถยนต์",
			containerCssClass: 'mb-2'
		});
		deskModel.select2('open');
	});
	deskModel.on('select2:select', function (e) {
		var data = e.params.data;
		$('#hd-model-filter').val(data.id);
		// $('#hd-model-filter').val(data.text);
		var sendData = {text:data.text, id:data.id};
		console.log(sendData);
		getModelYearValue(sendData);
		deskYear.html(setOption(dataList[2], 2));
		deskYear.select2({ 
			placeholder: "กรุณาเลือกปีรถยนต์",
			containerCssClass: 'mb-2'
		});
		deskYear.select2('open');
	});
	deskYear.on('select2:select', function (e) {
		var data = e.params.data;
		$('#hd-model-year-filter').val(data.id);
	});

	function setInputFilter(mobile=true) {
		var claimtype = new Array();
		$(".claim-select"+(!mobile?'-desk':'')+" img.active").each(function(index, el) {
			claimtype.push($(this).parent().data('val'));
		});
		claimtype = claimtype.join(',');
		var driver = $(".driver-select"+(!mobile?'-desk':'')+" img[class=active]").parent().attr("data-val");
		var product_type = '';
		var insurer = new Array();
		$('.chk-insurer:checked').each(function(index, el) {
			insurer.push($(this).val());
		});
		insurer = insurer.join(',');
		var sperate = new Array();
		$(".chk-sperate:checked").each(function(index, el) {
			sperate.push($(this).val());
		});
		sperate = sperate.join(',');
		var order_field = '';
		var order_type = '';
		var i = 0;
		$(".pr-type-check[class*=active]").each(function(){
			if(i!=0){
				product_type += ",";
			}
			product_type += $(this).text();
			i++;
		});
		i = 0;
		// $(".chk-insurer:checked").each(function(){
		// 	if(i!=0){
		// 		insurer += ",";
		// 	}
		// 	insurer += $(this).val();
		// 	i++;
		// });
		switch ($("input[name='exampleRadiosmobile']:checked").val()) {
			case "premium_desc":
				order_field = "premium";
				order_type = "desc";
				break;
			case "ins_asc":
				order_field = "insurer";
				order_type = "asc";
				break;
			case "ins_desc":
				order_field = "insurer";
				order_type = "desc";
				break;
			
			default:
				order_field = "premium";
				order_type = "asc";
				break;
		}

		// console.log(claimtype);
		// console.log(driver);
		// console.log(product_type);
		// console.log(insurer);
		// console.log(sperate);
		// console.log(order_field);
		// console.log(order_type);
		// return;
		$("#hd-product-type-filter").val(product_type);
		$("#hd-claimtype-filter").val(claimtype);
		$("#hd-drive-filter").val(driver);
		$("#hd-insurer-filter").val(insurer);
		$("#hd-sperate-filter").val(sperate);
		$("#hd-order-field").val(order_field);
		$("#hd-order-type").val(order_type);

		$("#contentAjax").html('');
		$("#hd-record-start").val(0);
		$("#hd-record-length").val(6);
	}

	// Mobile
	$('#confirm_filter').click(function(event) {
		//update label
		$(this).parents('.card-bc').removeClass('active');
		$(this).parents('.card-bc').children('.card-body').children('.show-form').slideUp(100);
		$(this).parents('.card-bc').children('.card-body').children('.show-text').slideDown(250);
		
		var hcardbc = $(this).parents('.card-bc').children('.card-body').children('.show-text').height();
		$('#maindivcontent').css('margin-top', hcardbc+'px');
		setInputFilter();
		callProductList();
	});
	// PC
	$('#confirm_filter_desk').click(function(event) {
		setInputFilter();
		callProductList();
	});


	$('.suminsured').click(function(event) {
		var value = $(this).data('value');
		var oldValue = $("#hd-product-type-filter").val().split(',');
		console.log(oldValue);
		console.log(value);
	});


    

	$(window).scroll(function(event) {
		var s = $(window).scrollTop();
		var t = $('#lazyLoad').offset().top - $(window).outerHeight();
		if (s >= t) {
			// $('#lazyLoad').html();
			// console.log('Lazyload?');
		}
	});

	$('#lazyLoad').click(function(event) {
		callProductList();
	});

	


	var funcSlide = function(div){
		$(div).slider({
			min: parseInt(div.attr('min')),
			max: parseInt(div.attr('max')),
			// value:parseInt(div.attr("data-val")),
			slide: function( event, ui ) {
				var tempid = event.target.attributes.datatoid.value;
				var href_val = event.target.attributes["data-href"].value;
				var href_label = event.target.attributes["data-href-label"].value;
				if (tempid != 'undefined') {
					// console.log(tempid);
					$('#'+tempid).html(addCommas(ui.value));	
				}
				if(href_val != 'undefined'){
					$(href_val).val(ui.value);
				}
				if(href_label != 'undefined'){
					$(href_label).text(addCommas(ui.value));
				}
			}
		});
	};
	var funcSlideMulti = function(div){
		$(div).slider({
			range: true,
			min: parseInt(div.attr('min')),
			max: parseInt(div.attr('max')),
			values: [ parseInt(div.attr('min')), parseInt(div.attr('max')) ],
			slide: function( event, ui ) {
				var tempid = event.target.attributes.datatoid.value;
				var href_val1 = event.target.attributes["data-href1"].value;
				var href_val2 = event.target.attributes["data-href2"].value;
				if (tempid != 'undefined') {
					// console.log(tempid);
					$('#'+tempid+'-1').html(addCommas(ui.values[0])+' บาท');	
					$('#'+tempid+'-2').html(addCommas(ui.values[1])+' บาท');	
				}
				if(href_val1 != 'undefined'){
					$(href_val1).val(ui.values[0]);
				}
				if(href_val2 != 'undefined'){
					$(href_val2).val(ui.values[1]);
				}
			}
		});
	};




	funcSlide($('.slider-range[datatoid="r1"]'));
	funcSlide($('.slider-range[datatoid="r2"]'));
	funcSlide($('.slider-range[datatoid="r3"]'));
	funcSlide($('.slider-range[datatoid="rr1"]'));
	funcSlide($('.slider-range[datatoid="rr2"]'));
	funcSlide($('.slider-range[datatoid="rr3"]'));

	funcSlideMulti($('.slider-range-multiple[datatoid="rrr1"]'));
	funcSlideMulti($('.slider-range-multiple[datatoid="rrr2"]'));
	funcSlideMulti($('.slider-range-multiple[datatoid="flood1"]'));
	funcSlideMulti($('.slider-range-multiple[datatoid="tppd1"]'));
	callProductList();


	$('#ModalFilterRange').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var form = button.data('form') // Extract info from data-* attributes
	  var input = button.data('input') // Extract info from data-* attributes
	  var rangeid = button.data('rangeid') // Extract info from data-* attributes
	  var rangetype = button.data('rangetype') // Extract info from data-* attributes
	  var modal = $(this)
	  modal.find('.modal-body input[type="number"]').val('');
		var min = parseInt($('[datatoid="'+rangeid+'"]').attr('min'));
		var max = parseInt($('[datatoid="'+rangeid+'"]').attr('max'));
		modal.find('.modal-body input[type="number"]').attr('placeholder','Min:'+addCommas(min)+' / Max:'+addCommas(max));
		modal.find('.modal-body input[type="number"]').attr('min', min);
		modal.find('.modal-body input[type="number"]').attr('max', max);
	  $('#filter-form').val(form);
	  $('#filter-input').val(input);
	  $('#filter-rangeid').val(rangeid);
	  if (rangetype != null && rangetype != undefined) {
	  	$('#filter-rangetype').val(rangetype);	
	  }
	  
	});
	$('#submitFilterRange').click(function(event) {
		var num = $('#ModalFilterRange input[type="number"]').val();
		var form = $('#ModalFilterRange #filter-form').val();
		var input = $('#ModalFilterRange #filter-input').val();
		var rangeid = $('#ModalFilterRange #filter-rangeid').val();
		var rangetype = $('#ModalFilterRange #filter-rangetype').val();
		$(form).html(addCommas(num));
		if ($('[datatoid="'+rangeid+'"]').hasClass('slider-range-multiple')==true) {
		  	if (rangetype != null && rangetype != undefined && rangetype=='min') {
				$('[datatoid="'+rangeid+'"]').slider( "values", 0, num);
			}
			if (rangetype != null && rangetype != undefined && rangetype=='max') {
				$('[datatoid="'+rangeid+'"]').slider( "values", 1, num);
			}
		} else {
			$('[datatoid="'+rangeid+'"]').slider( "value", num );
		}
			
		if (input != '#' && input != '') {
			$(input).val(num);	
		}
		$('#ModalFilterRange').modal('hide');	
	});
});	


	function getModelValue(dataObj){
		$.ajax({
            headers: {'X-CSRF-TOKEN': CSRF_TOKEN },
            url: "{{url('/ajaxModelValue')}}",
            type: 'POST',
            dataType: 'json',
	        async: false, // wait ajax finish
	        cache: false,
            data: {make: dataObj.id},
            success: function(data) {
				$("#car-keyin").attr("placeholder","เลือกรุ่นรถ");
				dataList[1] = data;
				initOption(dataList[1], dataObj, 2);
			},
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
		});
	}
	function getModelValueInit(id){
		$.ajax({
            headers: {'X-CSRF-TOKEN': CSRF_TOKEN },
            url: "{{url('/ajaxModelValue')}}",
            type: 'POST',
            dataType: 'json',
            data: {make: id},
            success: function(data) {
				dataList[1] = data;
			},
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                // console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
		});
	}
	function getModelYearValue(dataObj){
		$.ajax({
            headers: {'X-CSRF-TOKEN': CSRF_TOKEN },
            url: "{{url('/ajaxModelYearValue')}}",
            type: 'POST',
            dataType: 'json',
	        async: false, // wait ajax finish
	        cache: false,
            data: {model: dataObj.id},
            success: function(data) {
				dataList[2] = data;
				$("#car-keyin").attr("placeholder","เลือกปีรถ");
				initOption(dataList[2], dataObj,3);
				
			},
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                // console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
		});
	}
	function getModelYearValueInit(id){
		$.ajax({
            headers: {'X-CSRF-TOKEN': CSRF_TOKEN },
            url: "{{url('/ajaxModelYearValue')}}",
            type: 'POST',
            dataType: 'json',
            data: {model: id},
            success: function(data) {
				dataList[2] = data;
			},
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                // console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
		});
	}
	function setOption(ListOptions, now = 0) {
		var option = "<option></option>";
		$.each(ListOptions, function(index, val) {
			var opKey = val.MakeValue;
			var opValue = val.MakeValueName;
			if (now==1) {
				opKey = val.ModelValue;
				opValue = val.ModelValue+'('+val.CC+')';
			} else if (now==2) {
				opKey = val;
				opValue = val;
			}
			// console.log(opKey+' '+opValue);
			option += '<option value="'+opKey+'">';
			option += opValue;
			option += '</option>';
		});
		return option;
	}
	// Filter Desktop

	function selectCarItem(element){
		var type = $(element).parents(".content-zone").attr("data-type");
		var val = $(element).attr("data-val");
		var text = $(element).text();
		var data = { text:text , id:val};
		// console.log(element);
		$("#car-keyin").val('');
		switch (type) {
			case "make":
				$("#hd-make-filter").val(data.id);
				getModelValue(data);
				break;
			case "model":
				$("#hd-model-filter").val(data.id);
				$("#hd-model-text-filter").val(data.text);
				getModelYearValue(data);
				break;
			case "year":
				$("#hd-model-year-filter").val(data.id);
				initOption(null, data,0);
				break;
			
			default:
				break;
		}
	}
	function filterFunction() {
		var input, filter, ul, li, a, i;
		input = document.getElementById("car-keyin");
		filter = input.value.toUpperCase();
		div = document.getElementById("ddl-car-content");
		a = div.getElementsByTagName("a");
		for (i = 0; i < a.length; i++) {
			if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
			a[i].style.display = "";
			} else {
			a[i].style.display = "none";
			}
		}
	}
	function initOption(array, nowData,step) {
		
		if (nowData != null) {
			if(step==2){
				$("#tag-make").removeClass("d-none");
				$("#tag-make").find(".text").text(nowData.text);
			}else if(step==3){
				$("#tag-model").removeClass("d-none");
				$("#tag-model").find(".text").text(nowData.text);
			}else{
				$("#tag-year").removeClass("d-none");
				$("#tag-year").find(".text").text(nowData.text);
			}
		}
		// $('#chooseMain').html('');
		// $('#chooseMain').select2();
		$(".car-filter-ddl .content-zone").html('');
		if (array != null) {
			$.each(array, function(index, val) {
				if(step==1){ //make value
				$(".car-filter-ddl .content-zone").attr("data-type","make");
				$(".car-filter-ddl .content-zone").append('<a class="dropdown-item" data-val="'+val["MakeValue"]+'" href="javascript:;" onclick="selectCarItem(this);">'+val["MakeValueName"]+'</a>');
				}else if(step == 2){
					$(".car-filter-ddl .content-zone").attr("data-type","model");
					$(".car-filter-ddl .content-zone").append('<a class="dropdown-item" data-val="'+val["ModelValue"]+'" href="javascript:;" onclick="selectCarItem(this);">'+val["ModelValue"]+'('+val["CC"]+')</a>');
				}
				else if(step == 3){
					$(".car-filter-ddl .content-zone").attr("data-type","year");
					$(".car-filter-ddl .content-zone").append('<a class="dropdown-item" data-val="'+val+'" href="javascript:;" onclick="selectCarItem(this);">'+val+'</a>');
				}
			});

		} else {
			$(".car-filter-ddl .dropdown-menu").removeClass("show");
			$(".car-filter-ddl .content-zone").html('');
			$("#car-keyin").addClass("d-none");
		}
	}

	
	function callProductList(){
		var params = {
			make_value:$("#hd-make-filter").val(),
			model_value:$("#hd-model-filter").val(),
			model_year_value:$("#hd-model-year-filter").val(),
			product_type:$("#hd-product-type-filter").val(),
			premium:$("#hd-premium-filter").val(),
			suminsured:$("#hd-suminsured-filter").val(),
			deduct:$("#hd-deduct-filter").val(),
			claim_type:$("#hd-claimtype-filter").val(),
			drive:$("#hd-drive-filter").val(),
			flood:$("#hd-flood-filter").val(),
			tppd_min:$("#hd-tppd-min-filter").val(),
			tppd_max:$("#hd-tppd-max-filter").val(),
			insurer:$("#hd-insurer-filter").val(),
			sperate:$("#hd-sperate-filter").val(),
			start:$("#hd-record-start").val(),
			length:$("#hd-record-length").val(),
			order_field:$("#hd-order-field").val(),
			order_type:$("#hd-order-type").val()
		};
		var $loader = $("#lazy-loader");
		var $btn = $("#lazyLoad");
		$loader.removeClass("d-none");
		$btn.prop("disabled",true);
		$.ajax({
            headers: {'X-CSRF-TOKEN': CSRF_TOKEN },
            url: "{{url('/ajaxLoadProductList')}}",
            type: 'POST',
            dataType: 'json',
            data: params,
            success: function(data) {
				console.log(data);
				if(data.list.length > 0){
					$("#lazyLoad").removeClass("d-none");
					drawCard(data.list);
					var start = parseInt($("#hd-record-start").val());
					$("#hd-record-start").val(start+1);
				}else{
					$("#lazyLoad").addClass("d-none");
				}
			},
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                // console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
		}).always(function(){
			$loader.addClass("d-none");
			$btn.prop("disabled",false);
		});
	}
	function drawCard(list){
		var template = $("#card-template").html();
		var appendHtml ="";
		$.each(list,function(k,v){
			var tmp = template;
			tmp = tmp.replace("[idx]",v["idx"]).replace("[idx]",v["idx"]).replace("[idx]",v["idx"]).replace("[idx]",v["idx"]);
			tmp = tmp.replace("checkboxCompare[idx]", "checkboxCompare" + v["idx"]); // mg

			var promotionTag = "<img src='"+v["promotion_tag"]+"' />";
			tmp = (v["promotion_tag"]!=null&&v["promotion_tag"]!=undefined) ? tmp.replace("[promotion_icon]", promotionTag) : tmp.replace("[promotion_icon]", '');	
			
			var head_ico = '<img src="'+v["InsurerIcon"]+'" style="height:30px;margin-top:-2px;" alt="">';
			tmp = tmp.replace("[head_icon]",head_ico);
			tmp = tmp.replace("[title_name]",v["InsurerName"]).replace("[title_name]",v["InsurerName"]).replace("[title_name]",v["InsurerName"]);
			tmp = tmp.replace("[caption]",v["ProductName"]).replace("[caption]",v["ProductName"]).replace("[caption]",v["ProductName"]);
			tmp = tmp.replace("[premium]",addCommas(parseInt(v["NetPremium"])));
			tmp = tmp.replace("[type_tag]",'<a href="#" class="btn btn-default mx-0 btn-theme3">ชั้น '+v["ProductType"]+'</a>');
			tmp = tmp.replace("[product_type]",v["ProductType"]);
			tmp = tmp.replace("[ins_icon]",v["InsurerIcon"]);
			tmp = tmp.replace("[make_value]",v["MakeValue"]);
			tmp = tmp.replace("[model_value]",v["ModelValue"]);
			tmp = tmp.replace("[motor_type]",v["MotorType"]);
			tmp = tmp.replace("[seat]",v["Seat"]);
			tmp = tmp.replace("[car_cc]",v["CC"]);
			tmp = tmp.replace("[sperate_tag]","");
			tmp = tmp.replace("[promotion_tag]","");
			tmp = tmp.replace("[premium_val]",v["NetPremium"]).replace("[premium_val]",v["NetPremium"]);
			tmp = tmp.replace("[suminsured]",addCommas(parseInt(v["SumInsured"])));
			var deduct = v["DeductAmt"]=="" ? 0 : v["DeductAmt"];
			tmp = tmp.replace("[deduct]",addCommas(parseInt(deduct)));
			var claim = parseInt(v["ClaimTypeValue"])==1 ? "อู่":"ห้าง";
			tmp = tmp.replace("[claim_type]",claim);
			tmp = tmp.replace("[tppd]",addCommas(parseInt(v["TPPD"])));
			var allData = encodeURIComponent(JSON.stringify(v));  // mg
			tmp = tmp.replace("[json]",allData); // mg
			appendHtml += tmp;
		});

		$('#contentAjax').append(appendHtml);
	}
</script>
@stop