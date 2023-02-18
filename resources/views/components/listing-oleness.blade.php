@props(['olepost'])
<a href="./post/{{$olepost->id}}" class="article d-grid">
    <div class="older-posts-article-image-wrapper">
        <img src="{{ $olepost->thumbnail ? asset('storage/' .$olepost->thumbnail) : asset("images/featured/featured-2.jpg") }}" alt="" class="article-image">
    </div>

    <div class="article-data-container">

        <div class="article-data">
            <span>{{ $olepost->created_at->format('d M y') }}</span>
            <span class="article-data-spacer"></span>
            <span>{{ date('m:d:y', strtotime($olepost->created_at)) }}</span>
        </div>

        <h3 class="title article-title limit_characters_one_line">{{ $olepost->title }}</h3>
        <p class="article-description limit_characters_many_line"> {{ $olepost->body }}</p>

    </div>
</a>
