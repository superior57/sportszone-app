
@extends('layouts.app')
@section('content')

    <div class="container">
        <a href="/videos"><h3><- Back to videos</h3></a>
        <div class="row">
{{--            id is for the API-Path: const API = "https://dev.prosports.zone/api/v1/videos/{$hashid}/annotations";--}}
            <div id="video-wrap" class="w-100" src="/storage/{{$video->filename}}" v_id="{{$video->hashid()}}"></div>
        </div>
    </div>
@endsection
