<?php include __DIR__ .'/everyone_head.php';?>
<!-- 此網頁title寫在下方 -->
<title>一般課程介紹|劉鳳珠美術‧黏土才藝教室</title>
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
    .classtime_ul h3 img{
        width: 100%;
        height: 320px;
        object-fit: cover; 
        box-shadow: 0 0 5px #dddddd;      
    }
    .classtime_ul h4{
        background-color: #4293a5;
        color: #ffffff;
        text-align: center;
        border-radius: 5px;
        font-size: 1.3rem;
        margin-top: 10px;
        padding: 5px;
    }
    .background_white p{
        margin: 10px;
        font-size: 1rem;
        text-align: justify;
    }
    .background_white h5{
        text-align: center;
        color: #285964;
        font-size: 1.3rem;
        font-weight: 600;
    }     
    .background_white h6{
        text-align: center;
        text-decoration: none;
        color: #285964;
        font-weight: 700;
        font-size: 1.3rem;
        padding-bottom: 20px;
    }
    .classtime_ul a {
        display: flow-root;
        text-decoration: none;
        color: #285964;
        text-align: center;
        border: 1px solid #285964;
        background: #ffffff;
        padding: 10px 0px;
    }
    .classtime_ul a:hover{
        background: #285964;
        color: #ffffff;
        transition: .5s all;
    }
    @media screen and (max-width: 740px){
        .classtime_ul {
            padding: 10px;
        }
    }
    @media screen and (max-width: 360px){
        .classtime_ul>li{
            padding:20px  10px;
        }
    }
    
</style>
<?php include __DIR__ .'/everyone_navbar.php';?>
<!-- 此網頁麵包穴更改 -->
<div id="breadcrumb">
        <ul class="wrap breadcrumb">
            <li><a href="index.php">首頁</a></li>
            <li>一般課程介紹</li>
        </ul>
    </div>
 <!-- 此為網頁內容  -->
 <div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
    <div class="background_gray">
        <div class="wrap background_white">
            <div class="text">
                <h2>&nbsp一般課程介紹&nbsp</h2>
            </div>
            <ul class="classtime_ul">
                <li><h3><img src="img/IMG_8626.jpg" alt=""></h3><h4>兒童繪畫班</h4><p>用循序漸進的方式讓孩子練習色彩混合訓練、構圖配置以及繪本創意訓練，之後進入線條繪畫織創意表現。</p><a href="nomarlclass_childrendrawing.php">了解更多</a></li>
                <li><h3><img src="img/IMG_9727.JPG" alt=""></h3><h4>兒童成人黏土班</h4><p>歡迎親子一同參加，不管是大人或是小朋友都能在創作時提升感情以及創意表現能力。</p><a href="nomarlclass_childadultclay.php">了解更多</a></li>
                <li><h3><img src="img/IMG_8626.jpg" alt=""></h3><h4>專業美術班</h4><p>全部小班制教學，從初、中、高階技法創意踏實學習，培養專業繪畫能力。</p><a href="nomarlclass_professionalart.php">了解更多</a></li>
                <li><h3><img src="img/IMG_8626.jpg" alt=""></h3><h4>術科考試班</h4><p>有系統化讓學生擁有美術升學術科應考密技，著重個別加強指導，完整美術升學考試訓練。</p><a href="nomarlclass_majorexams.php">了解更多</a></li>
                <li><h3><img src="img/IMG_8626.jpg" alt=""></h3><h4>社區大學人形公仔班</h4><p>這是一門初階的課程學員必須對黏土捏塑人物有興趣，喜歡玩黏土，細心耐心更是有需要 ，當然會使用美工刀也是不在話下，還有一顆喜歡動手作工藝的心。</p><a href="nomarlclass_communityuniversity.php">了解更多</a></li>
            </ul>
            <h5>歡迎來電詢問相關課程問題</h5>
            <h6 href="tel:0936-270-907">0936-270-907</h6>          
        </div>
    </div>  
<?php include __DIR__ .'/everyone_foot.php';?>