@extends('layout.blank')

@section('content')

    <header class="blog-post">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h1>Blog Posts</h1>
                <hr class="star-primary">
            </div>
        </div>
    </header>

    <!-- Blog Grid Section -->
    <section id="blog" class="no-padding padding-bottom-20">
        <div class="container">
            @foreach($posts as $post)
                <div class="row">
                    <div class="col-sm-12">
                        <h4>
                            <a href="{{ URL::route('blog.view', $post->slug) }}">
                                {{ $post->title }}
                            </a>
                        </h4>
                        {{ str_limit($post->content, 300) }}
                    </div>
                </div>
            @endforeach

        </div>
    </section>

@stop