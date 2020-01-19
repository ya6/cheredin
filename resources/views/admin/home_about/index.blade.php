@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">HOME About</li>
    </ol>
</nav>

<div class=" container ">

    
<div class=" container ">

<!-- <div class="alert alert-info" role="alert">
    <strong>@lang('display 1-6 photos') </strong>
    </div> -->



<div class="row p-3" style="b order: 1px solid green">

    <div class="col" style="b order: 1px solid gray">
        <img name="slide" class=" mt-1 mr-3" style="border: 1px solid gray"
            src="/images/home_about/{{ $home_about->image }}" alt="about photo" width="400">
    </div>
<div class="col p-2">
    <div class="card m-1" style="width: 18rem;">
        <div class="card-header">
            @lang('English')
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <u>@lang('Title'):</u>
            <p class="h6">{{$home_about->title_en}}</p>   
            </li>
            <li class="list-group-item"><u>@lang('Description'):</u>
            <p class="h6">{{$home_about->description_en}}</p>   
            </li>
        </ul>
    </div>

    <div class="card m-1" style="width: 18rem;">
        <div class="card-header">
        @lang('Russian')
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <u>@lang('Title'):</u>
            <p class="h6">{{$home_about->title_ru}}</p>   
            </li>
            <li class="list-group-item"><u>@lang('Description'):</u>
            <p class="h6">{{$home_about->description_ru}}</p>   
            </li>
        </ul>
    </div>

  

</div>

<div class="col  ml-4 p-2 " style="b order: 1px solid green">
    <div class="row">
        <div class="">
            <a href=" /admin/home_about/{{$home_about->id}}/edit " class="btn btn-primary  text-light mr-5">@lang('Edit')</a>
        </div>

        

    </div>
</div>

</div>
<hr>

<br>

</div>
    

@endsection

@section('script')


@endsection