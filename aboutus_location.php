<?php include __DIR__ . '/everyone_head.php'; ?>
<!-- 此網頁title寫在下方 -->
<title>環境介紹|劉鳳珠美術‧黏土才藝教室</title>
<!-- 此網頁css寫在下方 -->
<?php include __DIR__ . '/everyone_css.php'; ?>
<link rel="stylesheet" href="css/lightbox.css">
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

    h1 {
        color: #45a9a0;
        font-weight: 600;
        line-height: 2.4rem;
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    h2 {
        font-size: 20px;
        color: #000000;
        margin-top: 15px;
        line-height: 24px;
        padding: 10px;
        font-weight: normal;
        text-align: center;
        border-bottom: 1px solid #efefef;
    }

    h3 {
        text-align: center;
        color: #285964;
        font-weight: 600;
        text-align-last: left;
        margin: 30px 80px;
        line-height: 50px;
        text-align: center;
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

        h1 {
            font-size: 22px;
            margin-top: 15px;
        }

        h2 {
            font-size: 15px;
            margin-top: 0px;
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
    }
</style>
<?php include __DIR__ . '/everyone_navbar.php'; ?>
<!-- 此網頁麵包穴更改 -->
<div id="breadcrumb">
    <ul class="wrap breadcrumb">
        <li><a href="index.php">首頁</a></li>
        <li><a href="aboutus.php">關於我們</a></li>
        <li>環境介紹</li>
    </ul>
</div>
<!-- 此為網頁內容  -->
<div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
<div class="background_gray">
    <div class="wrap background_white">
        <div class="text">
            <h2>&nbsp環境介紹&nbsp</h2>
        </div>
        <div>
            <ul class="location_img">
                <li><img src="img/location/location-1.jpg" alt="劉鳳珠美術・黏土才藝教室環境圖片1"></li>
                <li><img src="img/location/location-2.jpg" alt="劉鳳珠美術・黏土才藝教室環境圖片2"></li>
                <li><img src="img/location/location-3.jpg" alt="劉鳳珠美術・黏土才藝教室環境圖片3"></li>
                <li><img src="img/location/location-4.jpg" alt="劉鳳珠美術・黏土才藝教室環境圖片4"></li>
            </ul>
            <ul class="location_RD_img">
                <a class="example-image-link transition2" href="img/location/location-1.jpg"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/location/location-1.jpg"
                         alt="劉鳳珠美術・黏土才藝教室環境圖片1"/>
                </a>
                <a class="example-image-link transition2" href="img/location/location-2.jpg"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/location/location-2.jpg"
                         alt="劉鳳珠美術・黏土才藝教室環境圖片2"/>
                </a>
                <a class="example-image-link transition2" href="img/location/location-3.jpg"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/location/location-3.jpg"
                         alt="劉鳳珠美術・黏土才藝教室環境圖片3"/>
                </a>
                <a class="example-image-link transition2" href="img/location/location-4.jpg"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/location/location-4.jpg"
                         alt="劉鳳珠美術・黏土才藝教室環境圖片4"/>
                </a>
            </ul>
        </div>
        <h1>劉鳳珠美術・黏土才藝教室</h1>
        <h2>一個提供優質的環境，讓孩子輕鬆的學習</h2>
        <h3>「劉鳳珠美術・黏土才藝教室」成立於一九九三年，座落於基隆市安樂區人文薈萃的安樂路上，鄰近安樂圖書館及建德國小。<br>
            基於實踐本機構致力推廣之造型/視覺藝術教育理念，「劉鳳珠美術・黏土才藝教室」提供一個用心經營的環境，讓學生體驗專業、舒適的藝術創作學習空間。<br>不論您是想學專業繪畫的小朋友、對黏土有興趣的大朋友、各類術科考試、或是專業人士進修。<br>

            劉老師都會以不同年齡、程度、能力進行個別指導，使您的觀察力、創意造型能力、色彩敏銳度，都能有所啟發與進步。

            因此，不論您是以興趣學習繪畫、黏土、或是準備術科考試、專業課程、親子同樂班或是專業黏土證書班，

            老師都會以個別進度指導，有了多元的教學指導，可讓您的觀察、創意造型能力、色彩敏銳度，更能向上無限延伸。

            歡迎您來劉鳳珠美術・黏土才藝教室學習多元而紥實的美術課程。</h3>
        <h4>免費體驗一堂課</h4>
        <h3>一般課程：兒童繪畫班、兒童成人黏土班、專業美術班、術科考試班、社區大學人形公仔班。</h3>
        <h3>專業證書課程：日本人形雕塑班、日本兒童證書班、DECO花藝證書班、多肉植物班、迷你食物班、創意甜品證書班。</h3>
        <h3>教授課程：素描、水彩、色鉛筆、粉彩、油畫、壓克力、水墨畫、黏土、人形雕塑、花藝等美術技巧。</h3>
        <?php include __DIR__ . '/everyone_foot.php'; ?>
        <script src="js/lightbox.js"></script>
        <script>
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true,
                'alwaysShowNavOnTouchDevices':true
            })
        </script>

