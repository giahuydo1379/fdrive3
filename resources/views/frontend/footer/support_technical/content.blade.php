@extends('frontend.footer.support_technical.index')
@section('content')
<div class="container">
   <div class="col-md-12">
      <div class="content-body">
         <div class="support-title text-uppercase">
            Vui lòng cung cấp thông tin của bạn, chúng tôi sẽ liên hệ ngay để được tư vấn và hỗ trợ.            
         </div>
         {!! Form::open(array('route' => 'post_support','method'=>'POST'))!!}
            @csrf          
            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
                  <div class="input mrg-left">
                     &nbsp;&nbsp;(Các trường có <span class="required">*</span> là bắt buộc.)
                  </div>
               </div>
               <div class="col-md-3"></div>
            </div>
            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
                  <label class="name" for="Feedback_company">Công ty</label>              
                  <div class="input">
                     <input   placeHolder="Nhập công ty của bạn" name="company" id="Feedback_company" type="text"  value="{{ old('company') }}" />                    
                  </div>
               </div>
               <div class="col-md-3"></div>
            </div>


            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
               <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                  <label class="name required" for="Feedback_name">Họ và tên <span class="required">*</span></label>                  
                  <div class="input">
                     <input class="require"   placeHolder="Nhập họ tên của bạn" name="name" id="Feedback_name"  type="text" value="{{ old('name') }}"  />                    
                    
                  </div>
                  <br><span class="text-danger">{{ $errors->first('name') }}</span>
              </div>


               <div class="col-md-3"></div>
            </div>
            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
                  <label class="name" for="Feedback_job_title">Chức vụ</label>       
                  <div class="input">
                     <input   placeHolder="Nhập chức vụ của bạn" name="job_title" id="Feedback_job_title" type="text" value="{{ old('job_title') }}" />                    
        
                  </div>
               </div>
               <div class="col-md-3"></div>
            </div>

            
            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
               <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                  <label class="name required" for="Feedback_address">Địa chỉ <span class="required">*</span></label> 
                  <div class="input">
                     <input class="require"   placeHolder="Nhập địa chỉ của bạn" name="address" id="Feedback_address" type="text" value="{{ old('address') }}" />                    
    
                  </div>
                  <br><span class="text-danger">{{ $errors->first('address') }}</span>
               </div>
               <div class="col-md-3"></div>
            </div>
            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
               <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">

                  <label class="name required" for="Feedback_phone">Điện thoại <span class="required">*</span></label>                 
                  <div class="input">
                     <input class="require"   placeHolder="Nhập số điện thoại của bạn" name="phone" id="Feedback_phone" type="text" value="{{ old('phone') }}" />                    
                  </div>
                  <br><span class="text-danger">{{ $errors->first('phone') }}</span>
               </div>
               <div class="col-md-3"></div>
            </div>
			


            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
                  <label class="name" for="Feedback_fax">Fax</label>                 
                  <div class="input">
                     <input   placeHolder="Nhập số Fax của bạn" name="fax" id="Feedback_fax" type="text" value="{{ old('fax') }}" />               
                  </div>
               </div>
               <div class="col-md-3"></div>
            </div>


            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
               <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                  <label class="name required" for="Feedback_email">Email <span class="required">*</span></label>                    
                  <div class="input">
                     <input class="require"   placeHolder="Nhập email của bạn" name="email" id="Feedback_email" type="text" value="{{ old('email') }}"   />             
                  </div>
                  <br><span class="text-danger">{{ $errors->first('email') }}</span>
               </div>
               <div class="col-md-3"></div>
            </div>


            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
               <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                  <label class="name required" for="Feedback_title">Tiêu đề <span class="required">*</span></label>                    
                  <div class="input">
                     <input class="require"   placeHolder="Nhập tiêu đề" name="title" id="Feedback_title" type="text" value="{{ old('title') }}"/>               
                  </div>
                  <br><span class="text-danger">{{ $errors->first('title') }}</span>
               </div>
               <div class="col-md-3"></div>
            </div>


            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
               <div class="form-group {{ $errors->has('contact_service') ? 'has-error' : '' }}">
                  <label class="name required" for="Feedback_contact_service">Dịch vụ liên hệ <span class="required">*</span></label>           
                  <div class="input">
                     <select class="require" name="contact_service" id="Feedback_contact_service" value="{{ old('contact_service') }}">
                        <option value="">--- Chọn dịch vụ ---</option>
                        <option value="1">Domain</option>
                        <option value="2">Hosting</option>
                        <option value="3">Server</option>
                        <option value="4">Website</option>
                        <option value="5">CA</option>
                     </select>
                  </div>
                  <br><span class="text-danger">{{ $errors->first('contact_service') }}</span>
               </div>
               <div class="col-md-3"></div>
            </div>


            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
               <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                  <label class="name required" for="Feedback_content">Nội dung <span class="required">*</span></label>                    
                  <div class="input">
                     <textarea class="require"  placeHolder="Nhập nội dung tại đây..." name="content" id="Feedback_content" value="{{ old('content') }}"></textarea>                    
                  </div>
                  <br><span class="text-danger">{{ $errors->first('content') }}</span>
               </div>
   

            <div class="col-md-12 support-form-item">
            <div class="col-md-6 col-md-offset-3">
            <div class="form-group {{ $errors->has('g-recaptcha') ? 'has-error' : '' }}">
                            <div class="col-md-offset-4 col-md-6">
                                <div  class="g-recaptcha" data-sitekey="6Ldqa2IUAAAAAJ9Dfm4C84_mrorjHNtk4iale-2-" data-callback="YourOnSubmitFn"></div>
                            </div>
                            <br><span class="text-danger">{{ $errors->first('g-recaptcha') }}</span>
                        </div>
                        </div>
                        </div>


               <div class="col-md-3"></div>
            </div>
            <div class="col-md-12 support-form-item">
               <div class="col-md-6 col-md-offset-3">
                  <div class="name">&nbsp;</div>
                  <div class="input">
                     <input type="submit" class="btn btn-default btn-send-support text-uppercase" value="Gởi" />
                     <button id="btn-cancel" type="reset" class="btn btn-default btn-cancel-support text-uppercase">Hủy</button>
                  </div>
               </div>
               <div class="col-md-3"></div>
            </div>
            {!! Form::close() !!}
      </div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--scriptttttttttttttttttttttttttttttttttttttttttttttttt-->
  



@endsection