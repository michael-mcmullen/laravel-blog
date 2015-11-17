<?xml version="1.0"?>
<feed xmlns="http://www.w3.org/2005/Atom">
    <title>{{ env('SITE_NAME') }}</title>
    <link href="{{ URL::route('home') }}" />
    <link type="application/atom+xml" rel="self" href="{{ URL::route('rss') }}" />
    <updated>{{ $posts->first()->published_at }}</updated>
    <id>{{ URL::route('rss') }}</id>
    <author>
        <name>Michael McMullen</name>
        <email>michael.mcmullen@tutelagesystems.com</email>
    </author>

    @foreach($posts as $post)
        <entry>
            <id>{{ URL::route('blog.view', $post->slug) }}</id>
            <link type="text/html" rel="alternate" href="{{ URL::route('blog.view', $post->slug) }}" />
            <title>{{ $post->title }}</title>
            <published>{{ $post->published_at }}</published>
            <updated>{{ $post->published_at }}</updated>
            <author>
                <name>Michael McMullen</name>
                <uri>{{ URL::route('home') }}</uri>
            </author>
            <content type="html"><![CDATA[
                {!! $post->content !!}
            ]]></content>
        </entry>
    @endforeach
</feed>