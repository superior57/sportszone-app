
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>{{$video->name}}</h1>

                            <video
                                id="v_1"
                                class='mx-auto video-js vjs-default-skin vjs-big-play-centered'
                                controls
                                preload="auto"
                                width="100%"
                                data-setup='{"playbackRates": [0.25, 0.5, 1, 1.5, 2],
                                "aspectRatio":"16:9",
                               "fluid": true,
                               "replayButton": true
                               }'>
                                <source src='/storage/{{$video->filename}}'>
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank"
                                    >supports HTML5 video</a
                                    >
                                </p>
                            </video>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
