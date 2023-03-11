@extends('admin.layouts.app')

@section('content')
    <h1>Show detail food</h1>
    <h3>Food name: {{ $posts->title }}</h3>
    <h3>Img path: {{ $posts->img_path }}</h3>
    <img src="{{ asset('images/' . $posts->img_path) }}" alt="">
    <h3>posts number: {{ $posts->content }}</h3>
    <h3>CategoryId: {{ $posts->category_id }}</h3>
    <h3>Category_name: {{ $posts->category->name }}</h3>
@endsection
