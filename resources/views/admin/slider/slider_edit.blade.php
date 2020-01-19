@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/admin/slider">HOME Slider</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
</nav>
<div class=" container ">

    <h5>@lang('Edit')</h5>
    <div class="alert alert-info" role="alert">
        <strong>@lang('For correct display') </strong>@lang('image size 1200х800px or ratio 1.5х1.0')
    </div>
    <hr>
    <div style="max-width:400px;  border:1px solid #ccc;">
        <img src="/images/slider/{{ $slide->image }}" alt="@lang('image preview')" width="100%" id="slide"></a>
    </div>
    <br>
    <h5>Характеристики картинки:</h5>
    <h6>длина: <b><span id="width"></span></b> px</h6>
    <h6>высота: <b><span id="height"></span></b> px</h6>
    <h6>соотношение длина/высота: <b><span id="ratio"></span></b></h6>
    <!-- <h6>размер: <b><span id="size"></span></b> kb</h6> -->
    <hr>
    <form class="needs-validation" method="post" action='/admin/slider/{{ $slide->id }}' enctype="multipart/form-data">
        @csrf
        @method('PATCH')


        <div class="custom-file col-md-4 ">


            <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
            <label class="custom-file-label" for="validatedCustomFile">@lang('Choose file...')</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
        <br>
        <br>
        <button class="btn btn-primary btn-lg" type="submit">@lang('Save slide')</button>
    </form>
</div> <!-- container -->

@endsection

@section('script')
<script>
    //YA start work version
    let slide = document.querySelector('#slide');
    let fileinput = document.querySelector('#validatedCustomFile');
    let lableinput = document.querySelector('.custom-file-label');
    console.log(slide);

    document.querySelector('#width').innerText = slide.naturalWidth;
    document.querySelector('#height').innerText = slide.naturalHeight;
    document.querySelector('#ratio').innerText = (slide.naturalWidth / slide.naturalHeight).toFixed(2);

    fileinput.addEventListener('change', function () {

        lableinput.textContent = fileinput.files[0].name;

        let file = fileinput.files[0];
     //   console.log(file);


        let reader = new FileReader();
        reader.readAsDataURL(file);

        reader.onload = function () {
        //    console.log(reader.result);
            let img_base64 = reader.result;
            slide.setAttribute('src', img_base64);

            let image = new Image();
            image.src = img_base64;

            image.addEventListener('load', function () {
                document.querySelector('#width').innerText = image.width;
                document.querySelector('#height').innerText = image.height;
                document.querySelector('#ratio').innerText = (image.width / image.height).toFixed(2);
                document.querySelector('#size').innerText = (file.size / 1000);
            });

        }

        reader.onerror = function () {
            console.log(reader.error);
        };


    })

</script>

@endsection
