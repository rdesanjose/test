@extends('layouts.app')
@section('title', $posts->title)
@section('content')
        <div class="posts auto">
            <ul class="breadcrumb">
              <li><a href="{{ URL::to('/') }}">Home</a></li>
              <li><a href="{{ URL::to('/posts') }}">Posts</a></li>
              <li>{{ $posts->title }}</li>
            </ul>
            <ul>
                
                <li>
                    <h3>{{ $posts->title }}</h3>
                    <p>{{ $posts->body }}</p>
                </li>
            </ul>
            <div class="social-media">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=508320382679188&autoLogAppEvents=1'; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-page" data-href="https://www.facebook.com/facebook/" data-tabs="timeline" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook/">Facebook</a></blockquote></div>
            </div>
        </div>
        
@endsection