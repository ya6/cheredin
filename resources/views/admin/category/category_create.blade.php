@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/admin/workout">BLOG Category</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
</nav>
<div class=" container ">

    <div class="mt-3 p-3 bg-light col-md-12">
        <h5>@lang('Create')</h5>
        <br>

        <form class="needs-validation" method="post" action='/admin/blog/category'>
            @csrf



            <div class="mt-3 p-3 bg-light col-md-6">
                <div class=" form-group ">
                    <label for="my-input">@lang('Category') @lang('English')</label>
                    <input id="my-input" class="form-control" type="text" name="category_en"
                        value="{{ old('category_en') }}">
                </div>
            </div>


            <div class="mt-3 p-3 bg-light col-md-6">
                <div class="form-group ">
                    <label for="my-input">@lang('Category') @lang('Russian')</label>
                    <input id="my-input" class="form-control" type="text" name="category_ru"
                        value="{{ old('category_ru') }}">
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
