@extends('admin.layouts.app')

@push('style')
@endpush

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="book"></i></div>
                                Add User Page
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <form action="/admin/user" method="POST" enctype="multipart/form-data">
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">

                <hr class="mt-0 mb-4" />
                <div class="row">
                    <div class="col-xl">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Fields Tag</div>
                            <div class="card-body">
                                @csrf
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputUserName">User Name</label>
                                        <input class="form-control @error('name_user') is-invalid @enderror"
                                            id="inputUserName" type="text" placeholder="Enter User Name"
                                            name="name_user" />
                                        @error('name_user')
                                            <label class="small mb-2 alert alert-danger"
                                                style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                            padding-left: 0;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-3">
                                        <label class="small mb-1" for="form-gender">Choose Gender</label>
                                        <select style="padding-top: 18px" class="form-select @error('gender') is-invalid @enderror" id="form-gender"
                                            name="gender" aria-label="Default select example">
                                            <option value="" selected>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        @error('gender')
                                            <label class="small mb-2 alert alert-danger"
                                                style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                        padding-left: 0;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (username)-->
                                    <div class="col-md-6 mb-3">
                                        <label class="small mb-1" for="inputEmail">Email </label>
                                        <input class="form-control @error('email') is-invalid @enderror" id="inputUsername"
                                            type="email" placeholder="Enter Email" name="email" />
                                        @error('email')
                                            <label class="small mb-2 alert alert-danger"
                                                style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                        padding-left: 0;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="col-md-3">
                                        <label class="small mb-1" for="form-role">Choose Role</label>
                                        <select style="padding-top: 18px" class="form-select  @error('role') is-invalid @enderror" id="form-role" name="role"
                                            aria-label="Default select example">
                                            <option value="" selected>Select Role </option>
                                            <option value="0">User</option>
                                            <option value="1">Author</option>
                                            <option value="2">Admin</option>
                                        </select>

                                        @error('role')
                                            <label class="small mb-2 alert alert-danger"
                                                style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                            padding-left: 0;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (username)-->
                                    <div class="col-md-3 mb-3">
                                        <label for="formFile" class="form-label">Select img profile</label>
                                        {{-- <input class="form-control" type="file" id="formFile" name="img_profile"> --}}
                                        <input class="form-control @error('img_profile') is-invalid @enderror" type="file"
                                            id="formFile" name="img_profile">
                                        @error('img_profile')
                                            <label class="small mb-2 alert alert-danger"
                                                style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                padding-left: 0;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="small mb-1" for="inputPW">Password </label>
                                        <input class="form-control @error('password') is-invalid @enderror" id="inputPW"
                                            type="password" placeholder="Enter password" name="password" />
                                        @error('password')
                                            <label class="small mb-2 alert alert-danger"
                                                style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                        padding-left: 0;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection

@push('scripts')
@endpush
