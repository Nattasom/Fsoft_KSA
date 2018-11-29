<div id="footer">
    <div class="container">
        <div class="info py-5 d-block d-sm-none">
            <div class="row no-gutters">
                <div class="col-12 col-lg-4">
                    <div class="box__e-news">
                        <div class="row mb-3">
                            <div class="col-6 text-right"><h5 class="text-white mb-0 py-1 text-20">พูดคุยกับเรา</h5></div>
                            <div class="col-4 text-left pl-0"><img src="{{ Config::Get('app.url_assets') }}assets/img/line_ic.png" alt="" class="" height="35" style="max-width: initial;"></div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center iconsocial">
                    <a href="#" class="mr-1 d-inline-block align-top"><img src="{{ Config::Get('app.url_assets') }}assets/img/iconfacebook.png" alt="" ></a>
                    <a href="#" class="mr-1 d-inline-block align-top"><img src="{{ Config::Get('app.url_assets') }}assets/img/iconyoutube.png" alt="" ></a>
                    
                    <div class="ml-1 d-inline-block">
                        <i class="fa fa-phone text-white fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="d-inline-block ml-1 align-bottom">
                        <p class="text-left">
                            <span class="text-white">CALL CENTER</span><br>
                            <h4 class="text-white mb-0 font-weight-bold">0-2828-7888</h4>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <p class=" mt-3 mb-1" style="color:#DCDCDC;">เกี่ยวกับ กรุงศรี ออโต้ อินชัวรันส์ โบรกเกอร์</p>
                </div>
            </div>
        </div>

        <div class="info py-5 d-none d-sm-block">
                <div class="row">
                    <div class="col-6 text-right">
                        <ul class="list-inline mt-4">
                            <li class="d-inline-block"><a href="#" class="text-white px-2">เลือกประกันรถตามงบ</a></li>
                            <li class="d-inline-block"><a href="#" class="text-white px-2">แนะนำประกันรถ</a></li>
                            <li class="d-inline-block"><a href="#" class="text-white px-2">เกี่ยวกับ กรุงศรี ออโต้ อินชัวรันส์ โบรกเกอร์</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <p class="text-white text-18 mb-2">พูดคุยกับเรา</p>
                                <img src="{{ Config::Get('app.url_assets') }}assets/img/line_ic.png" alt="" class="mr-1" height="35" style="max-width: initial;">
                                <a href="#" class="mx-1 d-inline-block align-top"><img src="{{ Config::Get('app.url_assets') }}assets/img/iconfacebook.png" alt="" height="35" ></a>
                                <a href="#" class="mx-1 d-inline-block align-top"><img src="{{ Config::Get('app.url_assets') }}assets/img/iconyoutube.png" alt="" height="35" ></a>
                            </div>
                            <div class="col-6 pl-0">
                                <p class="text-white text-16 mb-0 ml-4">CALL CENTER</p>
                                <p class="text-white font-weight-bold text-22"><i class="fa fa-phone text-white" aria-hidden="true"></i> 02-828-7888</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        
        <p class="copyright">
            <small>© สงวนลิขสิทธิ์ 2552-2561 บริษัท อยุธยา แคปปิตอล ออโต้ ลีส จำกัด (มหาชน)</small>
        </p>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="interest" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body pb-0">
        <div class="row mb-3">
            <div class="col-2"><img src="" id="interest-icon" alt="" class="img-fluid"></div>
            <div class="col-10 pl-0"><h4 id="interest-title"></h4></div>
        </div>
        <div class="row mb-2">
            <div class="col"><p id="interest-caption">ประกันเปิด-ปิด ประเภท 1 ทุนประกัน 300,000</p></div>
        </div>
        <div class="row mb-4">
            <div class="col-4"><button class="btn btn-gray btn-sm" type="button">ชั้น <span id="interest-producttype">1</span></button></div>
            <div class="col-8 text-right"><h3 class="d-inline-block" id="interest-price">4,990</h3> <span class="d-inline-block">บาท/ปี</span></div>
        </div>
        <div class="row bg-gray py-4">
            <div class="col-12 text-center"><p class="mb-3"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;รายละเอียดในการติดต่อกลับ</p></div>
            <div class="col-12">
                <form>
                    <div class="form-group row mb-1">
                        <label for="" class="col-4 col-form-label text-right">ชื่อ นามสกุล</label>
                        <div class="col-8">
                            <input type="text" name="name" class="form-control form-control-sm" id="interest-name" value="" placeholder="จำลอง ตัวอย่าง" required>
                        </div>
                    </div>
                    <div class="form-group row mb-1">
                        <label for="" class="col-4 col-form-label text-right">โทรศัพท์ติดต่อ</label>
                        <div class="col-8">
                            <input type="text" name="tel" class="form-control form-control-sm" id="interest-tel" value="" placeholder="088 888 8888" required>
                        </div>
                    </div>
                    <div class="form-group row mb-1">
                        <label for="" class="col-4 col-form-label text-right">อีเมล</label>
                        <div class="col-8">
                            <input type="text" name="email" class="form-control form-control-sm" id="interest-email" value="" placeholder="join@email.com" >
                        </div>
                    </div>
                    <div class="form-group row mb-1">
                        <label for="" class="col-4 col-form-label text-right">วัน เวลา ติดต่อกลับ</label>
                        <div class="col-4 pr-0">
                            <div class="boxdatepicker">
                            <input type="text" name="callback_date" id="interest-callback_date" class="form-control-sm form-control datepicker" placeholder="dd/mm/yyyy" required="required">
                            </div>
                            <!-- <?php  
                            $begin = time();
                            $end = strtotime('+14day');
                            ?>
                            <select name="callback_date" id="interest-callback_date" class="form-control form-control-sm datepicker" required>
                                <?php for ($i = $begin; $i <= $end; $i = $i + 86400) { ?>
                                <option value="<?php echo date('Y-m-d', $i); ?>"><?php echo date('D j M y', $i); ?></option>
                                <?php } ?>
                            </select> -->
                        </div>
                        <div class="col-4">
                            <select name="callback_time" id="interest-callback_time" class="form-control form-control-sm" required>
                                <?php for ($i=9; $i<=23; $i++) { ?>
                                <option value="<?php echo sprintf('%02d', $i).':00' ?>"><?php echo sprintf('%02d', $i).'.00-'.sprintf('%02d', $i+1).'.00' ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-1">
                        <label for="" class="col-4 col-form-label text-right">รายละเอียดเพิ่มเติม</label>
                        <div class="col-8">
                            <textarea name="remark" id="interest-remark" cols="30" rows="3" class="form-control form-control-sm" placeholder="ข้อมูลเพิ่มเติม"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="make" id="interest-makevalue" value="">
                    <input type="hidden" name="model" id="interest-modelvalue" value="">
                    <input type="hidden" name="motor_type" id="interest-motortype" value="">
                    <input type="hidden" name="seat" id="interest-seat" value="">
                    <input type="hidden" name="cc" id="interest-cc" value="">
                    <div class="form-group row mb-1 mt-2">
                        <div class="col-8 offset-4"><button type="button" id="btn-interest" class="btn btn-yellow btn-sm">ยืนยันข้อมูล</button></div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="ModalFilterRange" tabindex="-1" role="dialog" aria-labelledby="ModalFilterRangeLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="title"></label>
            <input type="number" class="form-control" id="" placeholder="" value="">
            <input type="hidden" id="filter-form" value="">
            <input type="hidden" id="filter-input" value="">
            <input type="hidden" id="filter-rangeid" value="">
            <input type="hidden" id="filter-rangetype" value="">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="button" id="submitFilterRange" class="btn btn-sm btn-primary">ตกลง</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-reinsu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center py-4 px-3">
        <p class="text-18">ลูกค้า กรุงศรี ออโต้<br>สามารถต่อประกันผ่านเว็บไซต์ได้้เร็วๆ นี้</p>
        <button type="button" class="btn btn-yellow btn-sm mt-2 mb-2 py-2 px-3" data-dismiss="modal">ตกลง</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center py-4 px-3">
        <p class="text-18 msg-alert"></p>
        <button type="button" class="btn btn-yellow btn-sm mt-2 mb-2 py-2 px-3" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>


<input type="hidden" id="url_main" value="{{ Config::get('app.url_main') }}">
