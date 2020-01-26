 <!-- VIDEO PLAY -->
 <section id="video-play">

     <div class="bg-secondary">
         <div class="row">
             <div class="col text-center text-light">


                 <h1 class="">@lang('See What We Do')</h1>

                 <a href="#" class="video text-light" data-video="" data-toggle="modal" data-target="#videoModal"
                     class="mt-2">
                     <i class="material-icons" style=" font-size: 5rem !important;">play_arrow</i>
                 </a>


             </div>
         </div>
     </div>
 </section>

 <!-- VIDEO MODAL -->
 <div class="modal fade" id="videoModal">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-body">
                 <button class="close" data-dismiss="modal">
                     <span>&times;</span>
                 </button>

                 <div class="embed-responsive embed-responsive-16by9">
                     <video id="vid" src="videos/{{$home_video->video}}?rel=0" controls></video>
                 </div>

             </div>
         </div>
     </div>
 </div>

 @section('script')

 <script>
     let video = document.querySelector('#vid');
     let modalclose = document.querySelector('.close');
     document.addEventListener("DOMContentLoaded", function (e) {
         modalclose.addEventListener('click', function (e) {
             video.pause();
         });
     });
 </script>

 @endsection
