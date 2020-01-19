@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">HOME Video</li>
    </ol>
</nav>

<div class=" container ">

    
<div class=" container ">

<!-- <div class="alert alert-info" role="alert">
    <strong>@lang('display 1-6 photos') </strong>
    </div> -->



<div class="row p-3" style="b order: 1px solid green">

    <div class="col" style="b order: 1px solid gray">
    <video src="/videos/home_video/{{$home_video->video}}" controls width="100%"></video> 
    </div>
<div class="col p-2">
    <div class="card m-1" style="width: 18rem;">
        <div class="card-header">
            @lang('English')
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><u>@lang('Description'):</u>
            <p class="h6">{{$home_video->description_en}}</p>   
            </li>
        </ul>
    </div>

    <div class="card m-1" style="width: 18rem;">
        <div class="card-header">
        @lang('Russian')
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><u>@lang('Description'):</u>
            <p class="h6">{{$home_video->description_ru}}</p>   
            </li>
        </ul>
    </div>

  

</div>

<div class="col  ml-4 p-2 " style="b order: 1px solid green">
    <div class="row">
        <div class="">
            <a href=" /admin/home_video/{{$home_video->id}}/edit " class="btn btn-primary  text-light mr-5">@lang('Edit')</a>
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