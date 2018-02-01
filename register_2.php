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
            <div class="my_menu" style="display: none;"></div>
            <div id="content" class="content_wrap">
                <div class="bg_area">
                    <div class="bg_area6"></div>
                    <p class="location">
                        <span>회원가입</span>
                    </p>
                    <h3>회원가입</h3>
                </div>
                <h4 class="h_mark">공공데이터포털 이용약관</h4>
                <div class="com">
                    <table>
                        <caption>
                            <strong>가입자 기본 정보입력</strong>:아이디, 회원구분, 외국인여부, 인증서등록을 입력받는 표입니다. </caption>
                        <colgroup>
                            <col style="width:20%;">
                            <col style="width:80%;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <span><em class="hiden">별표시</em></span>
                                    <label for="mberEmain">이메일</label>
                                </th>
                                <td>
                                    <input type="text" class="inp2" id="mberEmain">
                                    <span class="button search_g small"><a>중복확인</a></span><br>
                                    영문소문자, 숫자, 각각 또는 같이 사용, 4~20자 가능
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <span><em class="hiden">별표시</em></span>
                                    <label for="password">비밀번호</label>
                                </th>
                                <td>
                                    <input type="password" class="inp2" id="password" data-valid-max-byte="20"><br>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <span><em class="hiden">별표시</em></span>
                                    <label for="password2">비밀번호 확인</label>
                                </th>
                                <td>
                                    <input type="password" class="inp2" id="password2" data-valid-max-byte="20">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="assets/img/botdetectcaptcha.jpg">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <span><em class="hiden">별표시</em></span>
                                    <label for="text">자동가입 방지 문자입력</label>
                                </th>
                                <td>
                                    <input type="text" class="inp2" id="password2" data-valid-max-byte="20">
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="clear: both;"></div>
<?php include 'include/footer.html';?>
