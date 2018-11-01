<?php include __DIR__ .'/everyone_head.php';?>
<!-- 此網頁title寫在下方 -->
<title>專業美術班|劉鳳珠美術‧黏土才藝教室</title>
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
        color: #285964;
        font-weight: 600;
        text-align-last: left;
        margin: 30px 80px;
        line-height: 50px;
        text-align: start;
    }
    .div_img{
        width: 800px;
        margin: 20px auto;
    }
    .div_img img{
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
    /* /////////////////////////      media screen  以下  /////////////////////////       */
    @media screen and (max-width: 1196px) {
        .location_img li {
            width: 350px;
        }
        .div_img {
            width: auto;
            margin: 15px;
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

</style>
<?php include __DIR__ .'/everyone_navbar.php';?>
<link rel="stylesheet" href="css/lightbox.css">
<!-- 此網頁麵包穴更改 -->
<div id="breadcrumb">
        <ul class="wrap breadcrumb">
            <li><a href="index.php">首頁</a></li>
            <li><a href="nomarlclass.php">一般課程介紹</a></li>
            <li>專業美術班</li>
        </ul>
    </div>
 <!-- 此為網頁內容  -->
 <div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
    <div class="background_gray">
        <div class="wrap background_white">
            <div class="text">
                <h2>&nbsp專業美術班&nbsp</h2>
            </div>
            <div>
                <ul class="location_img">
                    <li><img src="img/nomarlclass/professionalart/professionalart-1.png" alt="劉鳳珠美術・黏土才藝教室專業美術班圖片1"></li>
                    <li><img src="img/nomarlclass/professionalart/professionalart-2.png" alt="劉鳳珠美術・黏土才藝教室專業美術班圖片2"></li>
                    <li><img src="img/nomarlclass/professionalart/professionalart-3.png" alt="劉鳳珠美術・黏土才藝教室專業美術班圖片3"></li>
                    <li><img src="img/nomarlclass/professionalart/professionalart-4.png" alt="劉鳳珠美術・黏土才藝教室專業美術班圖片4"></li>
                </ul>
                <ul class="location_RD_img">
                    <a class="example-image-link transition2" href="img/nomarlclass/professionalart/professionalart-1.png"
                       data-lightbox="example-set" data-title="">
                        <img class="example-image" src="img/nomarlclass/professionalart/professionalart-1.png"
                             alt="劉鳳珠美術・黏土才藝教室專業美術班圖片1"/>
                    </a>
                    <a class="example-image-link transition2" href="img/nomarlclass/professionalart/professionalart-2.png"
                       data-lightbox="example-set" data-title="">
                        <img class="example-image" src="img/nomarlclass/professionalart/professionalart-2.png"
                             alt="劉鳳珠美術・黏土才藝教室專業美術班圖片2"/>
                    </a>
                    <a class="example-image-link transition2" href="img/nomarlclass/professionalart/professionalart-3.png"
                       data-lightbox="example-set" data-title="">
                        <img class="example-image" src="img/nomarlclass/professionalart/professionalart-3.png"
                             alt="劉鳳珠美術・黏土才藝教室專業美術班圖片3"/>
                    </a>
                    <a class="example-image-link transition2" href="img/nomarlclass/professionalart/professionalart-4.png"
                       data-lightbox="example-set" data-title="">
                        <img class="example-image" src="img/nomarlclass/professionalart/professionalart-4.png"
                             alt="劉鳳珠美術・黏土才藝教室專業美術班圖片4"/>
                    </a>
                </ul>
            </div>
            <h2>藝術是一種享受，一切享受中最迷人的享受</h2>
            <div class="div_img"><img src="img/nomarlclass/professionalart/professionalart-12.png" alt="劉鳳珠美術・黏土才藝教室學生互動"></div>

            <h3>美是藝術的目的和推動力。<br>對於成人無論你是什麼身份，上班族、退休人士、家庭主婦，生活多半在繁忙、緊張和壓力中渡過。休閒活動除了咖啡、電影、運動、逛街好像沒有其他的選擇，日常生活已經過多交際，不妨趁著休閒時間與自己來場心靈深處的交流。藝術學習不僅可以靜心，還能學習繪畫技巧。培養邏輯性與想像力、訓練觀察力、個體與材質寫實描繪能力、加強美感與畫面構圖的能力，還可以盡情抒發情緒於創作之中。休閒之餘開拓另一專業領域，讓自己的精神生活更加豐富多彩。</h3>
            <h4>免費體驗一堂課</h4>
            <h3>全部小班制教學，從初、中、高階技法創意踏實學習，培養專業繪畫能力。</h3>
            <ul class="location_img">
                <li><img src="img/nomarlclass/professionalart/professionalart-5.png" alt="劉鳳珠美術・黏土才藝教室專業美術班圖片5"></li>
                <li><img src="img/nomarlclass/professionalart/professionalart-6.png" alt="劉鳳珠美術・黏土才藝教室專業美術班圖片6"></li>
                <li><img src="img/nomarlclass/professionalart/professionalart-7.png" alt="劉鳳珠美術・黏土才藝教室專業美術班圖片7"></li>
                <li><img src="img/nomarlclass/professionalart/professionalart-8.png" alt="劉鳳珠美術・黏土才藝教室專業美術班圖片8"></li>
            </ul>
            <ul class="location_RD_img">
                <a class="example-image-link transition2" href="img/nomarlclass/professionalart/professionalart-5.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/professionalart/professionalart-5.png"
                         alt="劉鳳珠美術・黏土才藝教室專業美術班圖片5"/>
                </a>
                <a class="example-image-link transition2" href="img/nomarlclass/professionalart/professionalart-6.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/professionalart/professionalart-6.png"
                         alt="劉鳳珠美術・黏土才藝教室專業美術班圖片6"/>
                </a>
                <a class="example-image-link transition2" href="img/nomarlclass/professionalart/professionalart-7.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/professionalart/professionalart-7.png"
                         alt="劉鳳珠美術・黏土才藝教室專業美術班圖片7"/>
                </a>
                <a class="example-image-link transition2" href="img/nomarlclass/professionalart/professionalart-8.png"
                   data-lightbox="example-set" data-title="">
                    <img class="example-image" src="img/nomarlclass/professionalart/professionalart-8.png"
                         alt="劉鳳珠美術・黏土才藝教室專業美術班圖片8"/>
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