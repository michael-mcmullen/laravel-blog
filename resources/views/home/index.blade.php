@extends('layout.master')

@section('content')

    <!-- Blog Grid Section -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Most Recent Post</h2>
                    <hr class="star-primary">
                </div>
            </div>

            @foreach($posts as $post)
                <header class="blog-post">
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
                                @if($post->categories->count() > 0)
                                    @foreach($post->categories as $idx => $category)
                                        {{ $category->name }} @if($idx != (count($post->categories) - 1 )) | @endif
                                    @endforeach
                                @else
                                    <div class="alert alert-custom">
                                        <h4>Sorry</h4>
                                        There are no tags for this post
                                    </div>
                                @endif
                            </div>

                            @if(env('DISQUS_ENABLED', false))
                                <div>
                                    <a href="{{ route('blog.view', $post->slug) }}" class="btn btn-primary"><i class="fa fa-comments"></i> Add Comment</a>
                                </div>
                            @endif

                    </div>
                </div>
        </header>
        @endforeach

        </div>
    </section>


    <!-- Section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>There is tons more to read</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>
                    <a href="{{ URL::route('blog.listing') }}">Check out more entries</a>
                </p>
            </div>
        </div>
    </div>

@stop