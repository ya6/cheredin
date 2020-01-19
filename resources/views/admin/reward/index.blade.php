@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Rewards</li>
    </ol>
</nav>

<div class=" container ">

    <!-- <div class="alert alert-info" role="alert">
        <strong>@lang('For correct display') </strong>@lang('image size 1200х800px or ratio 1.5х1.0')
    </div> -->

    @foreach($rewards as $reward)

    <div class="row p-3" style="b order: 1px solid green">

        <div class="col" style="b order: 1px solid gray">
            <img name="slide" class=" mt-1 mr-3" style="border: 1px solid gray"
                src="/images/rewards/{{ $reward->image }}" alt="photo" width="300">
        </div>
<div class="col  p-2">
        <div class="card m-1" style="width: 18rem;">
            <div class="card-header">
                @lang('English')
            </div>
            <ul class="list-group list-group-flush">
                </li>
                <li class="list-group-item"><u>@lang('Description'):</u>
                <p class="h6">{{$reward->description_en}}</p>   
                </li>
            </ul>
        </div>

        <div class="card m-1" style="width: 18rem;">
            <div class="card-header">
            @lang('Russian')
            </div>
            <ul class="list-group list-group-flush">
                </li>
                <li class="list-group-item"><u>@lang('Description'):</u>
                <p class="h6">{{$reward->description_ru}}</p>   
                </li>
            </ul>
        </div>

      

    </div>

    <div class="col  p-2 " style="b order: 1px solid green">
        <div class="row">
            <div class="">
                <a href=" /admin/reward/{{$reward->id}}/edit " class="btn btn-primary  text-light mr-5">@lang('Edit')</a>
            </div>

            <form action="/admin/reward/{{$reward->id}} " method="post">
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
    <a href="/admin/reward/create" class="btn btn-primary w-100 m-2">@lang('Add new')</a>
</div>
<br>
</div>
@endsection

@section('script')

@endsection