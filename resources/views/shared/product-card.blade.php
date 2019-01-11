<div class="col-md-4 col-xs-12 contentDiv px-1" data-idx="[idx]">
    <div class="card rounded-0 mb-4 card-item">
        <div class="overlay">
            [promotion_icon]
        </div>
        <div class="card-header rounded-0">
        <!-- <img src="{{ Config::get('app.url_assets') }}assets/img/" style="height:30px;margin-top:-2px;" alt=""> -->
            <p>[head_icon] [title_name]</p>
        </div>
        <div class="card-body rounded-0 pt-4 pb-2">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="text-header-card mb-3 px-4">[caption]</p>
                    <h2 class="font-weight-bold text-40">[premium] <span class="text-18 font-weight-normal">บาท / ปี</span></h2>
                    [type_tag]
                    [sperate_tag]
                    [promotion_tag]
                    <!-- 
                    <a href="#" class="btn btn-default mx-0 btn-theme3">ชั้น 1</a>
                    
                    
                    <a href="#" class="btn btn-default mx-0 btn-theme3">ผ่อน 10 ด.</a>
                   
                    
                    <a href="#" class="btn btn-default mx-0 btn-theme3">โปรโมชั่น</a>
                    -->
                    <div class="mt-4">
                        <a href="<?php echo $link_detail; ?>/[idx]" class="text-card">อ่านรายละเอียด <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer rounded-0 bg-card-footer px-2">
            <div class="row">
                <div class="col-7">
                    <p class="text-white mb-2">ทุนประกัน
                        <a href="javascript:;" data-toggle="tooltip" data-html="true" title="@lang('info.insurance')">
                            <img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="information" >
                        </a>
                    </p>
                </div>
                <div class="col-5 text-right">
                    <p class="text-white mb-2">[suminsured]</p>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <p class="text-white mb-2">ค่าเสียหายส่วนแรก
                        <a href="javascript:;" data-toggle="tooltip" data-html="true" title="@lang('info.firstdamage')">
                            <img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="information" >
                        </a>
                    </p>
                </div>
                <div class="col-5 text-right">
                    <p class="text-white mb-2">[deduct]</p>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <p class="text-white mb-2">ซ่อม
                        <a href="javascript:;" data-toggle="tooltip" data-html="true" title="@lang('info.repair')">
                            <img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="information" >
                        </a>
                    </p>
                </div>
                <div class="col-5 text-right">
                    <p class="text-white mb-2">[claim_type]</p>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <p class="text-white mb-2 text-xs">ทรัพย์สินบุคคลภายนอก
                        <a href="javascript:;" data-toggle="tooltip" data-html="true" title="@lang('info.thirdpartyproperty')">
                            <img src="{{ Config::get('app.url_assets') }}assets/img/info.png" alt="information" >
                        </a>
                    </p>
                </div>
                <div class="col-5 text-right">
                    <p class="text-white mb-2">[tppd]</p>
                </div>
            </div>
        </div>
        <div class="card-footer rounded-0">
            <div class="row">
                <div class="col-6">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input cbCompare" 
                        data-title="[title_name]" 
                        data-caption="[caption]" 
                        data-price="[premium_val]" 
                        data-catid="[idx]"
                        data-all="[json]" 
                        id="checkboxCompare[idx]">
                        <!--  // mg add data-all -->
                        <label class="form-check-label" for="checkboxCompare[idx]">เปรียบเทียบ</label>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <a data-toggle="modal" data-target="#interest" class="btn btn-warning btn-theme"
                    data-title="[title_name]" 
                    data-caption="[caption]" 
                    data-price="[premium_val]" 
                    data-producttype="[product_type]"
                    data-icon="[ins_icon]" 
                    data-makevalue="[make_value]"
                    data-modelvalue="[model_value]"
                    data-motortype="[motor_type]"
                    data-seat="[seat]"
                    data-cc="[car_cc]"
                    >สนใจประกันนี้</a>
                </div>
            </div>
        </div>
    </div>
</div>