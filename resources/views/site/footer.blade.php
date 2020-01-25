<!--Footer-->
<footer class="bg-dark p-3" style="b order: 2px solid blue">
      <div class="container text-light">
          <div class="row justify-content-around">
              <div class="col-md-3">
                  <h6>@lang('RECENT POSTS')</h6>
                  <hr class="bg-light">
                    @foreach($lastblogs as $blog)

                       
                <p><a  class="link text-light" 
                    href="/blog">{{ Str::limit($blog->$title_lang, 30) }}
                </a></p>

                    @endforeach
              </div>

              <div class="col-md-3">
                  <h6>@lang('LINKS')</h6>
                  <hr class="bg-light">
                  
                  <p><a  class="link text-light"  target= "_blank" 
                  href="https://tkm.by/2019/12/vladimir-cheredin-mnogokratnyj-chempion-mira-po-pauerliftingu-wrpf/">
                  ТКМ интервью 2019 </a></p>

                  <p><a  class="link text-light"  target= "_blank" 
                  href="https://www.youtube.com/watch?v=n3rGCtxS0ps">
                интервью ТКМ - YOUTUBE 2018</a></p>

              </div>

              <div class="col-md-3">
                  <h6>@lang('SOCIAL')</h6>
                  <hr class="bg-light">
                 <a  class="" href="https://vk.com/id341720059" target="_blank">
                     <img src="/images/icons/icon_vk.png" alt="VK" width="25">
                 </a>
              </div>

          </div>
      </div>

      <hr class="">

              <div class="d-flex">
              <div class="mx-auto text-light"><span>Copyright © 2020 @lang('Vladimir Cheredin') </span> </div> 
              <div><a   class="" href="№" style ="font-size:0.7rem">site by Yakubouski A. st/03/11/19 up/25/01/20</a></div>
              </div>  
             
          
       
    </footer>

    <!--/Footer-->