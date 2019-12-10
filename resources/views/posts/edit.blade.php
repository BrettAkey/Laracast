@extends('layout')
    @section('content')
    <section id="footer">
        <div class="inner">
            <header>
                <h2>Edit Post</h2>
            </header>
            <form method="post" action="/posts/{{$post->id}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{$post->title}}"/>
                    <label for="body">Body</label>
                    <textarea name="body" id="body" rows="6">{{$post->body}}</textarea>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Update Post" class="alt" /></li>
                </ul>
            </form>
            <div class="copyright">
                &copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>
            </div>
        </div>
    </section>
    @endsection