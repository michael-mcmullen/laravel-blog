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
                <div style="border-bottom: 1px solid #f1f1f1;">
                    <div class="row">
                        <div class="col-sm-12 padding-bottom-20">
                            <h4>
                                <a href="{{ URL::route('blog.view', $post->slug) }}">
                                    {{ $post->title }}
                                </a>
                                <small>{{ date('F d, Y g:i A', strtotime($post->created_at)) }} ({{ $post->created_at->diffForHumans() }})</small>
                            </h4>
                            {!! str_limit(strip_tags($post->content, '<p><b>'), 300) !!}
                            <div class="text-right">
                                <a href="{{ URL::route('blog.view', $post->slug) }}">
                                    read more ...
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


    <!-- Section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Want to see more entries?</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>
                    <a href="{{ URL::route('blog.listing') }}">View All Blog Posts</a>
                </p>
            </div>
        </div>
    </div>

@stop