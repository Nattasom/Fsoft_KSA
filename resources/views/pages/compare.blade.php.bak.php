@extends('layouts.default')
@section('content')
<div class="box-header">
    <div class="container">
        <div class="col-md-12 text-center">
            <p><img src="{{ Config::get('app.url_assets') }}assets/img/icon/car-header.png" alt=""> Honda / City 1500cc / 2016 / ชั้น 1,3+,3 </p>
        </div>
    </div>
</div>
<!-- mobile -->
<div id="mobile">
    <section class="pt-0 d-md-none d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-6 border-right">
                    <div class="card rounded-0 border-0">
                        <div class="card-header rounded-0 border-bottom-0 px-0 py-0 pt-2" id="headingOne">
                            <div class="row mx-0">
                                <div class="col-12 px-0">
                                    <select name="" class="select2" id="">
                                        <option value="1">ประกันภัยไทยวิวัฒน์</option>
                                        <option value="2">อลิอันซ์ประกันภัย</option>
                                        <option value="3">เอ็มเอสไอจีประกันภัย</option>
                                        <option value="4">ทิพยประกันภัย</option>
                                        <option value="5">เอไอจีประกันภัย</option>
                                    </select>
                                </div>
                            </div>
                            <p class="text-center">4,000 บาท/ปี</p>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="" class="btn btn-warning btn-theme">สมัครประกันนี้</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 border-right">
                    <div class="card rounded-0 border-0">
                        <div class="card-header rounded-0 border-bottom-0 px-0 py-0 pt-2" id="headingOne">
                           <div class="row mx-0">
                                <div class="col-12 px-0">
                                    <select name="" class="select2" id="">
                                        <option value="1">ประกันภัยไทยวิวัฒน์</option>
                                        <option value="2" selected>อลิอันซ์ประกันภัย</option>
                                        <option value="3">เอ็มเอสไอจีประกันภัย</option>
                                        <option value="4">ทิพยประกันภัย</option>
                                        <option value="5">เอไอจีประกันภัย</option>
                                    </select>
                                </div>
                            </div>
                            <p class="text-center">2,200 บาท/ปี</p>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="" class="btn btn-warning btn-theme">สมัครประกันนี้</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-list2">
            </div>  
        </div>
    </section>
    <section class="d-md-none d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingOne">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <p class="text-collapsed">ชื่อแบบประกัน</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 pt-3 pb-3 text-center border-right">
                                        <p>ประกันเปิด - ปิด ประเภท 3+ ทุนประกัน 200,000</p>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center">
                                        <p>Value Choice 3</p>
                                    </div>
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
                            <p class="text-collapsed">โปรโมชั่น</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 pt-3 pb-3 text-center border-right">
                                        <p>รับความคุ้มครองเพิ่มทันที 10 ชั่วโมง ฟรี!</p>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center">
                                        <p>-</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingThree">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="text-collapsed">รายละเอียดของแผนประกัน</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 pt-3 pb-3 text-center border-right">
                                        <p>ประกันชั้น</p>
                                        <h3>3+</h3>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center">
                                        <p>ประกันชั้น</p>
                                        <h3>3+</h3>
                                    </div>
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
                            <p class="text-collapsed">ข้อมูลเพิ่มเติม</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapsefour" class="collapse show" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body">
                               <div class="row">
                                    <div class="col-6 pt-3 pb-3 text-center border-right border-bottom">
                                        <p>ค่าเสียหายส่วนแรกหากไม่มีคู่กรณี</p>
                                        <h6>ไม่คุ้มครอง</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-bottom">
                                        <p>ค่าเสียหายส่วนแรกหากไม่มีคู่กรณี</p>
                                        <h6>ไม่คุ้มครอง</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-right">
                                        <p>รายละเอียดความคุ้มครอง</p>
                                        <b>- คุ้มครอง 960 ชั่วโมง เปิด - ปิด   ความคุ้มครองได้ - จำนวนชั่วโมง 960 ชั่วโมงนี้ มีอายุ ใช้งาน 365 วัน นับจากวันเริ่มคุ้ม ครอง</b>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center">
                                        <p>รายละเอียดความคุ้มครอง</p>
                                        <b>-</b>
                                    </div>
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
                            <p class="text-collapsed">ความคุ้มครองรถยนต์เอาประกัน</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 pt-3 pb-3 text-center border-right border-bottom">
                                        <p>ทุนประกัน</p>
                                        <h6 class="text-success">200,000 บาท </h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-bottom">
                                        <p>ทุนประกัน</p>
                                        <h6>50,000 บาท </h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-right border-bottom">
                                        <p>ไฟไหม้และโจรกรรม</p>
                                        <h6>-</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-bottom">
                                        <p>ไฟไหม้และโจรกรรม</p>
                                        <h6>-</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-right border-bottom">
                                        <p>คุ้มครองน้ำท่วม</p>
                                        <h6>-</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-bottom">
                                        <p>คุ้มครองน้ำท่วม</p>
                                        <h6>-</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-right border-bottom">
                                        <p>ค่าเสียหายส่วนแรก</p>
                                        <h6>ไม่ต้องจ่าย</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-bottom">
                                        <p>ค่าเสียหายส่วนแรก</p>
                                        <h6>ไม่ต้องจ่าย</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-right">
                                        <p>ซ่อม</p>
                                        <h6 class="text-success">ห้าง</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center">
                                        <p>ซ่อม</p>
                                        <h6>อู่</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingSix">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <p class="text-collapsed">ความคุ้มครองบุคคลภายนอก</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 pt-3 pb-3 text-center border-right border-bottom">
                                        <p>คุ้มครองชีวิตต่อคน</p>
                                        <h6 class="text-success">1,000,000 บาท</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-bottom">
                                        <p>คุ้มครองชีวิตต่อคน</p>
                                        <h6>300,000 บาท</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-right border-bottom">
                                        <p>คุ้มครองชีวิตต่อครั้ง</p>
                                        <h6>10,000,000 บาท</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-bottom">
                                        <p>คุ้มครองชีวิตต่อครั้ง</p>
                                        <h6>10,000,000 บาท</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-right">
                                        <p>ทรัพย์สินบุคคลภายนอก</p>
                                        <h6 class="text-success">1,500,000 บาท</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center">
                                        <p>ทรัพย์สินบุคคลภายนอก</p>
                                        <h6>200,000 บาท</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingSeven">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <p class="text-collapsed">ความคุ้มครองเพิ่มเติม</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 pt-3 pb-3 text-center border-right border-bottom">
                                        <p>อุบัติเหตุส่วนบุคคล</p>
                                        <h6 class="text-success">500,000 บาท</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-bottom">
                                        <p>อุบัติเหตุส่วนบุคคล</p>
                                        <h6>50,000 บาท</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-right border-bottom">
                                        <p>ประกันตัวผู้ขับขี่</p>
                                        <h6 class="text-success">500,000 บาท</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-bottom">
                                        <p>ประกันตัวผู้ขับขี่</p>
                                        <h6>300,000 บาท</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center border-right">
                                        <p>ค่ารักษาพยาบาล</p>
                                        <h6 class="text-success">100,000 บาท</h6>
                                    </div>
                                    <div class="col-6 pt-3 pb-3 text-center">
                                        <p>ค่ารักษาพยาบาล</p>
                                        <h6>50,000 บาท</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- landscape -->
<div id="landscape">
    <section class="pt-0">
        <div class="container pt-4">
            <div class="row">
                    
                <?php if (count($compare_list) > 0) { ?>
                <?php foreach ($compare_list as $key => $data) { ?>
                <div class="col-3 border-right">
                    <div class="card rounded-0 border-0">
                        <div class="card-header rounded-0 border-bottom-0 pl-2 pr-2" id="headingOne">
                            <div class="row">
                                <div class="col-11 pl-0 pr-0 text-left"><span class="font-14"><img src="{{ Config::get('app.url_assets') }}assets/img/icon01.png" alt="" width="27" height="26" class="mr-0"> <?php echo !empty($data->CatProductName) ? $data->CatProductName : '';?></span></div>
                                <div class="col-1 pl-0 pr-0 text-right">
                                    <i class="fa fa-angle-down fa-2x" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu rounded-0">
                                        <li><a href="#">dropdown 01</a></li>
                                        <li><a href="#">dropdown 02</a></li>
                                        <li><a href="#">dropdown 03</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-center">4,000 บาท/ปี</p>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="" class="btn btn-warning btn-theme">รายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } ?>
                <!-- <div class="col-3 border-right">
                    <div class="card rounded-0 border-0">
                        <div class="card-header rounded-0 border-bottom-0 pl-2 pr-2" id="headingOne">
                            <div class="row">
                                <div class="col-11 pl-0 pr-0 text-left"><span class="font-14"><img src="{{ Config::get('app.url_assets') }}assets/img/icon05.png" alt="" width="27" height="26" class="mr-0"> เอไอจีประกันภัย</span></div>
                                <div class="col-1 pl-0 pr-0 text-right">
                                    <i class="fa fa-angle-down fa-2x" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu rounded-0">
                                        <li><a href="#">dropdown 01</a></li>
                                        <li><a href="#">dropdown 02</a></li>
                                        <li><a href="#">dropdown 03</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-center">2,200 บาท/ปี</p>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="" class="btn btn-warning btn-theme">รายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 border-right">
                    <div class="card rounded-0 border-0">
                        <div class="card-header rounded-0 border-bottom-0 pl-2 pr-2" id="headingOne">
                            <div class="row">
                                <div class="col-11 pl-0 pr-0 text-left"><span class="font-14"><img src="{{ Config::get('app.url_assets') }}assets/img/icon01.png" alt="" width="27" height="26" class="mr-0"> ประกันภัยไทยวิวัฒน์</span></div>
                                <div class="col-1 pl-0 pr-0 text-right">
                                    <i class="fa fa-angle-down fa-2x" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu rounded-0">
                                        <li><a href="#">dropdown 01</a></li>
                                        <li><a href="#">dropdown 02</a></li>
                                        <li><a href="#">dropdown 03</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-center">4,000 บาท/ปี</p>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="" class="btn btn-warning btn-theme">รายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 border-right">
                    <div class="card rounded-0 border-0">
                        <div class="card-header rounded-0 border-bottom-0 pl-2 pr-2" id="headingOne">
                            <div class="row">
                                <div class="col-11 pl-0 pr-0 text-left"><span class="font-14"><img src="{{ Config::get('app.url_assets') }}assets/img/icon05.png" alt="" width="27" height="26" class="mr-0"> เอไอจีประกันภัย</span></div>
                                <div class="col-1 pl-0 pr-0 text-right">
                                    <i class="fa fa-angle-down fa-2x" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu rounded-0">
                                        <li><a href="#">dropdown 01</a></li>
                                        <li><a href="#">dropdown 02</a></li>
                                        <li><a href="#">dropdown 03</a></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-center">2,200 บาท/ปี</p>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <a href="" class="btn btn-warning btn-theme">รายละเอียด</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <hr class="border-list2">
            </div>  
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingOne">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <p class="text-collapsed">ชื่อแบบประกัน</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>ประกันเปิด - ปิด ประเภท 3+ ทุนประกัน 200,000</p>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>Value Choice 3</p>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>Value Choice 3</p>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center">
                                        <p>Value Choice 3</p>
                                    </div>
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
                            <p class="text-collapsed">โปรโมชั่น</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>รับความคุ้มครองเพิ่มทันที 10 ชั่วโมง ฟรี!</p>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>-</p>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>-</p>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center">
                                        <p>-</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingThree">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="text-collapsed">รายละเอียดของแผนประกัน</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>ประกันชั้น</p>
                                        <h3>3+</h3>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>ประกันชั้น</p>
                                        <h3>3+</h3>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>ประกันชั้น</p>
                                        <h3>3+</h3>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center">
                                        <p>ประกันชั้น</p>
                                        <h3>3+</h3>
                                    </div>
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
                            <p class="text-collapsed">ข้อมูลเพิ่มเติม</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapsefour" class="collapse show" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body">
                               <div class="row">
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>ค่าเสียหายส่วนแรกหากไม่มีคู่กรณี</p>
                                        <h6>ไม่คุ้มครอง</h6>
                                        <hr class="border-list">
                                        <p>รายละเอียดความคุ้มครอง</p>
                                        <b>- คุ้มครอง 960 ชั่วโมง เปิด - ปิด   ความคุ้มครองได้ - จำนวนชั่วโมง 960 ชั่วโมงนี้ มีอายุ ใช้งาน 365 วัน นับจากวันเริ่มคุ้ม ครอง</b>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>ค่าเสียหายส่วนแรกหากไม่มีคู่กรณี</p>
                                        <h6>ไม่คุ้มครอง</h6>
                                        <hr class="border-list">
                                        <p>รายละเอียดความคุ้มครอง</p>
                                        <b>-</b>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>ค่าเสียหายส่วนแรกหากไม่มีคู่กรณี</p>
                                        <h6>ไม่คุ้มครอง</h6>
                                        <hr class="border-list">
                                        <p>รายละเอียดความคุ้มครอง</p>
                                        <b>- คุ้มครอง 960 ชั่วโมง เปิด - ปิด   ความคุ้มครองได้ - จำนวนชั่วโมง 960 ชั่วโมงนี้ มีอายุ ใช้งาน 365 วัน นับจากวันเริ่มคุ้ม ครอง</b>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center">
                                        <p>ค่าเสียหายส่วนแรกหากไม่มีคู่กรณี</p>
                                        <h6>ไม่คุ้มครอง</h6>
                                        <hr class="border-list">
                                        <p>รายละเอียดความคุ้มครอง</p>
                                        <b>-</b>
                                    </div>
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
                            <p class="text-collapsed">ความคุ้มครองรถยนต์เอาประกัน</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>ทุนประกัน</p>
                                        <h6 class="text-success">200,000 บาท </h6>
                                        <hr class="border-list">
                                        <p>ไฟไหม้และโจรกรรม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>คุ้มครองน้ำท่วม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>ค่าเสียหายส่วนแรก</p>
                                        <h6>ไม่ต้องจ่าย</h6>
                                        <hr class="border-list">
                                        <p>ซ่อม</p>
                                        <h6 class="text-success">ห้าง</h6>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center  border-right">
                                        <p>ทุนประกัน</p>
                                        <h6>50,000 บาท </h6>
                                        <hr class="border-list">
                                        <p>ไฟไหม้และโจรกรรม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>คุ้มครองน้ำท่วม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>ค่าเสียหายส่วนแรก</p>
                                        <h6>ไม่ต้องจ่าย</h6>
                                        <hr class="border-list">
                                        <p>ซ่อม</p>
                                        <h6>อู่</h6>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>ทุนประกัน</p>
                                        <h6 class="text-success">200,000 บาท </h6>
                                        <hr class="border-list">
                                        <p>ไฟไหม้และโจรกรรม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>คุ้มครองน้ำท่วม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>ค่าเสียหายส่วนแรก</p>
                                        <h6>ไม่ต้องจ่าย</h6>
                                        <hr class="border-list">
                                        <p>ซ่อม</p>
                                        <h6 class="text-success">ห้าง</h6>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center">
                                        <p>ทุนประกัน</p>
                                        <h6 class="text-success">200,000 บาท </h6>
                                        <hr class="border-list">
                                        <p>ไฟไหม้และโจรกรรม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>คุ้มครองน้ำท่วม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>ค่าเสียหายส่วนแรก</p>
                                        <h6>ไม่ต้องจ่าย</h6>
                                        <hr class="border-list">
                                        <p>ซ่อม</p>
                                        <h6 class="text-success">ห้าง</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingSix">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <p class="text-collapsed">ความคุ้มครองบุคคลภายนอก</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>คุ้มครองชีวิตต่อคน</p>
                                        <h6 class="text-success">1,000,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>คุ้มครองชีวิตต่อครั้ง</p>
                                        <h6>10,000,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ทรัพย์สินบุคคลภายนอก</p>
                                        <h6 class="text-success">1,500,000 บาท</h6>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>คุ้มครองชีวิตต่อคน</p>
                                        <h6>300,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>คุ้มครองชีวิตต่อครั้ง</p>
                                        <h6>10,000,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ทรัพย์สินบุคคลภายนอก</p>
                                        <h6>200,000 บาท</h6>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>คุ้มครองชีวิตต่อคน</p>
                                        <h6>300,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>คุ้มครองชีวิตต่อครั้ง</p>
                                        <h6>10,000,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ทรัพย์สินบุคคลภายนอก</p>
                                        <h6>200,000 บาท</h6>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center">
                                        <p>คุ้มครองชีวิตต่อคน</p>
                                        <h6>300,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>คุ้มครองชีวิตต่อครั้ง</p>
                                        <h6>10,000,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ทรัพย์สินบุคคลภายนอก</p>
                                        <h6>200,000 บาท</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingSeven">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <p class="text-collapsed">ความคุ้มครองเพิ่มเติม</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>อุบัติเหตุส่วนบุคคล</p>
                                        <h6 class="text-success">500,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ประกันตัวผู้ขับขี่</p>
                                        <h6 class="text-success">500,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ค่ารักษาพยาบาล</p>
                                        <h6 class="text-success">100,000 บาท</h6>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>อุบัติเหตุส่วนบุคคล</p>
                                        <h6>50,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ประกันตัวผู้ขับขี่</p>
                                        <h6>300,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ค่ารักษาพยาบาล</p>
                                        <h6>50,000 บาท</h6>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center border-right">
                                        <p>อุบัติเหตุส่วนบุคคล</p>
                                        <h6 class="text-success">500,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ประกันตัวผู้ขับขี่</p>
                                        <h6 class="text-success">500,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ค่ารักษาพยาบาล</p>
                                        <h6 class="text-success">100,000 บาท</h6>
                                    </div>
                                    <div class="col-3 pt-3 pb-3 text-center">
                                        <p>อุบัติเหตุส่วนบุคคล</p>
                                        <h6>50,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ประกันตัวผู้ขับขี่</p>
                                        <h6>300,000 บาท</h6>
                                        <hr class="border-list">
                                        <p>ค่ารักษาพยาบาล</p>
                                        <h6>50,000 บาท</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- desktop -->
<div id="desktop">
    <section class="pt-0">
        <div class="container pt-4">
            <div class="row">
                <?php if (count($compare_list) > 0) { ?>
                <?php foreach ($compare_list as $key => $data) { ?>
                <div class="col-md-3">
                    <div class="card rounded-0 border-yellow">
                        <div class="card-header rounded-0 border-bottom-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="float-left">
                                        <span><?php echo !empty($data->InsurerIcon) ? '<img src="' . $data->InsurerIcon . '" alt="">' : '' ; ?> <?php echo !empty($data->CatProductName) ? $data->CatProductName : ''; ?></span>
                                    </div>
                                    <div class="float-right">
                                        <a href="{{ Config::get('app.url_main') }}Compare/RemoveCompare/<?php echo $data->idx;?>" class="removeListCompare text-dark"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body fixed-150 rounded-0">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p>เริ่มต้นเพียง</p>
                                    <h4 class="text-center"><?php echo !empty($data->NetPremium) ? number_format($data->NetPremium,0).'<span class="text-18 text-dark font-weight-normal"> บาท / ปี</span>':''; ?></h4>
                                    <a href="<?php echo $link_product_detail; ?>/{{$category_id}}/{{$data->idx}}" class="btn btn-warning btn-theme">รายละเอียด</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } ?>
            </div>  
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingOne">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <p class="text-collapsed">ชื่อแบบประกัน</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <?php if (count($compare_list) > 0) { ?>
                                    <?php foreach ($compare_list as $key => $data) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p><?php echo !empty($data->CatProductName) ? $data->CatProductName : '-'; ?></p>
                                    </div>
                                    <?php } ?>
                                    <?php for($i=1; $i<=(4-count($compare_list)); $i++) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p>-</p>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
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
                            <p class="text-collapsed">โปรโมชั่น</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <?php if (count($compare_list) > 0) { ?>
                                    <?php foreach ($compare_list as $key => $data) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p><?php echo !empty($data->PromotionName) ? $data->PromotionName : '-'; ?></p>
                                    </div>
                                    <?php } ?>
                                    <?php for($i=1; $i<=(4-count($compare_list)); $i++) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p>-</p>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingThree">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p class="text-collapsed">รายละเอียดของแผนประกัน</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <?php if (count($compare_list) > 0) { ?>
                                    <?php foreach ($compare_list as $key => $data) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p>ประกันชั้น</p>
                                        <h3><?php echo !empty($data->ProductType) ? $data->ProductType : ''; ?></h3>
                                    </div>
                                    <?php } ?>
                                    <?php for($i=1; $i<=(4-count($compare_list)); $i++) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p>ประกันชั้น</p>
                                        <p>-</p>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
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
                            <p class="text-collapsed">ข้อมูลเพิ่มเติม</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapsefour" class="collapse show" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body">
                               <div class="row">
                                    <?php if (count($compare_list) > 0) { ?>
                                    <?php foreach ($compare_list as $key => $data) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p>ค่าเสียหายส่วนแรกหากไม่มีคู่กรณี</p>
                                        <h6><?php echo !empty($data->DeductAmt) ? number_format($data->DeductAmt,0) : '<span class="text-success">ไม่ต้องจ่าย</span>'; ?></h6>
                                        <hr class="border-list">
                                        <p>รายละเอียดความคุ้มครอง</p>
                                        <b>- คุ้มครอง 960 ชั่วโมง เปิด - ปิด   ความคุ้มครองได้ - จำนวนชั่วโมง 960 ชั่วโมงนี้ มีอายุ ใช้งาน 365 วัน นับจากวันเริ่มคุ้ม ครอง</b>
                                    </div>
                                    <?php } ?>
                                    <?php for($i=1; $i<=(4-count($compare_list)); $i++) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p>ค่าเสียหายส่วนแรกหากไม่มีคู่กรณี</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>รายละเอียดความคุ้มครอง</p>
                                        <b>-</b>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
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
                            <p class="text-collapsed">ความคุ้มครองรถยนต์เอาประกัน</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <?php if (count($compare_list) > 0) { ?>
                                    <?php 
                                    // Find Max
                                    $max = 0;
                                    foreach ($compare_list as $key => $data) { 
                                        if (!empty($data->SumInsured)) {
                                            $max = $data->SumInsured > $max ? $data->SumInsured : $max;
                                        }
                                    }
                                    ?>
                                    <?php foreach ($compare_list as $key => $data) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p>ทุนประกัน</p>
                                        <h6 class="<?php echo (!empty($data->SumInsured) && $max==$data->SumInsured) ? 'text-success' : ''; ?>"><?php echo !empty($data->SumInsured) ? number_format($data->SumInsured,0) : ''; ?> บาท </h6>
                                        <hr class="border-list">
                                        <p>ไฟไหม้และโจรกรรม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>คุ้มครองน้ำท่วม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>ค่าเสียหายส่วนแรก</p>
                                        <h6><?php echo !empty($data->DeductAmt) ? number_format($data->DeductAmt,0) : '<span class="text-success">ไม่ต้องจ่าย</span>'; ?></h6>
                                        <hr class="border-list">
                                        <p>ซ่อม</p>
                                        <h6 class="<?php echo (!empty($data->ClaimTypeValue) && $data->ClaimTypeValue==1) ? 'text-success': '' ;?>"><?php echo (!empty($data->ClaimTypeValue) && $data->ClaimTypeValue==1) ? 'ห้าง' : 'อู่'; ?></h6>
                                    </div>
                                    <?php } ?>
                                    <?php for($i=1; $i<=(4-count($compare_list)); $i++) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p>ทุนประกัน</p>
                                        <h6 class="">-</h6>
                                        <hr class="border-list">
                                        <p>ไฟไหม้และโจรกรรม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>คุ้มครองน้ำท่วม</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>ค่าเสียหายส่วนแรก</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>ซ่อม</p>
                                        <h6 class="">-</h6>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingSix">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <p class="text-collapsed">ความคุ้มครองบุคคลภายนอก</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <?php if (count($compare_list) > 0) { ?>
                                    <?php 
                                    // Find Max
                                    $max = 0; $max2 = 0; $max3 = 0;
                                    foreach ($compare_list as $key => $data) { 
                                        if (!empty($data->TPPI_P)) {
                                            $max = $data->TPPI_P > $max ? $data->TPPI_P : $max;
                                        }
                                        if (!empty($data->TPPI_C)) {
                                            $max2 = $data->TPPI_C > $max2 ? $data->TPPI_C : $max2;
                                        }
                                        if (!empty($data->TPPD)) {
                                            $max3 = $data->TPPD > $max3 ? $data->TPPD : $max3;
                                        }
                                    }
                                    ?>
                                    <?php foreach ($compare_list as $key => $data) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p>คุ้มครองชีวิตต่อคน</p>
                                        <h6 class="<?php echo (!empty($data->TPPI_P) && $max==$data->TPPI_P) ? 'text-success' : ''; ?>"><?php echo !empty($data->TPPI_P) ? number_format($data->TPPI_P,0) : '' ; ?> บาท</h6>
                                        <hr class="border-list">
                                        <p>คุ้มครองชีวิตต่อครั้ง</p>
                                        <h6 class="<?php echo (!empty($data->TPPI_C) && $max2==$data->TPPI_C) ? 'text-success' : ''; ?>"><?php echo !empty($data->TPPI_C) ? number_format($data->TPPI_C,0) : '' ; ?> บาท</h6>
                                        <hr class="border-list">
                                        <p>ทรัพย์สินบุคคลภายนอก</p>
                                        <h6 class="<?php echo (!empty($data->TPPD) && $max3==$data->TPPD) ? 'text-success' : ''; ?>"><?php echo !empty($data->TPPD) ? number_format($data->TPPD) : '' ; ?> บาท</h6>
                                    </div>
                                    <?php } ?>
                                    <?php for($i=1; $i<=(4-count($compare_list)); $i++) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                    <p>คุ้มครองชีวิตต่อคน</p>
                                    <h6 class="">-</h6>
                                    <hr class="border-list">
                                    <p>คุ้มครองชีวิตต่อครั้ง</p>
                                    <h6>-</h6>
                                    <hr class="border-list">
                                    <p>ทรัพย์สินบุคคลภายนอก</p>
                                    <h6 class="">-</h6>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card rounded-0 border-0">
                        <div class="card-header text-center bg-theme rounded-0 fixed-header" id="headingSeven">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <p class="text-collapsed">ความคุ้มครองเพิ่มเติม</p>
                            </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <?php if (count($compare_list) > 0) { ?>
                                    <?php 
                                    // Find Max
                                    $max = 0; $max2 = 0; $max3 = 0;
                                    foreach ($compare_list as $key => $data) { 
                                        if (!empty($data->PA_Driver)) {
                                            $max = $data->PA_Driver > $max ? $data->PA_Driver : $max;
                                        }
                                        if (!empty($data->Bail_Bond)) {
                                            $max2 = $data->Bail_Bond > $max2 ? $data->Bail_Bond : $max2;
                                        }
                                        if (!empty($data->MED)) {
                                            $max3 = $data->MED > $max3 ? $data->MED : $max3;
                                        }
                                    }
                                    ?>
                                    <?php foreach ($compare_list as $key => $data) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p>อุบัติเหตุส่วนบุคคล</p>
                                        <h6 class="<?php echo (!empty($data->PA_Driver) && $max==$data->PA_Driver) ? 'text-success' : ''; ?>"><?php echo !empty($data->PA_Driver) ? number_format($data->PA_Driver,0) : ''; ?> บาท</h6>
                                        <hr class="border-list">
                                        <p>ประกันตัวผู้ขับขี่</p>
                                        <h6 class="<?php echo (!empty($data->Bail_Bond) && $max2==$data->Bail_Bond) ? 'text-success' : ''; ?>"><?php echo !empty($data->Bail_Bond) ? number_format($data->Bail_Bond,0) : ''; ?> บาท</h6>
                                        <hr class="border-list">
                                        <p>ค่ารักษาพยาบาล</p>
                                        <h6 class="<?php echo (!empty($data->MED) && $max3==$data->MED) ? 'text-success' : ''; ?>"><?php echo !empty($data->MED) ? number_format($data->MED,0) : ''; ?> บาท</h6>
                                    </div>
                                    <?php } ?>
                                    <?php for($i=1; $i<=(4-count($compare_list)); $i++) { ?>
                                    <div class="col-md-3 pt-3 pb-3 text-center border-right">
                                        <p>อุบัติเหตุส่วนบุคคล</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>ประกันตัวผู้ขับขี่</p>
                                        <h6>-</h6>
                                        <hr class="border-list">
                                        <p>ค่ารักษาพยาบาล</p>
                                        <h6>-</h6>
                                    </div>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop



@section('script')
<style>
.select2-container { width:100% !important; }
.select2-container img { margin-right:2px; }
.select2-container--default .select2-selection--single { border:0; }
.select2-container--default .select2-selection--single .select2-selection__rendered { font-size:15px; padding:0; }
</style>
<script>
$(document).ready(function() {
    function formatState (state) {
      if (!state.id) {
        return state.text;
      }
      var baseUrl = "{{ Config::get('app.url_assets') }}assets/img/icon0";
      var $state = $(
        '<span><img src="' + baseUrl + state.element.value.toLowerCase() + '.png" class="img-flag" height="20" /> ' + state.text + '</span>'
      );
      return $state;
    }
    $('.select2').select2({templateResult: formatState, templateSelection: formatState});
});
</script>
@stop 