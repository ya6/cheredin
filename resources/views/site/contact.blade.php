<div class="container" style="margin-top: 150px">
    <h2 class="text-center mb-2 text-navy">@lang('Write me')</h2>
    <div class="row">
    
       
        <div class="col p-5 mx-auto" style="max-width:700px">
   
                    <form action="/send" method="post" style="margin-top:0%"> 
                                @csrf
                                <div class="form-group ">
                                    <div class="input-group mb-2 ">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text rounded-0" style="width:7rem">@lang('Name')</div>
                                        </div>
                                        <input type="text" class="form-control rounded-0"  name="name"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text rounded-0" style="width:7rem">@lang('E-mail')</div>
                                        </div>
                                        <input type="email" class="form-control rounded-0" name="email"  required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text rounded-0" style="width:7rem">@lang('Message')</div>
                                        </div>
                                        <textarea name="message" class="form-control rounded-0"  required></textarea>
                                    </div>
                                </div>

                                <div class=" mt-5 text-center">
                                    <button  type="submit"  class="btn btn-outline-secondary btn-block rounded-0 py-2" 
                                    style="border: 1px solid #ccc">@lang('Send')</button>
                                </div>

                    </form>
                
                </div>
	
    </div>
</div>
<br>
<br>