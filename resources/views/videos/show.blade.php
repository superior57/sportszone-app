
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div id="video-wrap" :name="{{$video->name}}" :src="/storage/{{$video->filename}}" :id="{{$video->id}}"></div>
        </div>
    </div>
@endsection
