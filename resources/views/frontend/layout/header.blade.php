
            <!DOCTYPE html>
          
<div class="container">
    <div class="col-md-4 col-xs-6">
        <a href="{{ route('home') }}">
            <div class="logo_fpt"> </div>
        </a>
    </div>
    <div class="col-md-8 col-xs-6">
        <ul class="col-xs-12 menu_register">
            <li>

            </li>
            <li>

            </li>
        </ul>
    </div>
    <div class="col-md-8 col-xs-12">
      <div class="row col-xs-12">
         <ul class="nav navbar-nav top-menu Roboto-Bold" id="top_menu">
            <li><a title="" target="_self" class="  

        @if (\Route::current()->getName() == 'home') 
        active
        @endif  
    " data-toggle="" href="{{ route('home') }}"><span>Trang chủ</span></a></li>
            <li class=" li-sub">
               <a title="Giới thiệu" target="_self" class="  
               @if (\Route::current()->getName() == 'introduce') 
                active
                @endif 
               " data-toggle="dropdown" href="/gioi-thieu/gioi-thieu-fti/gioi-thieu-fti-23.html"><span>Giới thiệu</span></a>
               <ul class="dropdown-menu sub-top-menu Roboto-Medium" role="menu">
                  <li><a title="Giới thiệu FTI" target="_self" class="  
                  @if (\Route::current()->getName() == 'introduce') 
                active
                @endif 
                  " data-toggle="" href="{{ route('introduce') }}"><span>Giới thiệu FTI</span></a></li>

                  <li><a title="Dịch vụ lưu trữ F-Drive" target="_blank" class="" data-toggle="" href="{{ route('introduce_service') }}"><span>Dịch vụ lưu trữ F-Drive</span></a></li>

               </ul>
            </li>
            <li><a title="Bảng giá" target="_self" class="
            
            @if (\Route::current()->getName() == 'pricelist') 
            active
            @endif 
            " data-toggle="" href="{{ route('pricelist') }}"><span>Bảng giá</span></a></li>
            <li><a title="Tin tức" target="_self" class="  
            @if (\Route::current()->getName() == 'news') 
            active
            @endif 
            
            " data-toggle="" href="{{ route('news') }}"><span>Tin tức</span></a></li>

            <li><a title="Liên hệ" target="_self" class="
            @if (\Route::current()->getName() == 'contact') 
            active
            @endif 

            " data-toggle="" href="{{ route('contact') }}"><span>Liên hệ</span></a></li>
         </ul>
        
      </div>
   </div>
</div>      
