@extends('layouts.default')
@section('content')
<div class="box-header">
    <div class="container">
        <div class="col-md-12 text-center">
            <h5 class="mb-0 text-22 text-brown">เลือกประกันรถตามงบ</h5>
        </div>
    </div>
</div>

<div class="container py-3">
	<div class="row">
		<div class="col-12 col-md-4 offset-md-2 mb-3 lineright">
			<p class="text-center py-3 text-16"><img src="{{ Config::get('app.url_assets') }}assets/img/icon/car-header.png" alt="" height="13">&nbsp;&nbsp;เลือกรถของคุณ</p>
			
			<div class="px-0 px-md-5">
				
				<div class="d-block d-sm-none">
					<!-- <select multiple="multiple" name="selectMain" class="select2" id="chooseShow" style="width:100%;">
					</select>

					<select multiple="multiple" name="selectMain" class="select2" id="chooseMain" style="width:100%;">
					</select> -->
					
						<div class="car-filter-tag" >
							<button type="button" id="tag-make" class="btn-pill btn btn-inverse btn-sm btn-filter-tag d-none" data-step="1">
								<span><span><span class="text"></span>
								<svg id="Layer_1" width="14.13" height="14.13" viewBox="0 0 14.13 14.13">
								<polygon points="14.13 1.41 12.72 0 7.07 5.65 1.41 0 0 1.41 5.65 7.07 0 12.72 1.41 14.13 7.07 8.48 12.72 14.13 14.13 12.72 8.48 7.07 14.13 1.41" fill="#959595"></polygon>
								</svg></span></span>
							</button>
							<button type="button" id="tag-model" class="btn-pill btn btn-inverse btn-sm btn-filter-tag d-none" data-step="2">
								<span><span><span class="text" ></span>
								<svg id="Layer_1" width="14.13" height="14.13" viewBox="0 0 14.13 14.13">
								<polygon points="14.13 1.41 12.72 0 7.07 5.65 1.41 0 0 1.41 5.65 7.07 0 12.72 1.41 14.13 7.07 8.48 12.72 14.13 14.13 12.72 8.48 7.07 14.13 1.41" fill="#959595"></polygon>
								</svg></span></span>
							</button>
							<button type="button" id="tag-year" class="btn-pill btn btn-inverse btn-sm btn-filter-tag d-none" data-step="3">
								<span><span><span class="text"></span>
								<svg id="Layer_1" width="14.13" height="14.13" viewBox="0 0 14.13 14.13">
								<polygon points="14.13 1.41 12.72 0 7.07 5.65 1.41 0 0 1.41 5.65 7.07 0 12.72 1.41 14.13 7.07 8.48 12.72 14.13 14.13 12.72 8.48 7.07 14.13 1.41" fill="#959595"></polygon>
								</svg></span></span>
							</button>
							<input type="text" class="form-control" id="car-keyin" onkeyup="filterFunction()" placeholder="เลือกยี่ห้อรถ" />
						</div>
						<div class="dropdown car-filter-ddl">
							<button type="button" id="btn-ddl-car" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DROPDOWN</button>
							<div class="dropdown-menu"  aria-labelledby="dropdownMenuButton">
								<div class="content-zone" id="ddl-car-content" data-type="make">
									<!-- <a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a> -->
								</div>
							</div>
						</div>
						
				</div>

				<div class="d-none d-sm-block">
					<p class="text-center mb-1 mt-4">ยี่ห้อรถยนต์</p>
					<select name="" id="desk-make" class="form-control">
						<option value="">เลือกยี่ห้อรถยนต์</option>
					</select>
					<p class="text-center mb-1 mt-4">รุ่นรถยนต์</p>
					<select name="" id="desk-model" class="form-control">
						<option value="">เลือกรุ่นรถยนต์</option>
					</select>
					<p class="text-center mb-1 mt-4">ปีรถยนต์</p>
					<select name="" id="desk-year" class="form-control">
						<option value="">เลือกปีรถยนต์</option>
					</select>
				</div>
				<!-- <select name="" id="" class="form-control select2car">
					<option value="toyota">Toyota</option>
					<option value="honda">Honda</option>
					<option value="nissan">Nisaan</option>
					<option value="isuzu">Isuzu</option>
					<option value="mitsubishi">Mitsubishi</option>
				</select> -->
			</div>
		</div>
		<div class="col-12 col-md-4 text-center mb-4">
			<form id="form-custom" method="post" action="<?php echo $link_submit;?>">
			<div class="px-0 px-md-4">
				<div class="card card-yellow">
					<div class="card-body">
						<p class="pt-2 pb-1 text-20">งบประมาณไม่เกิน</p>
						<h2 class="position-relative"><span id="price" class="font-weight-normal">0</span> <span class="position-absolute">บาท/ปี</span></h2>
						<div class="slider"></div>
						<!-- <div class="slider"><div class="dot"></div></div> -->
						<!-- <div class="clearfix"></div> -->
					</div>
				</div>

				<!-- <input type="range" multiple value="0,100" /> -->

				<div class="row py-3 text-left">
					<div class="col-4">
						<p class="py-3">ประกันชั้น <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/info3.png" alt="" width="15" class="mb-1"></a></p>	
					</div>
					<div class="col-8">
						<div class="row mx-0 customizetype">
							<div class="col px-1 py-0 text-center"><a class="py-2 text-dark d-block border">1</a></div>
							<div class="col px-1 py-0 text-center"><a class="py-2 text-dark d-block border">2+</a></div>
							<div class="col px-1 py-0 text-center"><a class="py-2 text-dark d-block border">2</a></div>
							<div class="col px-1 py-0 text-center"><a class="py-2 text-dark d-block border">3+</a></div>
							<div class="col px-1 py-0 text-center"><a class="py-2 text-dark d-block border ">3</a></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12 text-center">
						{!! csrf_field() !!}
						<input type="hidden" name="make_value" id="hd_make_value"/>
						<input type="hidden" name="model_value" id="hd_model_value"/>
						<input type="hidden" name="model_text" id="hd_model_text"/>
						<input type="hidden" name="year_value" id="hd_year_value"/>
						<input type="hidden" name="product_type" id="hd_product_type"/>
						<input type="hidden" name="premium_value" id="hd_premium_value"/>
						<button type="submit" id="submitCustom" class="btn btn-gray px-5">ต่อไป <i class="fa fa-angle-right" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
@stop



@section('script')
<script>
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$(document).ready(function() {
	// $("#btn-ddl-car").click();
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
	$("#form-custom").submit(function(){
		var make = $("#hd_make_value").val();
		var model = $("#hd_model_value").val();
		var year = $("#hd_year_value").val();
		var $type = $('.customizetype a.active');
		// if($type.length == 0){
		// 	msgAlert("กรุณาเลือกข้อมูลให้ครบถ้วน");
		// 	return false;
		// }
		var strType = "";
		if($type.length>0){
			var i = 0;
			$type.each(function(){
				if(i!=0){
					strType += ",";
				}
				strType += $(this).text();
				i++;
			});
		}
		$("#hd_product_type").val(strType);
	});
});
var car = $.parseJSON('{!!json_encode($make_value_list)!!}');
//new Array('Toyota', 'Honda', 'Nissan', 'Isuzu', 'Mitsubishi');
var carmodel = new Array();
var year = new Array();

var dataList = [car,carmodel,year];
$(document).ready(function() {
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
});

// Desktop
$(document).ready(function() {
	var deskMake = $('#desk-make');
	var deskModel = $('#desk-model');
	var deskYear = $('#desk-year');

	deskMake.html(setOption(car));
	deskMake.select2({ 
		placeholder: "กรุณาเลือกยี่ห้อรถยนต์"
	});

	var option = "<option></option>";

	deskModel.html(option);
	deskModel.select2({ 
		placeholder: "กรุณาเลือกรุ่นรถยนต์"
	});

	deskYear.html(option);
	deskYear.select2({ 
		placeholder: "กรุณาเลือกปีรถยนต์"
	});

	deskMake.on('select2:select', function (e) {
		var data = e.params.data;
		$('#hd_make_value').val(data.id);
		var sendData = {text:data.text, id:data.id};
		getModelValue(sendData);

		deskModel.html(setOption(dataList[1], 1));
		deskModel.select2({ 
			placeholder: "กรุณาเลือกรุ่นรถยนต์"
		});
	});

	deskModel.on('select2:select', function (e) {
		var data = e.params.data;
		$('#hd_model_value').val(data.id);
		$('#hd_model_text').val(data.text);
		var sendData = {text:data.text, id:data.id};
		getModelYearValue(sendData);
		console.log(dataList);
		deskYear.html(setOption(dataList[2], 2));
		deskYear.select2({ 
			placeholder: "กรุณาเลือกปีรถยนต์"
		});
	});

	deskYear.on('select2:select', function (e) {
		var data = e.params.data;
		$('#hd_year_value').val(data.id);
	});

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
});
// Desktop


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
	function selectCarItem(element){
		var type = $(element).parents(".content-zone").attr("data-type");
		var val = $(element).attr("data-val");
		var text = $(element).text();
		var data = { text:text , id:val};
		// console.log(element);
		$("#car-keyin").val('');
		switch (type) {
			case "make":
				$("#hd_make_value").val(data.id);
				getModelValue(data);
				break;
			case "model":
				$("#hd_model_value").val(data.id);
				$("#hd_model_text").val(data.text);
				getModelYearValue(data);
				break;
			case "year":
				$("#hd_year_value").val(data.id);
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


	// Ajax Get Max Price
	var minPrice = 0;
	var maxPrice = parseInt("{{$premium_filter->Maximum}}");

	$( function() {
		$('#price').html(addCommas(minPrice));
    	$( ".slider" ).slider({
    		min: minPrice,
    		max: maxPrice,
			slide: function( event, ui ) {
				$('#price').html(addCommas(ui.value));
			},
			change: function(event, ui) { 
				// console.log(ui.value); 
				$("#hd_premium_value").val(ui.value);
			} 
    	});
  	} );
  	function addCommas(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
</script>
@stop 