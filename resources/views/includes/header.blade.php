    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF7XQPM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    
    <!-- <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white" id="mainnav">
        <div class="container position-relative">
            <a class="navbar-brand" href="{{ Config::get('app.url_main') }}"><img src="{{ Config::get('app.url_assets') }}assets/img/icon/logo__krungsri.png" height="100" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{ Config::get('app.url_assets') }}assets/img/barnav.png" alt="bar" height="20">
            </button>

            <div class="collapse navbar-collapse position-absolute" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link d-inline-block" href="#">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-inline-block" href="#">แนะนำประกันรถโดยกรุงศรี ออโต้ อินชัวรันส์ โบรกเกอร์</a>
                    </li>
                </ul>
            </div>

            <span class="navbar-text position-absolute" id="navbarSupportedBtn">
                <a class="btn btn-primary px-4 py-2" data-toggle="modal" data-target="#modal-alert">ลูกค้ากรุงศรีออโต้ ต่อประกัน</a>
            </span>
        </div>
    </nav>    -->
<div id="header">
    <div class="container">
        
        <div id="nav__main">
            <a class="menu-toggle">
                <img src="{{ Config::get('app.url_assets') }}assets/img/btnmenu.png" alt="">
            </a>
            
            <div class="detail">
                <div class="scroll-pane">
                    <div class="box__description">
                        <a class="float-right mb-2 d-block d-sm-none" id="closeNav"><img src="{{ Config::get('app.url_assets') }}assets/img/close.png" alt="" height="20"></a>
                        <ul class="list__main mt-4">

                            <li><a href="{{ url('/Home') }}">หน้าแรก</a></li>
                            <li><a href="{{ url('/Custom') }}">เลือกประกันรถตามงบ</a></li>
                            <li><a href="{{url('/Home')}}#scroll-down" >แนะนำประกันรถ</a></li>
                            <li><a href="#" class="">เกี่ยวกับ กรุงศรี ออโต้ อินชัวรันส์ โบรกเกอร์</a></li>

                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="logo__krungsri" ><a href="{{ url('/Home') }}">Krungsri</a></div>
        <p class="call-center">
            <!-- <button type="button" class="btn btn-yellow btn-text-xs" data-toggle="modal" data-target="#modal-reinsu">ลูกค้า กรุงศรี ออโต้ ต่อประกัน</button> -->
            <!-- <a href="http://bit.ly/2qS0rA9" target="_blank" class="btn btn-yellow btn-text-xs" >ลูกค้า กรุงศรี ออโต้ ต่อประกัน</a> -->
            <a href="{{url('/Signin')}}"  class="btn btn-yellow btn-text-xs" >ลูกค้า กรุงศรี ออโต้ ต่อประกัน</a>
            
        </p>
    </div>
</div>
