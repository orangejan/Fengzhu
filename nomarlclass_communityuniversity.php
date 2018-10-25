<?php include __DIR__ .'/everyone_head.php';?>
<!-- 此網頁title寫在下方 -->
<title>社區大學人形公仔班|劉鳳珠美術‧黏土才藝教室</title>
<!-- 此網頁css寫在下方 -->
<?php include __DIR__ .'/everyone_css.php';?>
<style>
    .location_img {
        display: flex;
        margin-top: 20px;
        justify-content: center;
        flex-wrap: wrap;
        box-shadow: 0 0 5px #dddddd;
        margin-bottom: 20px;
    }

    .location_RD_img {
        display: none;
    }

    .location_img li {
        width: 330px;
        height: 400px;
        padding: 10px;
    }

    .location_img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    h2 {
        color: #45a9a0;
        font-weight: 600;
        line-height: 2.4rem;
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    h3 {
        text-align: center;
        color: #285964;
        font-weight: 600;
        text-align-last: left;
        margin: 30px 80px;
        line-height: 50px;
        text-align: start;
    }
    h3 img{
        width: 100%;
    }

    h4 {
        color: #ffffff;
        font-size: 1.5rem;
        background: #45a9a0;
        margin: 25px 50px 10px 50px;
        padding: 15px 20px;
        text-align: center;
    }

    /* /////////////////////////      media screen  以下  /////////////////////////       */
    @media screen and (max-width: 1196px) {
        .location_img li {
            width: 350px;
        }
    }

    @media screen and (max-width: 414px) {
        .location_img {
            display: none;
        }

        .location_RD_img {
            display: flex;
            width: 100%;
        }

        .location_RD_img a {
            display: block;
            width: 250px;
            padding: 3px;
        }

        .location_RD_img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        h2 {
            font-size: 18px;
            margin-top: 15px;
        }

        h3 {
            margin: 10px 15px;
            font-size: 15px;
            font-weight: 500;
            line-height: 30px;
            text-align: justify;
        }

        h4 {
            margin: 10px 0px;
        }
        h5{
            text-align: center;
            color: #285964;
            font-size: 1.3rem;
            font-weight: 600;
        }
        h6{
            text-align: center;
            text-decoration: none;
            color: #285964;
            font-weight: 700;
            font-size: 1.3rem;
            padding-bottom: 20px;
        }
</style>
<?php include __DIR__ .'/everyone_navbar.php';?>
<link rel="stylesheet" href="css/lightbox.css">
<!-- 此網頁麵包穴更改 -->
<div id="breadcrumb">
        <ul class="wrap breadcrumb">
            <li><a href="index.php">首頁</a></li>
            <li><a href="nomarlclass.php">一般課程介紹</a></li>
            <li>社區大學人形公仔班</li>
        </ul>
    </div>
 <!-- 此為網頁內容  -->
 <div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
    <div class="background_gray">
        <div class="wrap background_white">
            <div class="text">
                <h2>&nbsp社區大學人形公仔班&nbsp</h2>
            </div>
            <div>
                <ul class="location_img">
                    <li><img src="img/nomarlclass/communityuniversity/communityuniversity-1.png" alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片1"></li>
                    <li><img src="img/nomarlclass/communityuniversity/communityuniversity-2.png" alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片2"></li>
                    <li><img src="img/nomarlclass/communityuniversity/communityuniversity-3.png" alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片3"></li>
                    <li><img src="img/nomarlclass/communityuniversity/communityuniversity-4.png" alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片4"></li>
                </ul>
                <ul class="location_RD_img">
                    <a class="example-image-link transition2" href="img/nomarlclass/communityuniversity/communityuniversity-1.png"
                       data-lightbox="example-set" data-title="">
                        <img class="example-image" src="img/nomarlclass/communityuniversity/communityuniversity-1.png"
                             alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片1"/>
                    </a>
                    <a class="example-image-link transition2" href="img/nomarlclass/communityuniversity/communityuniversity-2.png"
                       data-lightbox="example-set" data-title="">
                        <img class="example-image" src="img/nomarlclass/communityuniversity/communityuniversity-2.png"
                             alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片2"/>
                    </a>
                    <a class="example-image-link transition2" href="img/nomarlclass/communityuniversity/communityuniversity-3.png"
                       data-lightbox="example-set" data-title="">
                        <img class="example-image" src="img/nomarlclass/communityuniversity/communityuniversity-3.png"
                             alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片3"/>
                    </a>
                    <a class="example-image-link transition2" href="img/nomarlclass/communityuniversity/communityuniversity-4.png"
                       data-lightbox="example-set" data-title="">
                        <img class="example-image" src="img/nomarlclass/communityuniversity/communityuniversity-4.png"
                             alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片4"/>
                    </a>
                </ul>
            </div>
            <h2>藝術是一種享受，一切享受中最迷人的享受</h2>
            <h3><img src="img/nomarlclass/communityuniversity/communityuniversity-9.jpg" alt="劉鳳珠美術・黏土才藝教室學生互動">最重要的是在黏土創作過程中，社大同學與老師都藉由「玩土」找回「童心樂趣」。<br>觀察周遭人事物借由一雙巧手用心的揉捻而成，所以每一件作品都是獨一無二的產品，希望更多人能喜歡進而到基隆社區大學學習，將生活中的點點滴滴化成無數美妙作品增添生活情趣，也可藉由作品教育孩童真善美的觀念更能在遭遇不順利時將不愉快的心情轉換為創作的動力，達到平靜的狀態。</h3>
            <h4>免費體驗一堂課</h4>
            <h3>採團體班招生， 一對一教學現場解說黏土技法。</h3>
            <ul class="location_img">
                <li><img src="img/nomarlclass/communityuniversity/communityuniversity-5.png" alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片5"></li>
                <li><img src="img/nomarlclass/communityuniversity/communityuniversity-6.png" alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片6"></li>
                <li><img src="img/nomarlclass/communityuniversity/communityuniversity-7.png" alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片7"></li>
                <li><img src="img/nomarlclass/communityuniversity/communityuniversity-8.png" alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片8"></li>
            </ul>
            <ul class="location_RD_img">
                <a class="example-image-link transition2" href="img/nomarlclass/communityuniversity/communityuniversity-5.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/communityuniversity/communityuniversity-5.png"
                         alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片5"/>
                </a>
                <a class="example-image-link transition2" href="img/nomarlclass/communityuniversity/communityuniversity-6.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/communityuniversity/communityuniversity-6.png"
                         alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片6"/>
                </a>
                <a class="example-image-link transition2" href="img/nomarlclass/communityuniversity/communityuniversity-7.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/communityuniversity/communityuniversity-7.png"
                         alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片7"/>
                </a>
                <a class="example-image-link transition2" href="img/nomarlclass/communityuniversity/communityuniversity-8.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/communityuniversity/communityuniversity-8.png"
                         alt="劉鳳珠美術・黏土才藝教室社區大學人形公仔班圖片8"/>
                </a>
            </ul>
            <h5>歡迎來電詢問相關課程問題</h5>
            <h6 href="tel:0936-270-907">0936-270-907</h6>
            <?php include __DIR__ .'/everyone_foot.php';?>
            <script src="js/lightbox.js"></script>
            <script>
                lightbox.option({
                    'resizeDuration': 200,
                    'wrapAround': true,
                    'alwaysShowNavOnTouchDevices':true
                })
            </script>