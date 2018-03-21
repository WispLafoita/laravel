@extends('layouts.app')
@section('scripts')
    @parent
    <script src="{{asset('public/js/delete.js')}}"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form enctype="multipart/form-data" method="post" action="{{asset('home')}}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <input type="text" name="name" class="form-control" id="exampleInputName2"
                                       placeholder="Jane Doe">
                            </div>
                            <div class="form-group">
                                <label for="categories">Categories</label>
                                @if ($errors->has('categories'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categories') }}</strong>
                                    </span>
                                @endif
                                <select name="categories" class="form-control" id="categories">
                                    @foreach($cats as $one)
                                        <option value="{{$one->id}}">{{$one->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="about">About video</label>
                                @if ($errors->has('about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                @endif
                                <textarea name="about" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="videoDB">Video input</label>
                                @if ($errors->has('videoDB'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('videoDB') }}</strong>
                                    </span>
                                @endif
                                <input type="file" name="videoDB" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        {!! csrf_field() !!}    <!--защита формы в ларавел-->
                        </form>
                    </div>
                    @include('templates.videos');
                </div>
            </div>
        </div>
    </div>
@endsection
