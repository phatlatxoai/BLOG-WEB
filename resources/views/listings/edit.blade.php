@extends('layout');

@section('content')
<div class="container" >


</div>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Post</h2>
        <x-flash-message />
        <form action="/post/{{ $listings->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" placeholder="title" name="title" value="{{ $listings->title }}" />
            @error('title')
                <p> {{ $message }}</p>
            @enderror
            <select name="tags" >
                <option  value="{{ $listings->tags }}">{{ $listings->tags }}</option>
                @foreach ($tags as $tag)
                <option  value="{{ $tag->tag}}">{{ $tag->tag}}</option>
                @endforeach
            </select>
            @error('tag')
                <p> {{ $message }}</p>
            @enderror
            <textarea rows="10"  placeholder="body" name="body" >{{ $listings->body }}</textarea>
            @error('body')
                <p> {{ $message }}</p>
            @enderror

            <div class="form__control">
                <h3>Add Image</h3>
                <input type="file"  name="thumbnail" value="{{$listings->thumbnail ? asset('storage/' .$listings->thumbnail) : asset("/images/trending/trending_2.jpg")}}">
            </div>
            <img style="max-width:200px;max-height: 100px;" src="{{  $listings->thumbnail ? asset('storage/' .$listings->thumbnail) : asset("/images/trending/trending_2.jpg")}}" alt="">
            @error('thumbnail')
            <p> {{ $message }}</p>
            @enderror
            <button type="submit" class="btn1">Edit Post</button>
        </form>
    </div>

</section>
@endsection
