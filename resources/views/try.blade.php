@extends('layouts.main')

@section('content')
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-10 col-md-offset-1">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Welcome</div>--}}

                    {{--<div class="panel-body">--}}




                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    somehting is fucked up
    @foreach($courses_titles as $courses_title )

        <div><a href="{{route('getCourses',['student_ID'=>140623],['subject'=>'physics'])}}">{{$courses_title[0]->course}}</a></div>
    @endforeach


@endsection
