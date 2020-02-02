@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact</li>
    </ol>
</nav>

<div class=" container ">

  
   @include('inc.flash_mess')
   
   
   

    <div class="row p-3" style="b order: 1px solid green">


        <div class="col  p-2">
            <div class="card m-1" style="width: 18rem;">
                <div class="card-header">
                    @lang('English')
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <u>@lang('Phone'):</u>
                        <p class="h6">{{$contact->phone}}</p>
                    </li>
                </ul>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <u>@lang('E-mail'):</u>
                        <p class="h6">{{$contact->email}}</p>
                    </li>
                </ul>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <u>@lang('Address'):</u>
                        <p class="h6">{{$contact->address_en}}</p>
                    </li>
                </ul>
            </div>

            <div class="card m-1" style="width: 18rem;">
                <div class="card-header">
                    @lang('Russian')
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <u>@lang('Address'):</u>
                        <p class="h6">{{$contact->address_ru}}</p>
                    </li>
                </ul>
            </div>



        </div>

        <div class="col  p-2 " style="b order: 1px solid green">
            <div class="row">
                <div class="">
                    <a href="/admin/contact/{{$contact->id}}/edit "
                        class="btn btn-primary  text-light mr-5">@lang('Edit')</a>
                </div>

            </div>
        </div>

    </div>
    <hr>
   
    <br>
    <br>
</div>
@endsection

@section('script')

@endsection
