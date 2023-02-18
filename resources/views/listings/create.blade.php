@extends('layout');

@section('content')
<div class="container" >


</div>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Post</h2>
        <x-flash-message />
        <form action="/post" method="POST" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="text" placeholder="title" name="title">
            @error('title')
                <p> {{ $message }}</p>
            @enderror
            <select name="tags">
            @foreach ($tags as $tag)
                <option  value="{{ $tag->tag}}">{{ $tag->tag}}</option>
                @endforeach
            </select>
            @error('tag')
                <p> {{ $message }}</p>
            @enderror
            <textarea rows="10" placeholder="body" name="body"></textarea>
            @error('body')
                <p> {{ $message }}</p>
            @enderror

            <div class="form__control">
                <h3>Add Image</h3>
                <input type="file"  name="thumbnail">
            </div>
            @error('thumbnail')
            <p> {{ $message }}</p>
            @enderror
            <button type="submit" class="btn1">Add Post</button>
        </form>
    </div>

</section>
@endsection
