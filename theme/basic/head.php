<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="#">
                <span>
                    <img src="<?php echo G5_IMG_URL?>/logo-w.png" alt="">
                </span>
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a>
                            ADVANTRUE
                        </a>
                    </div>
                    <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation"
                            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav">
                <!-- <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="Twitter" data-placement="bottom" href="#" target="_blank">
                        <i class="fab fa-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li> -->
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="Medium" data-placement="bottom" href="#" target="_blank">
                        <i class="fab fa-medium"></i>
                        <p class="d-lg-none d-xl-none">Medium</p>
                    </a>
                </li>
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="Telegram" data-placement="bottom" href="https://t.me/advantrue_group" target="_blank">
                        <i class="fab fa-telegram"></i>
                        <p class="d-lg-none d-xl-none">Telegram</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <p>
                            LANG
                        </p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item koo" onclick="changeLang('ko-KR');" href="#">KOR</a>
                        <a class="dropdown-item us" onclick="changeLang('en-US');" href="#">EN</a>
                    </div>
                </li>
                <!-- <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="fa fa-cogs d-lg-none d-xl-none"></i> Getting started
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="https://demos.creative-tim.com/blk-design-system/docs/1.0/getting-started/overview.html"
                class="dropdown-item">
                <i class="tim-icons icon-paper"></i> Documentation
              </a>
              <a href="examples/register-page.html" class="dropdown-item">
                <i class="tim-icons icon-bullet-list-67"></i>Register Page
              </a>
              <a href="examples/landing-page.html" class="dropdown-item">
                <i class="tim-icons icon-image-02"></i>Landing Page
              </a>
              <a href="examples/profile-page.html" class="dropdown-item">
                <i class="tim-icons icon-single-02"></i>Profile Page
              </a>
            </div>
          </li> -->

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->