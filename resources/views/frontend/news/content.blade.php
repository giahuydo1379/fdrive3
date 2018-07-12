@extends('frontend.news.index')
@section('content')

<div class="container">
   <div class="col-xs-12">
      <div class="content-body">
      @foreach ($post as $key => $item)
      @if ($key == 0)
         <div class="col-xs-12 news-item  first ">
            <div class="col-xs-12 col-sm-6 news-item-picture">
            <a  href="tin-tuc/{{ $item->slug }}-{{ $item->id}}.html"><img class="" src="/upload/tintuc/<?= $item->image ?>"/></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-xs-12 news-item-title-quote">
               <div class="col-xs-12 news-item-title">
                  <a  href="tin-tuc/{{ $item->slug }}-{{ $item->id}}.html">{{ $item->title }}</a>
                  <p>{{ dateTimeFormat($item->updated_at) }}</p>
               </div>
               <div class="col-xs-12 news-item-quote">
                  {{ $item->summary }}    
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-xs-12 view_more Roboto-Medium">
               <a href="tin-tuc/{{ $item->slug }}-{{ $item->id}}.html">
               <img src="/themes/frontend/images/background-paging.jpg" alt=""/>Xem tiếp</a>
            </div>
         </div>
          
         @endif
         @if($key != 0)
         <div class="col-xs-12 news-item">
                <div class="col-xs-4 news-item-picture">
                <a  href="tin-tuc/{{ $item->slug }}-{{ $item->id}}.html"><img class="" src="/upload/tintuc/<?= $item->image ?>"/></a>
                </div>
                <div class="col-xs-8 col-xs-12 news-item-title-quote">
                    <div class="col-xs-12 news-item-title">
                    <a  href="tin-tuc/{{ $item->slug }}-{{ $item->id}}.html">{{ $item->title }}</a>
                        <p>{{ dateTimeFormat($item->updated_at) }}</p>
                    </div>
                    <div class="col-xs-12 news-item-quote">
                    {{ $item->summary }}   
                             </div>
                </div>
                <div class="col-xs-8 col-xs-12 view_more Roboto-Medium">
                <a href="tin-tuc/{{ $item->slug }}-{{ $item->id}}.html">
                        <img src="/themes/frontend/images/background-paging.jpg" alt=""/>Xem tiếp</a>
                </div>
            </div>
          
            @endif
         @endforeach
         <!-- <div class="col-xs-12">
            <ul class="numberpage" id="yw0">
               <li class="first hidden"><a class="" href="/tin-tuc-c5.html"></a></li>
               <li class="previous hidden"><a class="" href="/tin-tuc-c5.html"><img alt="<" src="/themes/frontend/images/page-prev.png"/></a></li>
               <li class="page active"><a class="active" href="/tin-tuc-c5.html">1</a></li>
               <li class="page"><a class="" href="/tin-tuc-c5/page/2.html">2</a></li>
               <li class="next"><a class="" href="/tin-tuc-c5/page/2.html"><img alt=">" src="/themes/frontend/images/page-next.png"/></a></li>
               <li class="last"><a class="" href="/tin-tuc-c5/page/2.html"></a></li>
            </ul>
         </div> -->
         {{ $post->links('frontend/pagination/pagination') }}

        <!-- {!! $post->render() !!} -->
         <!-- <div class="col-xs-12 other-news">
            <div class="col-xs-12 other-news-title">CÁC TIN TỨC KHÁC</div>
            <div class="col-xs-12 other-news-item">
               <ul>
                  <li><a href="/tin-tuc/cach-tiet-kiem-pin-tren-windows-10-127.html">Cách tiết kiệm pin trên windows 10</a></li>
                  <li><a href="/tin-tuc/vi-sao-chu-trinh-system-tren-windows-10-lai-ngon-nhieu-ram-133.html">Vì sao chu trình System trên Windows 10 lại “ngốn” nhiều RAM?</a></li>
                  <li><a href="/tin-tuc/tai-sao-noi-amazon-dang-bay-tren-may-va-khong-ai-co-the-cham-toi--147.html">Tại sao nói Amazon đang bay trên mây và không ai có thể chạm tới? </a></li>
                  <li><a href="/tin-tuc/ly-do-vi-sao-alibaba-thau-tom-youtube-trung-quoc-voi-gia-tri-khong-lo-149.html">Lý do vì sao Alibaba thâu tóm “YouTube Trung Quốc” với giá trị khổng lồ</a></li>
                  <li><a href="/tin-tuc/jailbreak-iphone-225000-tai-khoan-apple-bi-nhiem-ma-doc-137.html">Jailbreak iPhone, 225.000 tài khoản Apple bị nhiễm mã độc</a></li>
               </ul>
            </div>
         </div>
      </div> -->

      <div class="col-xs-12 other-news">
            <div class="col-xs-12 other-news-title">CÁC TIN TỨC KHÁC</div>
            <div class="col-xs-12 other-news-item">
               <ul>
               @foreach ($postRandom as $key => $item)
                  <li> <a href="tin-tuc/{{ $item->slug }}-{{ $item->id}}.html"> {{ $item->title }} </a></li>
				  @endforeach
               </ul>
            </div>
         </div>
      </div>
      
   </div>
</div>
</div>
@endsection
