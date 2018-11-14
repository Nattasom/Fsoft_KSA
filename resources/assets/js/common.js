
$(function(){
    $('#nav__main .menu-toggle').click(function(){
        $(this).parent().toggleClass('active');
        $('#nav__main .detail').fadeToggle();
    });
    $('#closeNav').click(function(event) {
        $('#nav__main').removeClass('active');
        $('#nav__main .detail').fadeOut('fast');
    });
    
    if($(window).width() < 769){
        $('.scroll-pane').css({height:$(window).height() - 30}); 
        
        $('.scroll-pane').jScrollPane({
            mouseWheelSpeed: 50, 
            autoReinitialise: true
        });
    }
});

$(window).resize(function(){
    if($(window).width() < 769){
        $('.scroll-pane').css({height:$(window).height() - 30});   
        
        $('.scroll-pane').jScrollPane({
            mouseWheelSpeed: 50,  
            autoReinitialise: true
        });
    }
});

$(function(){
    $('#interest').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var title = button.data('title')         
        var caption = button.data('caption')         
        var price = button.data('price')           
        var icon = button.data('icon')     
        var producttype = button.data('producttype')
        var makevalue = button.data('makevalue');
        var modelvalue = button.data('modelvalue');
        var motortype = button.data('motortype');
        var seat = button.data('seat');
        var cc = button.data('cc');
        var modal = $(this)
        modal.find('#interest-title').html(title);
        modal.find('#interest-caption').html(caption);
        modal.find('#interest-price').html(addCommas2(parseInt(price).toFixed(0)));
        modal.find('#interest-icon').attr('src', icon);
        modal.find('#interest-producttype').html(producttype);
        modal.find('#interest-makevalue').val(makevalue);
        modal.find('#interest-modelvalue').val(modelvalue);
        modal.find('#interest-motortype').val(motortype);
        modal.find('#interest-seat').val(seat);
        modal.find('#interest-cc').val(cc);
    })
    $('#btn-interest').click(function(event) {
        var linkInterest = $('#url_main').val() + "Home/SendInterest";
        if (
            $('#interest-name').val().length>0 &&
            $('#interest-tel').val().length>0 &&
            $('#interest-email').val().length>0 &&
            $('#interest-callback_date').val().length>0 &&
            $('#interest-callback_time').val().length>0 &&
            $('#interest-makevalue').val().length>0 &&
            $('#interest-modelvalue').val().length>0 &&
            $('#interest-motortype').val().length>0 &&
            $('#interest-seat').val().length>0 &&
            $('#interest-cc').val().length>0 
            )
        {
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: linkInterest,
                type: 'POST',
                dataType: 'json',
                data: {
                    name: $('#interest-name').val(),
                    tel: $('#interest-tel').val(),
                    email: $('#interest-email').val(),
                    remark: $('#interest-remark').val(),
                    callback_date: $('#interest-callback_date').val(),
                    callback_time: $('#interest-callback_time').val(),
                    make: $('#interest-makevalue').val(),
                    model: $('#interest-modelvalue').val(),
                    motor_type: $('#interest-motortype').val(),
                    seat: $('#interest-seat').val(),
                    cc: $('#interest-cc').val(),
                },
                success: function(data) {
                    //console.log(data);
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
        } else {
            msgAlert('กรุณากรอกข้อมูลให้ครบถ้วน');
            // $(this).html('กรุณากรอกข้อมูลให้ครบถ้วน').delay(5000).html('ยืนยันข้อมูล');
        }
        
    });


    function addCommas2(nStr)
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
});


$(function(){
    $('.clickText').click(function(event) {
        $('.dropdownWithImg').show().focus().click();
    });
    
    $('.showDropdown').click(function(event) {
        $('.dropdownWithImg').show().focus().click();
    });
    $('.dropdownWithImg').change(function(event) {
        var img = $(this).children('option[value="'+$(this).val()+'"]').data('img');
        var txt = $(this).children('option[value="'+$(this).val()+'"]').html();
        console.log(img);
        $(this).prev('.clickText').html(txt);
        $(this).prev('.clickText').prev('img.imgBeforeDropdown').attr('src', img);
        // $(this).next('select').trigger('mousedown');
        // console.log($(this).next('select').html());
        // console.log('click');
    });
});

$(function(){
    $('#confirmCompare').click(function(event) {
        var id = $('#compare_list #compare_list_id').val();
        var linkCompare = $('#url_main').val() + "Compare/AddCompare";
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: linkCompare,
            type: 'POST',
            dataType: 'json',
            data: {
                listid: id,
            },
            success: function(data) {
                console.log(data);
                if (data.status == 0) {
                    msgAlert(data.fail);
                } else if (data.status == 1) {
                    var link = $('#url_main').val() + 'Compare';
                    window.location.href = link;
                }
            },
            error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                // console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    });
    $('#refreshCompare').click(function(event) {
        // window.location = "Compare";
        $('.cbCompare').prop('checked', false);
        getCompare();
    });

    $('body').on('change', '.cbCompare', function(event) {
        $('#compare_list').show();
        console.log('show');
        getCompare();

    });

    $('#compare_list').on('click', '.removeCompare', function(event) {
        var id = $(this).data('id');
        $('#'+id).prop('checked', false);
        getCompare();
    });
    $('#compare_list').on('click', '.close-panel', function (event) {
        $("#compare_list").hide();
    });

    function getCompare() {
        var w = $(window).width();

        var pc = w>=768 ? true : false;

        var maxrow = w>=768 ? 4 : 2;

        var checkArray = new Array();
        var checkID = new Array();

        if ($('.cbCompare:checked').length > 4) {
            msgAlert('เปรียบเทียบได้ไม่เกิน 4 รายการ');
            return false;
        } else if ($('.cbCompare:checked').length == 0) {
            // $('#compare_list').hide();
            console.log('none compare');
        }
        $('.cbCompare').each(function(index, el) {
            if ($(this).is(':checked')) {
                var obj = new Object();
                obj.title = $(this).data('title');
                obj.caption = $(this).data('title');

                // Add Commas
                var nStr = $(this).data('price');
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                // Add Commas

                obj.price = x1 + x2;
                obj.id = $(this).attr('id');
                checkArray.push(obj);

                obj.idx = $(this).data('catid');
                // checkID.push(obj.idx);

                checkID.push(decodeURIComponent($(this).data('all')));

            }
        });

        var listHTML = '';
        for (var i = 0; i < 4; i++) {
            if ((!pc && (i == 0 || i == 2)) || (i == 0 && pc)) {
                listHTML += '<div class="row">';
            }
            if (checkArray[i] != undefined) {
                var arr = checkArray[i];
                listHTML += '<div class="col-6 col-sm-3">'+
                    '<div class="card">'+
                        '<div class="card-body">'+
                            '<p>'+arr.title+' <a class="float-right removeCompare" data-id="'+arr.id+'"><i class="fa fa-times" aria-hidden="true"></i></a></p>'+
                            '<small>'+arr.caption+'</small>'+
                            '<p class="price text-right">'+arr.price+' <small>บ.</small></p>'+
                        '</div>'+
                    '</div>'+
                '</div>';
            } else {
                listHTML += '<div class="col-6 col-sm-3">'+
                    '<div class="card none">'+
                        '<i class="fa fa-plus" aria-hidden="true"></i>'+ 
                    '</div>'+
                '</div>';
            }
            if ((!pc && (i == 1 || i == 3)) || (i == 3 && pc)) {
                listHTML += '</div>';
            }
        }

        console.log(checkID);
        $('#compare_list #compare_list_id').val(JSON.stringify(checkID));
        $('#compare_list .showlist').html(listHTML);
    }
});

$(document).ready(function() {
    setHeightBanner();
    $(window).resize(function(event) {
        setHeightBanner();
    });
    function setHeightBanner() {
        var winH = $(window).height();
        var HomeH = winH-130;
        $('#box__home .slider__keyvisual').height(HomeH);
        $('#box__home .slider__keyvisual .slider-1 .info, .slider__keyvisual .slider-2 .info').height(HomeH/2);
    }
});