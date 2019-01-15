<script src="{{ Config::get('app.url_assets') }}assets/js/jquery-3.2.1.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/popper.min.js"></script>

<script src="{{ Config::get('app.url_assets') }}assets/js/scrollpane/jquery.jscrollpane.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/scrollpane/jquery.mousewheel.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/slick/slick.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/jquery-ui.tabs.min.js"></script>
<!-- <script src="{{ Config::get('app.url_assets') }}assets/chosen_v1.8.7/chosen.jquery.js"></script> -->
<script src="{{ Config::get('app.url_assets') }}assets/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/js/common.js?v={{time()}}"></script>

<!-- Jquery Rangeslider  -->
<!-- <script src="{{ Config::get('app.url_assets') }}assets/jquery-ui/jquery-ui.min.js"></script> -->
<script src="{{ Config::get('app.url_assets') }}assets/js/jquerytouchpunch.js"></script>
<!-- <script src="{{ Config::get('app.url_assets') }}assets/rangeslider/rangeslider.min.js"></script> -->
<!-- <script src="{{ Config::get('app.url_assets') }}assets/jqueryrange/multirange.js"></script> -->

<!-- Owlcarousel -->
<script src="{{ Config::get('app.url_assets') }}assets/owlcarousel2/owl.carousel.min.js"></script>

<!-- Bootstrap Datepicker -->
<script src="{{ Config::get('app.url_assets') }}assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>

<!-- Bootstrap Tagsinput -->
<script src="{{ Config::get('app.url_assets') }}assets/select2/js/select2.full.min.js"></script>
<script src="{{ Config::get('app.url_assets') }}assets/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="{{ Config::get('app.url_assets') }}assets/bootstrap-tagsinput/bootstrap-tagsinput.min.js.map"></script> -->
<script>

    $(document).ready(function() {
        $("body").tooltip({ selector: '[data-toggle=tooltip]', html: true });
        // $('[data-toggle=tooltip]').on('show.bs.tooltip', function (e) {
        //     console.log(e);
        // });
    });
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            startDate: '+1d',
            container: '.boxdatepicker'
        });
       $(".datepicker-reg-mb").datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            startDate: '+1d',
        });
        $(".datepicker-reg-pc").datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            startDate: '+1d',
            container: '.pc-datepicker'
        });
        
    });
    $(function(){
        $(".number-text").ForceNumericOnly();

        // $('.slider__keyvisual').css({height:$(window).height() - $('#header').height()});
        // $('.slider__keyvisual .slider-1 .info, .slider__keyvisual .slider-2 .info').css({height:$('.slider__keyvisual').height() /2});
        
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
        var currentUrl      = window.location.href;
        if(currentUrl.indexOf("#scroll-down")!=-1){
            $('html, body').animate({
                scrollTop: $('.box__recommend-insurance').offset().top
            }, {
                duration: 700
            });
        }
        $('.scroll-down').click(function(){
            $('html, body').animate({
                scrollTop: $('.box__recommend-insurance').offset().top
            }, {
                duration: 700
            });
        });
    });



    $('#ModalFilterRange').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var form = button.data('form') // Extract info from data-* attributes
      var input = button.data('input') // Extract info from data-* attributes
      var rangeid = button.data('rangeid') // Extract info from data-* attributes
      var rangetype = button.data('rangetype') // Extract info from data-* attributes
      var modal = $(this)
      console.log(rangeid);
      modal.find('.modal-body input[type="text"]').val('');
        var min = parseInt($('[datatoid="'+rangeid+'"]').attr('min'));
        var max = parseInt($('[datatoid="'+rangeid+'"]').attr('max'));
        modal.find('.modal-body input[type="text"]').attr('placeholder','ราคาเริ่มต้น / ราคาสูงสุด');
        if(min != undefined && max != undefined){
            modal.find('.modal-body input[type="text"]').attr('min', min);
            modal.find('.modal-body input[type="text"]').attr('max', max);
        }
        
      $('#filter-form').val(form);
      $('#filter-input').val(input);
      $('#filter-rangeid').val(rangeid);
      if (rangetype != null && rangetype != undefined) {
        $('#filter-rangetype').val(rangetype);  
      }
    });
    $('#submitFilterRange').click(function(event) {
        var num = $('#ModalFilterRange input[type="text"]').val();
        var form = $('#ModalFilterRange #filter-form').val();
        var input = $('#ModalFilterRange #filter-input').val();
        var rangeid = $('#ModalFilterRange #filter-rangeid').val();
        var rangetype = $('#ModalFilterRange #filter-rangetype').val();
        $(form).html(addCommas(num));
        if ($('[datatoid="'+rangeid+'"]').hasClass('slider-range-multiple')==true) {
            if (rangetype != null && rangetype != undefined && rangetype=='min') {
                $('[datatoid="'+rangeid+'"]').slider( "values", 0, num);
            }
            if (rangetype != null && rangetype != undefined && rangetype=='max') {
                $('[datatoid="'+rangeid+'"]').slider( "values", 1, num);
            }
        } else {
            $('[datatoid="'+rangeid+'"]').slider( "value", num );
        }
            
        if (input != '#' && input != '') {
            $(input).val(num);  
        }
        $('#ModalFilterRange').modal('hide');   
    });
        
    $(window).resize(function(){
        $('.slider__keyvisual .slider-1 .info, .slider__keyvisual .slider-2 .info').css({height:($(window).height() /2) - ($('#header').height() /2)});
    });
    function msgAlert(msg){
        $("#modal-alert").find(".msg-alert").html(msg);
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
    jQuery.fn.ForceNumericOnly =
        function()
        {
        return this.each(function()
        {
            $(this).keydown(function(e)
            {
                var key = e.charCode || e.keyCode || 0;
                // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                // home, end, period, and numpad decimal
                return (
                    key == 8 || 
                    key == 9 ||
                    key == 13 ||
                    key == 46 ||
                    key == 110 ||
                    key == 190 ||
                    (key >= 35 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
            });
        });
        };
</script>