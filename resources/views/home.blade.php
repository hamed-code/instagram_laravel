@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://matplotlib.org/stable/_images/stinkbug.png" style="height: 160px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
{{--            <div><h1>{{ $user->username }}</h1></div>--}}
{{--            <div class="d-flex">--}}
{{--                <div class="pr-3"><strong>153</strong> posts</div>--}}
{{--                <div class="pr-3"><strong>25k</strong> followers</div>--}}
{{--                <div class="pr-3"><strong>266</strong> following</div>--}}
{{--            </div>--}}
{{--            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>--}}
{{--            <div>{{ $user->profile->description }}</div>--}}
{{--            <div><a href="#">{{ $user->profile->url }}</a></div>--}}
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img style="height: 250px" src="https://media.wired.com/photos/598e35fb99d76447c4eb1f28/master/pass/phonepicutres-TA.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img style="height: 250px" src="https://media.wired.com/photos/598e35fb99d76447c4eb1f28/master/pass/phonepicutres-TA.jpg" class="w-100" alt="">

        </div>
        <div class="col-4">
            <img style="height: 250px" src="https://media.wired.com/photos/598e35fb99d76447c4eb1f28/master/pass/phonepicutres-TA.jpg" class="w-100" alt="">

        </div>
    </div>


</div>
@endsection
