@extends('layout')
@section('content')

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Category</h2>
        <x-flash-message />
        <form action="/tags/{{ $tag->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Title" name="tag" value="{{ $tag->tag }}" />
            @error('tag')
                <p>{{ $message }}</p>
            @enderror
            <div class="form__control">
                <h3>Add Image</h3>
                <input type="file" id="thumbnail" name="thumbnail" >
            </div>


            <img style="width:200px;height:100px;object-fit: cover;
            maxwidth:200px;
            maxheight:100px;"  src="{{  $tag->thumbnail ? asset('storage/' .$tag->thumbnail) : asset("/images/trending/trending_2.jpg")}}" alt="">


            @error('thumbnail')
            <p>{{ $message }}</p>
            @enderror


           <button type="submit" class="btn1">Add Category</button>
        </form>
    </div>
</section>
@endsection

