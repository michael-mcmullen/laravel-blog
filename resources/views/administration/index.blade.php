@extends('layout.master')

@section('content')

    <header class="blog-post">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h1>Administration</h1>
                <hr class="star-primary">
            </div>
        </div>
    </header>

    <div class="container padding-bottom-20">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Blog Posts
                        <div class="pull-right">
                            <a href="{{ URL::route('administration.blog.add') }}"><i class="fa fa-plus"></i> Add Post</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50%">Post Title</th>
                                <th>Status</th>
                                <th width="30%">Date Posted</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>
                                        <a href="{{ URL::route('blog.view', $post->slug) }}">
                                            {{ $post->title }}
                                        </a>
                                    </td>
                                    <td>
                                        @if($post->published)
                                            <span class="label label-success"><i class="fa fa-check"></i> Published</span>
                                        @else
                                            <span class="label label-warning"><i class="fa fa-minus"></i> Not Published</span>
                                        @endif
                                    </td>
                                    <td>{{ date('F d, Y g:i A', strtotime($post->created_at)) }}</td>
                                    <td>
                                        <div class="btn-group btn-group-xs btn-group-justified">
                                            <a href="{{ URL::route('administration.blog.delete', $post->id) }}" class="btn btn-danger" title="Delete this post"><i class="fa fa-trash-o"></i></a>
                                            @if($post->published)
                                                <a href="{{ URL::route('administration.blog.unpublish', $post->id) }}" class="btn btn-warning" title="Unpublish this post"><i class="fa fa-minus"></i></a>
                                            @else
                                                <a href="{{ URL::route('administration.blog.publish', $post->id) }}" class="btn btn-primary" title="Publish this post"><i class="fa fa-check"></i></a>
                                            @endif
                                            <a href="{{ URL::route('administration.blog.edit', $post->id) }}" class="btn btn-success" title="Edit this post"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop