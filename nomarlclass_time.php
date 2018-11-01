<?php include __DIR__ .'/everyone_head.php';?>
<!-- 此網頁title寫在下方 -->
<title>授課時間|劉鳳珠美術‧黏土才藝教室</title>
<!-- 此網頁css寫在下方 -->
<?php include __DIR__ .'/everyone_css.php';?>
<style>
.classtime_ul{
    padding: 30px;
    padding-bottom: 10px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
.classtime_ul>li{
    box-shadow: 0 0 5px #dddddd;
    padding: 30px;
    border-radius: 5px;
    margin: 5px;
    width: 300px;
}
.classtime_ul h3{
    font-size: 1.8rem;
    padding: 5px 10px;
    margin-bottom: 5px;
    background-color: #32707e;;
    color: #ffffff;
    border-radius: 5px;
    display: inline;
}
.classtime_ul h4{
    color: #285964;
    font-weight: 700;
    font-size: 1.3rem;
    margin-top: 10px;
}
.background_white h5{
    text-align: center;
    color: #285964;
    font-size: 1.3rem;
}
.background_white h6{
    text-align: center;
    text-decoration: none;
    color: #285964;
    font-weight: 700;
    font-size: 1.3rem;
    padding-bottom: 20px;
}


@media screen and (max-width: 360px){
    .classtime_ul>li{
        padding:20px 10px;
    }

}
</style>
<?php include __DIR__ .'/everyone_navbar.php';?>
<!-- 此網頁麵包穴更改 -->
<div id="breadcrumb">
        <ul class="wrap breadcrumb">
            <li><a href="index.php">首頁</a></li>
            <li>授課時間</li>
        </ul>
    </div>
 <!-- 此為網頁內容  -->
<div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
<div class="background_gray">
    <div class="wrap background_white">
        <div class="text">
            <h2>&nbsp授課時間&nbsp</h2>
        </div>
        <ul class="classtime_ul">
            <li><h3>禮拜三</h3><h4>15:00~16:30 畫室<br>19:00~20:30 畫室<br>(社區大學人形公仔班)</h4></li>
            <li><h3>禮拜四</h3><h4>16:30~18:00 畫室<br>19:30~21:00 E-Go社區</h4></li>
            <li><h3>禮拜五</h3><h4>16:00~17:30 耶魯補習班<br>19:00~20:30 畫室<br>(社區大學人形公仔班)</h4></li>
            <li><h3>禮拜六</h3><h4>09:30~11:00 畫室<br>13:30~15:00 畫室<br>15:30~17:00 畫室</h4></li>
        </ul>
        <h5>歡迎來電詢問相關課程問題</h5>
        <h6 href="tel:0936-270-907">0936-270-907</h6>          
    </div>
</div>
<?php include __DIR__ .'/everyone_foot.php';?>