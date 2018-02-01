$(document).ready(function(){
    var slider = $('.slider-menu');
    var sub_menu = $('.sub-menu');
    // 메뉴 슬라이더
    function showSlider(){
        $('.menu-arrow').css('display', 'block');
    }
    if(slider.length > 5){
        showSlider();
    }
    // 윈도우 화면 조정시 슬라이더 메뉴 이동
    function resize_menu(){
        var offsetLeft = $('.menus')[0].offsetLeft;
        offsetLeft -= 15;
        $('.menu-arrow').css('left', offsetLeft + 'px')
    }
    resize_menu();
    $(window).resize(function(){
        resize_menu();
    });
    // 슬라이더 화살표 클릭 이벤트
    var idx = 0;
    function fn_slider(data){
        if(typeof(data) ==='undefined') data = 0;
        idx = idx + data;
        if(idx < 0) idx = 0;
        if(idx > slider.length - 5) idx = slider.length - 5;
        var start_idx = idx;
        var last_idx = start_idx + 5;
        for(var i = 0; i < slider.length; i++){
            if(i >= start_idx && i < last_idx){
                slider[i].style.display = 'block';
                sub_menu[i].style.display = 'block';
            }else{
                slider[i].style.display = 'none';
                sub_menu[i].style.display = 'none';
            }
        }
    }
    fn_slider();
    $('#menu-left, #menu-right').click(function () {
        data = parseInt($(this).attr('data-value'));
        fn_slider(data);
    });

    // 데이터 검색창 관련
    var search_input = $('#search-key');
    var ark_up = $('#ark_up');
    ark_up.hide();
    var ark_down = $('#ark_down');
    var ark_wrap = $('#ark_wrap');
    ark_wrap.hide();
    $('#ark').width(search_input.width() - 77);
    ark_wrap.width(search_input.width() - 77);
    function fnSearchList(){
        var data = ['가나다', '라마바', '아자차', '타파하'];
        var html = '';
        $.each(data, function(i, v){
            html += '<li>';
            html += v;
            html += '</li>';
        });
        var ark_content_list = $('#ark_content_list');
        ark_content_list.html(html);
    }
    search_input.keyup(function(){
        // 데이터 입력이 없을 경우
        if($(this).val() === ''){
            ark_up.hide();
            ark_down.show();
            ark_wrap.hide();
        }else{ // 데이터가 입력될 경우
            ark_up.show();
            ark_down.hide();
            ark_wrap.show();
            fnSearchList();
        }
    });
    // 검색어 순위 관련
    $('ul.top-search-keys li').click(function(){
        $('#top-search-title').text($(this).text());
    });

    // 메인화면 탭
    $('li[role=presentation] a').mouseover(function(){
        var tab_name = $(this).attr('aria-controls');
        $('div[role=tabpanel]').removeClass('active');
        $('div[role=tabpanel]' + '#' + tab_name).addClass('active');
    });
    // 데이터 1번가 탭
    $('.dataset-nav > li').click(function(){
        console.log($(this).attr('id'));
        $('.dataset-nav > li').removeClass('on');
        var tab_id = $(this).attr('id');
        $('#' + tab_id).addClass('on');
    });
    // 파일데이터 > 상세검색 버튼
    $('#toggle-detail-search-btn').click(function(){
        $('#detail-search-wrapper').show();
    });
    // 파일데이터 > 정렬
    $('ul > li.sort-select-btn').click(function () {
        var sort = $(this).attr('data-sort');
        var order = $(this).attr('data-order');
        var fa_class = 'fa-angle-up';
        var i_tag = $(this).parent().parent().parent().find('i.fa');
        $('div#sort_tab a').removeClass('active');
        $('a[data-value=' + sort + ']').addClass('active');
        if(order === 'desc') fa_class = 'fa-angle-down';
        var i = '<i class="fa ' + fa_class + '"></i>';
        if(i_tag.length > 0){
            i_tag.remove();
        }
        $(this).parent().parent().append(i);
    });
    // 파일데이터 > 필터
    $('.toggle-category').click(function(){
        $(this).parent().find('ul').slideToggle("fast");
    });
    // 약관전체 체크
    $('#allAgree').click(function(){
        console.log($('#content').find('input[type=checkbox]'));
        var checkboxes = $('#content').find('input[type=checkbox]');
        checkboxes.prop('checked', !checkboxes.prop('checked'));
    });
    // 약관 동의 후 페이지 이동
    $('#yes').click(function(){
        console.log($('#checkField1').prop('checked'));
        var checkField1 = $('#checkField1').prop('checked');
        var checkField2 = $('#checkField2').prop('checked');
        if(!checkField1 || !checkField2){
            alert('필수항목에는 동의하셔야 합니다.');
            return false;
        }else{
            location.href = 'register_2.php';
        }
    });
});
