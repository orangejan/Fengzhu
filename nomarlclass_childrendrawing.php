<?php include __DIR__ . '/everyone_head.php'; ?>
<!-- 此網頁title寫在下方 -->
<title>兒童繪畫班|劉鳳珠美術‧黏土才藝教室</title>
<!-- 此網頁css寫在下方 -->
<?php include __DIR__ . '/everyone_css.php'; ?>
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
<?php include __DIR__ . '/everyone_navbar.php'; ?>
<link rel="stylesheet" href="css/lightbox.css">
<!-- 此網頁麵包穴更改 -->
<div id="breadcrumb">
    <ul class="wrap breadcrumb">
        <li><a href="index.php">首頁</a></li>
        <li><a href="nomarlclass.php">一般課程介紹</a></li>
        <li>兒童繪畫班</li>
    </ul>
</div>
<!-- 此為網頁內容  -->
<div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
<div class="background_gray">
    <div class="wrap background_white">
        <div class="text">
            <h2>&nbsp兒童繪畫班&nbsp</h2>
        </div>
        <div>
            <ul class="location_img">
                <li><img src="img/nomarlclass/childrendrawing/childrendrawing-1.png" alt="劉鳳珠美術・黏土才藝教室兒童畫圖片1"></li>
                <li><img src="img/nomarlclass/childrendrawing/childrendrawing-2.png" alt="劉鳳珠美術・黏土才藝教室兒童畫圖片2"></li>
                <li><img src="img/nomarlclass/childrendrawing/childrendrawing-3.png" alt="劉鳳珠美術・黏土才藝教室兒童畫圖片3"></li>
                <li><img src="img/nomarlclass/childrendrawing/childrendrawing-4.png" alt="劉鳳珠美術・黏土才藝教室兒童畫圖片4"></li>
            </ul>
            <ul class="location_RD_img">
                <a class="example-image-link transition2" href="img/nomarlclass/childrendrawing/childrendrawing-1.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/childrendrawing/childrendrawing-1.png"
                         alt="劉鳳珠美術・黏土才藝教室兒童畫圖片1"/>
                </a>
                <a class="example-image-link transition2" href="img/nomarlclass/childrendrawing/childrendrawing-2.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/childrendrawing/childrendrawing-2.png"
                         alt="劉鳳珠美術・黏土才藝教室兒童畫圖片2"/>
                </a>
                <a class="example-image-link transition2" href="img/nomarlclass/childrendrawing/childrendrawing-3.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/childrendrawing/childrendrawing-3.png"
                         alt="劉鳳珠美術・黏土才藝教室兒童畫圖片3"/>
                </a>
                <a class="example-image-link transition2" href="img/nomarlclass/childrendrawing/childrendrawing-4.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/childrendrawing/childrendrawing-4.png"
                         alt="劉鳳珠美術・黏土才藝教室兒童畫圖片4"/>
                </a>
            </ul>
        </div>
        <h2>從生活中培養孩子們的美感，讓美術成為生活的一部份</h2>
        <h3><img src="img/nomarlclass/childrendrawing/childrendrawing-26.png" alt="劉鳳珠美術・黏土才藝教室學生互動">繪畫不是數學，沒有公式，沒有標準答案。<br>兒童繪畫是一個充滿創意與想像的世界！透過線條、塗鴉、色彩，畫中的世界有孩子的記憶，有孩子的秘密故事，有孩子的願望與祝福。繪畫可以培養孩子想像力、創造力以及觀察力，透過鼓勵與讚美，會讓孩子的自信心一天一天的增加！正確的繪畫指導可以豐富孩子的生活體驗開拓生命的視野，繪畫是想像力的創造也是情感的抒發方式，每一個孩子都應該享受屬於他自己快樂的繪畫世界。</h3>

        <h4>免費體驗一堂課</h4>
        <h3>幼稚園大班以下：初步以色鉛筆及粉蠟筆的色彩混合訓練、構圖配置以及想像力訓練，之後進入線條繪畫與創意表現。</h3>
        <h3>三年級以上：
            開始接受各類水彩色彩技法交互學習，從透視、結構、筆法、光線明暗、色階表達到各類靜物、材質、人物、風景、花鳥、昆蟲、動物之一系列完整的教學</h3>
        <ul class="location_img">
            <li><img src="img/nomarlclass/childrendrawing/childrendrawing-5.png" alt="劉鳳珠美術・黏土才藝教室兒童畫圖片5"></li>
            <li><img src="img/nomarlclass/childrendrawing/childrendrawing-6.png" alt="劉鳳珠美術・黏土才藝教室兒童畫圖片6"></li>
            <li><img src="img/nomarlclass/childrendrawing/childrendrawing-7.png" alt="劉鳳珠美術・黏土才藝教室兒童畫圖片7"></li>
            <li><img src="img/nomarlclass/childrendrawing/childrendrawing-8.png" alt="劉鳳珠美術・黏土才藝教室兒童畫圖片8"></li>
        </ul>
        <ul class="location_RD_img">
            <a class="example-image-link transition2" href="img/nomarlclass/childrendrawing/childrendrawing-5.png"
               data-lightbox="example-set" data-title="">
                <img class="example-image" src="img/nomarlclass/childrendrawing/childrendrawing-5.png"
                     alt="劉鳳珠美術・黏土才藝教室兒童畫圖片5"/>
            </a>
            <a class="example-image-link transition2" href="img/nomarlclass/childrendrawing/childrendrawing-6.png"
               data-lightbox="example-set" data-title="">
                <img class="example-image" src="img/nomarlclass/childrendrawing/childrendrawing-6.png"
                     alt="劉鳳珠美術・黏土才藝教室兒童畫圖片6"/>
            </a>
            <a class="example-image-link transition2" href="img/nomarlclass/childrendrawing/childrendrawing-7.png"
               data-lightbox="example-set" data-title="">
                <img class="example-image" src="img/nomarlclass/childrendrawing/childrendrawing-7.png"
                     alt="劉鳳珠美術・黏土才藝教室兒童畫圖片7"/>
            </a>
            <a class="example-image-link transition2" href="img/nomarlclass/childrendrawing/childrendrawing-8.png"
               data-lightbox="example-set" data-title="">
                <img class="example-image" src="img/nomarlclass/childrendrawing/childrendrawing-8.png"
                     alt="劉鳳珠美術・黏土才藝教室兒童畫圖片8"/>
            </a>
        </ul>
        <h5>歡迎來電詢問相關課程問題</h5>
        <h6 href="tel:0936-270-907">0936-270-907</h6>
        <?php include __DIR__ . '/everyone_foot.php'; ?>
                    <script src="js/lightbox.js"></script>
                    <script>
                        lightbox.option({
                            'resizeDuration': 200,
                            'wrapAround': true,
                            'alwaysShowNavOnTouchDevices':true
                        })
                    </script>