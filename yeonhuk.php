<?php include 'include/header.html';?>
<?php include  'include/nav.html';?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script>

   function month_slide(num){
        $display = $("#yeonhuk" + num).css("display");
          
        if($display == "none") {$("#yeonhuk" + num).slideDown();  }
        else {$("#yeonhuk" + num).slideUp();   }

        }
 

</script>
</head>
<body>
 

<div class="container">
<div id="yeonhuk_header"> 

<h2><g>주요연혁</g></h2><br><br> 
<select id="soflow">
  <option disabled selected value>다른년도 보기</option>
  <option>2015</option>
  <option>2016</option>
  <option>2017</option>
</select>
 

<div id="month-header" onclick="month_slide(1);">
<div>1월</div>
<div>정책을 보실려면 클릭하세요.</div>
</div>
<div id="yeonhuk1" class="yeonhuk_content">
<table class="yeonhuk">
  <tr>
    <th>월</th>
    <th>기간</th>
    <th>기업지원 정보</th>
    <th>주최기관</th>
  </tr>
  <tr>
    <td>1월</td>
    <td>2017-01-02 ~ 2017-02-03</td>
    <td>내용</td>
    <td>서울</td>
  </tr> 
</table> 
      </div>

 
<div id="month-header" onclick="month_slide(2);">
<div>2월</div>
<div>정책을 보실려면 클릭하세요.</div>
</div>
<div id="yeonhuk2" class="yeonhuk_content">
<table class="yeonhuk">
  <tr>
    <th>월</th>
    <th>기간</th>
    <th>기업지원 정보</th>
    <th>주최기관</th>
  </tr>
  <tr>
    <td>1월</td>
    <td>2017-01-02 ~ 2017-02-03</td>
    <td>내용</td>
    <td>서울</td>
  </tr> 
</table> 
      </div>

 


<div id="month-header" onclick="month_slide(3);">
<div>3월</div>
<div>해당 월의 기업지원 정책은 업데이트 중입니다.</div>
</div>

<div id="month-header" onclick="month_slide(4);">
<div>4월</div>
<div>해당 월의 기업지원 정책은 업데이트 중입니다.</div>
</div>

<div id="month-header" onclick="month_slide(5);">
<div>5월</div>
<div>해당 월의 기업지원 정책은 업데이트 중입니다.</div>
</div>

<div id="month-header" onclick="month_slide(6);">
<div>6월</div>
<div>해당 월의 기업지원 정책은 업데이트 중입니다.</div>
</div>

<div id="month-header" onclick="month_slide(7);">
<div>7월</div>
<div>해당 월의 기업지원 정책은 업데이트 중입니다.</div>
</div>

<div id="month-header" onclick="month_slide(8);">
<div>8월</div>
<div>해당 월의 기업지원 정책은 업데이트 중입니다.</div>
</div>

<div id="month-header" onclick="month_slide(9);">
<div>9월</div>
<div>해당 월의 기업지원 정책은 업데이트 중입니다.</div>
</div>

<div id="month-header" onclick="month_slide(10);">
<div>10월</div>
<div>해당 월의 기업지원 정책은 업데이트 중입니다.</div>
</div>

<div id="month-header" onclick="month_slide(11);">
<div>11월</div>
<div>해당 월의 기업지원 정책은 업데이트 중입니다.</div>
</div>

<div id="month-header" onclick="month_slide(12);">
<div>12월</div>
<div>해당 월의 기업지원 정책은 업데이트 중입니다.</div>
</div>




</div>
</div>


</body>
</html>



<?php include 'include/footer.html';?>
