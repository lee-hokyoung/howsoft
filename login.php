<?php include 'include/header.html';?>
<?php include  'include/nav.html';?>
<div id="subMain">
    <div id="all_wrap2">
        <div class="con_area">
            <div class="my_menu">
                <h2>로그인</h2>
                <ul id="MLeft">
                    <li><a href="#"><span>로그인</span></a></li>
                    <li><a href="#"><span>아이디/비밀번호찾기</span></a></li>
                    <li><a href="#"><span>공인인증서등록/안내</span></a></li>
                </ul>
            </div>
            <div id="content" class="content_wrap">
                <div class="bg_area">
                    <div class="bg_area6"></div>
                    <p class="location">&gt; 로그인 &gt; <span>로그인</span></p>
                    <h3>로그인</h3>
                </div>
                <div class="all_login ng-scope">
                    <div class="m_login">
                        <form class="ng-pristine ng-valid">
                            <dl>
                                <dt>회원 로그인</dt>
                                <dd>
                                    <p>
                                        <label for="ID_x">아이디</label>
                                        <input type="text" id="ID_x" >
                                    </p>
                                    <p>
                                        <label for="PassWord_x">비밀번호</label>
                                        <input type="password" id="PassWord_x">
                                    </p>
                                    <a href="#" class="log">
                                        <img src="assets/img/btn_login.gif" alt="로그인">
                                    </a>
                                    <div style="position:absolute; top:148px; left:60px; width:100px;">
                                        <input type="checkbox" id="idSave" style="vertical-align:middle;" class="checkbox">
                                        <label for="idSave">아이디 저장</label>
                                    </div>
                                    <p class="find_link">
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <a href="#">아이디/비밀번호 찾기</a>
                                    </p>
                                </dd>
                            </dl>
                            <div class="con_txt">
                                <span>- 아이디와 비밀번호는 영문자 대소문자를 구별합니다.</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="clear: both;"></div>
<?php include 'include/footer.html';?>
