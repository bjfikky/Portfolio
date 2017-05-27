@extends('layouts.app')

@include('includes.menu')

<!--HOME-->
<section class="home" id="home">
    <div class="home-content home-profile">
        <div class="profile-img"> <img src="images/profile-2.jpg" alt=""> </div>
        <h1>I'm <span class="element" data-text1="Benjamin Orimoloye" data-text2="a Web Developer" data-loop="true" data-backdelay="3000"></span></h1> <a class="home-down bounce" href="#about"><i class="fa fa-chevron-down"></i></a>
        <!-- Social Icons -->
        <ul class="home-social">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i>  </a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>  </a> </li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i>  </a></li>
        </ul>
    </div>
</section>

<!--ABOUT-->
<section class="about line-bg " id="about">
    <div class="container">
        <div class="row">
            <!-- Profile Image -->
            <div class="col-md-4 profile"> <img src="images/profile.jpg" alt=""> </div>
            <!-- About Information -->
            <div class="col-md-8 about-info top_30">
                <div class="left-title">
                    <h1>ABOUT ME</h1> </div>
                <p>Certainly elsewhere my do allowance at. The address farther six hearted hundred towards husband. Are securing off occasion remember daughter replying. Held that feel his see own yet. Strangers ye to he sometimes propriety in. She right plate seven has. Bed who perceive judgment did marianne. </p>
                <ul class="col-md-12 giggs-list">
                    <li><span>Name : </span>Benjamin Orimoloye</li>
                    <li><span>Website : </span>www.benorim.com</li>
                    <li><span>Email : </span>benjamin@benorim.com</li>
                    <li><span>Location : </span>Gaithersburg, MD, USA.</li>
                    <li><span>Education : </span>M.S Applied Information Technology, TOWSON UNIVERSITY</li>
                    <li><span><b>SKILLS : </span>HTML, CSS, JavaScript, SQL, OBJECT-ORIENTED PROGRAMMING (JAVA, C#, &amp; PHP)</b></li>
                </ul>
                <button class="giggs_button top_15">DOWNLOAD CV</button>
            </div>
        </div>
    </div>
</section>
<div class="my_features line-bg" id="skills">
    <div class="container">
        <div class="row">
            <!-- clean design -->
            <div class="feature col-md-4 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="feat-icon"> <i data-icon="1" class="icon"></i> </div>
                    <div class="feat-text"> <span>CLEAN DESIGN</span>
                        <p>Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.</p>
                    </div>
                </div>
            </div>
            <!-- branding -->
            <div class="feature col-md-4 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="feat-icon"> <i data-icon=";" class="icon"></i> </div>
                    <div class="feat-text"> <span>BRANDING</span>
                        <p>Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.</p>
                    </div>
                </div>
            </div>
            <!-- responsive -->
            <div class="feature col-md-4 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="feat-icon"> <i data-icon="0" class="icon"></i> </div>
                    <div class="feat-text"> <span>RESPONSIVE</span>
                        <p>Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.</p>
                    </div>
                </div>
            </div>
            <!-- marketting -->
            <div class="feature col-md-4 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="feat-icon"> <i data-icon="!" class="icon"></i> </div>
                    <div class="feat-text"> <span>MARKETING</span>
                        <p>Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.</p>
                    </div>
                </div>
            </div>
            <!-- on schedule -->
            <div class="feature col-md-4 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="feat-icon"> <i data-icon="@" class="icon"></i> </div>
                    <div class="feat-text"> <span>ON SCHEDULE</span>
                        <p>Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.</p>
                    </div>
                </div>
            </div>
            <!-- customizable -->
            <div class="feature col-md-4 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="feat-icon"> <i data-icon="#" class="icon"></i> </div>
                    <div class="feat-text"> <span>CUSTOMIZABLE</span>
                        <p>Bringing so sociable felicity supplied mr. September suspicion far him two acuteness perfectly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--PORTFOLIO-->
<section class="portfolio dotted-bg" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="center-title">
                <h1>MY PORTFOLIO</h1>
                <div class="portfolio_filter">
                    <ul>
                        <li class="select-cat" data-filter="*">All</li>
                        <li data-filter=".web-design">Web Design</li>
                        <li data-filter=".aplication">Applications</li>
                        <li data-filter=".development">Development</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 top_30">
                <div class="isotope_items row">
                    <!-- Item -->
                    <div class="single_item link development col-md-4 col-sm-6">
                        <div class="work-inner">
                            <div class="work-overlay">
                                <div class="overlay-in">
                                    <div class="work-info">
                                        <p>Endeavor bachelor but add eat pleasure doubtful sociable</p>
                                        <div class="work-links"> <a href="work-single.html" class="link"><i data-icon="5" class="icon"></i></a> <a href="images/work-1.jpg" class="image-link lightbox"><i data-icon="W" class="icon"></i></a> </div>
                                    </div>
                                </div>
                            </div> <img src="images/work-1.jpg" alt=""> </div>
                    </div>
                    <!-- Item -->
                    <div class="single_item link aplication col-md-4 col-sm-6">
                        <div class="work-inner">
                            <div class="work-overlay">
                                <div class="overlay-in">
                                    <div class="work-info">
                                        <p>Lain week nay she them her she</p>
                                        <div class="work-links"> <a href="work-single.html" class="link"><i data-icon="5" class="icon"></i></a> <a href="images/work-2.jpg" class="image-link lightbox"><i data-icon="W" class="icon"></i></a> </div>
                                    </div>
                                </div>
                            </div> <img src="images/work-2.jpg" alt=""> </div>
                    </div>
                    <!-- Item -->
                    <div class="single_item link development col-md-4 col-sm-6">
                        <div class="work-inner">
                            <div class="work-overlay">
                                <div class="overlay-in">
                                    <div class="work-info">
                                        <p>Celebrated no he decisively thoroughly</p>
                                        <div class="work-links"> <a href="work-single.html" class="link"><i data-icon="5" class="icon"></i></a> <a href="images/work-3.jpg" class="image-link lightbox"><i data-icon="W" class="icon"></i></a> </div>
                                    </div>
                                </div>
                            </div> <img src="images/work-3.jpg" alt=""> </div>
                    </div>
                    <!-- Item -->
                    <div class="single_item link web-design col-md-4 col-sm-6">
                        <div class="work-inner">
                            <div class="work-overlay">
                                <div class="overlay-in">
                                    <div class="work-info">
                                        <p>My whethercheered at regular it of promise blushes perhaps</p>
                                        <div class="work-links"> <a href="work-single.html" class="link"><i data-icon="5" class="icon"></i></a> <a href="images/work-4.jpg" class="image-link lightbox"><i data-icon="W" class="icon"></i></a> </div>
                                    </div>
                                </div>
                            </div> <img src="images/work-4.jpg" alt=""> </div>
                    </div>
                    <!-- Item -->
                    <div class="single_item link web-design col-md-4 col-sm-6">
                        <div class="work-inner">
                            <div class="work-overlay">
                                <div class="overlay-in">
                                    <div class="work-info">
                                        <p>My whethercheered at regular it of promise blushes perhaps</p>
                                        <div class="work-links"> <a href="work-single.html" class="link"><i data-icon="5" class="icon"></i></a> <a href="images/work-5.jpg" class="image-link lightbox"><i data-icon="W" class="icon"></i></a> </div>
                                    </div>
                                </div>
                            </div> <img src="images/work-5.jpg" alt=""> </div>
                    </div>
                    <!-- Item -->
                    <div class="single_item link web-design col-md-4 col-sm-6">
                        <div class="work-inner">
                            <div class="work-overlay">
                                <div class="overlay-in">
                                    <div class="work-info">
                                        <p>My whethercheered at regular it of promise blushes perhaps</p>
                                        <div class="work-links"> <a href="work-single.html" class="link"><i data-icon="5" class="icon"></i></a> <a href="images/work-6.jpg" class="image-link lightbox"><i data-icon="W" class="icon"></i></a> </div>
                                    </div>
                                </div>
                            </div> <img src="images/work-6.jpg" alt=""> </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-btn"> <a href="works.html" class="giggs_button top_30">LOAD MORE</a> </div>
        </div>
    </div>
</section>
<!-- BLOG -->
<section class="blog dotted-bg" id="blog">
    <div class="container">
        <div class="center-title">
            <h1>FEATURED BLOGS</h1>
            <p>We diminution preference thoroughly if. Joy deal pain view much her time. Led young gay would now state. Pronounce we attention admitting on assurance of suspicion conveying</p>
        </div>
        <div class="owl-carousel owl-blog" data-items="3" data-autoplay="7000" data-pagination="true">
            <!-- audio blog -->
            <div class="col-md-12 item">
                <div class="blog-box">
                    <div class="blog-media"> <img src="images/blog-1.jpg" alt=""> <i class="fa fa-volume-up" aria-hidden="true"></i> </div>
                    <div class="col-md-12 blog-info"> <span class="data">Jeff D. Stutler - 16 September 2016</span>
                        <h4>Sportsman delIghted improvIng dashwoods gay Instantly happiness six</h4>
                        <p>Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing.</p> <a href="audio-post.html" class="blog-link"> READ MORE</a> </div>
                </div>
            </div>
            <!-- gallery blog -->
            <div class="col-md-12 item">
                <div class="blog-box">
                    <div id="carousel-example-generic" class="gallery-post carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active"> <img src="images/blog-1.jpg" alt=""> </div>
                            <div class="item"> <img src="images/blog-2.jpg" alt=""> </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-chevron-left" aria-hidden="true"></i> </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                    </div>
                    <div class="col-md-12 blog-info"> <span class="data">Jeff D. Stutler - 16 September 2016</span>
                        <h4>Sportsman delIghted improvIng dashwoods gay Instantly happiness six</h4>
                        <p>Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing.</p> <a href="gallery-post.html" class="blog-link"> READ MORE</a> </div>
                </div>
            </div>
            <!-- video blog -->
            <div class="col-md-12 item">
                <div class="blog-box">
                    <div class="blog-media"> <img src="images/blog-3.jpg" alt=""> <i class="fa fa-play" aria-hidden="true"></i> </div>
                    <div class="col-md-12 blog-info"> <span class="data">Jeff D. Stutler - 16 September 2016</span>
                        <h4>Sportsman delIghted improvIng dashwoods gay Instantly happiness six</h4>
                        <p>Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing.</p> <a href="video-post.html" class="blog-link"> READ MORE</a> </div>
                </div>
            </div>
            <!-- blog -->
            <div class="col-md-12 item">
                <div class="blog-box"> <img src="images/blog-1.jpg" alt="">
                    <div class="col-md-12 blog-info"> <span class="data">Jeff D. Stutler - 16 September 2016</span>
                        <h4>Sportsman delIghted improvIng dashwoods gay Instantly happiness six</h4>
                        <p>Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing.</p> <a href="blog-post.html" class="blog-link"> READ MORE</a> </div>
                </div>
            </div>
            <!-- blog -->
            <div class="col-md-12 item">
                <div class="blog-box"> <img src="images/blog-2.jpg" alt="">
                    <div class="col-md-12 blog-info"> <span class="data">Jeff D. Stutler - 16 September 2016</span>
                        <h4>Sportsman delIghted improvIng dashwoods gay Instantly happiness six</h4>
                        <p>Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing.</p> <a href="blog-post.html" class="blog-link"> READ MORE</a> </div>
                </div>
            </div>
            <!-- blog -->
            <div class="col-md-12 item">
                <div class="blog-box"> <img src="images/blog-3.jpg" alt="">
                    <div class="col-md-12 blog-info"> <span class="data">Jeff D. Stutler - 16 September 2016</span>
                        <h4>Sportsman delIghted improvIng dashwoods gay Instantly happiness six</h4>
                        <p>Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing.</p> <a href="blog-post.html" class="blog-link"> READ MORE</a> </div>
                </div>
            </div>
            <div class="col-md-12 item">
                <div class="blog-box"> <img src="images/blog-1.jpg" alt="">
                    <div class="col-md-12 blog-info"> <span class="data">Jeff D. Stutler - 16 September 2016</span>
                        <h4>Sportsman delIghted improvIng dashwoods gay Instantly happiness six</h4>
                        <p>Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing.</p> <a href="blog-post.html" class="blog-link"> READ MORE</a> </div>
                </div>
            </div>
            <!-- blog -->
            <div class="col-md-12 item">
                <div class="blog-box"> <img src="images/blog-2.jpg" alt="">
                    <div class="col-md-12 blog-info"> <span class="data">Jeff D. Stutler - 16 September 2016</span>
                        <h4>Sportsman delIghted improvIng dashwoods gay Instantly happiness six</h4>
                        <p>Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing.</p> <a href="blog-post.html" class="blog-link"> READ MORE</a> </div>
                </div>
            </div>
            <!-- blog -->
            <div class="col-md-12 item">
                <div class="blog-box"> <img src="images/blog-3.jpg" alt="">
                    <div class="col-md-12 blog-info"> <span class="data">Jeff D. Stutler - 16 September 2016</span>
                        <h4>Sportsman delIghted improvIng dashwoods gay Instantly happiness six</h4>
                        <p>Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing.</p> <a href="blog-post.html" class="blog-link"> READ MORE</a> </div>
                </div>
            </div>
        </div>
        <div class="portfolio-btn"> <a href="#" class="giggs_button top_30">LOAD MORE</a> </div>
    </div>
</section>
<!-- CLIENTS -->
<!--
    <div class="clients line-bg">
        <div class="container">
            <div class="owl-carousel" data-items="6" data-autoplay="2500" data-pagination="false">
                <div class="item"><img src="images/client-1.jpg" alt=""></div>
                <div class="item"><img src="images/client-2.jpg" alt=""></div>
                <div class="item"><img src="images/client-3.jpg" alt=""></div>
                <div class="item"><img src="images/client-4.jpg" alt=""></div>
                <div class="item"><img src="images/client-5.jpg" alt=""></div>
                <div class="item"><img src="images/client-6.jpg" alt=""></div>
                <div class="item"><img src="images/client-1.jpg" alt=""></div>
                <div class="item"><img src="images/client-2.jpg" alt=""></div>
                <div class="item"><img src="images/client-3.jpg" alt=""></div>
                <div class="item"><img src="images/client-4.jpg" alt=""></div>
                <div class="item"><img src="images/client-5.jpg" alt=""></div>
                <div class="item"><img src="images/client-6.jpg" alt=""></div>
            </div>
        </div>
    </div>
-->
@include('includes.contact')

