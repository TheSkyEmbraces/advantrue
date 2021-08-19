<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?>
<!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

<?php run_event('tail_sub'); ?>

<script src="http://advantrue.net/theme/basic/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="http://advantrue.net/theme/basic/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="http://advantrue.net/theme/basic/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="http://advantrue.net/theme/basic/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="http://advantrue.net/theme/basic/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="http://advantrue.net/theme/basic/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!-- Chart JS -->
<script src="http://advantrue.net/theme/basic/assets/js/plugins/chartjs.min.js"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="http://advantrue.net/theme/basic/assets/js/plugins/moment.min.js"></script>
<script src="http://advantrue.net/theme/basic/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="http://advantrue.net/theme/basic/assets/demo/demo.js"></script>
<!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
<script src="http://advantrue.net/theme/basic/assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>

<!-- lang -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/i18next/1.9.0/i18next.min.js" type="text/javascript"></script>
<script src="http://advantrue.net/theme/basic/script/lang.js"></script>

<script>
    $(document).ready(function () {
        blackKit.initDatePicker();
        blackKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.title').offset().top
            }, 2000);
        }
    }
</script>

<script>
    AOS.init();
</script>

<script>
    $(".alert1").click(function(){
        alert("준비중입니다.");
    })
</script>

<script>
    $(".btn-wp").click(function(){
        $(".wp_wrap").css("display","block")
        $(".btn-wp").css("display","none")
    })
</script>

</body>

</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다. ?>