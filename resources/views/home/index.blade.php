@extends('layout.master')

@section('content')

    <!-- Blog Grid Section -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Recent Blog Posts</h2>
                    <hr class="star-primary">
                </div>
            </div>

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

            <div class="row">
                <div class="col-sm-12 text-right">
                    <a href="{{ URL::route('blog.listing') }}" class="btn btn-primary">All Blog Posts</a>
                </div>
            </div>

        </div>
    </section>

@stop