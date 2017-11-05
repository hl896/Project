@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
            <a href="{{route('posts.create')}}" class="btn btn-lg btn-success">
                发布帖子
            </a>
        </div>

    </div>
    @if($posts->count()===0)
        <p>
            暂时还没有人发帖子
        </p>
    @endif
    @foreach($posts as $post)
        <hr>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{route('posts.show',[$post->id])}}">
                        {{$post->title}}
                    </a>
                </div>



                <div class="panel-footer">
                    {{$post->user->name}}发表于{{$post->created_at}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
