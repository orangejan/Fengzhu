<?php include __DIR__ .'/everyone_head.php';?>
<!-- 此網頁title寫在下方 -->
<title>多肉植物班|劉鳳珠美術‧黏土才藝教室</title>
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
<link rel="stylesheet" href="css/classcss.css?123">
<link rel="stylesheet" href="css/lightbox.css">
<!-- 此網頁麵包穴更改 -->
<div id="breadcrumb">
        <ul class="wrap breadcrumb">
            <li><a href="index.php">首頁</a></li>
            <li><a href="professionclass.php">專業證書課程</a></li>
            <li>多肉植物班</li>
        </ul>
    </div>
 <!-- 此為網頁內容  -->
 <div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
    <div class="background_gray">
        <div class="wrap background_white">
            <div class="text">
                <h2>&nbsp多肉植物班&nbsp</h2>
            </div>
            <h2>藝術是一種享受，一切享受中最迷人的享受</h2>
            <h3 ><img src="img/professionclass/plant/plant-1.png" alt="劉鳳珠美術・黏土才藝教室DECO花藝證書班" ></h3>

            <h4>免費體驗一堂課</h4>
            <h3>應用較寫實的技巧來設計，透過厚實飽滿葉片形狀和各種不同品種以小品呈現，形成美妙的生活佈置，提升視覺效果，激盪出靈性火花，促使心情愉悅與環境實用擺設的搭配理念，呈現出藝術與麵包花小品多肉植物的精華，而達到視覺藝術美學境界。</h3>

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