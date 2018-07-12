<footer>
   <!DOCTYPE html>
   <div class="col-md-12 footer_top">
      <div class="container">
         <div class="col-md-12 row box-bottom">
            <div class="col-md-6">
               <div class="col-md-4 col-xs-4 bottom-item">
                  <span class="bottom-title">chính sách</span>
                  <ul>
                     <li class="item-chinhsachbaomat">
                        <a target="_self"  href="{{ route('privacy_policy') }}">Chính sách bảo mật</a>
                     </li>
                     <li class="item-dieukhoansudung">
                        <a target="_self" href="{{ route('term') }}">Điều khoản sử dụng</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-4 col-xs-4 bottom-item">
                  <span class="bottom-title">Hỗ trợ</span>
                  <ul>
                     <li class="item-hotrokythuat">
                        <a target="_self" href="{{ route('support') }}">hỗ trợ kỹ thuật</a>
                     </li>
                     <li class="item-hoidap">
                        <a target="_self" href="{{ route('qa') }}">hỏi đáp</a>
                     </li>
                     <li class="item-huongdanthanhtoan">
                        <a target="_blank" href="{{ route('payment_guide') }}">Hướng dẫn thanh toán</a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-4 col-xs-4 bottom-item">
                  <span class="bottom-title">Connect</span>
                  <ul>
                     <li class="item-twitter">
                        <a target="_blank" href="https://twitter.com/">Twitter</a>
                     </li>
                     <li class="item-facebook">
                        <a target="_blank" href="https://www.facebook.com/">Facebook</a>
                     </li>
                     <li class="item-googleplus">
                        <a target="_blank" href="https://plus.google.com/">google plus</a>
                     </li>
                     <li class="item-youtube">
                        <a target="_blank" href="https://www.youtube.com/">Youtube</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-6 col-xs-12 bottom-item bottom-item-quote require_price">
               <span class="bottom-title">YÊU CẦU BÁO GIÁ</span>
               <div class="row item-quote">
                  <!-- <form  name="quote"> -->
                
               
                
                  {!! Form::open(array('route' => 'postmail',  'class'=>'col-md-12 col-xs-12', 'method'=>'POST'))!!}
                  @csrf  
                  <div class="col-md-7 col-xs-7">
                     <input id="text-sendprice" value="" type="text" class="input-quote" name="email2" placeholder="Email"/>
                  </div>
                  <div class="col-md-5 col-xs-5">
                     <input class="input-resize fix-margin-input send_mail" id="btn-sendmail" type="submit" value="SEND" />
                  </div>
               </div>
            </div>
            {!! Form::close() !!} 
            <div id="myModal"  class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Thông báo</h4>
                     </div>
                     <div class="modal-body">
            
                        @if(count($errors) > 0)
                        @foreach($errors->all() as $err)
                        {{ $err }} </br> </br>
                        @endforeach
                        @endif
                        @if(Session::has('success'))
                        <div class="alert alert-info">
                           {{ Session::get('success') }}
                        </div>
                        @endif
          
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>

            
         </div>
      </div>
   </div>
   </div>
   <div class="col-xs-12 footer_bottom">
      <div class="container">
         <div class="col-xs-2  col-md-2 logo-footer ">
         </div>
         <div class="col-xs-6 col-md-6 info-text">
            <p>Cơ quan chủ quản: Công ty Cổ Phần Viễn Thông FPT</p>
            <p>Trụ sở: Tầng 1, Tòa nhà FPT, phố Duy Tân, P.Dịch Vọng, Q.Cầu Giấy, TP Hà Nội</p>
            <p>Tel: (84-4) 7300 2222 Fax: (84-4)73008889</p>
            <p>Giấy phép số: 267/GP-TTĐT cấp ngày 23/01/2013</p>
            <p>Chịu trách nhiệm: P.TGĐ Vũ Thị Mai Hương</p>
         </div>
         <div class="col-xs-4 col-md-4 copyright-text pull-right">
            <p>Copyright 2015 Bản quyền thuộc về FPT Telecom</p>
         </div>
      </div>
   </div>
   <script type="text/javascript">
    
      @if (count($errors) > 0)
          $('#myModal').modal('show');
      @endif
      
             @if(Session::has('success'))
      
          $('#myModal').modal('show');
      
      @endif
    
      
   </script>   
</footer>