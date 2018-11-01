<?php include __DIR__ . '/everyone_head.php'; ?>
    <!-- 此網頁title寫在下方 -->
    <title>師資介紹|劉鳳珠美術‧黏土才藝教室</title>
    <!-- 此網頁css寫在下方 -->
<?php include __DIR__ . '/everyone_css.php'; ?>
    <style>
        .teacher_img {
            height: 500px;
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
            flex-wrap: wrap;
            box-shadow: 0 0 5px #dddddd;
            margin: 20px;
        }

        .section_left {
            width: 50%;
            height: 500px;
        }

        .section_right {
            width: 50%;
            height: 500px;
        }

        .section_left_img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: 50% 8%;
            opacity: 1;
        }

        .section_right h1 {
            font-size: 6vmin;
            font-weight: 600;
            letter-spacing: .4em;
            padding-bottom: .5vmin;
            background: #45a9a0;
            padding: 10px;
            color: #ffffff;
        }

        .section_right h2 {
            font-size: 4vmin;
            font-weight: 600;
            letter-spacing: .2em;
            padding-bottom: 10px;
            padding: 30px 0;
        }

        .section_right p {
            font-size: 2.5vmin;
            line-height: 5vmin;
            font-weight: 600;
        }

        .section_right {
            padding: 30px;
            color: #32707e;
            border: #32707eb6 2px solid;
        }

        .about_teacher h3 {
            font-size: 30px;
            font-weight: 600;
            letter-spacing: .2em;
            margin-top: 60px;
            margin-left: 30px;
            border-bottom: 1px solid #efefef;
            color: #45a9a0;
            text-align: center;
        }

        .about_teacher p {
            font-size: 20px;
            color: #285964;
            font-weight: 600;
            text-align-last: left;
            margin: 30px 80px;
            line-height: 50px;
            text-align: center;
        }

        .experience_flex {
            display: flex;
            margin-top: 10px;
            justify-content: center;
        }

        .experience_img {
            align-self: center;
            margin-left: 30px;
        }

        .news_flex {
            display: flex;
            margin-top: 30px;
            justify-content: center;
        }

        div.news_img {
            width: 500px;
            background-color: white;
            box-shadow: 0 0 5px #dddddd;
        }

        div.news_container {
            text-align: center;
            color: #1e444d;
        }

        .license_flex {
            display: flex;
            justify-content: center;
        }

        @keyframes slidy {
            0% {
                left: 0%;
            }
            20% {
                left: 0%;
            }
            25% {
                left: -100%;
            }
            45% {
                left: -100%;
            }
            50% {
                left: -200%;
            }
            70% {
                left: -200%;
            }
            75% {
                left: -300%;
            }
            100% {
                left: -300%;
            }
        }

        #slider {
            overflow: hidden;
            width: 500px;
            align-self: center;
            box-shadow: 0 0 5px #dddddd;
        }

        #slider figure img {
            width: 25%;
            float: left;
        }

        #slider figure {
            position: relative;
            width: 400%;
            margin: 0;
            left: 0;
            text-align: left;
            font-size: 0;
            animation: 15s slidy infinite alternate;
        }

        #slider:hover figure {
            animation-play-state: paused;
        }

        div.slider_container {
            text-align: center;
            color: #1e444d;
        }

        /* /////////////////////////      media screen  以下  /////////////////////////       */
        @media screen and (max-width: 1196px) {
            .section_right h1 {
                font-size: 40px;
                padding: 10px;
            }

            .section_right h2 {
                font-size: 30px;
                font-weight: 600;
                letter-spacing: .2em;
                padding: 30px 0;
            }

            .section_right p {
                font-size: 20px;
                line-height: 40px;
            }

            .about_teacher p {
                font-size: 19px;
                font-weight: 500;
                text-align-last: left;
                margin: 10px 20px;
                line-height: 35px;
                text-align: unset;
            }

            @media screen and (max-width: 955px) {

                .section_right h2 {
                    font-size: 25px;
                }

                .section_right p {
                    font-size: 17px;
                }

                .experience_flex {
                    flex-direction: column;
                }

                .experience_flex p {
                    margin-left: 105px;
                }

                .experience_img {
                    margin-left: 0px;
                }

                #slider {
                    width: 400px;
                }

                div.news_img {
                    width: 350px;
                }
            }
            @media screen and (max-width: 414px) {
                .section_left {
                    width: 100%;
                    height: 250px;
                }

                .section_right {
                    width: 100%;
                }

                .section_right h1 {
                    font-size: 25px;
                    font-weight: 500;
                    color: #45a9a0;
                    background-color: unset;
                    padding: 0px;
                    display: inline;
                    letter-spacing: 2px;
                }

                .section_right h2 {
                    display: inline;
                    font-size: 15px;
                }

                .section_right p {
                    font-size: 15px;
                    line-height: 30px;
                }

                .section_right {
                    border: unset;
                    height: auto;
                }

                .teacher_img {
                    height: auto;
                }

                .about_teacher h3 {
                    margin: 20px 0;
                    margin-top: 50px;
                }

                .experience_flex {
                    margin: 0px;
                }

                .experience_img {
                    margin: auto;
                    width: 100%;
                    height: 220px;
                }

                iframe {
                    width: 100%;
                }

                .about_teacher p {
                    font-size: 15px;
                    margin: 5px 30px;
                }

                .news_flex {
                    flex-direction: column;
                }

                div.news_img {
                    margin: 0px;
                    width: 100%;
                    margin-bottom: 20px;
                }

                .license_flex {
                    flex-direction: column;
                    margin-bottom: 30px;
                }

                #slider {
                    width: 100%;
                    margin: 0px;
                    margin-bottom: 20px;
                }
            }
            @media screen and (max-width: 320px) {
                .section_right {
                    padding: 15px;
                }
                .section_right p {
                    font-size: 14px;
                }
                .experience_img {
                    height: 190px;
                }
        }

    </style>
<?php include __DIR__ . '/everyone_navbar.php'; ?>
    <!-- 此網頁麵包穴更改 -->
    <div id="breadcrumb">
        <ul class="wrap breadcrumb">
            <li><a href="index.php">首頁</a></li>
            <li><a href="aboutus.php">關於我們</a></li>
            <li>師資介紹</li>
        </ul>
    </div>
    <!-- 此為網頁內容  -->
    <div><img class="img" src="img/IMG_0067.JPG" alt=""></div>
    <div class="background_gray">
        <div class="wrap background_white">
            <div class="text">
                <h2>&nbsp師資介紹&nbsp</h2>
            </div>
            <section class="teacher_img">
                <div class="section_left">
                    <img class="section_left_img" src="img/teacher/Fengzhu.png" alt="劉鳳珠">
                </div>
                <div class="section_right">
                    <h1>劉鳳珠</h1>
                    <h2>LIU, FENG-ZHU</h2>
                    <p>現任 :<br>
                        劉鳳珠黏土美術才藝工作室負責人<br>
                        基隆社區大學專任人型黏土講師<br>
                        基隆職業總工會人型公仔班專任講師<br>
                        基隆、新北市街頭藝人<br>
                        台北E-go社區、耶魯補習班 - 專任教師
                    </p>
                </div>
            </section>
            <div class="about_teacher">
                <h3>展覽經歷</h3>
                <div class="experience_flex">
                    <div class="experience_img">
                        <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fnewscns%2Fvideos%2F1918600308452408%2F&show_text=0&width=560"
                                width="560" height="315" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                    </div>
                    <p>2009基隆市中元祭張飛公仔設計<br>
                        2010基隆社區大學─迎媽祖人形公仔師生聯展<br>
                        2010基隆市文化創意商品競賽 佳作<br>
                        2010基隆中元祭社區大學花車設計<br>
                        2011國立新竹生活美學館「迎媽祖」人形公仔師生聯展<br>
                        2011新北市核二廠「迎媽祖」人形公仔師生聯展<br>
                        2011第四屆海峽兩岸(廈門)文化創意產業博覽會  人形黏土公仔展覽<br>
                        2012桃園縣政府客家文化館「迎媽祖」人形公仔師生聯展<br>
                        <a href="https://www.klcg.gov.tw/tw/News/Detail1?NewsId=10C10F9E&i=0">2016基隆市文化中心 ─
                            基隆社區大學「童玩・童話」師生聯展</a><br>
                        <a href="https://www.facebook.com/newscns/videos/%E8%8A%B1%E8%88%87%E5%A5%B3%E4%BA%BA%E6%A0%A9%E6%A0%A9%E5%A6%82%E7%94%9F-%E5%8A%89%E9%B3%B3%E7%8F%A0%E5%B8%AB%E7%94%9F%E9%BB%8F%E5%9C%9F%E5%8A%9F%E5%A4%AB%E4%BA%86%E5%BE%97/1918600308452408/">2018基隆市文化中心 ─ 基隆社區大學「花與女人」劉鳳珠師生聯展</a>
                    </p>

                </div>
                <div class="news">
                    <h3>新聞專訪</h3>
                    <div class="news_flex">
                        <div class="news_img">
                            <a href="https://youtu.be/skmJhwVp1X8"><img src="img/teacher/teacher-5.jpg"
                                                                        alt="民視新聞超輕黏土個人專訪" style="width:100%"></a>
                            <div class="news_container">
                                <span>民視新聞超輕黏土個人專訪</span>
                            </div>
                        </div>
                        <p><a href="https://youtu.be/skmJhwVp1X8">民視新聞超輕黏土個人專訪</a><br>
                            <a href="https://youtu.be/6a4EYMUnR78">暖暖區辦花藝創作展新意 中嘉吉隆新聞</a><br>
                            <a href="https://youtu.be/_RWZgoUe4T8">中嘉新聞黃色小鴨黏土達人</a><br>
                            ＴＶＢＳ新聞美術專訪<br>
                            吉隆電視台超輕黏土個人專訪<br>
                            民視電視台黏土二次專訪
                        </p>
                    </div>
                </div>
                <div class="license">
                    <h3>證書執照</h3>
                    <div class="license_flex">
                        <div id="slider">
                            <figure>
                                <img src="img/teacher/teacher-1.jpg" alt="劉鳳珠老師日本雕塑人型作品">
                                <img src="img/teacher/teacher-2.jpg" alt="劉鳳珠老師日本雕塑人型作品">
                                <img src="img/teacher/teacher-3.jpg" alt="劉鳳珠老師日本雕塑人型作品">
                                <img src="img/teacher/teacher-4.jpg" alt="劉鳳珠老師日本雕塑人型作品">
                            </figure>
                            <div class="slider_container">
                                <span>日本雕塑人型作品</span>
                            </div>
                        </div>
                        <p>日本雕塑人型證照專業講師<br>
                            日本兒童捏塑證照講師<br>
                            日本八木造型藝術花證照講師<br>
                            日本宮井DECO證照講師<br>
                            台灣哈利超輕黏土學會黏土講師<br>
                            韓國兒童捏塑證照講師<br>
                            基隆街頭藝人
                        </p>

                    </div>
                </div>
            </div>
<?php include __DIR__ . '/everyone_foot.php'; ?>