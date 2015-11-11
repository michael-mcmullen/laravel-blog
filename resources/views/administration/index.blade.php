@extends('layout.blank')

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
                                <th width="30%">Date Posted</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <div class="btn-group btn-group-justified">
                                            <a href="{{ URL::route('administration.blog.delete', $post->id) }}" class="btn btn-danger">Delete</a>
                                            <a href="{{ URL::route('administration.blog.edit', $post->id) }}" class="btn btn-success">Edit</a>
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