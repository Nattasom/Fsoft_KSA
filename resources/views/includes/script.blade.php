<script src="{{ Config::get('app.url_assets') }}assets/js/jquery-3.2.1.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/popper.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/scrollpane/jquery.jscrollpane.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/scrollpane/jquery.mousewheel.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/slick/slick.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/jquery-ui.tabs.min.js"></script>
<!-- <script src="{{ Config::get('app.url_assets') }}assets/chosen_v1.8.7/chosen.jquery.js"></script> -->
<script src="{{ Config::get('app.url_assets') }}assets/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/common.js"></script>

<!-- Jquery Rangeslider  -->
<script src="{{ Config::get('app.url_assets') }}assets/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/jquerytouchpunch.js"></script>
<!-- <script src="{{ Config::get('app.url_assets') }}assets/rangeslider/rangeslider.min.js"></script> -->
<!-- <script src="{{ Config::get('app.url_assets') }}assets/jqueryrange/multirange.js"></script> -->

<!-- Owlcarousel -->
<script src="{{ Config::get('app.url_assets') }}assets/owlcarousel2/owl.carousel.min.js"></script>

<!-- Bootstrap Datepicker -->
<script src="{{ COnfig::get('app.url_assets') }}assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>

<!-- Bootstrap Tagsinput -->
<script src="{{ Config::get('app.url_assets') }}assets/select2/js/select2.full.min.js"></script>
<!-- <script src="{{ Config::get('app.url_assets') }}assets/bootstrap-tagsinput/bootstrap-tagsinput.min.js.map"></script> -->
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            startDate: '+1d',
            container: '.boxdatepicker'
        });
    });
    $(function(){

        $('.slider__keyvisual').css({height:$(window).height() - $('#header').height()});
        $('.slider__keyvisual .slider-1 .info, .slider__keyvisual .slider-2 .info').css({height:$('.slider__keyvisual').height() /2});
        
        $('.slider__keyvisual .slider-1').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true
        });
        
        $('[class^="slider__insurance-"]').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            responsive: [
                {
                breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                breakpoint: 768,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                    }
                }
            ]
        });
        
        $('.tab__info').tabs();
        
        $('.scroll-down').click(function(){
            $('html, body').animate({
                scrollTop: $('.box__recommend-insurance').offset().top
            }, {
                duration: 700
            });
        });
    });
        
    $(window).resize(function(){
        $('.slider__keyvisual .slider-1 .info, .slider__keyvisual .slider-2 .info').css({height:($(window).height() /2) - ($('#header').height() /2)});
    });
    function msgAlert(msg){
        $("#modal-alert").find(".msg-alert").text(msg);
        $("#modal-alert").modal("show");
    }
    function addCommas(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
</script>