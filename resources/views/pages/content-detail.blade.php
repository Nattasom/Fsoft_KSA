@extends('layouts.default')
@section('content')
<div class="top">
	<img src="{{ Config::get('app.url_assets') }}assets/img/banner/banner.png" alt="" class="w-100">
</div>

<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-12 col-md-8">
			<div class="row">
				<div class="col-md-12 mb-3">
					<h2>{{$detail->Title}}</h2>
					<p class="mb-5"><i class="fa fa-clock-o" aria-hidden="true"></i> {{date('d/m/Y H:i',strtotime($detail->UpdateDate))}} น.</p>
					{!! $detail->Description !!}
				</div>
			</div>
		</div>
		<div class="col-md-4 d-none d-sm-block">
			<div class="row mb-4">
				<div class="col-md-12">
					<div class="blog-content">
						<h5>บทความอื่นๆ</h5>
					</div>
				</div>
			</div>
			@foreach($list->list as $key=>$value)
				<div class="row mb-3">
					<div class="col-md-6"><a href="{{url('/Contents/Detail',[$value->ContentID])}}"><img src="{{ $value->Thumbnail }}" alt="" class="w-100"></a></div>
					<div class="col-md-6">
						<h6>{{$value->Title}}</h6>
						<!-- <p>
							Krungsri Auto เชื่อว่าไม่ว่าใครก็
							คงอยากให้รถสุดที่รักอยู่กับเรา
						</p> -->
					</div>
				</div>
			@endforeach
			<div class="row">
				<div class="col-md-12 text-right">
					<a href="{{url('/Content')}}" class="btn btn-warning btn-theme">ดูบทความทั้งหมด</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop