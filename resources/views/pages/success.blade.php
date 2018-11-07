@extends('layouts.default')
@section('content')
<div class="box-header py-0"></div>
<div style="background:url('{{ Config::get('app.url_assets') }}assets/img/bgyellow-mobile.png');">
<div class="container">
    <div class="row">
        <div class="col-12 text-center py-5">
            <h1 class="mb-3 text-24 text-brown">ได้รับข้อมูลเรียบร้อยแล้ว</h1>
            <p class="mb-3 text-brown">คุณ {{$name}}<br>
            เราจะติดต่อคุณกลับไปใน<br>
            {{$time_text}}
            </p>
            <!-- วันจันทร์ที่ 15 ตุลาคม 2561 เวลา 09:00 - 10.00 น. -->
            <h1 class="mb-5 text-24 text-brown">ขอขอบคุณที่ไว้วางใจ</h1>

            <a href="{{ Config::get('app.url_main') }}" class="btn btn-brown px-4">กลับไปหน้าหลัก</a>
        </div>
    </div>
</div>
</div>
@stop