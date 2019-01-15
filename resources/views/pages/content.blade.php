@extends('layouts.default')
@section('title')
บทความ
@stop
@section('content')
<div class="top">
	<!-- <img src="{{ Config::get('app.url_assets') }}assets/img/banner/banner.png" alt="" class="w-100"> -->
</div>

<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-12 ">
			<h2>บทความ</h2>
			<div class="row content-group">
				@foreach($contents->list as $key=>$value)
					<div class="col-6 col-md-3 content-box">
						<a href="{{url('/Contents/Detail',[$value->ContentID])}}">
							<p class="pic"><img src="{{ $value->Thumbnail }}" class="img-responsive" alt=""></p>
							<p class="description" style="color:#463534;margin-top:10px; height:60px; overflow:hidden;">{{$value->Title}}</p>
						</a>
					</div>
				@endforeach
			</div>
			<div class="text-center" >
				<button type="button" id="lazyload-content"  class="btn btn-default btn-theme2 py-2 px-4">ดูบทความเพิ่มเติม <i class="fa fa-chevron-right"></i>
				</button>
			</div>
			<!-- <div class="box__info-interesting pt-4" style="background:none;">
				<div class="container">
					<ul class="list px-0">
						@foreach($contents->list as $key=>$value)
							<li class="">
								<a href="{{url('/Contents/Detail',[$value->ContentID])}}">
									<p class="pic"><img src="{{ $value->Thumbnail }}" alt=""></p>
									<p class="description">{{$value->Title}}</p>
								</a>
							</li>
						@endforeach
					</ul>
					<div class="text-center">
						<button type="button" id="lazyload-content"  class="btn btn-default btn-theme2 py-2 px-4">ดูบทความเพิ่มเติม <i class="fa fa-chevron-right"></i>
						</button>
					</div>
					
				</div>
			</div> -->
		</div>
		
	</div>
</div>
@stop
@section('script')
<script>
	$(document).ready(function() {
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		$('#lazyload-content').click(function(event) {
			var val_start = $(".content-box").length;
			$.ajax({
				headers: {'X-CSRF-TOKEN': CSRF_TOKEN },
				url: "{{url('Content/More')}}",
				type: 'POST',
				dataType: 'json',
				data: {start: val_start, length: 6},
				success: function(data) {
					console.log(data);
					if(data.list.length==0){
						$('#lazyload-content').hide();
					}else{
						var $group = $(".content-group")
						var template = '<div class="col-xs-6 col-sm-6 col-md-3 content-box">'+
					'	<a href="[detail_link]">'+
					'		<p class="pic"><img src="[image]" class="img-responsive" alt=""></p>'+
					'		<p class="description" style="color:#463534;margin-top:10px; height:60px; overflow-y:hidden;">[title]</p>'+
					'	</a>'+
					'</div>';
						$.each(data.list,function(k,v){
							var html = template;
							html = html.replace('[detail_link]',"{{url('/Contents/Detail')}}/"+v.ContentID);
							html = html.replace('[image]',v.Thumbnail);
							html = html.replace('[title]',v.Title);
							$group.append(html);
						});
					}
				},
				error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
					// console.log(JSON.stringify(jqXHR));
					console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
				}
        	});
		});
	});
</script>
@stop