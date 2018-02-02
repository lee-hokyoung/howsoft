<?php include 'include/header.html';?>
<?php include  'include/nav.html';?>
<div id="home-top">
    <div class="container">
        <div id="home-search" class="row">
            <div class="col-sm-9">
                <form id="home-search-form" action="/" method="POST" target="_self" autocomplete="on">
                    <input type="text" id="search-key" name="query" placeholder="데이터를 검색해보세요!" class="form-control search-key" autocomplete="off">
                    <div id="ark">
                        <div id="ark_down">
                            <img id="ark_img_down" src="/assets/img/arrow_auto.gif" style="vertical-align: baseline;" alt="자동완성펼치기">
                        </div>
                        <div id="ark_up">
                            <img id="ark_img_up" src="/assets/img/arrow_auto2.gif" style="vertical-align: baseline;" alt="자동완성접기">
                        </div>
                        <div class="ark_wrap" id="ark_wrap">
                            <ul>
                                <li class="ark_content">
                                    <ul class="fl" id="ark_content_list"></ul>
                                </li>
                                <li class="ark_footer" id="ark_footer">

                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-primary search-btn">
                        <i class="fa fa-search">
                            <span class="hidden">검색</span>
                        </i>
                    </button>
                </form>
            </div>
            <div class="col-sm-3 hidden-xs">
                <div class="top-search">
                    <a href="#" class="top-search-key">
                        <span id="top-search-title">1.미세먼지</span>
                        <i class="fa fa-chevron-down pull-right"></i>
                    </a>
                    <ul class="top-search-keys">
                        <li><a href="#" data-value="미세먼지">1.미세먼지</a></li>
                        <li><a href="#" data-value="경제">2.경제</a></li>
                        <li><a href="#" data-value="경력단절여성">3.경력단절여성</a></li>
                        <li><a href="#" data-value="시외버스">4.시외버스</a></li>
                        <li><a href="#" data-value="상가">5.상가</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="home-data-1st-desc text-center">
                    여러분이 원하는 데이터,
                    <br class="visible-xs">
                    <span class="data-1st-link-label">데이터 1번가 </span> 로 신청해주세요!
                </div>
            </div>
        </div>
    </div>
</div>
<div id="home-categories">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <ul class="nav nav-tabs hover-tabs data-category-tab" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">
                                국가중점데이터
                            </a>
                            <div class="bottom-line"></div>
                        </li>
                        <li role="presentation" class="">
                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">
                                데이터 카테고리
                            </a>
                            <div class="bottom-line"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="home-categories-content">
    <div class="container">
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                 
                    <!-- 첫번째탭시작 -->
                    <?php for($i=0; $i<16; $i++){ ?>
                <div class="main-category-icon"> 
							<a href="/search/index.do?index=ALL&amp;brmFF=OC0001&amp;currentPage=1&amp;countPerPage=3">
								<i class="demo-icon icon-b_1"></i>
								<div class="category-name">교육</div>
							</a>
                        </div> 

                    <?php } ?>

                        <!-- 첫번째탭종료 -->
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
            
                    <!-- 두번째탭시작 -->
                    <?php for($i=0; $i<16; $i++){ ?>
                <div class="main-category-icon"> 
							<a style="padding-top:10px;" href="/search/index.do?index=ALL&amp;brmFF=OC0001&amp;currentPage=1&amp;countPerPage=3">
								<i class="fas fa-beer fa-3x"></i>
								<div style="padding-top:7px;" class="category-name">맥주집</div>
							</a>
                        </div> 

                    <?php } ?>

                        <!-- 두번째탭종료 -->

            </div>
        </div>
    </div>
</div>

<div id="content-body" class="main-contents no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 main-section">
                <div class="card">
                    <div class="data-1st-application-wrap">
                        <img src="/assets/img/banner1_2.png" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="col-sm-8 main-section">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <a href="#" target="_blank">
                                <img src="/assets/img/banner2_2.png" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <a href="#" target="_blank">
                                <img src="/assets/img/data_banner_4.png" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <a href="#" target="_blank">
                                <img src="/assets/img/data_banner_4.png" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <a href="#" target="_blank">
                                <img src="/assets/img/data_banner_4.png" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="main-bottom-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="main-bottom-title">
                        <h4 class="title">
                            공지사항<!-- 공지사항 -->
                            <a href="#" class="more-link pull-right">더보기</a><!-- 더보기 -->
                        </h4>
                        <div id="main-notices">
                            <div class="latest-notice">
                                <div class="main-notice">
                                    <div class="title">
                                        <a href="#" title="2017년 공공 빅데이터 성과공유대회 참가신청">
                                            2017년 공공 빅데이터 성과공유대회 참가신청
                                        </a>
                                    </div>
                                    <div class="content">
                                        '2017년 공공 빅데이터 성과공유대회’는 지난 해 빅데이터 신규 분석과제 및 표준분석모델구축성과 및 향후계획을 관계기관 및 일반국민 분들과 공유하기 위해 마련되었습니다. 4차 산업혁명 시대의 기반기술로 과학적 행정과 국민의 삶을 바꾸는 사회혁신을 위한 주요 수단으로 대두된 공공 빅데이터에 관심 있는 분들의 많은 관심과 참여 부탁드립니다. o 행사개요 &nbsp;- 일 시 : 2018년 1월 24일(수), 15:00 ~ 17:30 &nbsp;- 장 소 : 정부서울청사 별관 3층 국제회의장(종로구 세종대로 209 소재) &nbsp;- 주 최 : 행정안전부 &nbsp;- 주 관 : 한국정보화진흥원 o&nbsp;참여신청 &nbsp;- 모집기간 : 2018년 1월 22일 (월)까지 &nbsp;- 모집인원 : 선착순 200명 * 자세한 사항은 붙임파일 참조
                                    </div>
                                    <span class="new">N</span>
                                </div>
                            </div>
                            <div class="main-notice">
                                <div class="title">
                                    <a href="#" title="공공데이터 개방 표준 개정 고시(행정안전부고시 제2018-1호)">
                                        공공데이터 개방 표준 개정 고시(행정안전부고시 제2018-1호)
                                    </a>
                                </div>
                            </div>
                            <div class="main-notice">
                                <div class="title">
                                    <a href="#" title="2017년 12월 공공데이터 활용신청 TOP 10">
                                        2017년 12월 공공데이터 활용신청 TOP 10
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="main-bottom-title">
                        <h4 class="title">서비스 바로가기</h4>
                        <div id="main-services" class="clearfix">
                            <div class="service-item">
                                <a href="#">
                                    공공데이터<br>
                                    제공신청
                                </a>
                            </div>
                            <div class="service-item">
                                <a href="#">
                                    공공데이터<br>
                                    제공 분쟁조정 신청

                                </a>
                            </div>
                            <div class="service-item">
                                <a href="#">
                                    공공데이터<br>
                                    창업경진대회
                                </a>
                            </div>
                            <div class="service-item">
                                <a href="#" target="_blank" style="padding: 16px 0;">
                                    오픈스퀘어-D<br>
                                </a>
                            </div>
                            <div class="service-item">
                                <a href="#" target="_blank">
                                    공공데이터<br>
                                    전략위원회 소개
                                </a>
                            </div>
                            <div class="service-item">
                                <a href="#" style="padding: 16px 0;">
                                    오픈데이터포럼
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="main-bottom-title">
                        <h4 class="title">
                            개방현황
                        </h4>
                        <div class="open-status">
                            <div class="title">
                                2018-01-22 현재
                            </div>
                            <div class="content clearfix">
                                <ul>
                                    <li>
                                        개방기관 : <span id="total-openDept-count">696</span>
                                    </li>
                                    <li>
                                        파일데이터 : <span id="total-filedata-count">22,162</span>
                                    </li>
                                    <li>
                                        오픈 API : <span id="total-openapi-count">2,501</span>
                                    </li>
                                    <li>
                                        표준데이터 : <span id="total-grid-count">58</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="main-bottom-title">
                        <h4 class="title">&nbsp;</h4>
                    </div>
                    <div class="sub-banners">
                        <a href="#">
                            <img src="https://data.go.kr/assets/images/use/main/quality_control.gif" alt="공공데이터 품질관리" class="img-responsive">
                        </a>
                        <a href="#" target="_blank">
                            <img src="https://data.go.kr/assets/images/use/main/bigdata_bottom_banner.gif" alt="빅데이터" class="img-responsive">
                        </a>
                        <a href="#" target="_blank">
                            <img src="https://data.go.kr/assets/images/use/main/bigdata_bottom_banner.gif" alt="빅데이터" class="img-responsive">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.html';?>
