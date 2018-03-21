@extends('layouts.base')

@section('content')
    <div class="crumb">
        <ul>
            <li class="here_text txtcufon">You are here:</li>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Information</a></li>
        </ul>
    </div>
    <div class="clear"></div>
    <!--Main Section-->
    <div class="col1">
        <!--container -->
        <h2 class="pd11">News</h2>
        <div class="blogpostsec">
            <div class="blgtitle">
                <div class="titlein">
                    <h4><a href="blogpost.html" >{{$new->name}}</a></h4>
                    <p><a class="posted" href="#">Posted By: RayWilliams</a> <a class="comments" href="#">05 Comments</a> </p>
                </div>
                <a class="dt" href="#">
                    <span> Aug </span>
                    <span class="dte"> 13 </span>
                </a>
            </div>
            <div class="blogdetail">
                <p><a class="blgthumb mr1" href="#"><img src="images/blog1.gif"  alt="" /></a>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, 						                           dapibus ac, lectus. Curabitur dolor sapien, hendrerit non, suscipit bibendum, auctor ac, arcu. Vestibulum dapibus. Sed                           pede lacus, pretium in, condimentum sit amet, mollis dapibus, magna Lorem ipsum dolor sit amet, consectetuer 		                           adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien,                           hendrerit non, suscipit bibendum, auctor ac, arcu. Vestibulum dapibus. Sed pede lacus, pretium in, condimentum sit                           amet, mollis dapibus, magna
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, 				                           dapibus ac, lectus. Curabitur dolor sapien, hendrerit non, suscipit bibendum, auctor ac, arcu. Vestibulum dapibus. Sed                           pede lacus, pretium in, condimentum sit amet, mollis dapibus, magna. Ut bibendum dolor nec augue. Ut tempus luctus                           metus. Sed a velit. Pellentesque at libero elementum ante condimentum sollicitudin. Pellentesque lorem ipsum, semper                           quis, interdum et, sollicitudin eu, purus. Vivamus fringilla ipsum vel orci. Phasellus vitae massa at massa pulvinar                           pellentesque. Fusce tincidunt libero vitae odio. Donec malesuada diam nec mi. Integer hendrerit pulvinar ante. Donec                           eleifend, nisl eget aliquam congue, justo metus venenatis neque, vel tincidunt elit augue sit amet velit. Nulla                           facilisi. Aenean suscipit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus,                           vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non, suscipit bibendum, auctor ac,                           arcu. Vestibulum dapibus. Sed pede lacus, pretium in, condimentum sit amet, mollis dapibus, magna. Ut bibendum dolor                           nec augue. Ut tempus luctus metus. Sed a velit. Pellentesque at libero elementum ante condimentum sollicitudin.                           Pellentesque lorem ipsum, semper quis, interdum et, sollicitudin eu, purus. Vivamus fringilla ipsum vel orci.                           Phasellus vitae massa at massa pulvinar pellentesque. Fusce tincidunt libero vitae odio. Donec malesuada diam nec mi.                           Integer hendrerit pulvinar ante. Donec eleifend, nisl eget aliquam congue, justo metus venenatis neque, vel tincidunt                           elit augue sit amet velit. Nulla facilisi. Aenean suscipit.
                </p>
            </div>
        </div>
        <!--Comment Section -->
        <div class="cmntcontainer">
            <h2 class="pd11">Comments</h2>
            <div class="comment">
                <textarea  class="txtcomment" name="txt" cols="0" rows="0"></textarea>
            </div>
            <div class="clear"></div>
            <div class="commentaction">
                <span class="left" >500 characters remaining</span>
                <ul>
                    <li><a href="#">Cancel</a> or</li>
                    <li><a  class="post" href="#">Post</a></li>
                    <li class="nomar" ><a class="vedio" href="#">Attach a video</a></li>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="commentsec">
                <div class="replyfrist">
                    <div class="reply1_cmnt">
                        <h6>MySebbb:</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat 	                                    eget, dapidapibus. Sed pede lacus, pretium in, condimentum sitllis dapibus, magna...
                            Ut bibendum dolor nec augue Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit.
                        </p>
                    </div>
                    <div  class="cmntrply">
                        <a class="postimg" href="#"><img src="images/postimg.gif"  alt="" /></a>
                        <a class="rply" href="#">Reply</a>
                    </div>
                </div>
                <div class="replyfrist">
                    <div class="reply1_cmnt">
                        <h6>MySebbb:</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat 	                                    eget, dapidapibus. Sed pede lacus, pretium in, condimentum sitllis dapibus, magna...
                            Ut bibendum dolor nec augue Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit.
                        </p>
                    </div>
                    <div  class="cmntrply">
                        <a class="postimg" href="#"><img src="images/postimg1.gif"  alt="" /></a>
                        <a class="rply" href="#">Reply</a>
                    </div>
                </div>
                <div class="replysecond">
                    <div class="replysecond_cmnt">
                        <h6>MySebbb:</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat 	                                    eget, dapidapibus. Sed pede lacus, pretium in, condimentum sitllis dapibus, magna...
                            Ut bibendum dolor nec augue Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit.
                        </p>
                    </div>
                    <div  class="cmntrply">
                        <a class="postimg" href="#"><img src="images/postimg2.gif"  alt="" /></a>
                        <a class="rply" href="#">Reply</a>
                    </div>
                </div>
                <div class="replythird ">
                    <div class="replythrid_cmnt">
                        <h6>MySebbb:</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat 	                                eget, dapidapibus. Sed pede lacus, pretium in, condimentum sitllis dapibus, magna...
                            Ut bibendum dolor nec augue Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit.
                        </p>
                    </div>
                    <div  class="cmntrply">
                        <a class="postimg" href="#"><img src="images/postimg3.gif"  alt="" /></a>
                        <a class="rply" href="#">Reply</a>
                    </div>
                </div>
                <div class="replyfrist">
                    <div class="reply1_cmnt">
                        <h6>MySebbb:</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat 	                            eget, dapidapibus. Sed pede lacus, pretium in, condimentum sitllis dapibus, magna...
                            Ut bibendum dolor nec augue Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit.
                        </p>
                    </div>
                    <div  class="cmntrply">
                        <a class="postimg" href="#"><img src="images/postimg4.gif"  alt="" /></a>
                        <a class="rply" href="#">Reply</a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="leave_reply">
            <h2 class="pd11">Leave a Reply</h2>
            <textarea   name="txt" class="txtcomment" cols="0" rows="0"></textarea>
            <a class="btn1 mar2"  href="#">Submit</a>
        </div>
        <div class="clear"></div>
    </div>


@endsection