@extends('layout');
@section('content');
<section class="dashboard">
    <div class="container dashboard__container">
        <button id="show__sidebar-btn" class="sidebar__toggle">
            <i class="uil uil-angle-right-b"></i></button>
        <button id="hide__sidebar-btn" class="sidebar__toggle">
            <i class="uil uil-angle-right-b"></i></button>
        <aside>
            <ul>
                <li>
                    <a href="/post/create"><i class = "uil uil-pen"></i>
                    <h5>Add Post</h5>
                </a>
                </li>
                <li>
                    <a href="/management" ><i class = "uil uil-postcard"></i>
                    <h5>Manager Post</h5>
                </a>
                </li>
                <li>
                    <a href="/tags/create"><i class = "uil uil-edit"></i>
                    <h5>Add Category</h5>
                </a>
                </li>
                <li>
                    <a href="/tags/mana" class="active"><i class = "uil uil-pen"></i>
                    <h5>Manager Category</h5>
                </a>
                </li>
            </ul>
        </aside>
        <main>
            <h2>Manager Post</h2>
            <table>
                <thead>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->tag }}</td>
                        <td><img
                        style="width:200px;height:100px;object-fit: cover;
                            maxwidth:200px;
                            maxheight:100px" src="{{  $tag->thumbnail ? asset('storage/' .$tag->thumbnail) : asset("/images/trending/trending_2.jpg")}}" alt=""></td>
                        <td><a href="/tags/{{ $tag->id }}/edit" class="btn1 sm">Edit</a></td>
                        <form method="POST" action="/tags/{{$tag->id}}/delete">
                            @csrf
                            @method('DELETE')
                            <td><button  class="btn1 sm danger">Delete</button></td>
                        </form>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </main>
    </div>
</section>

@endsection
