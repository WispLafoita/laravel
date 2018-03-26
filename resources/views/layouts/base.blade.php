<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="{{config("app.description")}}"/>
    <title>THEMELOCK.COM - FREE THEMES & TEMPLATES</title>
    <!-- // Stylesheets // -->
    @section('styles')
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/ddsmoothmenu.css')}}"/>
    @show
<!-- // Javascript // -->
    @section('scripts')
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/ddsmoothmenu.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/menu.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/contentslider.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/cufon-yui.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/Tahoma_400-Tahoma_700.font.js')}}"></script>
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
                                            <li><a href="{{asset('contact')}}">Contact Us</a></li>
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
    @yield('content')
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
