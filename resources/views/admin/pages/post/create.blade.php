@extends('admin.layouts.app')

@push('style')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
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
                                Create Post Page
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <form action="/admin/post" method="POST" enctype="multipart/form-data">
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
                                        <label class="small mb-1" for="inputFirstName">Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="inputFirstName"
                                            type="text" placeholder="Enter title" name="title" />
                                        @error('title')
                                            <label class="small mb-2 alert alert-danger"
                                                style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                            padding-left: 0;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-3">
                                        <label class="small mb-1" for="form-category">Choose Category</label>
                                        <select class="form-select @error('category_id') is-invalid @enderror"
                                            style="line-height: 1.3" if="form-category" aria-label="Default select example"
                                            name="category_id">
                                            <option value="" holder>Open this select category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <label class="small mb-2 alert alert-danger"
                                                style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                        padding-left: 0;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Content </label>
                                    <input class="form-control @error('content') is-invalid @enderror" id="inputUsername"
                                        type="text" placeholder="Enter content" name="content" />
                                    @error('content')
                                        <label class="small mb-2 alert alert-danger"
                                            style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                    padding-left: 0;">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (username)-->
                                    <div class="col-md-3 mb-3">
                                        <label for="formFile" class="form-label">Default file input example</label>
                                        <input class="form-control @error('img_path') is-invalid @enderror" type="file"
                                            id="formFile" name="img_path">
                                        @error('img_path')
                                            <label class="small mb-2 alert alert-danger"
                                                style="background-color: transparent; border-color: transparent; padding-bottom: 0;
                                padding-left: 0;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Choose Tags</label>
                                        <select name="tags[]" id="tags" multiple="">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
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
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('tags', {
            rounded: true, // default true
            shadow: true // default false
        }) // id
    </script>
@endpush
