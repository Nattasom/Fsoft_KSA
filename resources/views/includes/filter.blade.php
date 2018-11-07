<div class="card card-yellow position-absolute card-bc">
	<div class="card-header py-2">
		<p class="font-weight-bold mb"><img src="{{ Config::get('app.url_assets') }}assets/img/set.png" alt="" class="align-top">ปรับแต่งประกันรถตามงบ <a id="btnFilterForm" class="float-right"><i class="fa fa-angle-down" aria-hidden="true"></i></a></p>
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
								<p class="mb-0"><span class="text-33" id="r1">8,000</span> บาท/ปี</p>
							</div>
							<div class="col-12 mt-2">
								<div class="slider-range" datatoid="r1" min="8000" max="200000"></div>
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-5 text-left">
								<p class="mb-0">ประกันชั้น <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
							</div>
							<div class="col-7 text-right">
								<div class="row mx-0 customizetype">
									<div class="col px-1 py-0 text-center"><a class="py-0 text-dark d-block border">1</a></div>
									<div class="col px-1 py-0 text-center"><a class="py-0 text-dark d-block border">2+</a></div>
									<div class="col px-1 py-0 text-center"><a class="py-0 text-dark d-block border">2</a></div>
									<div class="col px-1 py-0 text-center"><a class="py-0 text-dark d-block border">3+</a></div>
									<div class="col px-1 py-0 text-center"><a class="py-0 text-dark d-block border disabled">3</a></div>
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-5 text-left">
								<p class="mb-0">ทุนประกัน <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
							</div>
							<div class="col-7 text-right">
								<p class="mb-0"><span class="text-33" id="r2">300,000</span> บาท</p>
							</div>
							<div class="col-12 mt-2">
								<div class="slider-range" datatoid="r2" min="300000" max="5000000"></div>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-5 text-left">
								<p class="mb-0">ค่าเสียหายส่วนแรก<a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="" height="10" class="align-middle"></a></p>
							</div>
							<div class="col-7 text-right">
								<p><span class="text-33">2,000</span> บาท</p>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-12 text-center">
								<button class="btn btn-yellow px-3" type="button" id="confirm_filter" >ยืนยันข้อมูล</button>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
