@extends('layout')
@section('content')
<section class="older-posts section" style="margin-top: 50px;">
    <div class="container">
        @if ( request(['tag']) )

        <h2 style="text-transform: uppercase;" class="title section-title limit_characters_one_line" data-name="{{ request(['tag'])['tag'] }}">{{ request(['tag'])['tag'] }}</h2>
        @elseif (request(['search']))
        <h2 style="text-transform: uppercase;" class="title section-title limit_characters_one_line" data-name="{{ request(['search'])['search'] }}">{{ request(['search'])['search'] }}</h2>

        @endif
        <div class="older-posts-grid-wrapper d-grid">
            @foreach ($listings as $listing)
                <a href="./post/{{$listing->id}}" class="article d-grid">
                    <div class="older-posts-article-image-wrapper">
                        <img src="{{ $listing->thumbnail ? asset('storage/' .$listing->thumbnail) : asset("images/featured/featured-2.jpg") }}" alt="" class="article-image">
                    </div>

                    <div class="article-data-container">

                        <div class="article-data">
                            <span class="article-data-spacer"></span>
                            <span>{{ $listing->created_at->format('d M y') }}</span>
                            <span>{{ date('m:d:y', strtotime($listing->created_at)) }}</span>
                        </div>

                        <h3 class="title article-title limit_characters_one_line">{{ $listing->title }}</h3>
                        <p class="article-description limit_characters_many_line"> {{ $listing->body }}</p>

                    </div>
                </a>
            @endforeach

        </div>
    </div>

<div class="container">
{{ $listings->links('vendor.pagination.simple-bootstrap-4') }}
</div>
</section>





@endsection


