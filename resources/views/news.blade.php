@extends('layouts.base')

@section('content')
    @include ('templates.bread');
    <!--Main Section-->
    <div class="col1">
        <div class="clear"></div>
        <!--Most Popular -->
    <div class="nwscontainer">
        <h2>News</h2>
        <ul>
            @foreach($news as $one)
                <li>
                    <div class="nwsthumb"><a href="{{asset('news/'.$one->id)}}"><img src="{{asset('uploads/thumb/'.$one->picture)}}" alt=""/></a></div>
                    <div class="nwsdesc">
                        <h5><a class="colr2" href="{{asset('news/'.$one->id)}}">{{$one->name}}</a></h5>
                        <div class="nwsdate">
                            <a class="date" href="#">
                                <img class="left" src="images/calander.jpg" alt=""/>
                                <span class="left">
                                    <? $t = new DateTime($one->created_at);
                                   $t->format('y-m-d');
                                    ?>
                                </span>
                            </a>
                            <a class="entertainment" href="#">Entertainment </a>

                        </div>
                            {!! $one->body !!}
                        <a class="readmore" href="{{asset('news/'.$one->id)}}"><u>4 Read More</u></a>
                    </div>
                </li>
                @endforeach
        </ul>

    </div>
    <div class="clear"></div>
        <!--Pagination -->
        <div class="pagenation">
            <div class="arrow">
                <a href="#"><img src="images/paginationleft.gif"  alt=" " /></a>
            </div>
            <div class="bg">
                {!! $news->links(); !!}
            </div>
            <div class="arrow">
                <a href="#"><img src="images/paginationright.gif"  alt=" " /></a>
            </div>

        </div>
    </div>


@endsection