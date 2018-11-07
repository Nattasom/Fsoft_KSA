@extends('layouts.default')
@section('content')

<!-- <div class="container-fluid px-0">
    <div class="owl-carousel owl-theme" id="owlhome">
        <div class="item d-block d-md-none">
            <a href="{{ Config::get('app.url_main') }}Compare"><img src="{{ Config::get('app.url_assets') }}assets/img/herobanner_top.png" alt="banner"></a>
        </div>
        <div class="item d-block d-md-none">
            <a href="{{ Config::get('app.url_main') }}Compare"><img src="{{ Config::get('app.url_assets') }}assets/img/herobanner_top.png" alt="banner"></a>
        </div>
        <div class="item d-block d-md-none">
            <a href="{{ Config::get('app.url_main') }}Compare"><img src="{{ Config::get('app.url_assets') }}assets/img/herobanner_top.png" alt="banner"></a>
        </div>
    </div>
    <div class="owl-carousel owl-theme" id="owlhome-pc">
        <div class="item d-none d-md-block">
            <a href="{{ Config::get('app.url_main') }}Compare"><img src="{{ Config::get('app.url_assets') }}assets/img/exam/jpg-4.jpg" alt="banner"></a>
        </div>
        <div class="item d-none d-md-block">
            <a href="{{ Config::get('app.url_main') }}Compare"><img src="{{ Config::get('app.url_assets') }}assets/img/exam/jpg-4.jpg" alt="banner"></a>
        </div>
        <div class="item d-none d-md-block">
            <a href="{{ Config::get('app.url_main') }}Compare"><img src="{{ Config::get('app.url_assets') }}assets/img/exam/jpg-4.jpg" alt="banner"></a>
        </div>
    </div>

    <div class="owl-carousel owl-theme" id="owlhome2">
        <div class="item">
            <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/banner_suggest.png" alt="banner"></a>
        </div>
    </div>
    <div class="owl-carousel owl-theme" id="owlhome2-pc">
        <div class="item">
            <a href="#"><img src="{{ Config::get('app.url_assets') }}assets/img/banner_suggest2.png" alt="banner"></a>
        </div>
    </div>

</div>


<hr> -->
<div id="box__home" >
    <div class="slider__keyvisual">
        <div class="slider-1">
            <div class="item">
                <a href="{{ Config::get('app.url_main') }}Custom" class="info">
                    <img class="visible__mobile" src="{{ Config::get('app.url_assets') }}assets/img/herobanner_top.png" alt="">
                    <!-- <img class="visible__desktop" src="{{ Config::get('app.url_assets') }}assets/img/exam/jpg-4.jpg" alt=""> -->
                    <img class="visible__desktop" src="<?php echo $banners->banner_1; ?>" alt="">
                </a>
            </div>
            <div class="item">
                <a href="{{ Config::get('app.url_main') }}Custom" class="info">
                    <img class="visible__mobile" src="{{ Config::get('app.url_assets') }}assets/img/herobanner_top.png" alt="">
                    <img class="visible__desktop" src="{{ Config::get('app.url_assets') }}assets/img/exam/jpg-4.jpg" alt="">
                </a>
            </div>
            <div class="item">
                <a href="{{ Config::get('app.url_main') }}Custom" class="info">
                    <img class="visible__mobile" src="{{ Config::get('app.url_assets') }}assets/img/herobanner_top.png" alt="">
                    <img class="visible__desktop" src="{{ Config::get('app.url_assets') }}assets/img/exam/jpg-4.jpg" alt="">
                </a>
            </div>
        </div>

        <div class="slider-2">
            <div class="item">
                <a href="#" class="info">
                    <img class="visible__mobile" src="{{ Config::get('app.url_assets') }}assets/img/banner_suggest.png" alt="">
                    <!-- <img class="visible__desktop" src="{{ Config::get('app.url_assets') }}assets/img/exam/jpg-5.jpg" alt=""> -->
                    <img class="visible__desktop" src="<?php echo $banners->banner_2; ?>" alt="">
                </a>
            </div>
        </div>

        <div class="scroll-down"><a class="link">scroll down</a></div>
    </div>

    <div class="box__recommend-insurance">
        <div class="container">
            <p class="head__info">แนะนำประกันโดย กรุงศรี ออโต้ อินชัวรันส์ โบรกเกอร์</p>
            <div class="tab__info">
                <ul class="list__info">
                    <?php if (count($categories) > 0) { ?>
                    <?php foreach ($categories as $category) { ?>
                    <li>
                        <a href="#insurance-banner-<?php echo $category->id; ?>">
                            <span class="thumb"><?php echo !empty($category->icon) ? '<img src="'.$category->icon.'" alt="">' : '';?></span>
                            <span class="text"><?php echo $category->cat_name; ?></span>
                        </a>
                    </li>
                    <?php } ?>
                    <?php } ?>
                </ul>
                
                <?php if (count($categories) > 0) { ?>
                <?php foreach ($categories as $category) { ?>
                <div class="" id="insurance-banner-<?php echo $category->id; ?>">
                    <p class="head__info">
                        <?php echo $category->cat_name; ?>
                    </p>
                    <?php echo (count($category->products) == 0) ? '<p class="text-center py-5">ไม่พบข้อมูล</p>' : ''; ?>
                    <div class="owl-carousel owl-theme owl-home" id="newslide<?php echo $category->id;?>">
                        <?php foreach ($category->products as $key => $data) {  ?>
                        <div class="item">
                        <div class="contentDiv  px-1">
                            <div class="card rounded-0 mb-4 card-item">
                                <div class="overlay">
                                    <?php //if ((int)$data->PromotionDiscountAmt > 0) { ?>
                                    <!-- <img src="{{ Config::get('app.url_assets') }}assets/img/special.png" style="height:60px; width: auto;" class="mr-1" alt=""> -->
                                    <?php //} ?>
                                </div>
                                <div class="card-header rounded-0">
                                    <p><img src="<?php echo $data->InsurerIcon;?>" style="height:30px; width: auto; margin-top:-2px;" alt="" class="d-inline-block"> <?php echo $data->CatProductName; ?></p>
                                </div>
                                <div class="card-body rounded-0 pt-4 pb-2">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <img src="<?php echo $data->Thumbnail;?>" alt="" class="img-fluid">
                                            <p class="text-header-card my-3 px-3"><h5>เริ่มต้นเพียง</h5></p>
                                            <h2 class="font-weight-bold text-50  text-red"><?php echo $data->NetPremium!=''?number_format($data->NetPremium,0).'<span class="text-18 text-dark font-weight-normal"> บาท / ปี</span>':''; ?> </h2>
                                            <div class="mt-2">
                                                <a href="<?php echo $link_product_detail; ?>/{{$category->id}}/{{$data->idx}}" class="text-card">อ่านรายละเอียด <i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer rounded-0 bg-card-footer px-2">
                                    <div class="row">
                                        <div class="col-7">
                                            <p class="text-white mb-2">ทุนประกัน</p>
                                        </div>
                                        <div class="col-5 text-right">
                                            <p class="text-white mb-2"><?php echo number_format($data->SumInsured,0); ?> บ.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <p class="text-white mb-2">ค่าเสียหายส่วนแรก</p>
                                        </div>
                                        <div class="col-5 text-right">
                                            <p class="text-white mb-2"><?php echo !empty($data->DeductAmt) ? number_format($data->DeductAmt,0) : 'ไม่ต้องจ่าย'; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <p class="text-white mb-2">ซ่อม</p>
                                        </div>
                                        <div class="col-5 text-right">
                                            <p class="text-white mb-2"><?php echo $data->ClaimTypeValue == '01' ? 'อู่่' : 'ห้าง'; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <p class="text-white mb-2">ทรัพย์สินบุคคลภายนอก</p>
                                        </div>
                                        <div class="col-5 text-right">
                                            <p class="text-white mb-2"><?php echo number_format($data->TPPD,0); ?> บ.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer rounded-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input cbCompare" 
                                                data-title="<?php echo $data->CatProductName; ?>" 
                                                data-caption="" 
                                                data-price="<?php echo $data->NetPremium;?>" 
                                                data-catid="<?php echo $data->idx;?>"
                                                data-all="<?php echo urlencode(json_encode($data));?>"
                                                id="checkboxCompare<?php echo $data->CatProductListId;?>">
                                                <label class="form-check-label" for="checkboxCompare<?php echo $data->CatProductListId;?>">เปรียบเทียบ</label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a data-toggle="modal" data-target="#interest" class="btn btn-warning btn-theme" 
                                            data-title="<?php echo $data->CatProductName; ?>" 
                                            data-caption="" 
                                            data-price="<?php echo $data->NetPremium;?>" 
                                            data-producttype="<?php echo $data->ProductType; ?>" 
                                            data-icon="<?php echo $data->InsurerIcon;?>" 
                                            data-makevalue="<?php echo $data->MakeValue; ?>"
                                            data-modelvalue="<?php echo $data->ModelValue; ?>"
                                            data-motortype="<?php echo $data->MotorType; ?>"
                                            data-seat="<?php echo $data->Seat; ?>"
                                            data-cc="<?php echo $data->CC;?>"
                                            >สนใจประกันนี้</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <?php } ?>
                    </div>                

                    <!-- <div id="contentAjax"></div> -->
                    <div class="clearfix"></div>
                    <div class="row ">
                        <div class="col-12">
                            <div class="more-info"><button type="button" data-categoryid="<?php echo $category->id;?>" class="lazyLoad btn btn-brown">แนะนำประกันรถเพิ่มเติม &nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></button></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } ?>

            
            </div>

        </div>
    </div>

    <div class="pic-good-choice">
        <img class="visible__mobile" src="{{ Config::get('app.url_assets') }}assets/img/bannerdown.png" alt="">
        <img class="visible__desktop" src="{{ Config::get('app.url_assets') }}assets/img/bannerdownpc.png" alt="">

        <div class="container">
            <div class="text-center py-4 px-4 afferminate">
                <h6>ร่วมกับพันธมิตร ประกันภัยชั้นนำ</h6>
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2"><img src="{{ Config::get('app.url_assets') }}assets/img/Groupinsu.png" alt="" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="box__info-interesting pt-4">
        <div class="container">
            <p class="head__info"><span>เรื่องรถน่ารู้</span></p>
            <ul class="list px-0">
                <li class="">
                    <a href="#">
                        <p class="pic"><img src="{{ Config::get('app.url_assets') }}assets/img/general/keyvisual-2.jpg" alt=""></p>
                        <p class="description">10 สิ่งเกี่ยวกับรถที่ควรเช็คให้เป็นนิสัย Krungsri Auto เชื่อว่า ไม่ว่าใครก็คง อยากให้รถสุดรักอยู่กับเราไปนานๆ</p>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <p class="pic"><img src="{{ Config::get('app.url_assets') }}assets/img/general/keyvisual-3.jpg" alt=""></p>
                        <p class="description">มือใหม่ต้องรู้ สุดยอดเคล็ดลับเรื่องรถยนต์ที่ควรจำ ในการใช้งานรถยนต์นั้น เราก็ควรรอบรู้เรื่องรถยนต์</p>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <p class="pic"><img src="{{ Config::get('app.url_assets') }}assets/img/shutterstock-264806741.png" alt=""></p>
                        <p class="description">8 ระบบของเหลวในรถ ที่ควรหมั่นตรวจเช็คเป็นประจำยืดอายุการใช้งานของรถให้ยาวนาน ระบบของเหลวในรถ</p>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <p class="pic"><img src="{{ Config::get('app.url_assets') }}assets/img/ss3.png" alt=""></p>
                        <p class="description">ท่า เข็นรถ ที่ถูกวิธีแบบที่ไม่ต้องออกแรง ทุกครั้งเวลาที่เจอรถจอดขวาง ตามสถานที่จอดรถต่างๆ</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


@stop



@section('script')
<script>
$(document).ready(function() {
    $('.owl-home').owlCarousel({
        loop:false,
        margin:10,
        responsiveClass:true,
        nav: false,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            }
        }
    });
}); 
</script>
<script>
jQuery(document).ready(function($) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    var w = $(window).width();


    $('#modal-advance-filter .modal-dialog .modal-content').css('min-height', ($(window).outerHeight() - 80)+'px');

    var count = $('#newslide1 .item:not(.new)').length;

    $('.lazyLoad').click(function(event) {
        var catid = $(this).data('categoryid');

        var pad = 0;
        if (w > 768) {
            pad = 4;
        }

        var append = '';
        var val_lang = 'th';
        var val_start = 0;
        var val_limit = 3;
        var val_id = catid;

        $('#newslide'+catid).trigger('destroy.owl.carousel');

        val_start = parseInt($('#newslide'+catid+' .item').length);



        $.ajax({
            // url: 'http://atc-th.com/krungsri/ksa-admin/api/get_home_cat_list',
            headers: {'X-CSRF-TOKEN': CSRF_TOKEN },
            url: '<?php echo $link_ajax;?>',
            type: 'POST',
            dataType: 'json',
            data: {lang: val_lang, id: val_id, start: val_start, limit: val_limit},
            success: function(data) {
                // console.log(data);
                if (data.num_rows > 0) {
                    var jsonAll = encodeURIComponent(JSON.stringify(data.list[0]));
                    $.each(data.list, function(index, val) {
                         append += '<div class="item col-12 col-sm-4 float-left" style="padding:0px '+pad+'px;min-height:610px;">'+
                        '<div class="contentDiv  px-1">'+
                        '    <div class="card rounded-0 mb-4 card-item">'+
                        '        <div class="overlay">'+
                        '            <img src="/krungsri/resources/assets/img/special.png" style="height:60px; width: auto;" class="mr-1" alt="">'+
                        '        </div>'+
                        '        <div class="card-header rounded-0">'+
                        '            <p><img src="'+val.InsurerIcon+'" style="height:30px; width: auto; margin-top:-2px;" alt="" class="d-inline-block">  '+val.CatProductName+'</p>'+
                        '        </div>'+
                        '        <div class="card-body rounded-0 pt-4 pb-2">'+
                        '            <div class="row">'+
                        '                <div class="col-md-12 text-center">'+
                        '                    <img src="'+val.Thumbnail+'" alt="" class="img-fluid">'+
                        '                    <p class="text-header-card my-3 px-3"></p><h5>เริ่มต้น</h5><p></p>'+
                        '                    <h2 class="font-weight-bold text-50  text-red">'+addCommas(val.NetPremium)+' <span class="text-18 text-dark font-weight-normal">บาท / ปี</span> </h2>'+
                        '                    <div class="mt-2">'+
                        '                        <a href="#" class="text-card">อ่านรายละเอียด <i class="fa fa-chevron-right"></i></a>'+
                        '                    </div>'+
                        '                </div>'+
                        '            </div>'+
                        '        </div>'+
                        '        <div class="card-footer rounded-0 bg-card-footer px-2">'+
                        '            <div class="row">'+
                        '                <div class="col-7">'+
                        '                    <p class="text-white mb-2">ทุนประกัน</p>'+
                        '                </div>'+
                        '                <div class="col-5 text-right">'+
                        '                    <p class="text-white mb-2">'+addCommas(val.SumInsured)+' บ.</p>'+
                        '                </div>'+
                        '            </div>'+
                        '            <div class="row">'+
                        '                <div class="col-7">'+
                        '                    <p class="text-white mb-2">ค่าเสียหายส่วนแรก</p>'+
                        '                </div>'+
                        '                <div class="col-5 text-right">'+
                        '                    <p class="text-white mb-2">'+(val.DeductAmt!=null?addCommas(val.DeductAmt):'ไม่ต้องจ่าย')+'</p>'+
                        '                </div>'+
                        '            </div>'+
                        '            <div class="row">'+
                        '                <div class="col-7">'+
                        '                    <p class="text-white mb-2">ซ่อม</p>'+
                        '                </div>'+
                        '                <div class="col-5 text-right">'+
                        '                    <p class="text-white mb-2">'+(parseInt(val.ClaimTypeValue)== 1 ? 'อู่':'ห้าง')+'</p>'+
                        '                </div>'+
                        '            </div>'+
                        '            <div class="row">'+
                        '                <div class="col-7">'+
                        '                    <p class="text-white mb-2">ทรัพย์สินบุคคลภายนอก</p>'+
                        '                </div>'+
                        '                <div class="col-5 text-right">'+
                        '                    <p class="text-white mb-2">'+addCommas(val.TPPD)+' บ.</p>'+
                        '                </div>'+
                        '            </div>'+
                        '        </div>'+
                        '        <div class="card-footer rounded-0">'+
                        '            <div class="row">'+
                        '                <div class="col-6">'+
                        '                    <div class="form-check">'+
                        '                        <input type="checkbox" class="form-check-input cbCompare" '+
                        '                       data-title="'+val.CatProductName+'" '+
                        '                       data-caption="" '+
                        '                       data-price="'+val.NetPremium+'" '+
                        '                       data-catid="'+val.idx+'"'+
                        '                       data-all="'+jsonAll+'"'+
                        '                       id="checkboxCompare'+val.CatProductListId+'">'+
                        '                        <label class="form-check-label" for="checkboxCompare'+val.CatProductListId+'">เปรียบเทียบ</label>'+
                        '                    </div>'+
                        '                </div>'+
                        '                <div class="col-6 text-right">'+
                        '                    <a data-toggle="modal" data-target="#interest" class="btn btn-warning btn-theme"'+
                        '                       data-title="'+val.CatProductName+'"'+
                        '                       data-caption=""'+
                        '                       data-price="'+val.NetPremium+'"'+
                        '                       data-producttype="'+val.ProductType+'"'+
                        '                       data-icon="'+val.InsurerIcon+'"'+
                        '                       data-makevalue="'+val.MakeValue+'"'+
                        '                       data-modelvalue="'+val.ModelValue+'"'+
                        '                       data-motortype="'+val.MotorType+'"'+
                        '                       data-seat="'+val.Seat+'"'+
                        '                       data-cc="'+val.CC+'"'+
                        '                     >สนใจประกันนี้</a>'+
                        '                </div>'+
                        '            </div>'+
                        '        </div>'+
                        '    </div>'+
                        '</div>'+
                        '</div>';
                    });
                    $('#newslide'+catid).append(append).addClass('row mx-0');
                    $('#newslide'+catid+' .item').addClass('col-12 col-sm-4 float-left').css({'padding': '0 '+pad+'px', 'min-height': '610px'});
                }
                else {
                    console.log('ไม่พบข้อมูลเพิ่มเติม');
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