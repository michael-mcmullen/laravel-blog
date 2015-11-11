@extends('layout.blank')

@section('content')

<header class="blog-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h3>
                    {{ $post->title }}
                </h3>

                <div class="blog-content">
                    {!! $post->content !!}
                </div>

            </div>
        </div>
    </div>
</header>

@stop