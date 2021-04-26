
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
{{--            id is for the API-Path: const API = "https://dev.prosports.zone/api/v1/videos/{$hashid}/annotations";--}}
            <div id="video-wrap" :src="/storage/{{$video->filename}}" :id="{{$video->hashid()}}"></div>
        </div>
    </div>
@endsection
