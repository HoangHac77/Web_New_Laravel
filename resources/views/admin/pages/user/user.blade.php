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
                            href="user/create" role="button">Add User</a></div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Img Profile</th>
                                <th>ROLE</th>
                                <th>Updated_at</th>
                                {{-- <th>Start date</th>
                                <th>Salary</th>
                                <th>Status</th> --}}
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Img Profile</th>
                                <th>ROLE</th>
                                <th>Updated_at</th>
                                {{-- <th>Start date</th>
                                <th>Salary</th>
                                <th>Status</th> --}}
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>

                                    <td>
                                        @if ($loop->first)
                                        @endif
                                        {{ $user->id }}</p>
                                    </td>
                                    <td>{{ $user->name_user }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>
                                        <img width="75px" height="75px" src="{{ asset('images/' . $user->img_profile) }}"
                                            alt=""></td>
                                    <td>
                                        @if ($user->role == 'admin')
                                            <span class="badge bg-danger p-1 fw-bold fs-6">admin</span>
                                        @elseif ($user->role == 'author')
                                            <span class="badge bg-primary p-1 fw-bold fs-6">author</span>
                                        @else
                                            <span class="badge bg-success p-1 fw-bold fs-6">user</span>
                                        @endif
                                        {{-- {{ $user->role }} --}}
                                    </td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>
                                        @if ($user->role == 'admin')
                                        @else
                                            <div style="display: flex; justify-content: space-between">
                                                <a style="height: 30px !important; width: 30px !important; margin-right: 8px"
                                                    href="/admin/user/{{ $user->id }}/edit"
                                                    class="btn btn-outline-primary btn-icon">
                                                    <i style="width: 25px; height: 25px; padding: 2px"
                                                        data-feather="edit"></i>
                                                </a>

                                                <form action="/admin/user/{{ $user->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="height: 30px !important; width: 30px !important;"
                                                        type="submit" class="btn btn-outline-danger btn-icon ">
                                                        <i style="width: 25px; height: 25px; padding: 2px"
                                                            data-feather="trash-2"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        @endif
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
