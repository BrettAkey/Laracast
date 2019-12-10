@extends('layout')
    @section('content')
    <section id="footer">
        <div class="inner">
            <header>
                <h2>Create Post</h2>
            </header>
            <form method="post" action="/posts">
                @csrf

                <div class="field">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" />
                    <label for="body">Body</label>
                    <textarea name="body" id="body" rows="6"></textarea>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Create Post" class="alt" /></li>
                </ul>
            </form>
            <div class="copyright">
                &copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>
            </div>
        </div>
    </section>
    @endsection