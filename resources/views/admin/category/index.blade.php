@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">BLOG Categories</li>
    </ol>
</nav>

<div class=" container ">

  
   @include('inc.flash_mess')
   
   @if(session('status')!= null)
   {{ session('status') }}
   @endif

    @foreach($categories as $category)

    <div class="row p-3" style="b order: 1px solid green">


        <div class="col  p-2">
            <div class="card m-1" style="width: 18rem;">
                <div class="card-header">
                    @lang('English')
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <u>@lang('Category'):</u>
                        <p class="h6">{{$category->category_en}}</p>
                    </li>
                </ul>
            </div>

            <div class="card m-1" style="width: 18rem;">
                <div class="card-header">
                    @lang('Russian')
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item"> <u>@lang('Category'):</u>
                        <p class="h6">{{$category->category_ru}}</p>
                    </li>
                   
                </ul>
            </div>



        </div>

        <div class="col  p-2 " style="b order: 1px solid green">
            <div class="row">
                <div class="">
                    <a href="/admin/blog/category/{{$category->id}}/edit "
                        class="btn btn-primary  text-light mr-5">@lang('Edit')</a>
                </div>

                <form action="/admin/blog/category/{{$category->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-danger  " type="submit">@lang('Delete')</button>
                </form>

            </div>
        </div>

    </div>
    <hr>
    @endforeach

    <br>

    <div class=" row">
        <a href="/admin/blog/category/create" class="btn btn-primary w-100 m-2">@lang('Add new')</a>
    </div>
    <br>
</div>
@endsection

@section('script')

@endsection
