<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Model\Post;
use Illuminate\Support\Collection;
use DB;
use Mail;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
  
     * Store a newly created resource in storage.

     */
  
   public function getViewIntroduce(){
       return view('frontend.introduce.content');
   }
   public function getViewIntroduceService(){
    return view('frontend.introduce_service.content');
}
        
   public function getViewPricelist(){
        return view('frontend.pricelist.content');
    } 
    public function getViewContact(){

         return view('frontend.contact.content');
    } 
    public function getViewHome(){


        $post = Post::orderBy('id','DESC')->where(['active'=> 1, 'category_id'=> 5])->paginate(5);
 
         return view('frontend.home.content', compact('post'));
    } 
  
    public function getViewNews(Request $request)
    {
 
        $post = Post::orderBy('id','DESC')->where(['active'=> 1, 'category_id'=> 5])->paginate(5);
        $postRandom = Post::inRandomOrder()
        ->where(['active'=> 1, 'category_id'=> 5])->limit(5)->get();

      //  $relateNews = Post::where('idLoaiTin',$tintuc->idLoaiTin)->take(4)->get();
        return view('frontend.news.content',compact('post', 'postRandom'));   
    }

    public function getViewDetails($name, $id){

     $post = Post::find($id);
     $postRandom = Post::inRandomOrder()
     ->where(['active'=> 1, 'category_id'=> 5])->limit(5)->get();
     
     $hotNews = Post::where('oustand',1)->take(4)->get();

      if(!is_null($post)){
        return view('frontend.detail.content',compact('post', 'hotNews', 'postRandom'));
      }
     
    } 

    public function getBreadcumbDetailNew($id){
     
         $post = Post::find($id);
    
          if(!is_null($post)){
            return view('frontend.detail.banner',['post' => $post]);
          }
         
        } 

     
    
}