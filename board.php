<?php include 'include/header.html';?>
<?php include  'include/nav.html';?>
<div id="data-1st-banner" class="hidden-xs">
    <div class="container">
        <h1 class="title">데이터 1번가</h1>
        <div class="desc">
            <div>
                여러분이 필요로 하는 공공데이터를 자유롭게 신청 할 수 있는 데이터 소통창구입니다.
            </div>
            <div>
                신청하신 데이터 분석을 통하여 공공데이터 개방 및 정책 추진에 활용하고자 합니다.
            </div>
            <div class="desc-footer">
                다른 이용자들이 신청한 데이터도 확인하시고 <strong>공감</strong> <i class="fa fa-thumbs-up"></i> 을 표현해 주세요!
            </div>
        </div>
    </div>
</div>
<div id="content-body">
    <div class="container">
        <form name="openReqst" method="post">
            <div class="row data-1st-options">
                <div class="col-sm-7 col-xs-12">
                    <div class="total-cnt pull-left">
                        총 <span>737</span> 건
                    </div>
                </div>
                <div class="col-sm-2 col-xs-4">
                    <select name="searchCnd" class="form-control blue">
                        <option value="">전체</option>
                        <option value="2">제목</option>
                        <option value="3">내용</option>
                        <option value="4">제목 + 내용</option>
                    </select>
                </div>
                <div class="col-sm-3 col-xs-8 has-inner-btn">
                    <input type="text" class="form-control" id="searchWrd" name="searchWrd" value="" placeholder="검색어를 입력하세요.">
                    <button class="btn btn-default search-1st-btn">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-12">

            </div>
            <div class="col-sm-12">
                <div class="data-1st-table-wrap table-responsive">
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
                    <div class="process-icon-info text-right">
						<span class="process-icon processing">
							<i class="fa fa-hourglass-start"></i> 답변대기
						</span>
                        <span class="process-icon complete">
							<i class="fa fa-check-square-o"></i> 답변완료
						</span>
                    </div>
                    <table class="table data-1st-table">
                        <thead>
                            <tr>
                                <th width="7%">No.</th>
                                <th width="25%">제목</th>
                                <th class="hidden-xs">내용</th>
                                <th class="hidden-xs" width="10%">신청인</th>
                                <th width="10%">조회수</th>
                                <th class="hidden-xs" width="10%">좋아요</th>
                                <th class="hidden-xs" width="12%">처리상태</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for($i=0; $i<10; $i++){?>
                            <tr>
                                <td class="text-center">
                                    737
                                </td>
                                <td>
                                    <a href="#" title="성범죄자 주소정보 및 실시간 위치정보 요청">
                                        전국 소 농장 위치 데이터
                                    </a>
                                </td>
                                <td class="hidden-xs">
                                    <div class="list-content">
                                        <a href="#" title="전국에 있는 소 농장의 위치데이터가 필요합니다.">
                                            전국에 있는 소 농장의 위치데이터가 필요합니다.
                                        </a>
                                    </div>
                                    <span class="comments-count">[0]</span>
                                </td>
                                <td class="text-center hidden-xs">
                                    익명
                                </td>
                                <td class="text-center">
                                    8
                                </td>
                                <td class="text-center hidden-xs">
                                    <i class="fa fa-thumbs-o-up like"></i> 0
                                </td>
                                <td class="text-center hidden-xs">
                                    <span class="process-icon processing">
                                        <i class="fa fa-hourglass-start" aria-hidden="true"></i>
                                    </span>
                                </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <nav aria-label="Page navigation">
                    <div class="pagination-wrapper lg">
                        <ul class="pagination">
                            <li>
                                <a class="prev" href="#" title="첫번째 페이지">
                                    <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a class="prev" href="#" title="이전 페이지">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#">6</a>
                            </li>
                            <li>
                                <a href="#">7</a>
                            </li>
                            <li>
                                <a href="#">8</a>
                            </li>
                            <li>
                                <a href="#">9</a>
                            </li>
                            <li>
                                <a href="#">10</a>
                            </li>
                            <li>
                                <a href="#" title="다음 페이지">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="마지막 페이지">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-sm-2 text-right margin-top20 margin-bottom20">
                <a href="#" id="application-btn" class="btn btn-write pull-right">
                    신청하기
                </a>
            </div>
            <div class="col-sm-12 text-right">
                <button type="button" class="btn btn-primary float-btn data-1st-applicant-btn bottom">
                    <i class="fa fa-pencil"></i> 신청하기
                </button>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.html';?>
