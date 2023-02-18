@extends('layout')
@section('content')
    <!-- Featured articles -->
    <section class="featured-articles section section-header-offset g">

        <div class="featured-articles-container container d-grid">

            <div class="featured-content d-grid">
                @foreach ($listings as $listing)
                        @if ($loop->index == 0)
                            <div class="headline-banner">
                                <h3 class="headline fancy-border">
                                    <span class="place-items-center">TIN NÓNG</span>
                                </h3>
                                <span class="headline-description limit_characters_one_line">{{ $listing->title }}</span>
                            </div>

                        @elseif ($loop->index == 1)
                        <a href="./post/{{$listing->id}}" class="article featured-article featured-article-1">
                            <img src="{{ $listing->thumbnail ? asset('storage/' .$listing->thumbnail) : asset("images/featured/featured-2.jpg") }}" alt="" class="article-image">
                            <span class="article-category">{{ $listing->tags }}</span>

                            <div class="article-data-container">

                                <div class="article-data">
                                    <span>{{ $listing->created_at->format('d M y') }}</span>
                                    <span class="article-data-spacer"></span>
                                        <span>{{ date('H:i:s', strtotime($listing->created_at)) }}</span>
                                </div>

                                <h3 class="title article-title limit_characters_one_line">{{ $listing->title }}</h3>

                            </div>

                        </a>
                        @elseif ($loop->index == 2)
                            <a href="./post/{{$listing->id}}" class="article featured-article featured-article-2">
                                <img src="{{  $listing->thumbnail ? asset('storage/' .$listing->thumbnail) : asset("images/featured/featured-2.jpg") }}" alt="" class="article-image">
                                <span class="article-category">{{ $listing->tags }}</span>

                                <div class="article-data-container">

                                    <div class="article-data">
                                        <span>{{ $listing->created_at->format('d M y') }}</span>
                                        <span class="article-data-spacer"></span>
                                        <span>{{ date('H:i:s', strtotime($listing->created_at)) }}</span>
                                    </div>

                                    <h3 class="title article-title limit_characters_one_line">{{ $listing->title }}</h3>

                                </div>
                            </a>
                        @elseif ($loop->index == 3)
                        <a href="./post/{{$listing->id}}" class="article featured-article featured-article-3">
                            <img src="{{  $listing->thumbnail ? asset('storage/' .$listing->thumbnail) : asset("images/featured/featured-2.jpg") }}" alt="" class="article-image">
                            <span class="article-category">{{ $listing->tags }}</span>

                            <div class="article-data-container">

                                <div class="article-data">
                                    <span>{{ $listing->created_at->format('d M y') }}</span>
                                    <span class="article-data-spacer"></span>
                                    <span>{{ date('H:i:s', strtotime($listing->created_at)) }}</span>
                                </div>

                                <h3 class="title article-title limit_characters_one_line">{{ $listing->title }}</h3>

                            </div>
                        </a>
                        @endif
                        @endforeach
                    </div>
                    {{-- #tin nóng hỏi --}}
                    <div class="sidebar d-grid">

                        <h3 class="title featured-content-title">Tin Mới</h3>
                        @foreach ($newspapers as $newspaper)

                        <a href="./post/{{$newspaper->id}}" class="trending-news-box">
                            <div class="trending-news-img-box">
                                <span class="trending-number place-items-center">{{ $loop->index +1}}</span>
                                <img src="{{ $newspaper->thumbnail ? asset('storage/' .$newspaper->thumbnail) : asset("images/featured/featured-2.jpg") }}" alt="" class="article-image">
                            </div>

                            <div class="trending-news-data">

                                <div class="article-data">
                                    <span>{{ $newspaper->created_at->format('d M y') }}</span>
                                    <span class="article-data-spacer"></span>
                                    <span>{{ date('h:i:s', strtotime($newspaper->created_at)) }}</span>
                                </div>

                                <h3 class="title article-title limit_characters_one_line_15">{{ $newspaper->title }}</h3>

                            </div>
                        </a>
                        @endforeach
                    </div>
            </div>

        </section>

        <!-- Quick read -->
        <section class="quick-read section">

            <div class="container">

                <h2 class="title section-title" data-name="TIN GỢI Ý">TIN GỢI Ý</h2>
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                      @foreach ($Suggestions as $Suggestion)
                        <x-listing-slides :slide="$Suggestion"/>
                      @endforeach
                </div>
                    <!-- Navigation buttons -->
                    <div class="swiper-button-prev swiper-controls"></div>
                    <div class="swiper-button-next swiper-controls"></div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>

             </div>

        </section>

    </section>

    <!-- Older posts -->
    <section class="older-posts section">

        <div class="container">

            <h2 class="title section-title" data-name="TIN CŨ">TIN CŨ</h2>

            <div class="older-posts-grid-wrapper d-grid">
                @foreach ($oldposts as $oldpost)
                    <x-listing-oleness :olepost="$oldpost" />
                @endforeach
            </div>

            <div class="see-more-container">
                <a href="/posts" class="btn see-more-btn place-items-center">XEM THÊM <i class="ri-arrow-right-s-line"></i></i></a>
            </div>

        </div>
    </section>
    {{-- popular-tags section --}}
    <section class="popular-tags section">

        <div class="container">

            <h2 class="title section-title" data-name="CÁC TAG PHỔ BIẾN">CÁC TAG PHỔ BIẾN</h2>

            <div class="popular-tags-container d-grid">
                @foreach ($tags as $tag)
                <a href="/?tag={{ $tag->tag }}" class="article">
                <span class="tag-name">#{{ $tag->tag }}</span>
                <img src="{{  $tag->thumbnail ? asset('storage/' .$tag->thumbnail) : asset("/images/trending/trending_2.jpg") }}" alt="" class="article-image">
                </a>
                @endforeach
            </div>

        </div>
    </section>
@endsection
