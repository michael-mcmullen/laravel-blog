@extends('layout.blank')

@section('content')

    <header class="blog-post">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h1>Add Blog Post</h1>
                <hr class="star-primary">
            </div>
        </div>
    </header>

    <div class="container padding-bottom-20">

        @include('layout.partials.errors')

        <div id="app" class="row">
            <form action="{{ URL::route('administration.blog.insert') }}" method="POST">

                <input type="hidden" name="_token" v-model="token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="title">Title of Post</label>
                    <input type="text" id="title" name="title" class="form-control" v-model="slug" value="{{ old('title') }}" placeholder="Blog Title" @keyup="getSlug | debounce 1000">
                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" id="slug" name="slug" class="form-control" value="" v-model="blogSlug" readonly>
                </div>

                <div class="form-group">
                    <label for="content">Content (html)</label>
                    <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Add Post">
                </div>

            </form>

        </div>
    </div>

@stop

@section('style')
    <link href="{{ asset('assets/plugins/summernote/summernote.css') }}" rel="stylesheet" type="text/css">
@stop

@section('script')
    <script src="{{ asset('assets/plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/summernote/plugin/summernote-ext-video.js') }}"></script>

    <script>
        Vue.http.options.emulateJSON = true;

        var vm = new Vue({
            el: '#app',
            data: {
                token: '',
                slug: '',
                blogSlug: '', // the checked result
                result: ''
            },
            methods: {
                getSlug: function() {
                    postData = {
                        _token: this.token,
                        slug: this.slug
                    };

                    this.$http.post('{{ URL::route('administration.blog.slug', '') }}', postData, function(data, status, request) {
                        this.result = data;

                        if(data.valid)
                        {
                            this.blogSlug = data.slug;
                        }
                    });
                }
            }
        });

        // preform slug request on page load
        vm.getSlug();

        // Summernote
        $(document).ready(function() {
            $('#content').summernote({
                height: 300,
                minHeight: null,
                maxHeight: null
            });
        });
    </script>
@stop