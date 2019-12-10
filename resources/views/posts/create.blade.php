@extends('layout')
    @section('content')
    <section id="footer">
        <div class="inner">
            <header>
                <h2>New Post</h2>
            </header>
            <form method="post" action="/posts">
                @csrf

                <div class="field">
                    <label for="title">Title</label>
                    <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{old('title')}}"/>
                    @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                    @enderror
                    <label for="body">Body</label>
                    <textarea class="input @error('body') is-danger @enderror" name="body" id="body" rows="6" >{{old('body')}}</textarea>
                    @error('body')
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                    @enderror
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