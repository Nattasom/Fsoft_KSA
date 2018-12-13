@extends('layouts.default')
@section('content')

<div class="box-header">
    <div class="container">
        <div class="col-md-12 text-center">
            <a href="{{url()->previous()}}" class="float-left d-inline-block d-sm-none linkback text-12"><i class="fa fa-caret-left" aria-hidden="true"></i> กลับ |</a>
            <p><img src="{{ Config::get('app.url_assets') }}assets/img/icon/car-header.png" alt=""> {{ucfirst(strtolower($detail->MakeValue))}} / {{ucfirst(strtolower($detail->ModelValue))}} {{$detail->CC}}cc  <span class="text-gray">ประกัน</span> ชั้น {{$detail->ProductType}} </p>
        </div>
    </div>
</div>

<!-- mobile -->
<div class="d-md-none d-lg-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 pl-0 pr-0">
                <?php  
                $datas = array(
                    array('title'=>'ประกันภัยไทยวิวัฒน์', 'img'=>'icon01.png', 'caption'=>'ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 400,000', 'price'=>'8,000', 'list'=>array(1,2,3), 'table'=>array('400,000 บ.','2,000 บ.','อู่','1,000,000 บ.')),
                );
                ?>
                <?php foreach ($datas as $data) {  ?>
                
                <?php } ?>
                <div class="col-md-4 col-xs-12 contentDiv px-0">
                    <div class="card rounded-0">
                        <div class="overlay">
                            <!-- <img src="{{ Config::get('app.url_assets') }}assets/img/special.png" style="height:70px;" alt=""> -->
                        </div>
                        <div class="card-header rounded-0">
                            <p><img src="{{$detail->InsurerIcon}}" style="height:30px;margin-top:-2px;" alt="">{{$detail->InsurerName}}</p>
                        </div>
                        <div class="card-body rounded-0 py-5">
                            <div class="row">
                                <div class="col-md-12 text-center mb-3">
                                    <p class="text-header-card mb-3 px-4">{{$detail->ProductName}}</p>
                                    <h2 class="font-weight-bold text-50">{{number_format($detail->NetPremium)}} <span class="text-18 font-weight-normal">บาท / ปี</span></h2>
                                    <a href="#" class="btn btn-default mx-1 btn-theme3">ชั้น {{$detail->ProductType}}</a>
                                   
                                    <!-- <a href="#" class="btn btn-default mx-1 btn-theme3">ผ่อน 10 ด.</a>
                                    <a href="#" class="btn btn-default mx-1 btn-theme3">โปรโมชั่น</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-gray">
        <div class="container">
            <div class="row mb-2 mt-4">
                <div class="col-md-12 text-center">
                    <p class="font-20"><img src="{{ Config::get('app.url_assets') }}assets/img/icon/phone.png" alt=""> รายละเอียดในการติดต่อกลับ</p>
                </div>
            </div>
            <form action="" id="form-droplead" method="post" class="py-4">
                <div class="form-group row mb-2">
                    <label for="" class="col-4 col-form-label text-right">ชื่อ นามสกุล <sup class="text-danger">*</sup></label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="name" id="" value="" placeholder="จำลอง ตัวอย่าง">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="" class="col-4 col-form-label text-right">โทรศัพท์ติดต่อ <sup class="text-danger">*</sup></label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="tel" id="" value="" placeholder="088 888 8888">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="" class="col-4 col-form-label text-right">อีเมล <sup class="text-danger">*</sup></label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="email" id="" value="" placeholder="join@email.com">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="" class="col-4 col-form-label text-right">วัน เวลา ติดต่อกลับ <sup class="text-danger">*</sup></label>
                    <div class="col-4 pr-0">
                        <input type="text" name="callback_date" id="interest-callback_date" class="form-control-sm form-control datepicker" placeholder="dd/mm/yyyy" required="required">
                    </div>
                    <div class="col-4">
                        <select name="callback_time" id="" class="form-control">
                            <?php for ($i=9; $i<=23; $i++) { ?>
                            <option value="<?php echo sprintf('%02d', $i).':00' ?>"><?php echo sprintf('%02d', $i).'.00-'.sprintf('%02d', $i+1).'.00' ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="" class="col-4 col-form-label text-right">รายละเอียดเพิ่มเติม</label>
                    <div class="col-8">
                        <textarea name="remark" id="interest-remark" cols="30" rows="3" class="form-control form-control-sm" placeholder="ข้อมูลเพิ่มเติม"></textarea>
                    </div>
                    <input type="hidden" name="make" value="{{$detail->MakeValue}}" />
                    <input type="hidden" name="model" value="{{$detail->ModelValue}}" />
                    <input type="hidden" name="motor_type" value="{{$detail->MotorType}}" />
                    <input type="hidden" name="seat" value="{{$detail->Seat}}" />
                    <input type="hidden" name="cc" value="{{$detail->CC}}" />
                </div>
                
                <div class="form-group row mb-2 mt-2">
                    <div class="col-8 offset-4"><button type="submit" class="btn btn-yellow btn-sm px-3 py-1">ยืนยันข้อมูล</button></div>
                </div>
            </form>
        </div>
    </section>
    <section class="bg-white">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-12 text-center">
                    <h4 class="mb-5">{{$detail->ProductName}}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-gray mb-3">รายละเอียดประกััน</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/01.png" alt="" class="mb-2">
                    <p>ทุนประกัน</p>
                    <h3>{{number_format($detail->SumInsured)}}</h3>
                    <p>บาท</p>
                </div>
                <div class="col-6 col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/02.png" alt="" class="mb-2">
                    <p>ทรัพย์สินส่วนบุคคล</p>
                    <h3>{{number_format($detail->TPPD)}}</h3>
                    <p>บาท</p>
                </div>
                <div class="col-6 col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/03.png" alt="" class="mb-2">
                    <p>ซ่อม</p>
                    <h3>{{(intval($detail->ClaimTypeValue)==1 ? 'อู่':'ห้าง')}}</h3>
                </div>
                <div class="col-6 col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/04.png" alt="" class="mb-2">
                    <p>ค่าเสียหายส่วนแรก</p>
                    <h3>ไม่ต้องจ่าย</h3>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingOne">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <p class="text-collapsed">ผ่อนชำระ</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-6">ผ่อน 3 เดือน</div>
                                    <div class="col-6 text-right">{{number_format(intval($detail->NetPremium)/3)}} บาท / เดือน</div>
                                    <hr class="border-list">
                                    <div class="col-6">ผ่อน 6 เดือน</div>
                                    <div class="col-6 text-right">{{number_format(intval($detail->NetPremium)/6)}} บาท / เดือน</div>
                                    <hr class="border-list">
                                    <div class="col-6">ผ่อน 10 เดือน</div>
                                    <div class="col-6 text-right">{{number_format(intval($detail->NetPremium)/10)}} บาท / เดือน</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingTwo">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <p class="text-collapsed">รายละเอียดความคุ้มครอง</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                {!!$detail->ProductDesc1!!}
                                <!-- <ul>
                                    <li class="mb-2">- คุ้มครอง 960 ชั่วโมง เปิด-ปิดความคุ้มครองได้</li>
                                    <li class="mb-2">- กรณีใช้ไม่หมด 960 ชั่วโมง ประกันจะคุ้มครอง 365 วัน นับจากวันเริ่มคุ้มครอง</li>
                                    <li class="mb-2">- เปิด-ปิด ได้ผ่าน Mobile App หรือแจ้งผ่าน Call Center ได้</li>
                                    <li class="mb-2">- คุ้มครอง 24 ชั่วโมง กรณีรถสูญหาย และไฟไหม้ แม้ไม่ได้ เปิด</li>
                                    <li class="mb-2">- ความคุ้มครองแบบประกันชั้น 1</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingThree">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="text-collapsed">คุ้มครองบุคคลภายนอก</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-6">คุ้มครองชีวิตต่อคน</div>
                                    <div class="col-6 text-right">{{number_format($detail->TPPI_P)}} บาท</div>
                                    <hr class="border-list">
                                    <div class="col-6">คุ้มครองชีวิตต่อครั้ง </div>
                                    <div class="col-6 text-right">{{number_format($detail->TPPI_C)}} บาท</div>
                                    <hr class="border-list">
                                    <div class="col-6">ทรัพย์สินบุคคลภายนอก </div>
                                    <div class="col-6 text-right">{{number_format($detail->TPPD)}} บาท</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingfour">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            <p class="text-collapsed">คุ้มครองเพิ่มเติม</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapsefour" class="collapse show" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body">
                               <div class="row mb-2">
                                    <div class="col-6">อุบัติเหตุส่วนบุคคล</div>
                                    <div class="col-6 text-right">{{number_format($detail->PA_Passengers)}} บาท</div>
                                    <hr class="border-list">
                                    <div class="col-6">ประกันตัวผู้ขับขี่</div>
                                    <div class="col-6 text-right">{{number_format($detail->PA_Driver)}} บาท</div>
                                    <hr class="border-list">
                                    <div class="col-6">ค่ารักษาพยาบาล</div>
                                    <div class="col-6 text-right">{{number_format($detail->MED)}} บาท</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingFive">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <p class="text-collapsed">บริการพิเศษ</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                {!!$detail->ProductDesc2!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- desktop -->
<div class="container d-none d-sm-block pt-5">
    <div class="row">
        <div class="col-md-7">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="card rounded-0">
                        <div class="overlay">
                            <img src="{{ Config::get('app.url_assets') }}assets/img/ribbon2.png" alt="">
                        </div>
                        <div class="card-header text-center rounded-0">
                            <span><img src="{{ Config::get('app.url_assets') }}assets/img/icon01.png" alt=""> ประกันภัยไทยวิวัฒน์</span>
                        </div>
                        <div class="card-body rounded-0">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p class="text-header-card mb-3">
                                        ประกันเปิด-ปิด ประเภท 1 ทุนประกัน  400,000
                                    </p>
                                    <a href="" class="btn btn-default btn-theme3"><img src="{{ Config::get('app.url_assets') }}assets/img/icon/car.png" alt=""> 3+</a>
                                    <a href="" class="btn btn-default btn-theme3"><img src="{{ Config::get('app.url_assets') }}assets/img/icon/calendar.png" alt=""> 10 ด.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <h4 class="mb-5 text-center">“ประกันรถเติมเงินชั้น 1 เปิด - ปิด ไม่ขับ ไม่ต้องจ่าย คุ้มกว่าถึง 40%”</h4>
                    <hr>
                    <p class="text-gray mb-3">เหมาะกับใคร</p>
                    <a href="" class="btn btn-default btn-theme3">
                        <img src="{{ Config::get('app.url_assets') }}assets/img/icon/thumb__car-1.png" alt="" class="img-fixed">
                        <p>รถใหม่ไร้กังวล</p>
                    </a>
                    <a href="" class="btn btn-default btn-theme3">
                        <img src="{{ Config::get('app.url_assets') }}assets/img/icon/thumb__car-4.png" alt="" class="img-fixed">
                        <p>อุ่นใจรถใช้น้อย</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-gray mb-3">รายละเอียดประกััน</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/01.png" alt="" class="mb-2" width="90" height="70">
                    <p>ทุนประกัน</p>
                    <h3>400,000</h3>
                    <p>บาท</p>
                </div>
                <div class="col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/02.png" alt="" class="mb-2" width="90" height="70">
                    <p>ทรัพย์สินส่วนบุคคล</p>
                    <h3>5,000,000</h3>
                    <p>บาท</p>
                </div>
                <div class="col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/03.png" alt="" class="mb-2" width="90" height="70">
                    <p>ซ่อม</p>
                    <h3>อู่</h3>
                </div>
                <div class="col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/04.png" alt="" class="mb-2" width="90" height="70">
                    <p>ค่าเสียหายส่วนแรก</p>
                    <h3>ไม่ต้องจ่าย</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingTwo">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <p class="text-collapsed">รายละเอียดความคุ้มครอง</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li class="mb-2">- คุ้มครอง 960 ชั่วโมง เปิด-ปิดความคุ้มครองได้</li>
                                    <li class="mb-2">- กรณีใช้ไม่หมด 960 ชั่วโมง ประกันจะคุ้มครอง 365 วัน นับจากวันเริ่มคุ้มครอง</li>
                                    <li class="mb-2">- เปิด-ปิด ได้ผ่าน Mobile App หรือแจ้งผ่าน Call Center ได้</li>
                                    <li class="mb-2">- คุ้มครอง 24 ชั่วโมง กรณีรถสูญหาย และไฟไหม้ แม้ไม่ได้ เปิด</li>
                                    <li class="mb-2">- ความคุ้มครองแบบประกันชั้น 1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingThree">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="text-collapsed">คุ้มครองบุคคลภายนอก</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-6">คุ้มครองชีวิตต่อคน</div>
                                    <div class="col-6 text-right">1,000,000 บาท</div>
                                    <hr class="border-list">
                                    <div class="col-6">คุ้มครองชีวิตต่อครั้ง </div>
                                    <div class="col-6 text-right">10,000,000 บาท</div>
                                    <hr class="border-list">
                                    <div class="col-6">ทรัพย์สินบุคคลภายนอก </div>
                                    <div class="col-6 text-right">5,000,000 บาท</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingfour">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            <p class="text-collapsed">คุ้มครองเพิ่มเติม</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapsefour" class="collapse show" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-6">อุบัติเหตุส่วนบุคคล</div>
                                    <div class="col-6 text-right">1,000,000 บาท</div>
                                    <hr class="border-list">
                                    <div class="col-6">ประกันตัวผู้ขับขี่</div>
                                    <div class="col-6 text-right">2,500,000 บาท</div>
                                    <hr class="border-list">
                                    <div class="col-6">ค่ารักษาพยาบาล</div>
                                    <div class="col-6 text-right">200,000 บาท</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingFive">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <p class="text-collapsed">บริการพิเศษ</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                บริการรถลากเมื่อเกิดอุบัติเหตุ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row mb-4">
                <div class="col-md-12 col-xs-12">
                    <div class="card rounded-0">
                        <div class="card-body rounded-0">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p class="text-header-card mb-3">
                                        8,000 บ. ประหยัด 500 บ.
                                    </p>
                                    <h2 class="text-danger">7,500 <span class="text-18">บาท / ปี</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer rounded-0 bg-card-footer">
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" class="form-control rounded-0 border-0" placeholder="กรุณาระบุรหัสส่วนลด (ถ้ามี)">
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-warning btn-code rounded-0">ใช้รหัส</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="bg-gray p-5">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <p class="font-20"><img src="{{ Config::get('app.url_assets') }}assets/img/icon/phone.png" alt=""> รายละเอียดในการติดต่อกลับ</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <span class="line-height-35">ชื่อ นามสกุล</span>
                                <input type="text" class="form-control rounded-0 border-0">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="line-height-35">โทรศัพท์ติดต่อ</span>
                                <input type="text" class="form-control rounded-0 border-0">
                            </div>
                            <div class="col-md-6">
                                <span class="line-height-35">อีเมล์</span>
                                <input type="text" class="form-control rounded-0 border-0">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <span class="line-height-35">วัน เวลา ติดต่อกลับ</span>
                                <input type="text" class="form-control rounded-0 border-0">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <span class="line-height-35">รายละเอียดเพิ่มเติม</span>
                                <textarea name="" id="" cols="30" rows="3" class="form-control rounded-0 border-0"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <button class="btn btn-warning btn-theme">ยืนยันข้อมูล</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingOne">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <p class="text-collapsed">ผ่อนชำระ</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-6">ผ่อน 3 เดือน</div>
                                    <div class="col-6 text-right">2,500 บาท / เดือน</div>
                                    <hr class="border-list">
                                    <div class="col-6">ผ่อน 6 เดือน</div>
                                    <div class="col-6 text-right">1,250 บาท / เดือน</div>
                                    <hr class="border-list">
                                    <div class="col-6">ผ่อน 10 เดือน</div>
                                    <div class="col-6 text-right">750 บาท / เดือน</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section("script")
<script>
    $(document).ready(function(){
        $("#form-droplead").submit(function(e){
            e.preventDefault();
            var linkInterest = $('#url_main').val() + "/Home/SendInterest";
            console.log(linkInterest);
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: linkInterest,
                type: 'POST',
                dataType: 'json',
                data: $("#form-droplead").serialize(),
                success: function(data) {
                    console.log(data);
                    if (data.fail != null || data.fail != undefined) {
                        msgAlert(data.fail);
                    }
                    if (data.status == '01') {
                        window.location.href = $('#url_main').val() + 'Success';
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