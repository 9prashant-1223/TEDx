<?php include('mainframe.php'); ?>
    <style>
        #header2 {
            display: none;
        }
    </style>
    <div id="main">
        <div class="navbar navbar-default header" id="header1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 header_logo"><img src="img/mainlogo.png" class="img-responsive header_logo1"></div>
                    <div class="col-md-7">
                        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse"> <span class="icon-bar"></span> <span class="icon-bar"></span><span class="icon-bar"></span> <span class="icon-bar"></span></button>
                        <div class="collapse navbar-collapse navHeaderCollapse">
                            <ul class="header_links">
                                <li class="active"><a href="#">HOME</a></li>
                                <li><a href="about.php">ABOUT US</a></li>
                                <li><a href="talks.php">TALKS</a></li>
                                <li><a href="events.php">EVENTS</a></li>
                                <li><a href="sponsors.php">SPONSORS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_building_img_div"> <img src="img/img6.png" class="main_building_img"></div>
        </div>
    </div>
    <?php include('header.php'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"> </div>
                <div class="col-md-5 main_text">
                    <p class="tedx_tag">TEDX IIT ROORKEE PRESENTS</p>
                    <p class="mustering-tag"><b>SYMPHONIC</b></p>
                    <p class="muses-tag"><b>CHAOS</b></p>
                    <p class="main_date">14<sup>th</sup> OCTOBER'17</p>
                    <p class="main_location">MAC AUDITORIUM</p>
                    <div class="mustering_circle"></div>
                    <div class="row">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfqALs-nYWQ8nhDI6kYFw3KoqTsWJ0MDesUdQsXYy3mHQoMXQ/viewform?c=0&w=1" target="_blank">
                            <input type="button" name="" class="main_register_now" value="COMING SOON" disabled="disabled"> </a><a class="main_know_more" href="about.php" style="text-decoration: none;">KNOW MORE</a> </div>
                </div>
            </div>
        </div>
        <style></style>
        <div class="container-fluid">
            <div class="row headMargin">
                <div class="row theme_tag">THEME <img class="red_circle1"></div>
                <div class="row">
                    <div class="col-xs-7 col-xs-offset-1">
                        <div class="row">
                            <div class="col-xs-11 theme_name">
                                <br>Symphonic Chaos</div>
                            <div class="col-xs-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-9 col-xs-offset-0 theme_content text-justify">
                                <br>The theme for TEDxIITRoorkee 2017 is symphonic chaos. The theme underlines the beauty of spont,the 'chaos' and how an unorderly universe is the reason for our very existence. The fundamentalism of the idea of chaos is the real beauty itself, thus giving birth to the notion of 'perfectly imperfect'life. In our real world, it is because of this unpredictability that opportunities arise, through which success is achieved.</div>
                        </div>
                    </div>
                    <div class="col-xs-4"><img class="theme_img" src="img/Group4.png"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row speaker_tag">
                <div class="colxs-6 col-sm-offset-1 ">PREVIOUS SPEAKERS<img class="red_circle3"></div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs tab_list" role="tablist" style="border: none;text-align: center;">
                    <li role="presentation" class="active" style="float:none;display:inline-block;">
                        <div style="text-align: center;" data-toggle="tab" href="#speaker1" class="tab1"><img class="speakers_tab_img" src="img/Group44b.png" id="image1" onmouseover="in1()" onmouseout="out2()">
                            <p class="speaker_tab_name" id="image1_name" style="color: #ff2b06">VIVEK AGNIHOTRI</p>
                        </div>
                    </li>
                    <li role="presentation" style="float:none;display:inline-block;">
                        <div style="text-align: center;" data-toggle="tab" href="#speaker2" class="tab2"><img class="speakers_tab_img" src="img/Group32a.png" id="image2" onmouseover="in2()" onmouseout="out2()">
                            <p class="speaker_tab_name" id="image2_name">SUSHRUTI KRISHNA</p>
                        </div>
                    </li>
                    <li role="presentation" style="float:none;display:inline-block;">
                        <div style="text-align: center;" data-toggle="tab" href="#speaker3" class="tab3"><img class="speakers_tab_img active" src="img/Group37a.png" id="image3" onmouseover="hoverimagein3()" onmouseout="hoverimageout3()" onclick="hoverimagein3()">
                            <p class="speaker_tab_name" id="image3_name">KIRAN MANRAL</p>
                        </div>
                    </li>
                    <li role="presentation" style="float:none;display:inline-block;">
                        <div style="text-align: center;" data-toggle="tab" href="#speaker4" class="tab4"><img class="speakers_tab_img" src="img/Group38a.png" id="image4" onmouseover="hoverimagein4()" onmouseout="hoverimageout4()">
                            <p class="speaker_tab_name" id="image4_name">KASHYAP DEORAH</p>
                        </div>
                    </li>
                    <li role="presentation" style="float:none;display:inline-block;">
                        <div style="text-align: center;" data-toggle="tab" href="#speaker5" class="tab5"><img class="speakers_tab_img" src="img/Group41a.png" id="image5" onmouseover="hoverimagein5()" onmouseout="hoverimageout5()">
                            <p class="speaker_tab_name" id="image5_name">ANSHU MOR</p>
                        </div>
                    </li>
                    <li role="presentation" class="active" style="float:none;display:inline-block;">
                        <div style="text-align: center;" data-toggle="tab" href="#speaker6" class="tab6"><img class="speakers_tab_img" src="img/Group1.png" id="image6" onmouseover="hoverimagein6()" onmouseout="hoverimageout6()">
                            <p class="speaker_tab_name" id="image6_name">VITHIKA YADAV</p>
                        </div>
                    </li>
                    <li role="presentation" style="float:none;display:inline-block;">
                        <div style="text-align: center;" data-toggle="tab" href="#speaker7" class="tab7"><img class="speakers_tab_img" src="img/Group35a.png" id="image7" onmouseover="hoverimagein7()" onmouseout="hoverimageout7()">
                            <p class="speaker_tab_name" id="image7_name">NIRALI KARTIK</p>
                        </div>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="speaker1" class="tab-pane fade in active">
                        <div class="row" style="margin-top: 50px">
                            <div class="col-xs-4"><img src="img/Group44a.png" class="speaker_image"></div>
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-10 speaker_NAME">VIVEK AGNIHOTRI
                                        <p class="speaker_JOB">Movie Director</p>
                                    </div>
                                    <div class="col-xs-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-10 col-xs-offset-0 speaker_CONTENT text-justify">
                                        <br>Vivek Agnihotri is an Avant-Garde Indian film producer, director, music producer and screenwriter. With a portfolio spawning a plethora of conventional and experimental genres, Agnihotri is touted as one of the bests in Indian Cinema. He is known for his unconventional techniques of filmmaking, which makes his creations stand out in the crowd of populist Bollywood movies. Vivek is credited to direct India's first mainstream football film (Dhana Dhan Goal) at a time when not many producers were investing in sports films in Bollywood. One of his most ambitious projects, “Buddha in a Traffic Jam” garnered universal acclaim from critics and viewers alike. The movie was an official entry in various international film festivals and grabbed Agnihotri a lifetime achievement for excellence in cinema.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="speaker2" class="tab-pane fade in">
                        <div class="row" style="margin-top: 50px">
                            <div class="col-xs-4"><img src="img/Group32a.png" class="speaker_image"></div>
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-10 speaker_NAME">SUSHRUTHI KRISHNA
                                        <p class="speaker_JOB">Model & Architect</p>
                                    </div>
                                    <div class="col-xs-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-11 col-xs-offset-0 text-justify speaker_CONTENT">
                                        <br>Model, Architect, Classical Dancer and Social worker, Sushruthi Krishna is really the woman extraordinaire. She was crowned the 1st runner up of FBB Femina Miss India 2016 contest. Though an architect by heart, Sushruthi has created something evocative out of beauty pageants. Her dream project Anatta, aptly titled Beauty titled Beauty with a purpose, an endeavor to empower girl child by creating healthy education environment has garnered universal acclaim. Sushruthi’s contagious enthusiasm, unique perspective and unrelenting pursuit for universal girl child education just go on to show her multifaceted genius.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="speaker3" class="tab-pane fade in">
                        <div class="row" style="margin-top: 50px">
                            <div class="col-xs-4"><img src="img/Group37a.png" class="speaker_image"></div>
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-10 speaker_NAME">KIRAN MANRAL
                                        <p class="speaker_JOB">Author</p>
                                    </div>
                                    <div class="col-xs-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-11 col-xs-offset-0 text-justify speaker_CONTENT">
                                        <br>Kiran Manral is a popular Indian author and blogger. Her blogs, "Thirtysixandcounting" and "Karmickids", at their height, both were considered to be among the most popular blogs in India. Kiran began her career as a journalist before she moved out to set up a content supply company during the first dot-com boom. Carrying on her passion for writing, Kiran has written one non-fiction and three fiction books which have gained her a nationwide love. Known as one of India’s most stylish authors, Manral is also the founder of ‘India Helps’, a volunteer network which works with disaster victims. Currently, she is a senior consultant at Vector Insights LLP and a columnist with iDiva.com.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="speaker4" class="tab-pane fade in">
                        <div class="row" style="margin-top: 50px">
                            <div class="col-xs-4"><img src="img/Group38a.png" class="speaker_image"></div>
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-10 speaker_NAME">KASHYAP DEORAH
                                        <p class="speaker_JOB">Entrepreneur</p>
                                    </div>
                                    <div class="col-xs-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-11 col-xs-offset-0 text-justify speaker_CONTENT">
                                        <br>A serial entrepreneur and author for over 15 years, Kashyap Deorah is a man of versatile talents. Splitting his time between Silicon Valley and India, he has built the legacy of four companies that have gone on to become very successful. Being used to the nits and grits of the entrepreneurial game, he has also penned “The Golden tap: the inside story of hyper funded Indian startups”, providing a first-person account of Deorah's journey as an entrepreneur. Having started his first company Righthalf.com during his final year at IIT Bombay, is really a testament to his acute mind.With Righthalf’s successful acquisition, Deorah founded Chalo, a payments app which was acquired by OpenTable in 2013. Prior to that he founded Chaupaati, a phone commerce marketplace, sold to Future Group in 2010. He served Future Bazaar as president for over two years, which is just another feather in his stellar cap. Kashyap Deorah also the founder of his fourth startup, hyper Track, which has created software for tracking products or people across the globe.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="speaker5" class="tab-pane fade in">
                        <div class="row" style="margin-top: 50px">
                            <div class="col-xs-4"><img src="img/Group41a.png" class="speaker_image"></div>
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-10 speaker_NAME">ANSHU MOR
                                        <p class="speaker_JOB">Stand Up Comedian</p>
                                    </div>
                                    <div class="col-xs-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-11 col-xs-offset-0 text-justify speaker_CONTENT">
                                        <br>India’s digital content spearhead and the brain behind Xbox 360 in India, Anshu Mor is the quintessential corporate turned comedian. Mor recently left corporate life to pursue his dreams of becoming a stand-up comedian. A lot of folks do that! Except they don't do it in their 40s and don't quit a job as head of Xbox to do it! Mor is also the Founder and CEO of Talking Mime, an 'Entertainment and Storytelling' Company focused on Original & Branded Digital Content Creation, Comedy Scriptwriting, Stand Up Comedy, Brand Consulting and Corporate Training (Art of Storytelling). Being an essential cog in the Microsoft wheel for 11 years, Anshu spearheaded the launch of Kinect for 360 and Xbox one in India.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="speaker6" class="tab-pane fade in">
                        <div class="row" style="margin-top: 50px">
                            <div class="col-xs-4"><img src="img/Group1.png" class="speaker_image"></div>
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-10 speaker_NAME">VITHIKA YADAV
                                        <p class="speaker_JOB">Human Rights Activist</p>
                                    </div>
                                    <div class="col-xs-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-11 col-xs-offset-0 text-justify speaker_CONTENT">
                                        <br>Vithika Yadav is the Head of Indian Operations for Love Matters, a web platform that challenges the idea that sex cannot be discussed in public. Created by Radio Netherlands Worldwide in 2011, the Love Matters web and mobile sites provide easy-to-access information and news on sexuality and sexual health and sex education for teenagers and young adults. In her view, sex education is not a privilege reserved for certain countries, cultures or communities, but an inherent human right. Today, Yadav openly calls for better sex education for India's youth. After more than nine years of tireless campaigning, she perceives a change in urban India’s sexual landscape. More and more, the need for sex education is being publicly discussed.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="speaker7" class="tab-pane fade in">
                        <div class="row" style="margin-top: 50px">
                            <div class="col-xs-4"><img src="img/Group35a.png" class="speaker_image"></div>
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-10 speaker_NAME">NIRALI KARTIK
                                        <p class="speaker_JOB">Artist</p>
                                    </div>
                                    <div class="col-xs-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-11 col-xs-offset-0 text-justify speaker_CONTENT">
                                        <br>A Classical Vocalist from Mumbai, India, Nirali Kartik started to learn music at the young age of nine. A culturally rich environment at home provided the foundation for her art and nourished her creative abilities. A recipient of Shrestha Sadhaka Award, 2004 and Guru Gangadhar Pradhan Award, 2012, Nirali formed the widely acclaimed music group ' Maati Baani' with her husband Kartik Shah and started a new thread of music where Indian Classical met various forms of World traditions in a one-of-its-kind experiment on Youtube. Together they collaborate with musicians from different countries and create the freshest forms of original music.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
            </body>

            </html>