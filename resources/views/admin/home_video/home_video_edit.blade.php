@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/admin/home_video">HOME Video</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
</nav>
<div class=" container ">

    <div class="mt-3 p-3 bg-light col-md-6">
        <h5>@lang('Edit')</h5>
        <br>
        <div style="max-width:400px;  border:1px solid #ccc;">
            <video src="/videos/home_video/{{$home_video->video}}" controls width="100%" id="video"></video>
        </div>
        <br>
        <h5>Характеристики картинки:</h5>
        <h6>длина: <b><span id="width"></span></b> px</h6>
        <h6>высота: <b><span id="height"></span></b> px</h6>
        <h6>соотношение длина/высота: <b><span id="ratio"></span></b></h6>
        <h6>размер: <b><span id="size"></span></b> mb</h6>
        <hr>
        <form id="form" class="needs-validation" method="post" action='/admin/home_video/{{ $home_video->id }}'
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')


            <div class="custom-file ">

                <input type="file" class="custom-file-input" id="validatedCustomFile" name="video">
                <label class="custom-file-label" for="validatedCustomFile">@lang('Choose file...')</label>
                <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
    </div>

    <br>

    <div class="mt-3 p-3 bg-light col-md-6">
        <div class="form-group ">
            <label for="my-textarea">@lang('Description') @lang('English')</label>
            <textarea id="my-textarea" class="form-control" name="description_en"
                rows="3">{{ $home_video->description_en }}</textarea>
        </div>
    </div>


    <div class="mt-3 p-3 bg-light col-md-6">
        <div class="form-group">
            <label for="my-textarea">@lang('Description') @lang('Russian')</label>
            <textarea id="my-textarea" class="form-control" name="description_ru"
                rows="3">{{ $home_video->description_ru }}</textarea>
        </div>
    </div>
    <div id="output" class="mt-3 p-3 bg-light col-md-6"></div>
    <button id="btn_submit" class="my-3 btn btn-primary w-50" type="submit">@lang('Save')</button>
    </form>

</div> <!-- container -->

@endsection

@section('script')
<script>
    // //YA start work version
    let video = document.querySelector('#video');
    let btn_submit = document.querySelector('#btn_submit');
    let btn_form = document.querySelector('#form');
    let output = document.querySelector('#output');

    let fileinput = document.querySelector('#validatedCustomFile');
    let lableinput = document.querySelector('.custom-file-label');

    btn_submit.addEventListener('click', progressbar);

    fileinput.addEventListener('change', function () {

        lableinput.textContent = fileinput.files[0].name;
        console.log(fileinput.files[0]);
        //     let file = fileinput.files[0];
        //     console.log(file);
        file = fileinput.files[0];

        let reader = new FileReader();
        reader.readAsDataURL(file);

        reader.onload = function () {
            //         console.log(reader.result);
            let img_base64 = reader.result;
            video.setAttribute('src', img_base64);

            //      
            document.querySelector('#size').innerText = (file.size / 1000000);
        }
        //     reader.onerror = function () {
        //         console.log(reader.error);
        //     };

    })

    function progressbar(e) {
        console.log('click');
        e.preventDefault();

        let div = document.createElement('div');
div.className = "alert alert-info text-center";
div.innerHTML = "@lang('Wait, uploading file ... ')";
output.append(div);

      //    output.innerText = "Загружаю файл";

         form.submit();

        // const promise1 = new Promise(function (resolve, reject) {
        //     console.log('submit');
        //     resolve();
        // })

        // promise1.then(function () {
        //     console.log('click');
        //     output.innerText = "Загружаю файл";
        //     form.submit();
        //     // expected output: "foo"
        // });


        //     promise1.then(function() {
        //         console.log('submit');
        //    // form.submit();
        // expected output: "foo"
        // });

    }

</script>

@endsection
