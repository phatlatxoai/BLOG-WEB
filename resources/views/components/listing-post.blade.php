@props(['post'])
    <section class="blog-post section-header-offset">
        <div class="blog-post-container container">
            <div class="blog-post-data">
                <h3 class="title blog-post-title">{{ $post->title }}</h3>
                <div class="article-data">
                    <span>{{ $post->created_at->format('d M y') }}</span>
                    <span class="article-data-spacer"></span>
                    <span>{{ date('h:i:s', strtotime($post->created_at)) }}</span>
                </div>
                <img src=" {{ $post->thumbnail ? asset('storage/' .$post->thumbnail) : asset("images/featured/featured-2.jpg") }}" alt="">
            </div>

            <div class="container">
                @php
                    $paragraphs = preg_split("/\r\n|\r|\n/",$post->body);
                @endphp
                @foreach ($paragraphs as $paragraph)
                    <p>{{ $paragraph }}</p>

                @endforeach


            </div>
        </div>
    </section>
