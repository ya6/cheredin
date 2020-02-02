@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/admin/contact/1">Contact</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
</nav>

<div class=" container ">

    <div class="mt-3 p-3 bg-light col-md-12">
        <h5>@lang('Edit')</h5>
        <br>
        
        <form class="needs-validation" method="post" action='/admin/contact/{{ $contact->id }}'>
            @csrf
            @method('PATCH')

            <div class="mt-3 p-3 bg-light col-md-6">
                <div class=" form-group ">
                    <label for="my-input">@lang('Phone')</label>
                    <input id="my-input" class="form-control" type="text" name="phone"
                        value="{{ $contact->phone }}">
                </div>
            </div>

            <div class="mt-3 p-3 bg-light col-md-6">
                <div class=" form-group ">
                    <label for="my-input">@lang('E-mail')</label>
                    <input id="my-input" class="form-control" type="text" name="email"
                        value="{{ $contact->email }}">
                </div>
            </div>

            <div class="mt-3 p-3 bg-light col-md-6">
                <div class="form-group ">
                    <label for="my-input">@lang('Address') @lang('English')</label>
                    <input id="my-input" class="form-control" type="text" name="address_en"
                        value="{{ $contact->address_en }}">
                </div>
            </div>

            <div class="mt-3 p-3 bg-light col-md-6">
                <div class="form-group ">
                    <label for="my-input">@lang('Address') @lang('Russian')</label>
                    <input id="my-input" class="form-control" type="text" name="address_ru"
                        value="{{ $contact->address_ru }}">
                </div>
            </div>

    <button class="my-3 btn btn-primary w-50" type="submit">@lang('Save')</button>
    </form>

    @include('inc.errors')

    </div>
</div> <!-- container -->

@endsection

@section('script')
<script>
</script>

@endsection
