@extends('layouts.app')

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

                        <form method="post" action="{{asset('home')}}">
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
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
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
                                <label for="video">Video input</label>
                                @if ($errors->has('video'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                @endif
                                <input type="file" name="video" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        {!! csrf_field() !!}    <!--защита формы в ларавел-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
