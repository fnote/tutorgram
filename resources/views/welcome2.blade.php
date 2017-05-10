@extends('layouts.master2')

@section('title')
    tutorgram!!!

@endsection

@section('content')
    @include('includes.message-block')



    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Animated login form</title>


    </head>

    <body>
    {{--<div class="wrapper">--}}
    @include('includes.message-block')


    {{--<div class="row">--}}
        {{--<div class="col-md-6">--}}
            {{--<h3>sign up</h3>--}}
            {{--<form action="{{route('signup')}}" method="post">--}}
                {{--<div class="form-group {{$errors->has('userid') ? 'has-error' : ''}}">--}}
                    {{--<label for="email">your userid</label>--}}
                    {{--<input class="form-control" type="text" name="userid" id="userid" value="{{Request::old('email')}}">--}}
                {{--</div>--}}

                {{--<div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">--}}
                    {{--<label for="first_name">your first name</label>--}}
                    {{--<input class="form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}">--}}
                {{--</div>--}}

                {{--<div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">--}}
                    {{--<label for="password">your password</label>--}}
                    {{--<input class="form-control" type="text" name="password" id="password" value="{{Request::old('password')}}">--}}
                {{--</div>--}}


                {{--<button type="submit" class="btn btn-primary">submit </button>--}}
                {{--<input type="hidden" name="_token" value="{{Session::token()}}">--}}
            {{--</form>--}}

        {{--</div>--}}


    <div class="row">
        <div class="col-md-6">
            <h3>sign in</h3>
            <form action="{{route('signin')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="userid">your userid</label>
                    <input  type="text" name="userid" id="userid" value="{{Request::old('userid')}}">
                </div>


                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">your password</label>
                    <input type="password" name="password" id="password">
                </div>


                <button type="submit" class="btn btn-primary">submit </button>


            </form>
            <div>
            @if (count($errors)>0)
                    @foreach($errors->all() as $error)
                    <div>{{$error}},kn,knknkinkhk</div>
                    @endforeach
            @endif
            </div>
        </div>
    </div>
    </div>
    {{--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>--}}

    {{--<script src="js/index.js"></script>--}}

    </body>






@endsection
