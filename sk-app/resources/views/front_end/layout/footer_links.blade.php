<script src="{{asset('front_end/js/wow.js')}}"></script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{asset('front_end/js/aos.js')}}"></script>
<script src="{{asset('front_end/js/jquery-3.6.0.min.js')}}"> </script>
<script src="{{asset('front_end/js/popper.min.js')}}"> </script>
<script src="{{asset('front_end/js/bootstrap.min.js')}}"> </script>
<script src="{{asset('front_end/js/custom-script.js')}}"> </script>
<script>
    new WOW().init();
</script>
<script>
    var btn = $('#button');
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
        btn.addClass('show');
        } else {
        btn.removeClass('show');
        }
    });

    btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
        scrollTop: 0
        }, '300');
    });
</script>

<script>
    AOS.init();
</script>

<script>
// var btn = $('#button');
// $(window).scroll(function () {
//    if ($(window).scrollTop() == 0) {
//       btn.addClass('show');
//    } else {
//       btn.removeClass('show');
//    }
// });

    // var btn2 = $('#bottom-button');         
    // $(window).scroll(function() {
    // if ($(window).scrollTop() > 300) {
    // btn.addClass('show2');
    // } else {
    // btn.removeClass('show2');
    // }
    // });
    
    // btn2.on('click', function(e) {
    // e.preventDefault();
    // $('html, body').animate({scrollTop:0}, '300');
    // });
</script>

<script>

    var btn = $('#button');         
    $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
    btn.addClass('show');
    } else {
    btn.removeClass('show');
    }
    });
    
    btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
    });
</script>
<script>
$(document).ready(function () {

    var counters = $(".count");
    var countersQuantity = counters.length;
    var counter = [];

    for (i = 0; i < countersQuantity; i++) {
    counter[i] = parseInt(counters[i].innerHTML);
    }

    var count = function (start, value, id) {
    var localStart = start;
    setInterval(function () {
        if (localStart < value) {
            localStart++;
            counters[id].innerHTML = localStart;
        }
    }, 40);
    }

    for (j = 0; j < countersQuantity; j++) {
    count(0, counter[j], j);
    }
});



$('.count').each(function () {
    $(this).prop('Counter', 0).animate({
    Counter: $(this).text()
    }, {
    duration: 3300,
    easing: 'swing',
    step: function (now) {
        $(this).text(Math.ceil(now));
    }
    });
});
</script>

<script>

$(function () {
    $("#carouselExampleControls").on('slide.bs.carousel', function (e) {
    let thisDiv = $(this);
    setTimeout(function () {
        let activeDiv = thisDiv.find('.carousel-item.active');
        let activeId = activeDiv.attr('id');
        let inputVal = activeDiv.find('input').val();
        console.log(inputVal);
        let activeSlideImg = $('.clients').find('#slide3 img').attr('src');
        let replacingImgs = $('.clients .slideImgs');
        replacingImgs.toArray().forEach(Img => {
            let imgSrc = $(Img).find('img').attr('src');
            if (imgSrc == inputVal) {
                $(Img).find('img').attr('src', activeSlideImg);
                $('.clients').find('#slide3 img').attr('src', inputVal);
            }
        });
    }, 900);
    })
});

// cokkies//

            // CLOSE THE COOKIE MESSAGE WHEN THE USER CLICKS ON THE "THAT'S FINE" BUTTON
    document.querySelector("#cookies-btn").addEventListener("click", () => {
    document.querySelector("#cookies").style.display = "none";
    // CALL THE SETCOOKIE() FUNCTION
    setCookie("cookie", true, 30);
    })

    // CREATES A COOKIE (EXPIRES IN 30 DAYS)
    function setCookie(cName, cValue, expDays) {
    let date = new Date();
    date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
    }

    // GRAB THE VALUE OF THE COOKIE
    function getCookie(cName) {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArr = cDecoded .split('; ');
    let res;
    cArr.forEach(val => {
            if (val.indexOf(name) === 0) res = val.substring(name.length);
    })
    return res;
    }

    // CHECK IF A COOKIE EXISTS
    function cookieMessage() {
    // IF A COOKIE DOESN'T EXIST THEN DISPLAY THE COOKIE MESSAGE
    if (!getCookie("cookie"))
        document.querySelector("#cookies").style.display = "block";
    }

    // CALL THE COOKIEMESSAGE() FUNCTION ON PAGE LOAD
    window.addEventListener("load", cookieMessage);

</script>

