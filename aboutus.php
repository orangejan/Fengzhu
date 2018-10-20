<?php include __DIR__ .'/everyone_head.php';?>
<!-- 此網頁title寫在下方 -->
<title>關於我們|劉鳳珠美術‧黏土才藝教室</title>
<!-- 此網頁css寫在下方 -->
<?php include __DIR__ .'/everyone_css.php';?>
<style>
    .img{
        width: 100%;
        height:30vh;
        object-fit: cover;
        opacity: .6;
    }
    .img_up{
        width: 100%;
        object-fit: cover;
    }
    .mainword{
        margin: 2% 5% 0% 5%;
        border: #dddddd 2px solid;
        text-align: center;
    }
    .mainword h3{
        margin:2% 5%;
        color: #32707e;
        font-weight: 600;
        font-size: 1.3rem;
        text-align-last: left;
        line-height: 2.4rem;
    }
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
        margin: 10px;
        width: 500px;
    }
    .classtime_ul h3 img{
        width: 100%;
        height: 320px;
        object-fit: cover;
        object-position: 50% 20%;
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
        color: #7c7c7c;
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
        display: block;
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
    /* ////////////      media screen  以下  //////////////       */
    @media screen and (max-width: 1196px){
        .img{
            height:100%;
        }
        .text h3::before , .text h3::after{
            content: "/ / / / / / ";
            font-size: .2rem;
        }
        .text h3{
            font-size: 1.5rem;
        }
        .text p {
            font-size: 1rem;
        }
        .background_white {
            border-top: solid 16px #285964;
            margin-top: -80px;
            margin-bottom: 0px;
            position: relative;
            box-shadow: 0px 0px 0px #00000065;
        }
        .classtime_ul>li{
            width: 450px;
        }
    }
    @media screen and (max-width: 955px){
        .text p {
            font-size: 0.9em;
        }
        .text h3{
            font-size: 1.3rem;
        }
        .text h2{
            font-size: 1.2rem;
        }
        .text h2::before , .text h2::after{
            content: "/ / / / / / / / / / / / / / ";
            padding: 0 2px 0 2px;
            font-size: 1.5rem;
            color: rgb(68, 139, 155);
            opacity: .6;
            font-weight:200;
        }
        .classtime_ul>li {
            width: 330px;
        }
    }
    @media screen and (max-width: 740px){
        .main{
            flex-wrap: wrap;
        }
        .text h2::before, .text h2::after{
            content: "/ / / / / / / / ";
            font-size: 1rem;
        }
    }
    @media screen and (max-width: 375px){
        .text h3 {
            font-size: 1.2rem;
        }
        .mainword h3{
            font-size: 15px;
            line-height: 30px;
        }
        .background_white p {
            line-height: 30px;
        }
        .text p{
            font-size: .7rem;
        }
        .text h2::before, .text h2::after {
            content: "/ / / / / / / / ";
            font-size: 1rem;
        }
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
            <li>關於我們</li>
        </ul>
    </div>
 <!-- 此為網頁內容  -->
 <div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
    <div class="background_gray">
        <div class="wrap background_white">
            <div class="text">
                <h2>&nbsp關於我們&nbsp</h2>
            </div>
            <main class="wrap">
                <div><img class="img_up" src="img/IMG_0067.JPG" alt=""></div>
                <div class="mainword"><h3>「劉鳳珠美術・黏土才藝教室」成立於一九九三年,由劉鳳珠老師創立經營。劉老師是在繪畫、黏土擁有多年實務經驗的老師，除了指導學生紮實、專業有系統的繪畫課程外，近來更致力於黏土人形創作的教學。<br>因此，無論您是以興趣為主而學習繪畫、黏土，或是準備各級術科考試以及各種專業證書課程，進而培訓第二專長，劉老師都會以不同年齡、程度、能力進行個別指導，使您的觀察力、創意造型能力、色彩敏銳度，都能有所啟發與進步。</h3>
            </main>
            <ul class="classtime_ul">
                <li><h3><img src="img/Fengzhu.JPG" alt=""></h3><h4>師資介紹</h4><p>劉鳳珠老師致力於兒童美術繪畫以及黏土雕塑的教學，藉由其十來年的豐富教學經驗，以循序漸進的方式讓孩子們學會自己動手玩創意，除了從生活中激發潛能與創造力，並且提供基礎美學涵養的啟蒙，進而豐富孩童的課外生活與培養相關的才藝專長。</p><a href="aboutus_teacher.php">了解更多</a></li>
                <li><h3><img src="img/location/location-2.jpg" alt=""></h3><h4>環境介紹</h4><p>「劉鳳珠美術・黏土才藝教室」座落於基隆市安樂區人文薈萃的安樂路上，鄰近安樂圖書館及建德國小。<br>基於實踐本機構致力推廣之造型/視覺藝術教育理念，「劉鳳珠美術・黏土才藝教室」提供一個用心經營的環境，讓學生體驗專業、舒適的藝術創作學習空間。</p><a href="aboutus_location.php">了解更多</a></li>
            </ul>
        </div>
    </div>
<?php include __DIR__ .'/everyone_foot.php';?>