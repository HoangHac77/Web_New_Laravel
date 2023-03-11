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
                <div class="card-header d-flex justify-content-between bg-dark">
                    <div class="text-white">Extended DataTables</div>
                    <div><a class="btn btn-success btn-sm font-weight-bold" style="font-size: 14px" href="category/create"
                            role="button">Create Category</a></div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Desc</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                {{-- <th>Start date</th>
                                <th>Salary</th>
                                <th>Status</th> --}}
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Desc</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                {{-- <th>Start date</th>
                                <th>Salary</th>
                                <th>Status</th> --}}
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->desc }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>
                                    {{-- <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>
                                    <div class="badge bg-primary text-white rounded-pill">Full-time</div>
                                </td> --}}
                                    <td>
                                        <a href="/admin/category/{{ $category->id }}/edit"
                                            class="btn btn-outline-warning btn-datatable">Edit</a>

                                        <form class="btn btn-datatable" style="margin-left: 20px" action="/admin/category/{{ $category->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>
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
