@extends('layouts.default')
@section('content')

<div class="box-header">
    <div class="container">
        <div class="col-md-12 text-center" style="padding: 0 15px 0 35px;">
            <a href="{{url()->previous()}}" class="float-left d-inline-block d-sm-none linkback text-12"><i class="fa fa-caret-left" aria-hidden="true"></i> กลับ |</a>
            <p><img src="{{ Config::get('app.url_assets') }}assets/img/icon/car-header.png" alt=""> {{ucfirst(strtolower($detail->MakeValue))}} / {{ucfirst(strtolower($detail->ModelValue))}} / {{ucfirst($detail->ModelDescription)}}  <span class="text-gray">ประกัน</span> ชั้น {{$detail->ProductType}} </p>
        </div>
    </div>
</div>
@php($sperate_pay = '')
@php($totalPremium = number_format($detail->TotalPremium,0,'',''))
<?php 
$arrPay = array();
    if(!empty($detail->SplitPay)){
        $arrPay = explode(',',$detail->SplitPay);
        $fMax = 0;
        for($i=0;$i<count($arrPay);$i++){
            if(intval($arrPay[$i])>$fMax){
                $fMax = intval($arrPay[$i]);
            }
        }
        $sperate_pay = "ผ่อน ".$fMax." ด.";
    }
?>
<!-- mobile -->
<div class="d-md-none d-lg-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 pl-0 pr-0">
                <div class="col-md-4 col-xs-12 contentDiv px-0">
                    <div class="card rounded-0">
                        <div class="overlay">
                            @if(!empty($detail->PromotionTag))
                                <img src="{{$detail->PromotionTag}}" alt="">
                            @endif
                        </div>
                        <div class="card-header rounded-0">
                            <p><img src="{{$detail->InsurerIcon}}" style="height:30px;margin-top:-2px;" alt="">{{$detail->InsurerName}}</p>
                        </div>
                        <div class="card-body rounded-0 py-5">
                            <div class="row">
                                <div class="col-md-12 text-center mb-3">
                                    <p class="text-header-card mb-3 px-4">{{$detail->ProductName}}</p>
                                    <h2 class="font-weight-bold text-50">{{number_format($detail->TotalPremium)}} <span class="text-18 font-weight-normal">บาท / ปี</span></h2>
                                    <a href="#" class="btn btn-default mx-1 btn-theme3">ชั้น {{$detail->ProductType}}</a>
                                    @if(!empty($sperate_pay))
                                        <a href="#" class="btn btn-default mx-1 btn-theme3">{{$sperate_pay }}</a>
                                    @endif
                                     @if(!empty($detail->PromotionTag))
                                        <a href="" class="btn btn-default btn-theme3">โปรโมชั่น</a>
                                     @endif
                                   <!-- <a href="#" class="btn btn-default mx-1 btn-theme3">โปรโมชั่น</a> -->
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
                <div class="alert alert-danger d-none" id="mb-error-interest">

                </div>
                <div class="form-group row mb-2">
                    <label for="" class="col-4 col-form-label text-right">ชื่อ นามสกุล <sup class="text-danger">*</sup></label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="name" id="" value="" placeholder="จำลอง ตัวอย่าง">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="" class="col-4 col-form-label text-right">โทรศัพท์ติดต่อ <sup class="text-danger">*</sup></label>
                    <div class="col-8">
                        <input type="text" maxlength="10" class="form-control number-text" name="tel" id="" value="" placeholder="088 888 8888">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="" class="col-4 col-form-label text-right">อีเมล์ <sup class="text-danger">*</sup></label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="email" id="" value="" placeholder="join@email.com">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="" class="col-4 col-form-label text-right">วัน เวลา ติดต่อกลับ <sup class="text-danger">*</sup></label>
                    <div class="col-4 pr-0">
                        <input type="text" name="callback_date" id="" class="form-control-sm form-control datepicker-reg-mb" placeholder="dd/mm/yyyy" >
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
                        <textarea name="remark" id="" cols="30" rows="3" class="form-control form-control-sm" placeholder="ข้อมูลเพิ่มเติม"></textarea>
                    </div>
                    <input type="hidden" name="make" value="{{$detail->MakeValue}}" />
                    <input type="hidden" name="model" value="{{$detail->ModelValue}}" />
                    <input type="hidden" name="motor_type" value="{{$detail->MotorType}}" />
                    <input type="hidden" name="seat" value="{{$detail->Seat}}" />
                    <input type="hidden" name="cc" value="{{$detail->CC}}" />
                </div>
                <div class="form-group row mb-2">
                    <label for="" class="col-4 col-form-label text-right">Captcha <sup class="text-danger">*</sup></label>
                    <div class="col-8">
                        <span class="interest-captcha-img">{!! captcha_img() !!}</span>
                        
                        <input  type="text" name="captcha" value="" id="" maxlength="5" class="form-control" style="width:80px; display:inline-block;" autocomplete='off'/>
                    </div>
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
                    <h3>{{!empty($detail->DeductAmt)&&intval($detail->DeductAmt)>0 ? number_format($detail->DeductAmt,0):'ไม่ต้องจ่าย'}}</h3>
                    @if(!empty($detail->DeductAmt)&&intval($detail->DeductAmt)>0)
                    <p>บาท</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                @if(count($arrPay)>0)
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
                                    <?php 
                                            for($i=0;$i<count($arrPay);$i++)
                                            {
                                                if($i!=0){
                                            ?>  
                                                <hr class="border-list">
                                            <?php
                                                }
                                                $pay = $totalPremium/$arrPay[$i];
                                            ?>
                                                <div class="col-6">ผ่อน <?php echo $arrPay[$i];?> เดือน</div>
                                                <div class="col-6 text-right"><?php echo number_format($pay,0);?> บาท / เดือน</div>
                                            <?php
                                            }
                                            ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                 @if(!empty(strip_tags($detail->ProductDesc1)))
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
                @endif
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
                 @if(!empty(strip_tags($detail->ProductDesc2)))
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
                @endif
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
                            @if(!empty($detail->PromotionTag))
                                <img src="{{$detail->PromotionTag}}" alt="">
                            @endif
                            
                        </div>
                        <div class="card-header text-center rounded-0">
                            <span><img src="{{ $detail->InsurerIcon }}" style="height:30px;margin-top:-2px;" alt=""> {{$detail->InsurerName}}</span>
                        </div>
                        <div class="card-body rounded-0">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p class="text-header-card mb-3">
                                        {{$detail->ProductName}}
                                    </p>
                                    <a href="" class="btn btn-default btn-theme3"><img src="{{ Config::get('app.url_assets') }}assets/img/icon/car.png" alt=""> {{$detail->ProductType}}</a>
                                    @if(!empty($sperate_pay))
                                        <a href="" class="btn btn-default btn-theme3"><img src="{{ Config::get('app.url_assets') }}assets/img/icon/calendar.png" alt=""> {{$sperate_pay }}</a>
                                    @endif
                                    @if(!empty($detail->PromotionTag))
                                    <a href="" class="btn btn-default btn-theme3">โปรโมชั่น</a>
                                     @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <h4 class="mb-5 text-center">“{{$detail->ProductName}}”</h4>
                    <hr>
                    <!-- <p class="text-gray mb-3">เหมาะกับใคร</p>
                    <a href="" class="btn btn-default btn-theme3">
                        <img src="{{ Config::get('app.url_assets') }}assets/img/icon/thumb__car-1.png" alt="" class="img-fixed">
                        <p>รถใหม่ไร้กังวล</p>
                    </a>
                    <a href="" class="btn btn-default btn-theme3">
                        <img src="{{ Config::get('app.url_assets') }}assets/img/icon/thumb__car-4.png" alt="" class="img-fixed">
                        <p>อุ่นใจรถใช้น้อย</p>
                    </a> -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-gray mb-3">รายละเอียดประกััน</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/01.png" alt="" class="mb-2" >
                    <p>ทุนประกัน</p>
                    <h3>{{number_format($detail->SumInsured)}}</h3>
                    <p>บาท</p>
                </div>
                <div class="col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/02.png" alt="" class="mb-2" >
                    <p>ทรัพย์สินส่วนบุคคล</p>
                    <h3>{{number_format($detail->TPPD)}}</h3>
                    <p>บาท</p>
                </div>
                <div class="col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/03.png" alt="" class="mb-2" >
                    <p>ซ่อม</p>
                    <h3>{{(intval($detail->ClaimTypeValue)==1 ? 'อู่':'ห้าง')}}</h3>
                </div>
                <div class="col-md-3 text-center mb-3">
                    <img src="{{ Config::get('app.url_assets') }}assets/img/product/04.png" alt="" class="mb-2" >
                    <p>ค่าเสียหายส่วนแรก</p>
                    <h3>{{!empty($detail->DeductAmt)&&intval($detail->DeductAmt)>0 ? number_format($detail->DeductAmt,0):'ไม่ต้องจ่าย'}}</h3>
                    @if(!empty($detail->DeductAmt)&&intval($detail->DeductAmt)>0)
                    <p>บาท</p>
                    @endif
                </div>
            </div>
            <div class="row">
            @if(!empty(strip_tags($detail->ProductDesc1)))
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
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                
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
                 @if(!empty(strip_tags($detail->ProductDesc2)))
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
                @endif
            </div>
        </div>
        <div class="col-md-5">
            <div class="row mb-4">
                <div class="col-md-12 col-xs-12">
                    <div class="card rounded-0">
                        <div class="card-body rounded-0">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <!--<p class="text-header-card mb-3">
                                        {{number_format($detail->TotalPremium)}} บาท / ปี
                                    </p>-->
                                    <h2 class="">{{number_format($detail->TotalPremium)}}<span class="text-18">บาท / ปี</span></h2>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card-footer rounded-0 bg-card-footer">
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" class="form-control rounded-0 border-0" placeholder="กรุณาระบุรหัสส่วนลด (ถ้ามี)">
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-warning btn-code rounded-0">ใช้รหัส</button>
                                </div>
                            </div>
                        </div> -->
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
                        <form action="" id="form-droplead-pc" method="post" >
                            <div class="alert alert-danger d-none" id="pc-error-interest">

                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <span class="line-height-35">ชื่อ นามสกุล <sup class="text-danger">*</sup></span>
                                    <input type="text" name="name" class="form-control rounded-0 border-0">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="line-height-35">โทรศัพท์ติดต่อ <sup class="text-danger">*</sup></span>
                                    <input type="text" maxlength="10" name="tel" class="form-control rounded-0 border-0 number-text">
                                </div>
                                <div class="col-md-6">
                                    <span class="line-height-35">อีเมล์ <sup class="text-danger">*</sup></span>
                                    <input type="text" name="email" class="form-control rounded-0 border-0">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="line-height-35">วัน เวลา ติดต่อกลับ <sup class="text-danger">*</sup></span>
                                    <div class="pc-datepicker">
                                        <input type="text" name="callback_date"  class="rounded-0 border-0 form-control datepicker-reg-pc" placeholder="dd/mm/yyyy" >
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <span class="line-height-35">&nbsp;</span>
                                    <select name="callback_time" id="" class="form-control rounded-0 border-0">
                                        <?php for ($i=9; $i<=23; $i++) { ?>
                                        <option value="<?php echo sprintf('%02d', $i).':00' ?>"><?php echo sprintf('%02d', $i).'.00-'.sprintf('%02d', $i+1).'.00' ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <span class="line-height-35">รายละเอียดเพิ่มเติม</span>
                                    <textarea name="remark" id="" cols="30" rows="3" class="form-control rounded-0 border-0"></textarea>
                                </div>
                                <input type="hidden" name="make" value="{{$detail->MakeValue}}" />
                                <input type="hidden" name="model" value="{{$detail->ModelValue}}" />
                                <input type="hidden" name="motor_type" value="{{$detail->MotorType}}" />
                                <input type="hidden" name="seat" value="{{$detail->Seat}}" />
                                <input type="hidden" name="cc" value="{{$detail->CC}}" />
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <span class="interest-captcha-img">{!! captcha_img() !!}</span>
                                    <input  type="text" name="captcha" value="" id="" maxlength="5" class="form-control" style="width:100px; display:inline-block;" autocomplete='off'/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-right">
                                    <button class="btn btn-warning btn-theme">ยืนยันข้อมูล</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
            <!-- ผ่อน -->
             @if(count($arrPay)>0)
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
                                    
                                            <?php 
                                            
                                            for($i=0;$i<count($arrPay);$i++)
                                            {
                                                if($i!=0){
                                            ?>  
                                                <hr class="border-list">
                                            <?php
                                                }
                                                $pay = $totalPremium/$arrPay[$i];
                                            ?>
                                                <div class="col-6">ผ่อน <?php echo $arrPay[$i];?> เดือน</div>
                                                <div class="col-6 text-right"><?php echo number_format($pay,0);?> บาท / เดือน</div>
                                            <?php
                                            }
                                            ?>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endif
            <!-- ผ่อน -->
        </div>
    </div>
</div>

@stop
@section("script")
<script>
    $(document).ready(function(){
        $("#form-droplead").submit(function(e){
            e.preventDefault();
            var $alert = $("#mb-error-interest");
            if ($("#form-droplead").find("[name='name']").val()=="") {
                $alert.removeClass("d-none");
                $alert.text("กรุณากรอกข้อมูลครบถ้วน");
                return;
            }
            if ($("#form-droplead").find("[name='tel']").val() == "") {
                $alert.removeClass("d-none");
                $alert.text("กรุณากรอกข้อมูลครบถ้วน");
                return;
            }
            if ($("#form-droplead").find("[name='email']").val() == "") {
                $alert.removeClass("d-none");
                $alert.text("กรุณากรอกข้อมูลครบถ้วน");
                return;
            }
            if ($("#form-droplead").find("[name='callback_date']").val() == "") {
                $alert.removeClass("d-none");
                $alert.text("กรุณากรอกข้อมูลครบถ้วน");
                return;
            }
            if ($("#form-droplead").find("[name='tel']").val().length < 9){
                $alert.removeClass("d-none");
                $alert.text("กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง");
                return;
            }
            var linkInterest = "{{url('/Home/SendInterest')}}";
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: linkInterest,
                type: 'POST',
                dataType: 'json',
                data: $("#form-droplead").serialize(),
                success: function(data) {
                    console.log(data);
                    if (data.fail != null || data.fail != undefined) {
                        $alert.removeClass("d-none");
                        $alert.text(data.fail);
                        $(".interest-captcha-img").html(data.captcha);
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
        $("#form-droplead-pc").submit(function(e){
            e.preventDefault();
            var $alert = $("#pc-error-interest");
            if ($("#form-droplead-pc").find("[name='name']").val()=="") {
                $alert.removeClass("d-none");
                $alert.text("กรุณากรอกข้อมูลครบถ้วน");
                return;
            }
            if ($("#form-droplead-pc").find("[name='tel']").val() == "") {
                $alert.removeClass("d-none");
                $alert.text("กรุณากรอกข้อมูลครบถ้วน");
                return;
            }
            if ($("#form-droplead-pc").find("[name='email']").val() == "") {
                $alert.removeClass("d-none");
                $alert.text("กรุณากรอกข้อมูลครบถ้วน");
                return;
            }
            if ($("#form-droplead-pc").find("[name='callback_date']").val() == "") {
                $alert.removeClass("d-none");
                $alert.text("กรุณากรอกข้อมูลครบถ้วน");
                return;
            }
            if ($("#form-droplead-pc").find("[name='tel']").val().length < 9){
                $alert.removeClass("d-none");
                $alert.text("กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง");
                return;
            }
            var linkInterest =  "{{url('/Home/SendInterest')}}";
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: linkInterest,
                type: 'POST',
                dataType: 'json',
                data: $("#form-droplead-pc").serialize(),
                success: function(data) {
                    console.log(data);
                    if (data.fail != null || data.fail != undefined) {
                        $alert.removeClass("d-none");
                        $alert.text(data.fail);
                        $(".interest-captcha-img").html(data.captcha);
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