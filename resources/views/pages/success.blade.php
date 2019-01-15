@extends('layouts.default')
@section('content')
<div class="box-header py-0"></div>
<div class="d-xs-block d-sm-block d-lg-none d-md-none"  style="background:url('{{ Config::get('app.url_assets') }}assets/img/success_drop_mb.png'); background-size:cover;   
    background-size: 100% 100%;
    min-height: 400px;
    background-repeat: no-repeat;
    background-position: center">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1 class="mb-3 text-24 text-brown">ได้รับข้อมูลเรียบร้อยแล้ว</h1>
                <p class="mb-3 text-brown">คุณ {{$name}}<br>
                เราจะติดต่อคุณกลับไปใน<br>
                {{$time_text}}
                </p>

                <a href="{{ Config::get('app.url_main') }}" class="btn btn-brown px-4">กลับไปหน้าหลัก</a>
            </div>
        </div>
    </div>
</div>
<div class="d-none d-md-block d-lg-block"  style="background:url('{{ Config::get('app.url_assets') }}assets/img/success_drop_pc.png'); background-size:cover;background-size: auto 100%;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 300px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1 class="mb-3 text-24 text-brown">ได้รับข้อมูลเรียบร้อยแล้ว</h1>
                <p class="mb-3 text-brown">คุณ {{$name}}<br>
                เราจะติดต่อคุณกลับไปใน<br>
                {{$time_text}}
                </p>

                <a href="{{ Config::get('app.url_main') }}" class="btn btn-brown px-4">กลับไปหน้าหลัก</a>
            </div>
        </div>
    </div>
</div>
@stop