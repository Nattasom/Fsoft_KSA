<!doctype html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}" class="no-js">
    <head> 
        @include('includes.head')
    </head>
  <body>
      <!-- BEGIN HEADER -->
    @include('includes.header')
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">    
        <!-- BEGIN SIDEBAR -->
        @include('includes.sidebar')
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    @include('includes.footer')
   <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    @include('includes.script')
    <!-- END CORE PLUGINS -->
    @yield('script')


    <div id="compare_list" class="bg-card-footer">
        <a class="close-panel" data-id="'+arr.id+'"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="container">
        <div class="showlist">
            <div class="row">
                <div class="col-6 col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <p>ทิพยประกันภัย <a href="" class="float-right"><i class="fa fa-times" aria-hidden="true"></i></a></p>
                            <small>ประกันภัยรถยนต์   3+</small>
                            <p class="price text-right">3,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <p>ทิพยประกันภัย <a href="" class="float-right"><i class="fa fa-times" aria-hidden="true"></i></a></p>
                            <small>ประกันภัยรถยนต์   3+</small>
                            <p class="price text-right">3,000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <p>ทิพยประกันภัย <a href="" class="float-right"><i class="fa fa-times" aria-hidden="true"></i></a></p>
                            <small>ประกันภัยรถยนต์   3+</small>
                            <p class="price text-right">3,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="card none">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    
        <input type="hidden" id="compare_list_id" value="">
    
        <div class="row">
            <div class="col-12 text-center">
                <a id="refreshCompare" class="text-white float-left d-none d-sm-block"><img src="{{ Config::get('app.url_assets') }}assets/img/refresh.png" alt="" height="15"> เริ่มใหม่</a>
                <button type="button" id="confirmCompare" class="btn btn-warning btn-theme">เปรียบเทียบ</button>
            </div>
        </div>
        </div>

    </div>




<!-- Modal -->
<div class="modal fade" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center py-4">
        <p style="font-size: 18px; line-height: 25px;">ลูกค้ากรุงศรีออโต้<br>สามารถต่อประกันผ่านเว็บไซต์ได้้เร็วๆ นี้</p>
        <button type="button" class="btn btn-yellow btn-sm mt-3" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->


  </body>
</html>