@props(['slide'])
<a href="./post/{{$slide->id}}" class="article swiper-slide">
    <img src="{{ $slide->thumbnail ? asset('storage/' .$slide->thumbnail) : asset("images/featured/featured-2.jpg") }} " alt="" class="article-image">

    <div class="article-data-container">
        <div class="article-data">
            <span>{{ $slide->created_at->format('d M y') }}</span>
            <span class="article-data-spacer"></span>
            <span>{{ date('h:i:s', strtotime($slide->created_at)) }}</span>
        </div>
        <h3 class="title article-title limit_characters_one_line_15">{{ $slide->title }}</h3>
    </div>
</a>
