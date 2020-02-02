@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/admin/blog">Blog </a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
</nav>

<div class=" container ">

    <div class="mt-3 p-3 bg-light col-md-6">
        <h5>@lang('Edit')</h5>
        <br>
        <p class="h6 mt-2"> <i class=" text-secondary material-icons align-text-top">watch</i>
            {{ $blog->updated_at->isoFormat('DD-MM-Y') }}
        </p>

        <div style="max-width:400px;  border:1px solid #ccc;">
            <img src="/images/blogs/{{ $blog->image  ?? 'blog_default.jpg' }} " alt="@lang('image preview')"
                width="100%" id="slide">
        </div>
        <br>
        <h5>Характеристики картинки:</h5>
        <h6>длина: <b><span id="width"></span></b> px</h6>
        <h6>высота: <b><span id="height"></span></b> px</h6>
        <h6>соотношение длина/высота: <b><span id="ratio"></span></b></h6>
        <h6>размер: <b><span id="size"></span></b> kb</h6>
        <hr>
        <form class="needs-validation" method="post" action='/admin/blog/{{ $blog->id }}' enctype="multipart/form-data">
            @csrf
            @method('PATCH')


            <div class="custom-file ">

                <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
                <label class="custom-file-label" for="validatedCustomFile">@lang('Choose file...')</label>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
    </div>

    <br>
    <div class="form-group col-md-6 mt-4">
        <label for="caregoryselect">@lang('Category')</label>
        <select class="form-control" id="caregoryselect" name="category">
            @foreach($categories as $category)
            <option value="{{ $category->id}}"
            @if( $category->id == $blog->category_id)
            {{ ' selected ' }}
            @endif    
            >{{ $category->$category_lang }}</option>

            @endforeach
        </select>
    </div>
    <div class="mt-3 p-3 bg-light col-md-6">
        <div class=" form-group ">
            <label for="my-input">@lang('Title') @lang('English')</label>
            <input id="my-input" class="form-control" type="text" name="title_en" value="{{ $blog->title_en }}">
        </div>
        <div class="form-group ">
            <label for="my-textarea">@lang('Description') @lang('English')</label>
            <textarea id="my-textarea" class="form-control" name="description_en"
                rows="3">{{ $blog->description_en }}</textarea>
        </div>
    </div>


    <div class="mt-3 p-3 bg-light col-md-6">
        <div class="form-group ">
            <label for="my-input">@lang('Title') @lang('Russian')</label>
            <input id="my-input" class="form-control" type="text" name="title_ru" value="{{ $blog->title_ru }}">
        </div>
        <div class="form-group">
            <label for="my-textarea">@lang('Description') @lang('Russian')</label>
            <textarea id="my-textarea" class="form-control" name="description_ru"
                rows="3">{{ $blog->description_ru }}</textarea>
        </div>
    </div>

    <button class="my-3 btn btn-primary w-50" type="submit">@lang('Save')</button>
    </form>
</div> <!-- container -->






<!-- 
<div class="container">
    <h2 class="text-center text-uppercase my-4 text-navy ">@lang('Blog single')</h2>

    <div class="row">
        <div class="order-xs-2  order-sm-2 order-md-1 col-sm-12 col-md-8" style="b order: 2px solid blue">
            <div class="bg-light p-4" style="b order: 2px solid red">
                <div class="card border-0">
                    <p class="h6 mt-2"> <i class=" text-secondary material-icons align-text-top">watch</i>
                        {{ $blog->updated_at->isoFormat('DD-MM-Y') }}</p>
                    <div class="card-header card border-0">
                        <p class="h4 my-3">{{ $blog->$title_lang }}</p>
                    </div>
                    <div class="card-body m-0 p-0">
                        <div style="height: 400px; background-position: center center ; background-size: cover;
                             background-repeat: norepeat; b order: 2px solid green;
                             background-image: url(/images/blogs/{{ $blog->image  ?? 'blog_default.jpg'}})">
                        </div>
                        <div class="my-4">
                            <p class="h5">{{ $blog->$desc_lang }}</p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="h5"> <i class="text-secondary material-icons align-top">person </i>
                                    {{ $blog->user->name }}</p>
                                <p class="h6 "> <i class="text-secondary material-icons align-text-top ">label</i>
                                    {{ $blog->category->$category_lang }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

<!-- Comments accordeon -->

<!--  -->

<!-- <div id="accordion1" class="mt-0">
                <div class="card rounded-0 border-left-0  border-top-0 border-bottom-0 border-right-0">

                    <div class="card-header border-0" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <i class=" text-secondary material-icons align-text-top">comment</i>
                                {{$blog->comments()->count().' '.trans_choice('comments', $blog->comments()->count()) }}
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                        <div class="card-body">

                            @foreach($blog->comments as $comment)
                            <div class="media">
                                <img src="/images/comment/{{$comment->image ?? 'comment_default.jpg' }}"
                                    class=" img-thumbnail align-self-start mr-3" alt="face" width="50">
                                <div class="media-body">
                                    <h6 class="text-navy mt-0"><strong> {{ $comment->name.', ' }} </strong>
                                        {{$comment->updated_at->diffForHumans() }}</h6>

                                    <p>{{ $comment->comment }}</p>

                                </div>
                            </div>


                            @endforeach

                        </div>
                    </div>

                </div>
            </div> -->





<!-- /Comments accordeon -->

</div> <!-- /row-8 -->


</div>
</div>
<br>
<br>

@endsection

@section('script')

@section('script')
<script>
    //YA start work version
    let slide = document.querySelector('#slide');
    let fileinput = document.querySelector('#validatedCustomFile');
    let lableinput = document.querySelector('.custom-file-label');

    document.querySelector('#width').innerText = slide.naturalWidth;
    document.querySelector('#height').innerText = slide.naturalHeight;
    document.querySelector('#ratio').innerText = (slide.naturalWidth / slide.naturalHeight).toFixed(2);

    fileinput.addEventListener('change', function () {

        lableinput.textContent = fileinput.files[0].name;

        let file = fileinput.files[0];
        console.log(file);


        let reader = new FileReader();
        reader.readAsDataURL(file);

        reader.onload = function () {
            console.log(reader.result);
            let img_base64 = reader.result;
            slide.setAttribute('src', img_base64);

            let image = new Image();
            image.src = img_base64;

            image.addEventListener('load', function () {
                document.querySelector('#width').innerText = image.width;
                document.querySelector('#height').innerText = image.height;
                document.querySelector('#ratio').innerText = (image.width / image.height).toFixed(
                2);
                document.querySelector('#size').innerText = (file.size / 1000);
            });

        }

        reader.onerror = function () {
            console.log(reader.error);
        };


    })

</script>

@endsection
