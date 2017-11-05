@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <a href="{{route('posts.show',[$post->id])}}">
                            {{$post->title}}
                        </a>
                    </div>

                    <div class="panel-body">
                        {{$post->content}}
                    </div>

                    <div class="panel-footer">
                        {{$post->user->name}}发表于{{$post->created_at}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
