@extends('layout.master')

@section('content')

<header class="blog-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h3>
                    {{ $post->title }}
                </h3>

                <h6>
                    Posted {{ date('F d, Y g:i A', strtotime($post->published_at)) }} ({{ $post->published_at->diffForHumans() }})
                </h6>

                <div class="blog-content">
                    {!! $post->content !!}
                </div>

                <div class="blog-share">
                    <h5>
                        Share:
                    </h5>
                    <span class="share-list">
                        <a href="http://www.facebook.com/sharer.php?u={{ Request::url() }}"><img src="{{ asset('assets/images/facebook-share.png') }}"></a>
                    </span>
                    <span class="share-list">
                        <a href="http://twitter.com/share?url={{ Request::url() }}"><img src="{{ asset('assets/images/twitter-share.png') }}"></a>
                    </span>
                </div>

                <div class="blog-tags">
                    <h5>
                        Tags:
                    </h5>
                    @foreach($post->categories as $idx => $category)
                        {{ $category->name }} @if($idx != (count($post->categories) - 1 )) | @endif
                    @endforeach
                </div>

            </div>
        </div>
        @if(env('DONATION_ENABLED', false))
            @include('layout.partials.donate')
        @endif
        @if(env('DISQUS_ENABLED', false))
            @include('layout.partials.disqus')
        @endif
    </div>
</header>

@stop

@section('style')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/default.min.css">
@stop

@section('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
    <script src="{{ asset('assets/plugins/highlight/highlight.pack.js') }}"></script>

    <script>
        $(function(){
            $('pre').each(function(i, block) {
                hljs.highlightBlock(block);
            });
        })
    </script>
@stop