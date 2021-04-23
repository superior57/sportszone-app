
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
                            <ul>
                                @foreach ($videos as $video)
                                    <li><a href="/videos/{{$video->id}}">{{$video->name}}</a></li>
                                @endforeach
                            </ul>
                            
                    </div>
                </div>                
            </div>
            <div class="mt-3" id="video-wrap"></div>
        </div>
    </div>
@endsection
