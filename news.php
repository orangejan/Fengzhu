<?php include __DIR__ .'/everyone_head.php';?>
<!-- 此網頁title寫在下方 -->
<title>最新消息|劉鳳珠美術‧黏土才藝教室</title>
<!-- 此網頁css寫在下方 -->
<style>
     .img{
        width: 100%;
        height:30vh;
        object-fit: cover;
        opacity: .6;
    }
    .background_gray{
        background-color: #F6F6F6;
    }
    .background_white{
        background-color: #ffffff;
        border-top: solid 20px #285964;
        margin-top: -80px;
        margin-bottom: 20px;
        position: relative;
        box-shadow: 0px 2px 5px #00000065;
    }
    .text{
        margin-top: 20px;
        text-align: center;
    }
    .text h2{
        color: #285964;
        font-weight: 700;
        font-size: 2.5rem;
        background: #ffffff;
    }
    .text h2::before , .text h2::after{
        content: "/ / / / / / / / / / / / / / / / / / / / / ";
        padding: 0 2px 0 2px;
        font-size: 1.5rem;
        color: rgb(68, 139, 155);
        opacity: .6;
        font-weight:200;
    } 
    .main{
        padding: 30px;
        display: grid;
        justify-items: center;
    }
    .main_news{
        display: flex;
        margin: 20px;
        padding: 10px;
        box-shadow: 0 0 5px #dddddd;
    }
    .main_news img{
        width: 100%;
    }
    .main_news_img{
        width: 100%;
    }
    .main_box{
        width: 100px;
        height: 100px;
        background-color: #285964;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
    }
    .main_box p{
        color: #ffffff; 
        text-align: center;
    }
    .main_box_p1{
        font-size:1.9rem;
        margin-bottom: -1vmin;
    }
    .main_box_p2{
        border-top: 1px solid #ffffff;
        font-size: 2.3rem;
    }
    .main_text{
        display: grid;
        align-content: center;
        width: 100%;
    }
    .main h2{
        color: #32707e;
        font-weight: 600;
        font-size: 2.5rem;
        padding: 20px 0 20px 30px;
    }
    .main h3{
        color: #23505a;
        font-weight: 600;
        font-size: 1.5rem;
        padding: 0px 20px 20px 30px;
        text-align: justify;
    }
    .main_text a{
        text-decoration: none;
        width: 100%;
        color: #ffffff; 
        text-align: center;
        font-weight: 600;
        font-size: 1.5rem;
        background: #285964;
        border-radius: 5px;
        padding: 10px 20px;
        margin-right: 20px;
    }
    .main_text a:hover{
        transition: all .5s;
        background: #4293a5;
    }
    .main_text_a{
        text-align: right;
        margin-bottom: 10px;
    }
    /* ////////////      media screen  以下  //////////////       */
    @media screen and (max-width: 1196px){
        .img{
            height:100%;
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
        .main_box_p1 {
            font-size: 1.6rem;
        }
        .main_box_p2 {
            font-size: 1.8rem;
        }
        .main h2 {
            font-size: 1.9rem;
        }    
        .main h3 {
            font-size: 1.3rem;
        }
        .main_text a{
            font-size: 1rem;
        } 
    }
    @media screen and (max-width: 955px){
        .text h2{
            font-size: 1.5rem;
        }
        .text h2::before , .text h2::after{
            content: "/ / / / / / / / / / / / / / ";
            padding: 0 2px 0 2px;
            font-size: 1.5rem;
            color: rgb(68, 139, 155);
            opacity: .6;
            font-weight:200;
        }
        .main h2 {
            font-size: 1.5rem;
            padding: 0px 0 10px 15px;
        }    
        .main h3 {
            font-size: 1rem;
            padding: 0px 0px 20px 0px;
        } 
        .main_box {
            width: 50px;
            height: 50px;
        }
        .main_box_p1 {
            font-size: 0.9rem;
        }
        .main_box_p2 {
            font-size: 1rem;
        }
        .main_text a{
            font-size: 0.8rem;
            padding: 5px 10px;
            margin-right: 0px;
        }
    }
    @media screen and (max-width: 740px){
        .main_news{
            flex-wrap: wrap;
        }
        .main_box{
            position: absolute;
        }
        .main {
            padding: 10px;
        }
        .text h2::before, .text h2::after{
            content: "/ / / / / / / / ";
            font-size: 1rem;
        }
        .main h3 {
            padding: 5px 0px 20px 0px;
        } 
        .main h2{
            padding: 0px ;
            font-size: 1.4rem;
            text-align:center;
            background: #23505a;
            color: white;
        }
    }
    @media screen and (max-width: 360px){
        .text p{
            font-size: .7rem;
        }
        .text h2::before, .text h2::after {
            content: "/ / / / / / / / ";
            font-size: 1rem;
        }
    }
</style>
<?php include __DIR__ .'/everyone_navbar.php';?>
<!-- 此網頁麵包穴更改 -->
<div id="breadcrumb">
        <ul class="wrap breadcrumb">
            <li><a href="index.php">首頁</a></li>
            <li>最新消息</li>
        </ul>
    </div>
 <!-- 此為網頁內容  -->
 <div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
    <div class="background_gray">
        <div class="wrap background_white">
            <div class="text">
                <h2>&nbsp最新消息&nbsp</h2>
            </div>    
            <div class="main wrap">
                <div class="main_news">
                    <div class="main_news_img"><img src="img/IMG_9727.JPG" alt=""></div>
                    <div class="main_box"><p class="main_box_p1">07.15</p><p class="main_box_p2">2018</p></div>
                    <div class="main_text">
                        <h2>基隆仲夏樂集-多肉植物DIY</h2>
                        <h3>基隆市海洋廣場上舉辦市集活動熱鬧登場，歡迎大家相招一起來玩多肉植物DIY。活動時間:7/20(五)、7/22(日)兩天晚上6點－9點歡迎到現場參與活動。</h3>
                        <div class="main_text_a"><a href="https://www.facebook.com/art24322684/posts/1752717511509589">了解更多...</a></div>
                    </div>
                </div>
                <div class="main_news">
                    <div class="main_news_img"><img src="img/IMG_9727.JPG" alt=""></div>
                    <div class="main_box"><p class="main_box_p1">06.28</p><p class="main_box_p2">2018</p></div>
                    <div class="main_text">
                        <h2>媽媽成長班招生中</h2>
                        <h3>「視覺」是將瀏覽者留下的主力，「文字」是讓客戶留更久的動力，因此無須華麗的詞藻堆砌，簡單一句話就可通達消費者心裡的最深處建立起無可取代的品牌效益。</h3>
                        <div class="main_text_a"><a href="">了解更多...</a></div>
                    </div>
                </div>
                <div class="main_news">
                    <div class="main_news_img"><img src="img/IMG_9727.JPG" alt=""></div>
                    <div class="main_box"><p class="main_box_p1">06.28</p><p class="main_box_p2">2018</p></div>
                    <div class="main_text">
                        <h2>媽媽成長班招生中</h2>
                        <h3>「視覺」是將瀏覽者留下的主力，「文字」是讓客戶留更久的動力，因此無須華麗的詞藻堆砌，簡單一句話就可通達消費者心裡的最深處建立起無可取代的品牌效益。</h3>
                        <div class="main_text_a"><a href="">了解更多...</a></div>
                    </div>
                </div>
                <div class="main_news">
                    <div class="main_news_img"><img src="img/IMG_9727.JPG" alt=""></div>
                    <div class="main_box"><p class="main_box_p1">06.28</p><p class="main_box_p2">2018</p></div>
                    <div class="main_text">
                        <h2>媽媽成長班招生中</h2>
                        <h3>「視覺」是將瀏覽者留下的主力，「文字」是讓客戶留更久的動力，因此無須華麗的詞藻堆砌，簡單一句話就可通達消費者心裡的最深處建立起無可取代的品牌效益。</h3>
                        <div class="main_text_a"><a href="">了解更多...</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include __DIR__ .'/everyone_foot.php';?>