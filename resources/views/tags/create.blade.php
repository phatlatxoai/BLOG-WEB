@extends('layout')
@section('content')

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Category</h2>
        <x-flash-message />
        <form action="/tags" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="text" placeholder="Title" name="tag">
            @error('tag')
                <p>{{ $message }}</p>
            @enderror
            <div class="form__control">
                <h3>Add Image</h3>
                <input type="file" id="thumbnail" name="thumbnail">
            </div>
            @error('thumbnail')
               <p>{{ $message }}</p>
            @enderror
            <button type="submit" class="btn1">Add Category</button>
        </form>
    </div>
</section>
@endsection

