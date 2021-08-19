<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1 class="title">
                    <img src="<?php echo G5_IMG_URL?>/adv_logo_c.png" alt="">
                </h1>
            </div>
            <div class="col-md-3">
                <div class="btn-wrapper profile">
                    <!-- <a target="_blank" href="" class="btn btn-icon btn-neutral btn-round btn-simple"
                        data-toggle="tooltip" data-original-title="twitter">
                        <i class="fab fa-twitter"></i>
                    </a> -->
                    <a target="_blank" href="" class="btn btn-icon btn-neutral btn-round btn-simple"
                        data-toggle="tooltip" data-original-title="medium">
                        <i class="fab fa-medium"></i>
                    </a>
                    <a target="_blank" href="https://t.me/advantrue_group" class="btn btn-icon btn-neutral  btn-round btn-simple"
                        data-toggle="tooltip" data-original-title="telegram">
                        <i class="fab fa-telegram"></i>
                    </a>
                </div>
            </div>
            <!-- <div style="width:90%; margin:0 auto; text-align:center;">
                <p>&copy; Suite 305, Griffith Corporate Centre P.O.Box 1510, Beachmont Kingstown St. Vincent and Grenadines
        Expansion Network System Ltd.</p>
            </div> -->
        </div>
    </div>
</footer>

<script>
    $(function () {
        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie(
        "ck_font_resize_add_class"));
    });
</script>

<script>
    $(".01").click(function(){
        $(".ADVISOR,.Development,.Operations").addClass("none")
        $(".FOUNDER").removeClass("none")
    })

    $(".02").click(function(){
        $(".FOUNDER,.Development,.Operations").addClass("none")
        $(".ADVISOR").removeClass("none")
    })

    $(".03").click(function(){
        $(".FOUNDER,.ADVISOR,.Operations").addClass("none")
        $(".Development").removeClass("none")
    })

    $(".04").click(function(){
        $(".FOUNDER,.ADVISOR,.Development").addClass("none")
        $(".Operations").removeClass("none")
    })
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>