<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
   <div id="mainnav">
   <!-- OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
   <!--It will only appear on small screen devices.-->
   <!--================================
      <div class="mainnav-brand">
          <a href="index.html" class="brand">
              <img src="admin_assets/img/logo.png" alt="Nifty Logo" class="brand-icon">
              <span class="brand-text">Nifty</span>
          </a>
          <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
      </div>
      -->
   <!--Menu-->
   <!--================================-->
   <div id="mainnav-menu-wrap">
      <div class="nano">
         <div class="nano-content">
            <!--Profile Widget-->
            <!--================================-->
            <div id="mainnav-profile" class="mainnav-profile">
               <div class="profile-wrap text-center">
                  <div class="pad-btm">
                     <img class="img-circle img-md" src=" {{ Auth::user()->avatar }}" alt="Profile Picture">
                  </div>
                  <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                     <span class="pull-right dropdown-toggle">
                     <i class="dropdown-caret"></i>
                     </span>
                     <p class="mnp-name">  {{ Auth::user()->name }}</p>
                     <span class="mnp-desc">{{ Auth::user()->email }}</span>
                  </a>
               </div>
               <div id="profile-nav" class="collapse list-group bg-trans">
                  <a href="admin/profile" class="list-group-item">
                  <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                  </a>
                  <!-- <a href="#" class="list-group-item">
                  <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                  </a> -->
                  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="list-group-item">
                  <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                  </a>
               </div>
            </div>
            <!--Shortcut buttons-->
            <!--================================-->
            <div id="mainnav-shortcut" class="hidden">
               <ul class="list-unstyled shortcut-wrap">
                  <li class="col-xs-3" data-content="My Profile">
                     <a class="shortcut-grid" href="#">
                        <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                           <i class="demo-pli-male"></i>
                        </div>
                     </a>
                  </li>
                  <li class="col-xs-3" data-content="Messages">
                     <a class="shortcut-grid" href="#">
                        <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                           <i class="demo-pli-speech-bubble-3"></i>
                        </div>
                     </a>
                  </li>
                  <li class="col-xs-3" data-content="Activity">
                     <a class="shortcut-grid" href="#">
                        <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                           <i class="demo-pli-thunder"></i>
                        </div>
                     </a>
                  </li>
                  <li class="col-xs-3" data-content="Lock Screen">
                     <a class="shortcut-grid" href="#">
                        <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                           <i class="demo-pli-lock-2"></i>
                        </div>
                     </a>
                  </li>
               </ul>
            </div>
            <!--================================-->
            <!--End shortcut buttons-->
            <ul id="mainnav-menu" class="list-group">
            <!--Category name-->
            <li class="list-header">Navigation</li>
            <!--Menu list item-->
            <li class="active-sub">
               <a href="home">
               <i class="demo-pli-home"></i>
               <span class="menu-title">{{ trans('message.Trang-chu') }}</span>
               <i class="arrow"></i>
               </a>
            </li>
            <!--Menu list item-->
            <li>
               <a href="#">
               <i class="demo-pli-male-female icon-lg icon-fw"></i>
               <span class="menu-title"> {{ trans('message.Quan-li-nguoi-dung') }} </span>
               <i class="arrow"></i>
               </a>
               <!--Submenu-->
               <ul class="collapse">
                  <li>
                     <a href="{{ route('users.index') }}"> {{ __('Danh sách') }}</a>
                  </li>
                  <li>
                     <a href="{{ route('users.create') }}"> {{ __('Thêm') }} </a>
                  </li>
                  <li class="list-divider"></li>
               </ul>
            </li>
            <li>
               <a href="#">
               <i class="fa fa-user-circle-o"></i>
               <span class="menu-title"> {{ __('Quản lí vai trò') }} </span>
               <i class="arrow"></i>
               </a>
               <!--Submenu-->
               <ul class="collapse">
                  <li>
                     <a href="{{ route('roles.index') }}"> {{ __('Danh sách') }} </a>
                  </li>
                  <li>
                     <a href="{{ route('roles.create') }}"> {{ __('Thêm') }} </a>
                  </li>
                  <li class="list-divider"></li>
               </ul>
            </li>
            <li>
               <a href="#">
               <i class="demo-pli-split-vertical-2"></i>
               <span class="menu-title"> {{ __('Quản lí bài viết') }} </span>
               <i class="arrow"></i>
               </a>
               <!--Submenu-->
               <ul class="collapse">
                  <li>
                     <a href="{{ route('post.showcate') }}"> {{ __('Thể loại') }} </a>
                  </li>
                  <li>
                     <a href="{{ route('post.index') }}"> {{ __(' Bài viết') }}</a>
                  </li>
                  <li class="list-divider"></li>
               </ul>
            </li>
            <li>
               <a href="#">
               <i class="demo-pli-split-vertical-2"></i>
               <span class="menu-title">Item</span>
               <i class="arrow"></i>
               </a>
               <!--Submenu-->
               <ul class="collapse">
                  <li>
                     <a href="{{ route('itemCRUD2.index') }}">Danh sách</a>
                  </li>
                  <li>
                     <a href="{{ route('itemCRUD2.create') }}">Thêm</a>
                  </li>
                  <li class="list-divider"></li>
               </ul>
            </li>
            <!--Widget-->
            <!--================================-->
            <div class="mainnav-widget">
               <!-- Show the button on collapsed navigation -->
               <div class="show-small">
                  <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                  <i class="demo-pli-monitor-2"></i>
                  </a>
               </div>
               <!--================================-->
               <!--End widget-->
            </div>
         </div>
      </div>
      <!--================================-->
      <!--End menu-->
   </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->