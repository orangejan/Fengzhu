<?php include __DIR__ .'/everyone_head.php';?>
<!-- 此網頁title寫在下方 -->
<title>聯絡資訊|劉鳳珠美術‧黏土才藝教室</title>
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
    .google_iframe{
        padding: 30px;
        height: 350px;
    }
    .main{
        padding: 0 30px 30px 30px;
        display: flex;
        flex-wrap:wrap;
        justify-content: space-around;
    }
    .fb_iframe{
        display: flex;
        justify-content: center;
        overflow: hidden;
        box-shadow: 0px 2px 5px #00000065;
    }
    .fb2{
        display: none;
        }
    .fb3{
        display: none;
    }
    .main_right{
        border-left:solid 1px #285964;
        padding-left: 40px;
    }
    .text h3{
        color: #285964;
        font-weight: 700;
        font-size: 2rem;
        background: #ffffff;
    }
    .text h3::before , .text h3::after{
        content: "/ / / / / / / / / / / / / / / / / / / / / ";
        padding: 0 2px 0 2px;
        font-size: .5rem;
        color: rgb(68, 139, 155);
        opacity: .6;
        font-weight:200;
    }
    .text h4{
        display: inline-block;
        color: #285964;
        font-weight: 700;
        font-size: 1.5rem;
        background: #ffffff;
        border: #285964 2px solid;
        margin: 25px 50px 10px 50px;
        padding: 15px 20px;
    }
    .text p{
        margin: 20px 0 0 0;
        color: #285964;
        font-weight: 700;
        font-size: 1.5rem;
    }
    .text h5{
        display: block;
        text-decoration: none;
        background: #32707e;
        color: #ffffff;
        padding: 20px;
        font-size: 1.5rem;
        font-weight: 600;
        margin: 20px 10px;
    }
    .text a{
        text-decoration: none;
    }
    .text p:hover{
        color: #3e8d9e;
    }
    /* /////////////////////////      media screen  以下  /////////////////////////       */
    @media screen and (max-width: 1196px){
        .img{
            height:100%;
        }
        .google_iframe {
            padding: 20px;
            height: 250px;
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
        .text h5 {
            font-size: 1rem;
        }
        .background_white {
            border-top: solid 16px #285964;
            margin-top: -80px;
            margin-bottom: 0px;
            position: relative;
            box-shadow: 0px 0px 0px #00000065;
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
        .google_iframe {
            padding: 10px 20px;
            height: 250px;
        }
        .main{
            flex-wrap: nowrap;
        } 
        .fb_iframe{
            width: 50%;
        }
        .main_right{
            width: 50%;
        }
        .fb1{
            display: none;
        }
        .fb2{
            display:block;
        }
        .main_right{
            padding-left: 20px;
        }
        .text p {
            font-size: 0.9em;
        }
        .text h3{
            font-size: 1.3rem;
        }
    }
    @media screen and (max-width: 740px){
        .main{
            flex-wrap: wrap;
        }
        .fb_iframe{
            width: 100%;
            height: 350px;
        }
        .main_right{
            width: 100%;
        }
        .text h2::before, .text h2::after{
            content: "/ / / / / / / / ";
            font-size: 1rem;
        }
        .main_right{
            border-left:solid 0px #285964;
            padding: 0px;
        }
    }
    @media screen and (max-width: 360px){
        .text h4{
            font-size: 1rem;
        }
        .text h3 {
            font-size: 1.2rem;
        }
        .text p{
            font-size: .7rem;
        }
        .text h5{
            font-size: .9rem;
        }
        .text h2::before, .text h2::after {
            content: "/ / / / / / / / ";
            font-size: 1rem;
        }
        .main_right{
            border-left:solid 0px #285964;
            padding: 0px;
        }
        .fb2{
            display:none;
        }
        .fb3{
            display:block;
        }
    }
</style>
<?php include __DIR__ .'/everyone_navbar.php';?>
<!-- 此網頁麵包穴更改 -->
<div id="breadcrumb">
        <ul class="wrap breadcrumb">
            <li><a href="index.php">首頁</a></li>
            <li>聯絡資訊</li>
        </ul>
</div>
 <!-- 此為網頁內容  -->
 <div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
    <div class="background_gray">
        <div class="wrap background_white">
            <div class="text">
                <h2>&nbsp聯絡資訊&nbsp</h2>
            </div>
            <div class="google_iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.4355530834932!2d121.72173571539305!3d25.12096154095296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x345d4e014a5f648b%3A0x4de54c7f61ddd909!2z5YqJ6bOz54-g576O6KGT6buP5Zyf5omN6Jed54-t!5e0!3m2!1szh-TW!2stw!4v1533635666246" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
            <div class="main">
                <div class="fb_iframe">
                    <iframe class="fb1" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fart24322684%2F&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500px" height="200%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    <iframe class="fb2" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fart24322684%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300px" height="200%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    <iframe class="fb3" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fart24322684%2F&tabs=timeline&width=250&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="250px" height="200%" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
                <div class="main_right">
                    <div class="text">
                        <h3>&nbsp歡迎參觀&nbsp&nbsp體驗課程&nbsp</h3>
                        <h4>免費體驗一堂課</h4>
                        <a href="https://goo.gl/maps/tyjDgtwttVE2" target="_blank"><p>基隆市安樂區安樂路二段183號6樓&nbsp(溫莎堡樓上)</p></a>
                        <a href="mailto:whc5831quilt@gmail.com"><p>Email:&nbsp&nbspabc90324@yahoo.com.tw</p></a>
                        <h5>小班教學&nbsp·&nbsp貼心指導&nbsp·&nbsp多元學習</h5>
                    </div>
                </div>            
            </div>
        </div>
    </div>


<?php include __DIR__ .'/everyone_foot.php';?>