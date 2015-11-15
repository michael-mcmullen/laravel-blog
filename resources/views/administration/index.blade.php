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
                                <th>Post Title</th>
                                <th width="20%">Status</th>
                                <th width="20%">Date Posted</th>
                                <th width="10%">Actions</th>
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
                                        <div class="btn-group">
                                            @if($post->published)
                                                <span class="label label-success button-toggle" data-toggle="dropdown"><i class="fa fa-check"></i> Published <span class="caret"></span> </span>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="{{ URL::route('administration.blog.unpublish', $post->id) }}">Unpublish</a>
                                                    </li>
                                                </ul>
                                            @else
                                                <span class="label label-warning button-toggle" data-toggle="dropdown"><i class="fa fa-minus"></i> Not Published <span class="caret"></span> </span>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="{{ URL::route('administration.blog.publish', $post->id) }}">Publish</a>
                                                    </li>
                                                </ul>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        @if($post->published)
                                            {{ date('F d, Y g:i A', strtotime($post->published_at)) }}</td>
                                        @endif
                                    <td>
                                        <div class="btn-group btn-group-xs btn-group-justified">
                                            @if(! $post->published)
                                                <a href="{{ URL::route('administration.blog.delete', $post->id) }}" class="btn btn-danger" title="Delete this post"><i class="fa fa-trash-o"></i></a>
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