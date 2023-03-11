@extends('admin.layouts.app')

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="book-open"></i></div>
                                Create Category Pages
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">

            <hr class="mt-0 mb-4" />
            <div class="row">
                <div class="col-xl">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Category Create</div>
                        <div class="card-body">
                            <form action="/admin/category" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Form Group (username)-->
                                {{-- <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Name</label>
                                    <input class="form-control" id="inputUsername" type="text"
                                        placeholder="Enter category name" name="name" />
                                </div> --}}
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="inputFirstName"
                                            type="text" placeholder="Enter Name Category" name="name" />
                                        @error('name')
                                            <label class="small mb-2 alert alert-danger"
                                                style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                            padding-left: 0;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName">Description</label>
                                        <input class="form-control @error('desc') is-invalid @enderror" id="inputLastName"
                                            type="text" placeholder="Enter description" name="desc" />
                                        @error('desc')
                                            <label class="small mb-2 alert alert-danger"
                                                style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                            padding-left: 0;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Form Row        -->

                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Create</button>
                            </form>
                            {{-- @if ($errors->any())
                                <div>
                                    @foreach ($errors->all() as $error)
                                        <p class="text-danger">
                                            {{ $error }}
                                        </p>
                                    @endforeach
                                </div>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
