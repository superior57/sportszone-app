
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="mt-3" id="video-wrap"></div>

        </div>

    </div>

        <div class="row">
            <div class="col-md-12">
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
        </div>

@endsection
