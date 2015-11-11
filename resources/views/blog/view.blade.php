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
                    Posted {{ date('F d, Y g:i A', strtotime($post->created_at)) }} ({{ $post->created_at->diffForHumans() }})
                </h6>

                <div class="blog-content">
                    {!! $post->content !!}
                </div>

            </div>
        </div>
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