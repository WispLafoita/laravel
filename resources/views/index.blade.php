@extends('layouts.base')
@section('styles')
    @parent
    <link href="main.page.css"/>

@stop

@section('content')
    <div id="content_sec">
        <!--картинка с аккаунта, которую выводит контроллер, получая её от мидлвара-->
        <img src="{{asset(isset($acc->picture)?('uploads/thumb/'.$acc->picture):('uploads/thumb/no_pic.jpg'))}}" alt=""/>
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
                <h2>Most Popular</h2>
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
            <!--Сайт бары реализованные при помощи сервис провайдеров-->
            <div class="sideblock3">
                <h2>Tags</h2>
                <div class="tag">
                    @foreach($catalogs_comp as $one)
                    <a href="#">{{$one->name}}</a>
                    @endforeach
                </div>
                <div class="clear"></div>
            </div>
            <div class="sideblock3">
                <h2>News</h2>
                <div class="tag">
                    @foreach($news_comp as $one)
                        <a href="#">{{$one->name}}</a>
                    @endforeach
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
@endsection