var isMobile = window.matchMedia("only screen and (max-width: 406px)").matches;
if (!isMobile) {
    $('.single-select').select2({
        width: '100%'
    });
// ------select2-----
    $('.multiple-select').select2({
        multiple: true,
        width: '100%',
    });
    $('select.area-m-select').select2({
        multiple: true,
        width: '100%',
        closeOnSelect:false,
        placeholder: "Select tuition provide area",
    });
    $('select.subject-m-select').select2({
        multiple: true,
        width: '100%',
        closeOnSelect:false,
        placeholder: "Select tuition Preferred Subjects",
    });
    $('select.medium-m-select').select2({
        multiple: true,
        width: '100%',
        closeOnSelect:false,
        placeholder: "Select tuition Preferred Medium",
    });
    $('select.class-m-select').select2({
        multiple: true,
        width: '100%',
        closeOnSelect:false,
        placeholder: "Select provide tuition Classes",
    });
    $('select.days-m-select').select2({
        multiple: true,
        width: '100%',
        closeOnSelect:false,
        placeholder: "Select provide tuition days",
    });
    $('select.timing-m-select').select2({
        multiple: true,
        width: '100%',
        closeOnSelect:false,
        placeholder: "Select timing shift",
    });
    $('select.tutoring-m-select').select2({
        multiple: true,
        width: '100%',
        closeOnSelect:false,
        placeholder: "Select tutoring style",
    });
    $('select.provide-m-place').select2({
        multiple: true,
        width: '100%',
        closeOnSelect:false,
        placeholder: "select provide tuition place",
    });
}















$('.owl-one').owlCarousel({
    // rtl:true,
    loop:true,
    margin:4,
    autoplay:true,
    autoplayTimeout:8000,
    nav:true,
    navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});



$('select.districts').on('change', function() {
    var stateID = $(this).val();
    $(".selectArea").hide();
    $(".loadingImg").show();
    $.ajax({
        type: "get",
        url: '/area-list',
        data:{'id':stateID},
        dataType: "json",
        success:function(data) {
            var len = data.length;
            $(".loadingImg").hide();
            $(".selectArea").show();
            $(".area").empty();
            $(".area").append("<option value=''>" + 'Select Area' + "</option>");
            for (var i = 0; i < len; i++) {
                var id = data[i]['id'];
                var areaName = data[i]['areaName'];
                $(".area").append("<option value='" + areaName + "'>" + areaName + "</option>");
            }
        }
    });
});













// --------images-----------

$("#imagesUpload").change(function () {
    readURL(this);
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreview').attr('src', e.target.result).fadeIn('slow');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#nid_card").change(function () {
    nidURL(this);
});
$("#student_card").change(function () {
    studentURL(this);
});
function nidURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#editNidPreview').attr('src', e.target.result).fadeIn('slow');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function studentURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#editStudentPreview').attr('src', e.target.result).fadeIn('slow');
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// -------images-------


$('.poshytip').poshytip({
    className: 'tip-yellowsimple',
    showOn: 'focus',
    alignTo: 'target',
    alignX: 'inner-left',
    offsetX: 0,
    offsetY: 5,
    showTimeout: 100
});

// menu sticky
var windows = $(window);
var sticky = $('.header-bottom-area');
windows.on('scroll', function() {
    var scroll = windows.scrollTop();
    if (scroll < 10) {
        sticky.removeClass('is-sticky');
    }else{
        sticky.addClass('is-sticky');
    }
});




