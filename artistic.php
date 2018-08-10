<?php include __DIR__ .'/everyone_head.php';?>
<!-- 此網頁title寫在下方 -->
<title>藝文活動|劉鳳珠美術‧黏土才藝教室</title>
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
        padding: 20px;
        display: flex;
    }
    .main_img{
        width: 100%;
        height: 100%;
    }
    .main div{
        padding:20px;
        width: 100%;
    }

    .main h3{
        color: #ffffff;
        font-weight: 600;
        font-size: 1.8rem;
        padding: 10px 0;
        background: #32707e;
        text-align: center;
    }
    .main p{
        margin: 20px 0 0 0;
        color: #285964;
        font-weight: 700;
        font-size: 1.3rem;
        text-align: justify;
    }
    .main a{
        text-decoration: none;
        width: 100%;
        box-shadow: 0 0 5px #dddddd;
    }
    .main a:hover{
        background: #3e8d9e;
        transition: all .5s;
    }
    .main a:hover p{
        color: #ffffff;
    }
    .main a:hover h3{
        background: #285964;
    }
    /* /////////////////////////      media screen  以下  /////////////////////////       */
    @media screen and (max-width: 1196px){
        .img{
            height:100%;
        }
        .text h3::before , .text h3::after{
            content: "/ / / / / / ";
            font-size: .2rem;
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
    }
    @media screen and (max-width: 740px){
        .main{
            flex-wrap: wrap;
            padding: 10px;
        }
        .text h2::before, .text h2::after{
            content: "/ / / / / / / / ";
            font-size: 1rem;
        }
        .main h3{
            font-size: 1.5rem;
        }
        .main p{
            font-size: 1rem;
        }
    }
    @media screen and (max-width: 360px){
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
            <li>藝文活動</li>
        </ul>
    </div>
 <!-- 此為網頁內容  -->
 <div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
    <div class="background_gray">
        <div class="wrap background_white">
            <div class="text">
                <h2>&nbsp藝文活動&nbsp</h2>
            </div>    
            <div class="main">
                <a href="artistic_exhibition.php">
                    <div >
                        <img class="main_img" src="img/IMG_9705.jpg" alt="">
                        <h3>展覽活動</h3>
                        <p>什麼叫做走心的文案，怎麼寫走心的文案？ 實現走心的文案，有沒有一些可以操作的技巧，規則呢，還是有更多的人生自己的體驗和感受才能得寫出來？</p>
                    </div>
                </a>
                <a href="artistic_community.php">
                    <div >
                        <img class="main_img" src="img/IMG_9705.jpg" alt="">
                        <h3>社區教學</h3>
                        <p>大多數文案寫完之後，恐怕聽到的最尷尬的反饋就是——「我覺得這句文案……很平。」 什麼？文案也有 36D 的嗎？嗯，36D 的文案才有人埋單。 </p>
                    </div>
                </a>
                <a href="artistic_video.php">
                    <div >
                        <img class="main_img" src="img/IMG_9705.jpg" alt="">
                        <h3>影片報導</h3>
                        <p>視覺」是將瀏覽者留下的主力，「文字」是讓客戶留更久的動力，因此無須華麗的詞藻堆砌，簡單一句話就可通達消費者心裡的最深處建立起無可取代的品牌效益。</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php include __DIR__ .'/everyone_foot.php';?>