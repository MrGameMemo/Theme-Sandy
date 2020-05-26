@extends('layouts.app')

@section('title', trans('messages.home'))

@section('content')
    <div class="home-background" style="background: url('{{ setting('background') ? image_url(setting('background')) : 'https://via.placeholder.com/2000x500' }}') no-repeat center; background-size: cover;">
        <div class="container h-100"  data-aos="fade-in" >
            <div class="row justify-content-center align-items-center text-center text-white h-100">
                <div class="col-md-8 bg-text" style='margin-right: 80%;'>
                    @if(config('theme.title'))
                        <h1 style="font-size: 65px;">{{ config('theme.title') }}</h1>
                    @endif
                    <button class="btn-home btn-discord">Notre discord</button>
                    <button class="btn-home btn-launcher"> Rejoindre</button>
                    
                </div>
                
            </div>
        </div>
    </div>
    <div style="background-color: #f6e58d">
    <div class="col" style='margin-right: 80%; height: 1px;'>
                <div id="load"></div>
                </div><br><br>
<!--Down-->
<h3 class="home-page" style="color: #54a0ff" data-aos="fade-in">Actualités</h3>
<div class="container" data-aos="zoom-out">
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)
                    <div class="post-preview mb-3">
                        @if($post->image !== null)
                            <img src="{{ $post->imageUrl() }}" class="post-img img-fluid" alt="{{ $post->title }}">
                        @endif

                        <div class="post-body">
                            <h3><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h3>
                            @if($post->image === null)
                                <p>{{ Str::limit(strip_tags($post->content), 250, '...') }}
                                    <a href="{{ route('posts.show', $post->slug) }}">{{ trans('messages.posts.read') }}</a>
                                </p>
                            @endif

                            {{ trans('messages.posts.posted', ['date' => format_date($post->published_at), 'user' => $post->author->name]) }}
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
<!--Down-->


@endsection

@push('scripts')
    <script src="https://platform.twitter.com/widgets.js" async></script>
@endpush

