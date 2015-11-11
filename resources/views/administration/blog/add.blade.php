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
                    <input type="submit" class="btn btn-success btn-lg" value="Add Post">
                    <a href="{{ URL::route('administration.index') }}" class="btn btn-danger">Cancel</a>
                </div>

            </form>

        </div>
    </div>

@stop

@section('style')
    <link href="{{ asset('assets/plugins/summernote/summernote.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.6.16/summernote-bs3.min.css">
@stop

@section('script')
    <script src="{{ asset('assets/plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/summernote/plugin/summernote-ext-video.js') }}"></script>
    <script src="{{ asset('assets/plugins/summernote/plugin/summernote-ext-php.js') }}"></script>
    <script src="{{ asset('assets/plugins/summernote/plugin/summernote-ext-html.js') }}"></script>
    <script src="{{ asset('assets/plugins/summernote/plugin/summernote-ext-csharp.js') }}"></script>

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

                    this.$http.post('{{ URL::route('administration.blog.slug') }}', postData, function(data, status, request) {
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
                height: 500,
                minHeight: null,
                maxHeight: null,
                toolbar: [
                    ['style', ['style']],
                    ['style', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video', 'hr']],
                    ['codes', ['php', 'html', 'csharp']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                  ]
            });
        });
    </script>
@stop