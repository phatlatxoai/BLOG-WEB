@extends('layout');
@section('content')
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
                    <a href="/management" class="active"><i class = "uil uil-postcard"></i>
                    <h5>Manager Post</h5>
                </a>
                </li>
                <li>
                    <a href="/tags/create"><i class = "uil uil-edit"></i>
                    <h5>Add Category</h5>
                </a>
                </li>
                <li>
                    <a href="/tags/mana" ><i class = "uil uil-pen"></i>
                    <h5>Manager Category</h5>
                </a>
                </li>
            </ul>
        </aside>
        <main>
            <h2>Manager Post</h2>
            <table>
                <thead>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Body</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </thead>
                <tbody>
                    @foreach ($listings as $listing)
                    <tr>
                        <td >{{ $listing->title }}</td>
                        <td>{{ $listing->tags }}</td>
                        <td><img
                        style="width:200px;height:100px;object-fit: cover;
                        maxwidth:200px;
                        maxheight:100px" src="{{  $listing->thumbnail ? asset('storage/' .$listing->thumbnail) : asset("/images/trending/trending_2.jpg")}}"></td>
                        <td class="limit_characters_many_line" >{{ $listing->body }}</td>
                        <td><a href="/post/{{ $listing->id }}}/edit" class="btn1 sm">Edit</a></td>

                        <form method="POST" action="/post/{{$listing->id}}">
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
