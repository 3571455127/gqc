$(function () {

    // pc-banner
    // var mySwiper = new Swiper('.pc-banner .swiper-container', {
    //     autoplay: true,
    //     speed: 1500,
    //     autoHeight: true,
    //     loop: true,
    //     pagination: {
    //         el: '.pc-banner .swiper-pagination',
    //         clickable: true,
    //     },
    //     navigation: {
    //         nextEl: '.pc-banner .swiper-button-next',
    //         prevEl: '.pc-banner .swiper-button-prev',
    //     },
    // })

    // wap-banner  
    var mySwiper = new Swiper('.wap-banner .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        loop: true,
        pagination: {
            el: '.wap-banner .swiper-pagination',
            clickable: true,
        },

    })


    $(".nav li").click(function () {
        $(this).parent().parent().removeClass("in");
    })


    // 滚动监听
    $('body').scrollspy({
        target: '#navbar-example'
    })
    // top
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".goTop").fadeIn(1000);
            $("header .top-bar").hide();
            $("header .header-top").addClass("header-fixed")
            $(".navbar").addClass("navbar-fixed-top");
        } else {
            $(".goTop").fadeOut(1000);
            $("header .top-bar").show();
            $("header .header-top").removeClass("header-fixed")
            $(".navbar").removeClass("navbar-fixed-top");
        }
    });
    $(".goTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 1000);
    });
    // lightGallery(document.getElementById('lightgallery'));
})

var submitcount2 = 0;

function beforeSubmit2(form) {
    var re = /^[0-9]*$/;
    if (form.name.value == '') {
        alert('Name can not be empty');
        form.name.focus();
        return false;
    } else if (form.email.value == '') {
        alert('Please enter the correct email format');
        form.email.focus();
        return false;
    } else if (form.email.value.indexOf('@') < 0) {
        alert('The email is wrong');
        form.email.focus();
        return false;
    } else if (!re.test(form.phone.value)) {
        alert('The phone is wrong');
        form.phone.focus();
        return false;
    } else if (form.message.value == '') {
        alert('The message can not be empty');
        form.message.focus();
        return false;
    } else {

        if (submitcount2 == 0) {
            submitcount2++;
            return true;
        } else {
            alert("Message is being sent, please wait!");
            return false;

        }
    }

}
