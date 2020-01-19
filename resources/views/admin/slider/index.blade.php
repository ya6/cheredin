@extends('layouts.app')

@section('content')


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page"> HOME Slider</li>
    </ol>
</nav>

<div class=" container ">

    <div class="alert alert-info" role="alert">
        <strong>@lang('For correct display') </strong>@lang('image size 1200х800px or ratio 1.5х1.0')
    </div>
    @php
    $i=1
    @endphp
    @foreach($slides as $slide)

    <div class="row p-3">
        <div class="col">
            <img name="slide" class=" mt-1 mr-3" src="/images/slider/{{ $slide->image }}" alt="slide photo" width="300">
        </div>

        <div class="col">
            <h4>№ {{$i++}}</h4>
            <h5 class="mt-0 mb-1">is publish: <strong>{{ $slide->ispublish }} </strong></h5>
            <h5 class="mt-0 mb-1">file: {{ $slide->image }} </h5>
            <h5>Характеристики картинки:</h5>
            <h6>длина: <b><span class="width"></span></b> px</h6>
            <h6>высота: <b><span class="height"></span></b> px</h6>
            <h6>соотношение длина/высота: <b><span class="ratio"></span></b></h6>
            <!-- <h6>размер: <b><span class="size"></span></b> kb</h6> -->

        </div>

        <div class="col d-flex p-2" style="height:100%">
            <div class=" d-flex justify-content-center align-items-center ">
                <a href=" /admin/slider/{{$slide->id}}/edit " class="btn btn-primary btl-lg text-light mr-5">Edit</a>

                <form action="/admin/slider/{{$slide->id}} " method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-danger  " type="submit">Delete</button>
                </form>

            </div>
        </div>

    </div>
    <hr>
    @endforeach

   
    <br>
   
        <div class=" row">
        <a href="/admin/slider/create" class="btn btn-primary w-100 m-2">Add new</a>
        </div>
<br>

@endsection

@section('script')
<script>
    let imgs = document.images;
  //  console.log(imgs.length);
    for (let index = 0; index < imgs.length; index++) {
        let img = imgs[index];
        //console.log(img.parentElement.parentElement.children[1].children[4]);
       

        let image = new Image();
        image.src = img.src;
        console.log(img.parentElement.parentElement.children[1].children[4]);
        image.addEventListener('load', function () {
            img.parentElement.parentElement.children[1].children[4].children[0].innerText = image.width;
            img.parentElement.parentElement.children[1].children[5].children[0].innerText = image.height;
            img.parentElement.parentElement.children[1].children[6].children[0].innerText = (image.width / image.height).toFixed(2);
           
          
            //    document.querySelector('#size').innerText = (file.size / 1000);
        });


    }

</script>
@endsection
