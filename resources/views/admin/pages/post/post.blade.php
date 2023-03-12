@extends('admin.layouts.app')

@section('content')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="filter"></i></div>
                                Tables
                            </h1>
                            <div class="page-header-subtitle">An extension of the Simple DataTables library, customized for
                                SB Admin Pro</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-n10">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between bg-light">
                    <div class="text-black">Extended DataTables</div>
                    <div><a class="btn btn-success btn-sm font-weight-bold" style="font-size: 14px; font-weight: initial;"
                            href="post/create" role="button">Create Post</a></div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>content</th>
                                <th>Picture</th>
                                <th>Tags</th>
                                <th>Author</th>
                                <th>Updated_at</th>
                                {{-- <th>Start date</th>
                                <th>Salary</th>
                                <th>Status</th> --}}
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>content</th>
                                <th>Picture</th>
                                <th>Tags</th>
                                <th>Author</th>
                                <th>Updated_at</th>
                                {{-- <th>Start date</th>
                                <th>Salary</th>
                                <th>Status</th> --}}
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($posts as $key => $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td><img width="75px" height="75px" src="{{ asset('images/' . $post->img_path) }}"
                                            alt=""></td>
                                    <td>
                                        @foreach ($post->tags as $tag)
                                            <ul value={{ $tag->id }}>
                                                <li style="list-style-type: none;">{{ $tag->name }}</li>
                                            </ul>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($users as $user)
                                            @if ($post->user_id == $user->id)
                                                <li style="list-style-type: none;">{{ $user->name_user }}</li>
                                            @endif
                                        @endforeach
                                        {{-- {{ $post->users->name_user }} --}}
                                    </td>
                                    <td>{{ $post->updated_at }}</td>
                                    {{-- <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>
                                    <div class="badge bg-primary text-white rounded-pill">Full-time</div>
                                </td> --}}
                                    <td>
                                        <div style="display: flex; justify-content: space-between">
                                            <a style="height: 30px !important; width: 30px !important; margin-right: 8px"
                                                href="/admin/post/{{ $post->id }}/edit"
                                                class="btn btn-outline-primary btn-icon">
                                                <i style="width: 25px; height: 25px; padding: 2px" data-feather="edit"></i>
                                            </a>

                                            <form action="/admin/post/{{ $post->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button style="height: 30px !important; width: 30px !important;"
                                                    type="submit" class="btn btn-outline-danger btn-icon ">
                                                    <i style="width: 25px; height: 25px; padding: 2px"
                                                        data-feather="trash-2"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
@endsection
