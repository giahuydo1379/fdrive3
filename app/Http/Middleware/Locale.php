<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;
use Lang;
use Session;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = \Session::get('website_language', config('app.locale'));
        // Lấy dữ liệu lưu trong Session, không có thì trả về default lấy trong config
      
        config(['app.locale' => $language]);
      
        // Chuyển ứng dụng sang ngôn ngữ được chọn
   
        return $next($request);
    }
    // protected $languages = ['en', 'vi'];
    // public function handle($request, Closure $next)
    // {
    //     if(session()->has('locale') && in_array(session()->get('locale'), $this->languages))
    //     {
    //         app()->setLocale(session()->get('locale'));
    //     }
    //     return $next($request);
    // }
 
  
    //   public function handle($request, Closure $next)
    //   {
    //       if (!Session::has('locale')) {
    //           Session::put('locale', config('app.locale'));
    //       }

    //       Lang::setLocale(Session::get('locale'));

    //       return $next($request);
    //   }
  
}
