@extends('frontend.layouts.app')

@section('page title', 'Post')

@include('frontend.includes.menu')

@section('content')

    <!--Cover Image-->
    <section class="page-cover">
        <div class="container">
            <div class="center-title">
                <h1>POST</h1>
            </div>
        </div>
    </section>

    <!-- PAGE CONTENT -->
    <section class="page">
        <div class="container">
            <div class="row">
                <div class="page-content col-md-9">
                    <div class="blog-content">
                        <div class="blog-image">
                            <img src="images/blog-3.jpg" alt="">
                        </div>
                        <h1 class="top_30">{{$post->title}} </h1>
                        <span class="blog-data">Jeff D. Stutler - 16 September 2016</span>
                        <p>
                            {{$post->body}}
                        </p>
                    </div>
                    <!-- Comments -->
                    <div class="col-md-12 blog-comments top_60">
                        <div class="row">
                            <div class="widget-title">
                                <h2>COMMENTS (3) </h2>
                            </div>
                            <ul class="comments">
                                <li>
                                    <img src="images/person.png" alt="">
                                    <div class="comment-info">
                                        <h3>Mary R. Peterson</h3>
                                        <a href="#"> REPLY </a>
                                        <p>no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling.</p>
                                        <span>Sep 26, 2016 at 14:35</span>
                                    </div>
                                </li>
                                <li class="reply">
                                    <img src="images/person.png" alt="">
                                    <div class="comment-info">
                                        <h3>Darren D. Miller</h3>
                                        <a href="#"> REPLY </a>
                                        <p>Up is opinion message manners correct hearing husband my. Disposing commanded dashwoods cordially depending at at. Its strangers who you certainty earnestly resources suffering she. </p>
                                        <span>Sep 26, 2016 at 14:35</span>
                                    </div>
                                </li>
                                <li class="replytoreply">
                                    <img src="images/person.png" alt="">
                                    <div class="comment-info">
                                        <h3>Mary R. Peterson</h3>
                                        <a href="#"> REPLY </a>
                                        <p>Why painful the sixteen how minuter looking nor. Subject but why ten earnest husband imagine sixteen brandon. Are unpleasing occasional celebrated motionless unaffected conviction out.</p>
                                        <span>Sep 26, 2016 at 14:35</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/person.png" alt="">
                                    <div class="comment-info">
                                        <h3>Mary R. Peterson</h3>
                                        <a href="#"> REPLY </a>
                                        <p>no purse as fully me or point. Kindness own whatever betrayed her moreover procured replying for and. Proposal indulged no do do sociable he throwing settling.</p>
                                        <span>Sep 26, 2016 at 14:35</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Write a Comment -->
                    <div class="col-md-12 post-write-comment top_60">
                        <div class="row">
                            <div class="widget-title">
                                <h2>WRITE A COMMENT</h2>
                            </div>
                            <form class="contact-form top_60" method="POST" action="mail.php">
                                <div class="row">
                                    <!-- name -->
                                    <div class="col-md-6"><input id="con_name" class="form-input requie" type="text" placeholder="Name"></div>
                                    <!-- email -->
                                    <div class="col-md-6"><input id="con_email" class="form-input requie" type="text" placeholder="Email"></div>
                                    <!--message-->
                                    <div class="col-md-12">
                                        <textarea id="con_message" class="form-text requie" placeholder="Message" rows="8"></textarea>
                                    </div>
                                    <input id="con_submit" class="giggs_button2" type="submit" value="SEND A MESSAGE">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- RIGHT SIDEBAR -->
                <div class="sidebar col-md-3">
                    <div class="row">
                        <!-- sidebar content -->
                        <!-- Categories -->
                        <div class="col-md-12 widget-categories">
                            <div class="widget-title">
                                <h2>CATEGORIES</h2> </div>
                            <ul class="top_15">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Interface Design</a></li>
                                <li><a href="#">Photoshop</a></li>
                                <li><a href="#">Dreamviewer</a></li>
                                <li><a href="#">After Effect</a></li>
                                <li><a href="#">Development</a></li>
                            </ul>
                        </div>

                        <!-- Latest Posts -->
                        <div class="col-md-12 widget-posts top_45">
                            <div class="widget-title">
                                <h2>LATEST POSTS</h2>
                            </div>
                            <ul class="sidebar-posts">
                                <li>
                                    <div class="tags"> <a href="#">#design </a> <a href="#">#interface </a> </div>
                                    <a class="post-content" href="#">
                                        <p>To preference considered it themselves inquietude collecting estimating.</p>
                                        <span class="date-comment">26 Comments |  12 Dec 2016</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="tags"> <a href="#">#photography </a> <a href="#">#entertaiment </a> </div>
                                    <a class="post-content" href="#">
                                        <p>Attempt offices own improve now see. Called person are around county talked her esteem. Those fully these way nay thing seems. </p>
                                        <span class="date-comment">26 Comments |  12 Dec 2016</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="tags"> <a href="#">#holiday </a> <a href="#">#vlog </a>
                                        <a href="#">#selfie </a>
                                    </div>
                                    <a class="post-content" href="#">
                                        <p>Prepared do an dissuade be so whatever steepest. Yet her beyond looked either day wished nay. By doubtful disposed do juvenile an.</p> <span class="date-comment">26 Comments |  12 Dec 2016</span> </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tags -->
                        <div class="col-md-12 widget-tags top_45">
                            <div class="widget-title">
                                <h2>TAGS</h2> </div>
                            <ul class="top_15">
                                <li><a href="#">Interface Design</a></li>
                                <li><a href="#">Photoshop</a></li>
                                <li><a href="#">After Effect</a></li>
                                <li><a href="#">Application</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection