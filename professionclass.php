<?php include __DIR__ .'/everyone_head.php';?>
<!-- 此網頁title寫在下方 -->
<title>專業證書課程|劉鳳珠美術‧黏土才藝教室</title>
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
            <li>專業證書課程</li>
        </ul>
    </div>
 <!-- 此為網頁內容  -->
 <div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
    <div class="background_gray">
        <div class="wrap background_white">
            <div class="text">
                <h2>&nbsp專業證書課程&nbsp</h2>
            </div> 
            <ul class="classtime_ul">
                <li><h3><img src="img/professionclass/jphuman/jphuman-13.png?123" alt=""></h3><h4>日本人形雕塑班</h4><p>課程分為初、中、上、高、4個科別共有作品14個。(不含創作)此科所有證書費用需日幣69,000元。作品需拍照寄日本才可申請證書，高等科檢定的作品需將實物寄到日本檢定。<br>(此課程使用的粘土是LA DOLL、布粘土，全以人物雕塑為主)</p><a href="professionclass_jphuman.php">了解更多</a></li>
                <li><h3><img src="img/IMG_9727.JPG" alt=""></h3><h4>日本兒童證書班</h4><p>課程分為A、B、C三級。共有作品40個作品。此科所有證書費用約需NT8,400元。<br>作品需拍照寄日本才可申請證書。(PADICO所有粘土幾乎全部運用在其中,課程以趣味及實用性為主)。</p><a href="professionclass_jpchild.php">了解更多</a></li>
                <li><h3><img src="img/professionclass/deco/deco-15.png?123" alt="DECO花藝證書班"></h3><h4>DECO花藝證書班</h4><p>課程分為基礎科、設計科兩科共有作品20件。此科所有證書費用需日幣115,500元。<br>作品需拍照寄日本才可申請證書。<br>(此課程以花飾為主使用的粘土是HEARTY、可訓練調色能力)</p><a href="professionclass_deco.php">了解更多</a></li>
                <li><h3><img src="img/professionclass/plant/plant-1.png?123" alt=""></h3><h4>多肉植物班</h4><p>應用較寫實的技巧來設計，透過厚實飽滿葉片形狀和各種不同品種以小品呈現，形成美妙的生活佈置，提升視覺效果，激盪出靈性火花，促使心情愉悅與環境實用擺設的搭配理念，呈現出藝術與麵包花小品多肉植物的精華，而達到視覺藝術美學境界。</p><a href="professionclass_plant.php">了解更多</a></li>
                <li><h3><img src="img/professionclass/food/food-4.png?123" alt=""></h3><h4>迷你食物班</h4><p>課程內容包含野津礼奈台灣迷你食物證書課程+自創品指導創作，藉由課程內容使學員創作出仿真的食物。</p><a href="professionclass_food.php">了解更多</a></li>
            </ul>
            <h5>歡迎來電詢問相關課程問題</h5>
            <h6 href="tel:0936-270-907">0936-270-907</h6>          
        </div>
    </div>  
<?php include __DIR__ .'/everyone_foot.php';?>