<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="{{config("app.description")}}"/>
    <title>THEMELOCK.COM - FREE THEMES & TEMPLATES</title>
    <!-- // Stylesheets // -->
    @section('styles')
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css"/>
    @show
<!-- // Javascript // -->
    @section('scripts')
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/contentslider.js"></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/Tahoma_400-Tahoma_700.font.js"></script>
        <script type="text/javascript">Cufon.replace('h1,h2,h3,h4,h5, h6, .txtcufon');</script>
    @show
</head>
<body>
<div id="wrapper_sec">
    <!--Masterhead -->
    <div id="masthead">
        <div class="logo"><a href="index.html"><img src="images/logo.gif" width="142" height="87" alt=""/></a></div>
        <div class="header_rightsec">
            <div class="rightsec_1">
                <div class="navigation">
                    <div id="smoothmenu1" class="ddsmoothmenu">
                        <ul>
                            <li><a class="home" href="index.html">Home</a></li>
                            <li><a href="listing.html">Popular Videos</a></li>
                            <li><a href="#"> Channels</a></li>
                            <li class="dropdown"><a href="#">More</a>
                                <ul>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="listing.html">Vedio Listing</a></li>
                                            <li><a href="detail.html">Vedio Detail</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blogpost.html">Blog Post</a></li>
                                            <li><a href="news.html">News</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="{{asset('about')}}">About Us</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Themes</a>
                                        <ul>
                                            <li><a href="../grey/index.html">Grey</a></li>
                                            <li><a href="../blue/index.html">Blue</a></li>
                                            <li><a href="../green/index.html">Green</a></li>
                                            <li><a href="../maroon/index.html">Maroon</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Top search-->
                <div class="top_search">
                    <input value="Enter you keywords to search"
                           onfocus="if(this.value=='Enter you keywords to search') {this.value='';}"
                           onblur="if(this.value=='') {this.value='Enter you keywords to search';}" name="txt"
                           type="text"/>
                    <a href="#" class="search">Search</a>
                </div>
            </div>
            <div class="rightsec_2">
                <ul class="toplinks">
                    <li><a href="#"> Browse</a></li>
                    <li><a href="#"> Upload </a></li>
                    <li><a href="#">Create Account </a></li>
                    <li class="last"><a href="#">Sign In</a></li>
                </ul>
                <ul class="social_networks">
                    <li class="share">Share with us:</li>
                    <li><a href="#"><img src="images/socialicon1.png" alt=""/> </a></li>
                    <li><a href="#"><img src="images/socialicon2.png" alt=""/> </a></li>
                    <li><a href="#"><img src="images/socialicon3.png" alt=""/> </a></li>
                    <li class="last"><a href="#"><img src="images/socialicon4.png" alt=""/></a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!--Content Sec -->
    <div id="content_sec">
        <!--Main Section-->
        <div class="col1">
            <!--Vedio slider -->
            <div class="vedio_banner">
                <div id="slider2" style="height:324px; overflow:hidden ">
                    <div class="contentdiv">
                        <object type="application/x-shockwave-flash" style="width:617px; height:324px;"
                                data="http://www.youtube.com/v/gNni_Rt0fj4?fs=1&amp;hl=en_US">
                            <param name="movie" value="http://www.youtube.com/v/gNni_Rt0fj4?fs=1&amp;hl=en_US"/>
                            <param value="application/x-shockwave-flash" name="type"/>
                            <param value="true" name="allowfullscreen"/>
                            <param value="always" name="allowscriptaccess"/>
                            <param value="opaque" name="wmode"/>
                        </object>
                    </div>
                    <div class="contentdiv">
                        <object type="application/x-shockwave-flash" style="width:617px; height:324px;"
                                data="http://www.youtube.com/v/vShAz_5hA70?fs=1&amp;hl=en_US">
                            <param name="movie" value="http://www.youtube.com/v/vShAz_5hA70?fs=1&amp;hl=en_US"/>
                            <param value="application/x-shockwave-flash" name="type"/>
                            <param value="true" name="allowfullscreen"/>
                            <param value="always" name="allowscriptaccess"/>
                            <param value="opaque" name="wmode"/>
                        </object>
                    </div>
                    <div class="contentdiv">
                        <object type="application/x-shockwave-flash" style="width:617px; height:324px;"
                                data="http://www.youtube.com/v/8m-ZYEQSRcQ?fs=1&amp;hl=en_US">
                            <param name="movie" value="http://www.youtube.com/v/8m-ZYEQSRcQ?fs=1&amp;hl=en_US"/>
                            <param value="application/x-shockwave-flash" name="type"/>
                            <param value="true" name="allowfullscreen"/>
                            <param value="always" name="allowscriptaccess"/>
                            <param value="opaque" name="wmode"/>
                        </object>
                    </div>
                    <div class="contentdiv">
                        <object type="application/x-shockwave-flash" style="width:617px; height:324px;"
                                data="http://www.youtube.com/v/x_eHmoYiV64?fs=1&amp;hl=en_US">
                            <param name="movie" value="http://www.youtube.com/v/x_eHmoYiV64?fs=1&amp;hl=en_US"/>
                            <param value="application/x-shockwave-flash" name="type"/>
                            <param value="true" name="allowfullscreen"/>
                            <param value="always" name="allowscriptaccess"/>
                            <param value="opaque" name="wmode"/>
                        </object>
                    </div>
                </div>
                <div id="paginate-slider2" class="pagination">
                    <a class="toc" href="#">
                        <img class="imge" src="images/vedio_thumb1.gif" alt=""/>
                        <img class="addtoplaylist1" src="images/plusicon.png" alt=""/>
                    </a>
                    <a class="toc" href="#">
                        <img class="imge" src="images/vedio_thumb2.gif" alt=""/>
                        <img class="addtoplaylist1" src="images/plusicon.png" alt=""/>
                    </a>
                    <a class="toc" href="#">
                        <img class="imge" src="images/vedio_thumb3.gif" alt=""/>
                        <img class="addtoplaylist1" src="images/plusicon.png" alt=""/>
                    </a>
                    <a class="toc nomar" href="#">
                        <img class="imge" src="images/vedio_thumb4.gif" alt=""/>
                        <img class="addtoplaylist1" src="images/plusicon.png" alt=""/>
                    </a>

                </div>
                <script type="text/javascript" src="js/slider.js"></script>
            </div>
            <div class="clear"></div>
            <!--Most Popular -->
            <div class="mostcontainer">
                @yield('content')
                <ul>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar1.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p class="ttle"><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p>By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar2.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar3.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar4.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar5.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar6.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar7.gif" alt=""/><span class="time">02:22</span></a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar8.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar9.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar10.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar11.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar12.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>

                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar13.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar14.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar15.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                    <li>
                        <div class="vediodiv">
                            <a href="detail.html"><img src="images/poplar16.gif" alt=""/>
                                <span class="time">02:22</span>
                            </a>
                            <a href="#" class="addtoplaylist"><img src="images/plusicon.png" alt=""/></a>
                        </div>
                        <div class="clear"></div>
                        <p><a class="colr2" href="detail.html">Black Ops: 30-0 - Notch
                                &amp; Facebook</a></p>
                        <p class="viewcounts">241,699 views</p>
                        <p class="by">By: <a href="#" class="undrlne">SeaNanners</a></p>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <!--Right Section-->
        <div class="col2">
            <h2 class="heading">Featured Listing</h2>
            <div class="sideblock">
                <ul>
                    <li class="first"><a href="#"><img src="images/feature_listing1.gif" alt=""/></a></li>
                    <li><a href="#"><img src="images/feature_listing2.gif" alt=""/></a></li>
                    <li><a href="#"><img src="images/feature_listing3.gif" alt=""/></a></li>
                    <li><a href="#"><img src="images/feature_listing4.gif" alt=""/></a></li>
                    <li class="first"><a href="#"><img src="images/feature_listing5.gif" alt=""/></a></li>
                    <li><a href="#"><img src="images/feature_listing6.gif" alt=""/></a></li>
                    <li><a href="#"><img src="images/feature_listing7.gif" alt=""/></a></li>
                    <li><a href="#"><img src="images/feature_listing8.gif" alt=""/></a></li>
                    <li class="first"><a href="#"><img src="images/feature_listing9.gif" alt=""/></a></li>
                    <li><a href="#"><img src="images/feature_listing10.gif" alt=""/></a></li>
                    <li><a href="#"><img src="images/feature_listing11.gif" alt=""/></a></li>
                    <li><a href="#"><img src="images/feature_listing12.gif" alt=""/></a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <!--ADS -->
            <div class="ads">
                <a href="#"><img src="images/kfc.gif" alt=""/></a>
            </div>
            <!--Feature Vedio -->
            <div class="sideblock2">
                <h2>Featured Vedio</h2>
                <ul>
                    <li>
                        <div class="thumb">
                            <a href="detail.html">
                                <img src="images/featurevedio1.gif" alt=""/>
                                <span class="addtoplaylist"><img src="images/plusicon.png" alt=""/></span>
                                <span class="time">2.30</span>
                            </a>
                        </div>
                        <div class="description">
                            <p><a class="colr2" href="#"> Black Ops: 30-0 - Notch &amp; Facebook</a></p>
                            <p class="viewcounts">241,699 views</p>
                            <p class="stat">By: <a href="#"><u>SeaNanners</u></a></p>
                        </div>
                    </li>
                    <li>
                        <div class="thumb">
                            <a href="detail.html">
                                <img src="images/featurevedio2.gif" alt=""/>
                                <span class="addtoplaylist"><img src="images/plusicon.png" alt=""/></span>
                                <span class="time">2.30</span>
                            </a>
                        </div>
                        <div class="description">
                            <p><a class="colr2" href="#"> Black Ops: 30-0 - Notch &amp; Facebook</a></p>
                            <p class="viewcounts">241,699 views</p>
                            <p class="stat">By: <a href="#"><u>SeaNanners</u></a></p></div>
                    </li>
                    <li>
                        <div class="thumb">
                            <a href="detail.html">
                                <img src="images/featurevedio3.gif" alt=""/>
                                <span class="addtoplaylist"><img src="images/plusicon.png" alt=""/></span>
                                <span class="time">2.30</span>
                            </a>
                        </div>
                        <div class="description">
                            <p><a class="colr2" href="#"> Black Ops: 30-0 - Notch &amp; Facebook</a></p>
                            <p class="viewcounts">241,699 views</p>
                            <p class="stat">By: <a href="#"><u>SeaNanners</u></a></p></div>
                    </li>
                    <li>
                        <div class="thumb">
                            <a href="detail.html">
                                <img src="images/featurevedio3.gif" alt=""/>
                                <span class="addtoplaylist"><img src="images/plusicon.png" alt=""/></span>
                                <span class="time">2.30</span>
                            </a>
                        </div>
                        <div class="description">
                            <p><a class="colr2" href="#"> Black Ops: 30-0 - Notch &amp; Facebook</a></p>
                            <p class="viewcounts">241,699 views</p>
                            <p class="stat">By: <a href="#"><u>SeaNanners</u></a></p></div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="sideblock3">
                <h2>Tags</h2>
                <div class="tag">
                    <a href="#">Anne Roumanoff</a>
                    <a href="#"> Camera cache Cauet </a>
                    <a href="#"> Eric et Ramzy</a>
                    <a href="#"> Florence</a>
                    <a href="#">Foresti</a>
                    <a href="#">Franck Dubosc</a>
                    <a href="#">Francois</a>
                    <a href="#">Damiens </a>
                    <a href="#">Anthony</a>
                    <a href="#">Kavanagh</a>
                    <a href="#">Jamel </a>
                    <a href="#">Debbouze </a>
                    <a href="#">Laurent</a>
                    <a href="#"> Ruquier</a>
                    <a href="#">Les Nuls</a>
                    <a href="#">Michael Youn</a>
                    <a href="#"> Omar et Fred</a>
                    <a href="#">Patrick Timsit</a>
                    <a href="#">Remi Gaillard</a>
                    <a href="#">Gad ElMaleh </a>
                    <a href="#">Stephane Guillon</a>
                    <a href="#">TF1 Replay </a>
                    <a href="#">chatroulette</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <!-- movie ads-->
        <div class="movie_ads"><a href="#"><img src="images/movie_ad.gif" alt=""/></a></div>
    </div>
    <div class="clear"></div>
</div>
<!-- bottom section-->
<div id="bottom_sec">
    <div class="botbar">
        <div class="innercontainer">
            <div class="socialtitle">
                <h3>From the twitter <img align="right" src="images/twittericon.png" alt=""/></h3>
            </div>
            <div class="msg">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in,
                volutpat eget, dapib <a href="#">http://bit.ly</a>
            </div>
            <a class="follow_us" href="#"><span>Follow us</span></a>
        </div>
    </div>
    <div id="bottomcontianer">
        <div class="innercontainer">
            <div id="footer">
                <div class="archieve">
                    <a href="#"><img src="images/logo2.png" alt=""/></a>
                    <p>601 Beetle Street Ardmore</p>
                    <p>London, 73023</p>
                    <p>Tel 580.205.9995</p>
                    <p>Fax 580.389.5424</p>
                    <p> Email: <a class="undrlne" href="#">info@website.com</a></p>
                    <p> Website: <a class="undrlne" href="#">www.website.com</a></p>
                </div>
                <div class="footer_div">
                    <h4>About us</h4>
                    <ul>
                        <li><a href="static.html">We're Hiring</a></li>
                        <li><a href="static.html">Meet the Team</a></li>
                        <li><a href="listing.html">Updated Collections</a></li>
                        <li><a href="listing.html">Latest Videos</a></li>
                    </ul>
                </div>
                <div class="footer_div">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">What's VIDEO's?</a></li>
                        <li><a href="#">Video's Button</a></li>
                        <li><a href="#">iPhone &amp; Android</a></li>
                        <li><a href="#">Widgets</a></li>
                    </ul>
                </div>
                <div class="from_fliker">
                    <h4>From Flickr</h4>
                    <ul>
                        <li><a href="#"><img src="images/fromflickr1.gif" alt=""/></a></li>
                        <li><a href="#"><img src="images/fromflickr2.gif" alt=""/></a></li>
                        <li><a href="#"><img src="images/fromflickr3.gif" alt=""/></a></li>
                        <li><a href="#"><img src="images/fromflickr4.gif" alt=""/></a></li>
                        <li><a href="#"><img src="images/fromflickr5.gif" alt=""/></a></li>
                        <li><a href="#"><img src="images/fromflickr6.gif" alt=""/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="botbarbg">
        <div class="innercontainer">
            <div class="copy">Copyright &copy; 2011 Video Archives, Inc. All Rights Reserved.</div>
            <div class="powerby">Powered By: <a href="#">ABC Technologies</a></div>
        </div>
    </div>
    <div class="clear"></div>
</div>


</body>
</html>
