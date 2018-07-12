
<!DOCTYPE html>
<html>
    <head>
    @include('frontend.layout.head')

    </head>
    <body>

<!--==================backtotop=============================-->
<div class="ieframe"><p>Trình duyệt Internet Explorer bạn dang sữ dụng đã lỗi thời. Nó có thể không hiển thị được một số chức năng của wesite.<br>Vui lòng <a href="http://windows.microsoft.com/vi-vn/internet-explorer/download-ie" target="_blank">cập nhật</a> phiên bản mới, hoặc cài đặt một trong các trình duyệt miễn phí tuyệt vời như: <a href="https://www.google.com/intl/vi/chrome/browser/desktop/index.html" target="_blank">Google Chrome</a>, <a href="http://www.opera.com/vi" target="_blank">Opera</a>, <a href="http://safari.joydownload.com/" target="_blank">Safari</a>.</p></div>

<div class="top_after">
    <a title="Back to top" href="" id="back_to_top"></a>
</div>

<!--==================/backtotop=============================-->

    <header>
    @include('frontend.layout.header')
    </header>

<!--==================banner=============================-->
@include('frontend.home.banner')
<!--==================/banner=============================-->

   @yield('content')
<!--==================footer=============================-->
@include('frontend.layout.footer')
<!--==================/footer=============================-->
<script type="text/javascript">
            $("[name='my-checkbox']").bootstrapSwitch();
        </script>  
    </body>



</html>

 
<script>
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true        // act on asynchronously loaded content (default is true)
    });
    wow.init();
    smoothScroll.init();
    $(function () {
        $('#back_to_top').hide();
        $(window).scroll(function () {
            if ($(this).scrollTop() > 0) {
                $('#back_to_top').removeClass().addClass('animated fadeInRight').show();
            } else {
                $('#back_to_top').removeClass().addClass('animated fadeOutRight').show();
            }
        });

        // scroll body to 0px on click

        $('#back_to_top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

</script>


