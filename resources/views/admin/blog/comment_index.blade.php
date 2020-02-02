@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/admin/blog">Blog</a></li>
        <li class="breadcrumb-item active" aria-current="page"> Blog <strong> {{ $blog->id}} </strong>Comments</li>
    </ol>
</nav>

<div class=" container ">

    <div class="alert alert-info" role="alert">
        <h3> <strong>@lang('Blog') @lang('Post') № {{ $blog->id }} </strong> </h3>
    </div>

    @foreach($blog->comments as $comment)

    <div class="row " style="b order:1px solid blue">
        <div class="col">

            <h5 class="mt-0 mb-1">@lang('Name'): <strong>{{ $comment->name }} </strong></h5>
            <h5 class="mt-0 mb-1"> @lang('Email'): <strong>{{ $comment->email }} </strong></h5>
            <h5 class="mt-0 mb-1"> @lang('Comment'): <strong>{{ $comment->comment }} </strong></h5>

        </div>

        <div class="col">

            <form action="/admin/blog/{{ $blog->id}}/comment/{{ $comment->id }} " method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-outline-danger  " type="submit">Delete</button>
            </form>

        </div>
    </div>


    <hr>
    @endforeach
</div>

<br>






@endsection

@section('script')

@endsection
