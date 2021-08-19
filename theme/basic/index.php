<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<div class="wrapper">
    <img src="<?php echo G5_IMG_URL?>/path2.png" class="path">
    <div class="page-header header-filter">
        <div class="squares square1"></div>
        <div class="squares square2"></div>
        <div class="squares square3"></div>
        <div class="squares square4"></div>
        <div class="squares square5"></div>
        <div class="squares square6"></div>
        <div class="squares square7"></div>
        <div class="container">
            <div class="content-center brand">
                <h1 class="h1-seo">ADVANTRUE</h1>
                <h3>Who are we?</h3>
                <a class="nav-link btn btn-default d-none d-lg-block" href="javascript:void(0)"
                    onclick="scrollToDownload()" style="width:20%; margin:0 auto;">
                    START
                </a>
            </div>
        </div>
    </div>
    <div class="main">

        <div class="section">
            <div class="container">
                <div class="title" data-aos="zoom-out-right" data-aos-duration="1500">
                    <h3>ADVANTRUE</h3>
                </div>
                <div class="row justify-content-between align-items-center" data-aos="zoom-out-right">
                    <div class="col-lg-6">
                        <div id="carouselExampleControls" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo G5_IMG_URL?>/img1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo G5_IMG_URL?>/img2.png"
                                        alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo G5_IMG_URL?>/img3.png" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <i class="tim-icons icon-minimal-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <i class="tim-icons icon-minimal-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-5 mb-lg-0 " data-aos="zoom-out-left" data-aos-duration="1500">
                        <h1 class="text-white font-weight-light" data-i18n="INDEX:1">Decentralized Financial DeFi</h1>
                        <p class="text-white mt-4" data-i18n="INDEX:2">DeFi (decentralized finance) is an economic
                            system that is open to
                            participation by anyone other than the few in power and values transparently.

                            ADVANTRUE will help users create an accessible and stable income using the DeFi system.</p>
                        <a href="" onclick="window.open('/theme/basic/wp/Advantrue_en.pdf')" target="_blank"
                            class="btn btn-warning mt-4">White Paper</a>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>


        <section id="features" class="features">
            <div class="container">

                <ul class="nav nav-tabs row d-flex">
                    <li class="nav-item col-3" data-aos="zoom-in">
                        <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                            <i class="ri-sun-line">1.</i>
                            <h4 class="d-none d-lg-block" data-i18n="INDEX:10">DeFi의 약속과 도전</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
                        <a class="nav-link" data-toggle="tab" href="#tab-2">
                            <i class="ri-body-scan-line">2.</i>
                            <h4 class="d-none d-lg-block" data-i18n="INDEX:11">DeFi의 상태</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
                        <a class="nav-link" data-toggle="tab" href="#tab-3">
                            <i class="ri-gps-line">3.</i>
                            <h4 class="d-none d-lg-block" data-i18n="INDEX:12">ADV와 DeFi</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
                        <a class="nav-link" data-toggle="tab" href="#tab-4">
                            <i class="ri-store-line">4.</i>
                            <h4 class="d-none d-lg-block">PLATFORM</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content" data-aos="fade-up">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3 data-i18n="INDEX:10">DeFi의 약속과 도전</h3>
                                <p class="font-italic" data-i18n="INDEX:13">
                                    오늘날 금융 서비스는 중요한 서비스를 제공하고 있지만 매우 높은 비용으로 많은 핀 테크 개발에도 불구하고 다음과 같은 근본적인 문제가 지속됩니다.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:14">높은 거래 비용. 규제 요구
                                            사항,
                                            복잡한 상호 운용성 문제가있는 레거시 시스템 및
                                            대규모 기관의 제어로 인해 은행 및 금융 서비스의 평균 사용자에게는 거래 수수료가 높습니다. 중개인이 필요한 서비스는 에이전트 및 기타
                                            유형의
                                            중개인이
                                            관여하기 때문에 훨씬 더 비쌉니다.</span></li>
                                    <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:15">특히 국제 거래의 경우 느린
                                            거래.
                                            이론적으로는 컴퓨터가 거래하는 데 몇 분 밖에
                                            걸리지 않지만 한 기관에서 다른 기관으로 돈을 옮기는 데는 한 국가 내에서 몇 시간이 걸리고 국가 간에는 며칠이 걸릴 수
                                            있습니다.</span>
                                    </li>
                                    <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:16">자금 세탁 및 관련 범죄를
                                            줄이기위한
                                            법률에도 불구하고 현재 시스템이나 AML이
                                            실제로 자금 세탁을 줄인다는 증거는 거의 없습니다.</span></li>
                                </ul>
                                <p data-i18n="INDEX:17">
                                    이러한 이유로 많은 투자자들이 투자의 일부를 암호 화폐로 옮기기 시작했습니다. 암호 화폐는 정의상 기존 시스템이 제공 할 수없는 완전한 투명성을 가지고
                                    있습니다. 또한 필요한 행정 및 관료의 양이 최소화됩니다.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="<?php echo G5_IMG_URL?>/img6.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3 data-i18n="INDEX:11">DeFi의 상태</h3>
                                <p data-i18n="INDEX:18">
                                    탈 중앙화 금융 (DeFi)의 현재 상태는 범용 블록 체인으로 채워지며, 대부분은 체인에서 스마트 계약 개발을위한 튜링 완전한 명령 세트를 제공합니다.
                                    많은
                                    프로그래밍 언어에 적합하지만, 튜링 완전 스마트 계약 언어에 대한 독단적 인 추구는 블록 체인의 확장 성, 보안 및 견고성에 관한 다양한 문제를
                                    초래했습니다.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:19">Ethereum, EOS 및
                                            TRON과 같은 네트워크에있는 엄청난 양의 dApp은
                                            네트워크의 다른 dApp에 잠재적 (또는 입증 된) 영향을 미칩니다.</span></li>
                                    <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:20">심각한 금융 유형의 dApp의
                                            경우
                                            네트워크가 책임감 있고 안전한 방식으로 유지 및
                                            관리되고 있음을 아는 것이 중요합니다. 게임, 도박 및 기타 덜 "미션 크리티컬"앱으로 가득 찬 블록 체인을 갖는 것은 궁극적으로 블록
                                            체인의
                                            개발과
                                            방향에 영향을 미칠 것입니다.</span></li>
                                    <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:21">Turing-complete
                                            명령
                                            세트를 사용하려면 프로그래머가 모든 종류의 앱을
                                            개발하기 위해 복잡한 프로그램을 만들어야합니다.</span></li>
                                </ul>
                                <p class="font-italic" data-i18n="INDEX:22">
                                    DeFi 앱용 범용 블록 체인의 한계로 인해이 시장에 서비스를 제공 할 수있는 시장 기회가 열렸습니다. 암호 화폐 모멘텀이 계속 상승하고 있지만 현재
                                    대부분의
                                    애플리케이션은 여전히 ​​이더 리움에 있습니다. 네트워크에 대한 우려로 인해 일부 주요 프로젝트는 이미 대체 또는 추가 블록 체인 포팅 또는 작업을
                                    고려하게되었습니다.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="<?php echo G5_IMG_URL?>/img5.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3 data-i18n="INDEX:12">ADVANTRUE와 DeFi</h3>
                                <p class="font-italic" data-i18n="INDEX:23">
                                    2018년 후반부터 전세계적으로 수백개의 디파이 서비스 들이 늘어나게 되었으며 랜딩, 스테이킹, 탈중앙화거래소, 파생상품, 지갑, 신원확인, 예측시장,
                                    보험 등 다양한 분야에서
                                    활용이 되어지고 있다. 이제까지 여러 기업에서 다양한 dApp들을 선보여 시장에 내놓았지만 실질적으로 적용이 가능한 분야는 많지 않았지만 디파이는
                                    금융서비스 시스템의 근본적인
                                    비효율성을 개선하여 블록체인 업계의 많은 호응을 얻게 되었고 블록체인을 이해하고 있는 사용자층이 대거 유입됨으로 단기간에 급성장하게 되었다.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:24">ADVANTRUE는 기존
                                            디파이 시스템을 업그레이드 하기로 하고
                                            첫번째 플랫폼으로 전통적인 은행서비스와 유사한 이자 예금 및 이익 창출이라는 기능이 있다. 이 서비스를 통하여 사용자는 암호화폐 자산을
                                            상대적으로 안전하게 입금하고 수익을
                                            얻을수 있으며 세계 누구라도 이용할수 있는 효율성 높은 디파이 금융상품이다.</span>
                                    </li>
                                    <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:25">과거 금융서비스 플랫폼을
                                            이용하고자 하는 사용자는 브랜드의
                                            인지도, 수익률 변경, 보안 등 여러가지 요소를 고려하여 반복적인 비교를 해왔다. 또한 대부분 이성적인 사용자는 동시에 여러 플랫폼에
                                            암호화폐를 보관하여 리스크를 줄이고자
                                            했다.
                                        </span>

                                    </li>
                                    <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:26">ADVANTRUE 플랫폼은
                                            사용자에게 지능적인 포트폴리오를
                                            추천할수 있도록 도와주며 디파이영역에서 진정한 지능형 투자자문 및 관리 플랫폼을 구축한다.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="<?php echo G5_IMG_URL?>/img4.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>PLATFORM</h3>
                                <p class="font-italic">
                                    ADVANTRUE PLATFORM
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:27">ADVANTRUE 플랫폼은
                                            사용자의 편의에 맞추어 최적의 이율이 나오는 기간을 설정하여 선택할수 있도록 제공을 한다. ADVANTRUE 플랫폼에 유치할수 있는
                                            수량은 사용자가 지정할수 있으며 거래소에서 ETH을 구매해 ADVANTRUE 플랫폼에 일정기간 유치시 일별로 높은 수익률을 제공해 드리며
                                            유치기간 종료시 ETH을 출금 할수 있다. 이율은 연이율로 계산이 되며 예치하는 기간 만큼 일별 이율이 ETH으로
                                            지급이 된다. 거래소에서 ETH의 구매와 ADVANTRUE 플랫폼에서의 소비가 맞물려 ADVANTRUE의 가격은 하락 보다는
                                            상승에 편승하게 될것 이며 소비자 에게는 높은 이익을 안겨줄수 있는 시스템으로 운영이 될 예정이다.</span></li>
                                    <BR>
                                    <p class="font-italic">
                                        USD PLATFORM
                                    </p>
                                    <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:28"> USD PLETFORM은
                                            사용자 투자원금에 초첨을 맞추어 USD로 환산된 ADVANTRUE을 일정 기간 유치하시면 수익률이 일별 계산되어 지급 되고 예치기간
                                            종료시 예치하신 USD기준으로 ADVANTRUE을 지급하여 드리는 방식으로 ADVANTRUE의 가격과 상관없이 예치하신 USD 기준으로
                                            모든것을
                                            지급하여 준다.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="<?php echo G5_IMG_URL?>/img7.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <br>
        <br>
        <br>



        <div class="section section-nucleo-icons">
            <img src="<?php echo G5_IMG_URL?>/path3.png" class="path">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <h2 class="title" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000">ADVABTRUE SYSTEM</h2>
                        <h4 class="description" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000" data-i18n="INDEX:29">
                            ADVANTRUE aims to seek maximum compensation while protecting the user's investment as much
                            as possible
                            with a system that organizes and recommends portfolios with products optimized for the
                            user's needs.
                        </h4>
                    </div>
                </div>
                <div class="blur-hover" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <a href="##">
                        <div class="icons-container blur-item on-screen mt-5">
                            <!-- Center -->
                            <i class="icon tim-icons icon-chart-bar-32"></i>
                            <!-- Right 1 -->
                            <i class="icon icon-sm tim-icons icon-spaceship"></i>
                            <i class="icon icon-sm tim-icons icon-coins"></i>
                            <i class="icon icon-sm tim-icons icon-coins"></i>
                            <!-- Right 2 -->
                            <i class="icon tim-icons icon-send"></i>
                            <i class="icon tim-icons icon-mobile"></i>
                            <i class="icon tim-icons icon-wifi"></i>
                            <!-- Left 1 -->
                            <i class="icon icon-sm tim-icons icon-bold"></i>
                            <i class="icon icon-sm tim-icons icon-gift-2"></i>
                            <i class="icon icon-sm tim-icons icon-bag-16"></i>
                            <!-- Left 2 -->
                            <i class="icon tim-icons icon-gift-2"></i>
                            <i class="icon tim-icons icon-tap-02"></i>
                            <i class="icon tim-icons icon-wallet-43"></i>
                        </div>
                        <span class="blur-hidden h5 text-primary" style="text-align:center; font-size:1.4rem"><span
                                data-i18n="INDEX:aa">다양한 분야에서</span><br><span data-i18n="INDEX:ab">ADVANTRUE와
                                함께하세요</span></span>
                    </a>
                </div>
            </div>

            <br>
            <br>
            <br>


            <div class="section section-signup">
                <div class="container">
                    <div class="squares square-1"></div>
                    <div class="squares square-2"></div>
                    <div class="squares square-3"></div>
                    <div class="squares square-4"></div>
                    <section class="section section-lg">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <h1 class="text-center">ADVANTAGES OF DEFI</h1>
                                    <div class="row row-grid justify-content-center">
                                        <div class="col-lg-3">
                                            <div class="info">
                                                <div class="icon icon-primary">
                                                    <i class="tim-icons icon-money-coins"></i>
                                                </div>
                                                <h4 class="info-title" data-i18n="INDEX:30">탈중앙성</h4>
                                                <hr class="line-primary">
                                                <p data-i18n="INDEX:31">탈중앙성은 안전성에서도 중요하게 작용을 하는데 중앙 주체의 테이터 베이스가 아닌 세계
                                                    각국의 노드에 의해 시스템이 운영하기에
                                                    해킹이나 시스템 셧다운이라는 위험에서
                                                    안전할수 있다.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="info">
                                                <div class="icon icon-warning">
                                                    <i class="tim-icons icon-chart-pie-36"></i>
                                                </div>
                                                <h4 class="info-title" data-i18n="INDEX:32">무허가성</h4>
                                                <hr class="line-warning">
                                                <p data-i18n="INDEX:33">금융서비스 시스템에 누구나 참여할수 있도록 하는 환경을 의미하는게 무허가성이라고 지칭
                                                    한다. 현 금융서비스 시스템은 매우
                                                    폐쇄적으로 일부 금융상품을 가입하기
                                                    위해서는 특정한 자격요건을 요구하는경우가 많다. 전 세계적으로 약 17억명의 성인 남녀가 은행계좌를 가지고 있지 않다고
                                                    한다. 이는 전세계 인구의 20% 정도를
                                                    차지하고 있다. </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="info">
                                                <div class="icon icon-success">
                                                    <i class="tim-icons icon-single-02"></i>
                                                </div>
                                                <h4 class="info-title" data-i18n="INDEX:34">검열저항성</h4>
                                                <hr class="line-success">
                                                <p data-i18n="INDEX:35">거래의 투명성이 보장이 되며 특정한 사용자에 의해 운영이 되는것이 아니라 사용자 모두가
                                                    시스템을 이루고 있기 때문에 개인의
                                                    완전한 자산 소유권을 보장할수있다.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="info">
                                                <div class="icon icon-primary">
                                                    <i class="tim-icons icon-money-coins"></i>
                                                </div>
                                                <h4 class="info-title" data-i18n="INDEX:36">효율성</h4>
                                                <hr class="line-primary">
                                                <p data-i18n="INDEX:37">현 금융권에서 국가간 송금의 수수료는 약 5% 이상을 부과하지만 디파이 시스템에서는
                                                    1~2% 미만의 낮은 수수료가 책정이
                                                    된다. 전송 속도 측면에서도 디파이시스템은
                                                    탁월한 효율성을 가지고 있다. 예로 은행을 통한 국가간 송금은 1~2일 정도 소요가 되지만 디파이 시스템에서는 보통의 경우
                                                    10분 이내 모든 거래가 종료된다. 언제
                                                    어디서나 자유롭고 간편하게 금융서비스를 할 수가 있다.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="info">
                                                <div class="icon icon-warning">
                                                    <i class="tim-icons icon-chart-pie-36"></i>
                                                </div>
                                                <h4 class="info-title" data-i18n="INDEX:38">개인정보보호</h4>
                                                <hr class="line-warning">
                                                <p data-i18n="INDEX:39">디파이 시스템에서는 원하는 수준의 개인정보를 원하는 상대방에게 선택적으로 공개할수
                                                    있도록 되어 있다. 오늘날 개인정보의
                                                    수준은 단순 프라이버시 차원에서 생각할
                                                    문제를 넘어섰다. 세계 데이터 시장은 약 250조원 규모로 성장을 했으며 개인정보의 상품화는 꾸준히 가속화 될것으로
                                                    보인다. </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="info">
                                                <div class="icon icon-success">
                                                    <i class="tim-icons icon-single-02"></i>
                                                </div>
                                                <h4 class="info-title" data-i18n="INDEX:34-1">투명성</h4>
                                                <hr class="line-success">
                                                <p data-i18n="INDEX:35-1">디파이 시스템에서는 모든 거래의 내역이 블록체인상에 공개가 되며 저장이 되지만 그
                                                    거래의 내역이 누구의 거래인지 알수가
                                                    없도록 되어있다.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </section>



            <div class="section section-download" id="#download-section" data-background-color="black">


                <div class="container">
                    <h2 class="title">BUDGET DISTRIBUTION</h2>
                    <div class="row" style="width: 100%; margin:0 auto;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30"
                                aria-valuemin="0" aria-valuemax="100" style="width: 40%" data-aos="fade-right"
                                data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="sr-only">30% Complete (success)</span>
                            </div>
                            <span class="progress-type">Platform</span>
                            <span class="progress-completed">40%</span>
                        </div>
                        <p style="width: 90%; margin: 0 auto 10px auto;" data-i18n="INDEX:46">
                            The success or failure of the platform is not only accomplished by successful platform
                            development but
                            also by the best platform operation. The ADVANTRUE Team will be used for operational and
                            service
                            teams for smooth and pleasant operation. We will do our best to expedite the platform's
                            interest
                            payments.
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 30%;" data-aos="fade-right" data-aos-offset="300"
                                data-aos-easing="ease-in-sine">
                                <span class="sr-only">40% Complete</span>
                            </div>
                            <span class="progress-type">Development</span>
                            <span class="progress-completed">30%</span>
                        </div>
                        <p style="width: 90%; margin: 0 auto 10px auto;" data-i18n="INDEX:45">
                            The ADVANTRUE Team will use the funds raised for the platform development and maintenance,
                            production, development and design team's labor costs.
                        </p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100" style="width: 20%" data-aos="fade-right"
                                data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="sr-only">20% Complete (info)</span>
                            </div>
                            <span class="progress-type">Marketing</span>
                            <span class="progress-completed">20%</span>
                        </div>
                        <p style="width: 90%; margin: 0 auto 10px auto;" data-i18n="INDEX:47">
                            It will be used for public relations, marketing and partnership activities with partner
                            foundations and
                            companies to promote Division Blocks worldwide.
                        </p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="10"
                                aria-valuemin="0" aria-valuemax="100" style="width: 10%" data-aos="fade-right"
                                data-aos-offset="300" data-aos-easing="ease-in-sine">
                                <span class="sr-only">10% Complete (warning)</span>
                            </div>
                            <span class="progress-type">Administrative expenses</span>
                            <span class="progress-completed">10%</span>
                        </div>
                        <p style="width: 90%; margin: 0 auto 10px auto;" data-i18n="INDEX:48">
                            To run the ADVANTRUE Foundation ethically, it requires compliance with laws, duties of tax
                            collection, and a clear disclosure of the company's management situation. Therefore,
                            ADVANTRUE will
                            use legal, tax and accounting services as administrative expenses.
                        </p>
                    </div>
                </div>

                <br>
                <br>
                <br>


                <img src="<?php echo G5_IMG_URL?>/path1.png" class="path">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="text-center col-md-12 col-lg-8">
                            <h2 class="title" data-i18n="INDEX:50">ADVANTRUE가 궁금하시다면</h2>
                            <h4 class="description" data-i18n="INDEX:49">아래를 클릭하여 백서를 확인하여 주세요.</h4>
                        </div>
                        <div class="text-center col-md-12 col-lg-8" style="z-index:999">
                            <a href="javascript:return false;"
                                class="btn btn-primary btn-round btn-lg btn-wp" role="button">
                                Open White Paper
                            </a>
                        </div>
                        <div class="wp_wrap">
                            <ul>
                                <li>
                                    <a href="#" onclick="window.open('/theme/basic/wp/Advantrue_ko.pdf')"
                                        target="_blank" class="btn btn-primary btn-round btn-lg" role="button">
                                        White Paper KOR
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="window.open('/theme/basic/wp/Advantrue_en.pdf')"
                                        target="_blank" class="btn btn-primary btn-round btn-lg" role="button">
                                        White Paper EN
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="text-center col-md-12 col-lg-8"
                        style="text-align: center; width: 100%; margin: 0 auto;">
                        <h2 class="title">ADVANTRUE PLATFORM</h2>
                        <h4 class="description" data-i18n="INDEX:enpf">ADVANTRUE의 다양한 DeFi Platform을 만나보세요</h4>
                        <BR></BR>
                        <h4 class="description">ADV STAKING</h4>
                    </div>
                    <img src="<?php echo G5_IMG_URL?>/path3.png" class="path">
                    <div class="container mb-5 mt-5">
                        <div class="pricing card-deck flex-column flex-md-row mb-3">

                            <div class="card card-pricing text-center px-3 mb-4">
                                <span
                                    class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">ADV
                                    Staking(ETH)</span>
                                <div class="bg-transparent card-header pt-4 border-0">
                                    <h1 class="h1 font-weight-normal text-primary text-center mb-0"
                                        data-pricing-value="15">$<span class="price">1000</span><span
                                            class="h6 text-muted ml-2">/ 60Day</span></h1>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-unstyled mb-4">
                                        <li>Rate : 6%</li>
                                        <li>ADV STAKING(ETH) PLATFORM</li>
                                        <li>$300 = ADV</li>
                                        <li>Period : Preparing</li>
                                    </ul>
                                    <a href="#" onclick="alert1()" class="btn btn-outline-secondary mb-3 alert1">Order
                                        Now</a>
                                </div>
                            </div>
                            <div class="card card-pricing popular shadow text-center px-3 mb-4">
                                <span
                                    class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">ETH
                                    PLATFORM</span>
                                <div class="bg-transparent card-header pt-4 border-0">
                                    <h1 class="h1 font-weight-normal text-primary text-center mb-0"
                                        data-pricing-value="30">$<span class="price">3000</span><span
                                            class="h6 text-muted ml-2">/ 90Day</span></h1>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-unstyled mb-4">
                                        <li>Rate : 8%</li>
                                        <li>ADV STAKING(ETH) PLATFORM</li>
                                        <li>$300 = ADV</li>
                                        <li>Period : Preparing</li>
                                    </ul>
                                    <a href="#" onclick="alert1()" class="btn btn-outline-secondary mb-3 alert1">Order
                                        Now</a>
                                </div>
                            </div>
                            <div class="card card-pricing text-center px-3 mb-4">
                                <span
                                    class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">ADV
                                    Staking</span>
                                <div class="bg-transparent card-header pt-4 border-0">
                                    <h1 class="h1 font-weight-normal text-primary text-center mb-0"
                                        data-pricing-value="45">$<span class="price">5000</span><span
                                            class="h6 text-muted ml-2">/ 180Day</span></h1>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-unstyled mb-4">
                                        <li>Rate : 10%</li>
                                        <li>ADV STAKING(ETH) PLATFORM</li>
                                        <li>$300 = ADV</li>
                                        <li>Period : Preparing</li>
                                    </ul>
                                    <a href="#" onclick="alert1()" class="btn btn-outline-secondary mb-3 alert1">Order
                                        Now</a>
                                </div>
                            </div>
                        </div>

                        <BR></BR>
                        <h4 class="description">USD PLATFORM</h4>
                        <div class="container mb-5 mt-5">
                            <div class="pricing card-deck flex-column flex-md-row mb-3">

                                <div class="card card-pricing text-center px-3 mb-4">
                                    <span
                                        class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">USD
                                        Staking</span>
                                    <div class="bg-transparent card-header pt-4 border-0">
                                        <h1 class="h1 font-weight-normal text-primary text-center mb-0"
                                            data-pricing-value="15">$<span class="price">1000</span><span
                                                class="h6 text-muted ml-2">/ per month</span></h1>
                                    </div>
                                    <div class="card-body pt-0">
                                        <ul class="list-unstyled mb-4">
                                            <li>Rate : 3%</li>
                                            <li>USD STAKING PLATFORM</li>
                                            <li>300USD</li>
                                            <li>Period : Preparing</li>
                                        </ul>
                                        <a href="#" onclick="alert1()"
                                            class="btn btn-outline-secondary mb-3 alert1">Order
                                            Now</a>
                                    </div>
                                </div>
                                <div class="card card-pricing popular shadow text-center px-3 mb-4">
                                    <span
                                        class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">USD
                                        Staking</span>
                                    <div class="bg-transparent card-header pt-4 border-0">
                                        <h1 class="h1 font-weight-normal text-primary text-center mb-0"
                                            data-pricing-value="30">$<span class="price">3000</span><span
                                                class="h6 text-muted ml-2">/ per month</span></h1>
                                    </div>
                                    <div class="card-body pt-0">
                                        <ul class="list-unstyled mb-4">
                                            <li>Rate : 5%</li>
                                            <li>USD STAKING PLATFORM</li>
                                            <li>300USD</li>
                                            <li>Period : Preparing</li>
                                        </ul>
                                        <a href="#" onclick="alert1()"
                                            class="btn btn-outline-secondary mb-3 alert1">Order
                                            Now</a>
                                    </div>
                                </div>
                                <div class="card card-pricing text-center px-3 mb-4">
                                    <span
                                        class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">USD
                                        Staking</span>
                                    <div class="bg-transparent card-header pt-4 border-0">
                                        <h1 class="h1 font-weight-normal text-primary text-center mb-0"
                                            data-pricing-value="45">$<span class="price">5000</span><span
                                                class="h6 text-muted ml-2">/ per month</span></h1>
                                    </div>
                                    <div class="card-body pt-0">
                                        <ul class="list-unstyled mb-4">
                                            <li>Rate : 7%</li>
                                            <li>USD STAKING PLATFORM</li>
                                            <li>300USD</li>
                                            <li>Period : Preparing</li>
                                        </ul>
                                        <a href="#" onclick="alert1()"
                                            class="btn btn-outline-secondary mb-3 alert1">Order
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
include_once(G5_THEME_PATH.'/tail.php');
?>