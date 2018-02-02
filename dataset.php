<?php include 'include/header.html';?>
<?php include  'include/nav.html';?>
<div class="breadcrumb-wrapper container visible-desktop">
    <ol class="breadcrumb">
        <li>
            <a href="/" class="home">
                <i class="fa fa-home"></i>
            </a>
        </li>
        <li class="">
            <a href="#">데이터셋</a>
        </li>
        <li class="active">
            <a href="#">통합검색</a>
        </li>
    </ol>
</div>
<div class="container">
    <div class="search-wrap clearfix visible-desktop">
        <div class="search-input-wrap">
            <input type="text" id="search-key" placeholder="검색어를 입력하세요" class="form-control search-key" autocomplete="off">
            <div id="ark">
                <div id="ark_down" style="right: 40px; top: 5px;">
                    <img id="ark_img_down" src="assets/img/arrow_auto.gif" style="vertical-align: baseline;" alt="자동완성펼치기">
                </div>
                <div id="ark_up" style="right: 40px; top: 5px;">
                    <img id="ark_img_up" src="assets/img/arrow_auto2.gif" style="vertical-align: baseline;" alt="자동완성접기">
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
        </div>
        <div class="search-detail-wrap">
            <button id="toggle-detail-search-btn" type="button" class="top-search-btn detail-search-btn btn">
                상세검색
            </button>
            <div id="detail-search-wrapper">
                <div class="deatil-search-item">
                    <h4 class="title">상세검색</h4>
                    <div class="deatil-search-row clearfix" id="and-query-list">
                        <div class="detail-search-label"><label for="search-option-and">결과 내 검색</label></div>
                        <div class="detail-search-form" data-input="search-option-and">
                            <input type="text" id="search-option-and">
                        </div>
                    </div>
                    <div class="deatil-search-row clearfix" id="not-query-list">
                        <div class="detail-search-label"><label for="search-option-not">다음 단어 제외</label></div>
                        <div class="detail-search-form" data-input="search-option-not">
                            <input type="text" id="search-option-not">
                        </div>
                    </div>
                </div>
                <div class="submit-detail-search-btn-wrapper">
                    <a href="#" class="btn btn-primary submit-detail-search-btn">검색</a>
                    <a href="#" class="btn btn-primary close-detail-search-btn">닫기</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="search-results">
        <ul class="dataset-nav clearfix">
            <li id="allTab" class="on">
                <a href="#"><span class="text-bold">전체(24,723)</span></a>
            </li>
            <li id="dataTab" class="">
                <a href="#"><span class="text-bold">파일데이터(22,168)</span></a>
            </li>
            <li id="openapiTab" class="">
                <a href="#"><span class="text-bold">오픈API(2,497)</span></a>
            </li>
            <li id="datagridTab" class="">
                <a href="#"><span class="text-bold">표준데이터(58)</span></a>
            </li>
        </ul>
        <div class="row">
            <div class="grid-item grid-md-9">
                <div class="data-list">
                    <div class="result text-bold">파일데이터&nbsp;
                        <span class="count">22,168</span>건을 찾았습니다.
                        <a href="#" class="btn btn-default">
                            <i class="fa fa-search" aria-hidden="true"></i> 기관별 검색
                        </a>
                    </div>
                    <div class="sett" id="dataDivArea">
                        <div class="head1 clearfix">
                            <i class="fa fa-file-text-o"></i> 파일데이터 [22,168건]
                            <div class="right visible-desktop" id="sort_tab">
                                <a href="#" class="sort-btn" data-value="score">
                                    &nbsp;정확도&nbsp;
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="score" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="score" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <a href="#" class="sort-btn" data-value="date">
                                    날&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;짜
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="date" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="date" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                                <a href="#" class="sort-btn" data-value="title">
                                    제&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;목
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="title" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="title" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                                <a href="#" class="sort-btn" data-value="count">
                                    &nbsp;조회수&nbsp;
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="count" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="count" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                                <a href="#" class="sort-btn" data-value="download">
                                    다운로드
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="download" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="download" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                        <div id="file-list-wrapper">
                            <?php for($i=0; $i < 3; $i++){?>
                                <div class="data-item">
                                    <span class="category-filter visible-desktop">공공행정</span>
                                    <div class="data-title">
                                        <a href="#">교통사고통계</a>
                                        <span>조회수 : 21,535</span>
                                        <span>다운로드수 : 27,781</span>
                                        <span class="category-filter visible-mobile">공공행정</span>
                                    </div>
                                    <div class="data-meta">
                                        <span>수정일 : 2018.01.15</span><span>기관 : 도로교통공단</span>
                                        <br class="visible-mobile">
                                        <span>서비스유형 : 다운로드 LINK</span>
                                    </div>
                                    <div class="data-desc">
                                        교통사고통계
                                    </div>
                                    <div class="data-types">
                                        <span class="data-type CSV">CSV</span>
                                        <span class="data-type XLS">XLS</span>
                                        <span class="data-type XLSX">XLSX</span>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <p class="more-dataset"></p>
                    <div class="sett" id="dataDivArea">
                        <div class="head1 clearfix">
                            <i class="fa fa-file-text-o"></i> 파일데이터 [22,168건]
                            <div class="right visible-desktop" id="sort_tab">
                                <a href="#" class="sort-btn" data-value="score">
                                    &nbsp;정확도&nbsp;
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="score" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="score" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <a href="#" class="sort-btn" data-value="date">
                                    날&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;짜
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="date" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="date" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                                <a href="#" class="sort-btn" data-value="title">
                                    제&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;목
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="title" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="title" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                                <a href="#" class="sort-btn" data-value="count">
                                    &nbsp;조회수&nbsp;
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="count" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="count" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                                <a href="#" class="sort-btn" data-value="download">
                                    다운로드
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="download" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="download" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                        <div id="file-list-wrapper">
                            <?php for($i=0; $i < 3; $i++){?>
                                <div class="data-item">
                                    <span class="category-filter visible-desktop">공공행정</span>
                                    <div class="data-title">
                                        <a href="#">교통사고통계</a>
                                        <span>조회수 : 21,535</span>
                                        <span>다운로드수 : 27,781</span>
                                        <span class="category-filter visible-mobile">공공행정</span>
                                    </div>
                                    <div class="data-meta">
                                        <span>수정일 : 2018.01.15</span><span>기관 : 도로교통공단</span>
                                        <br class="visible-mobile">
                                        <span>서비스유형 : 다운로드 LINK</span>
                                    </div>
                                    <div class="data-desc">
                                        교통사고통계
                                    </div>
                                    <div class="data-types">
                                        <span class="data-type CSV">CSV</span>
                                        <span class="data-type XLS">XLS</span>
                                        <span class="data-type XLSX">XLSX</span>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <p class="more-dataset"></p>
                    <div class="sett" id="dataDivArea">
                        <div class="head1 clearfix">
                            <i class="fa fa-file-text-o"></i> 파일데이터 [22,168건]
                            <div class="right visible-desktop" id="sort_tab">
                                <a href="#" class="sort-btn" data-value="score">
                                    &nbsp;정확도&nbsp;
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="score" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="score" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <a href="#" class="sort-btn" data-value="date">
                                    날&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;짜
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="date" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="date" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                                <a href="#" class="sort-btn" data-value="title">
                                    제&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;목
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="title" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="title" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                                <a href="#" class="sort-btn" data-value="count">
                                    &nbsp;조회수&nbsp;
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="count" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="count" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                                <a href="#" class="sort-btn" data-value="download">
                                    다운로드
                                    <ul class="sort-popup">
                                        <li class="sort-select-btn" data-sort="download" data-order="asc">
                                            오름차순
                                        </li>
                                        <li class="sort-select-btn" data-sort="download" data-order="desc">
                                            내림차순
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                        <div id="file-list-wrapper">
                            <?php for($i=0; $i < 3; $i++){?>
                                <div class="data-item">
                                    <span class="category-filter visible-desktop">공공행정</span>
                                    <div class="data-title">
                                        <a href="#">교통사고통계</a>
                                        <span>조회수 : 21,535</span>
                                        <span>다운로드수 : 27,781</span>
                                        <span class="category-filter visible-mobile">공공행정</span>
                                    </div>
                                    <div class="data-meta">
                                        <span>수정일 : 2018.01.15</span><span>기관 : 도로교통공단</span>
                                        <br class="visible-mobile">
                                        <span>서비스유형 : 다운로드 LINK</span>
                                    </div>
                                    <div class="data-desc">
                                        교통사고통계
                                    </div>
                                    <div class="data-types">
                                        <span class="data-type CSV">CSV</span>
                                        <span class="data-type XLS">XLS</span>
                                        <span class="data-type XLSX">XLSX</span>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <p class="more-dataset"></p>
                </div>
            </div>
            <div class="grid-item grid-md-3 visible-desktop">
                <div class="search-side-options">
                    <div class="rank">
                        <h4 class="side-title title-box">인기검색어</h4>
                        <ul class="">
                            <li>
                                <span class="number">1</span>
                                <a href="#" title="날씨">날씨</a>
                            </li>
                            <li>
                                <span class="number">2</span>
                                <a href="#" title="버스">버스</a>
                            </li>
                            <li>
                                <span class="number">3</span>
                                <a href="#" title="경제">경제</a>
                            </li>
                            <li>
                                <span class="number">4</span>
                                <a href="#" title="지하철">지하철</a>
                            </li>
                            <li>
                                <span class="number">5</span>
                                <a href="#" title="기상청">기상청</a>
                            </li>
                        </ul>
                    </div>
                    <div class="search-filters">
                        <ul>
                            <?php for($i = 0; $i < 5; $i++){?>
                                <li class="filter-category">
                                    <a class="title-box toggle-category">
                                        국가중점데이터
                                    </a>
                                    <ul id="coreFFList">
                                        <li>
                                            <a>
                                                <span>전체(375)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span>파일데이터(193)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span>오픈API(182)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.html';?>
