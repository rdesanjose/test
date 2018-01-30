@extends('layouts.app')
@section('title', 'Posts')
@section('content')
        <div class="posts auto">
            <ul class="breadcrumb">
              <li><a href="{{ URL::to('/') }}">Home</a></li>
              <li>Posts</li>
            </ul>
            <div class="clearfix">
                <h2 class="fl">Posts</h2>
                <div class="fl"><a class="add-new" data-fancybox data-src="#add-new-post" href="javascript:;">Add New Post</a></div>
            </div>
            <ul>
                @foreach ($posts as $post)
                <li>
                    <h3><a href="{{ URL::to('/posts',$post->id) }}">{{ $post->title }}</a></h3>
                    <p>{{ Str::words($post->body, 40,'....')  }}</p>
                </li>
                @endforeach
            </ul>
            <div class="pagination"> {{ $posts->links() }} </div>
        </div>
        <div style="display: none;" id="add-new-post">
            <div class="add-post-form">
                <h3 class="text-center">Add New Post</h3>
                {{ Form::open(array('url' => '/posts/new', 'id' => 'add-form')) }}
                    <ul>
                        <li>
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title') }}
                        </li>
                        <li>
                            {{ Form::label('body', 'Body') }}
                            {{ Form::textarea('body') }}
                        </li>
                        <li>
                            <div>
                                {{ Form::submit('Publish') }}
                            </div>
                            <div class="response-ajax text-center"></div>
                        </li>
                    </ul>
                {{ Form::close() }}
            </div>
        </div>
@endsection
@section('postjs')
    <script src="{{ asset('js/posts.js') }}"></script>
@stop