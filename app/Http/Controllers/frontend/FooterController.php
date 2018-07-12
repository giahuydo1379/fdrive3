<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Model\Feedback;
use App\Http\Model\Post;
use Illuminate\Support\Collection;
use DB;
use Mail;
use Validator;


class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
  
     * Store a newly created resource in storage.

     */

        public function getViewPrivacyPolicy(){

            $post = Post::where('id', 37)->first();
           
       
             if(!is_null($post)){
               return view('frontend.footer.policy_privacy.content', compact('post'));
             }
            
           } 
           public function  getViewTerm(){

            $post = Post::where('id', 36)->first();
           
       
             if(!is_null($post)){
               return view('frontend.footer.term.content', compact('post'));
             }
            
           } 
           public function getViewPaymentGuide(){

            $post = Post::where('id', 38)->first();
        
       
             if(!is_null($post)){
              return view('frontend.footer.payment_guide.content', compact('post'));
             }
            
           } 

           public function getViewQa(){
              return view('frontend.footer.qa.content');
             }

          public function getViewSupportTechnical(){
            return view('frontend.footer.support_technical.content');
            }

           public function postSupportTechnical(Request $request){

              $this->validate($request,
                [
                  'g-recaptcha-response'=>'required|recaptcha',
                  'name' => 'required|min:4', 
            
                  'address' => 'required|min:4|max:255', 
                  'phone' => 'required|min:4', 
           
                  'email' => 'required|email', 
                  'title' => 'required|min:4', 
                  'contact_service' => 'required', 
                  'content' => 'required|min:4', 
                 
                ], 

                [
                  'name.required' =>'Họ và tên không được phép rỗng', 
                  'address.required' =>'Địa chỉ không được phép rỗng',  
                  'phone.required' =>'Số điện thoại không được phép rỗng', 
                  'email.required' =>'Email không được phép rỗng', 
                  'title.required' =>'Tiêu đề không được phép rỗng', 
                  'content.required' =>'Nội dung không được phép rỗng', 
                  'contact_service.required' =>'Dịch vụ liên hệ không được phép rỗng', 
                  'g-recaptcha-response.required' => 'Mã bảo vệ không được phép rỗng', 
                  'g-recaptcha-response.recaptcha' => 'Mã bảo vệ không được phép rỗng', 
                  'email.email' =>'Email không hợp lệ', 
                ]);

                $feedBack = new feedBack;

              $feedBack->name = $request->name;
              $feedBack->email = $request->email;
              $feedBack->company = $request->company;
              $feedBack->content = $request->content;
 
              $feedBack->job_title = $request->job_title;
              $feedBack->address = $request->address;
              $feedBack->phone = $request->phone;
              $feedBack->fax = $request->fax;
              $feedBack->title = $request->title;
              $feedBack->contact_service = $request->contact_service;
         
              $feedBack->save();

              $data = ['email'=> $request->input('email'),
                 
                ];
               $a = $data['email'];
         
                 
            Mail::send('frontend.mail.support', $data, function($msg) use($a)
            {
           
                $msg->from( 'abc@gmail.com', 'FPT-Telecom');
                $msg->to( $a)->subject('Hỗ trợ kĩ thuật');

                echo "<script>
                alert(' Thư của bạn đã được gửi');
                window.location= '" .( url ('/trang-chu')). "'

                </script>";
            });
             
           }

           public function postEmail(Request $request)
            {
              $this->validate($request,
              [

                'email2' => 'required|email'
         
              ], 

              [
                'email2.required' =>'Email không được để trống',
                'email2.email' =>'Email không hợp lệ', 
              ]);

                $data = ['email'=> $request->input('email2'),       
                              
                    ];

                  $toEmail = $data['email'];
                $pathToFile = "public/upload/pdf/Bang_gia.pdf";

                 Mail::send('frontend.mail.request_price', $data, function($msg) use($toEmail)
                {
              
                    $msg->from( 'abc@gmail.com', 'Public cloud');
                    $msg->to($toEmail)->subject('Bảng giá dịch vụ Public cloud');
            

                 
                });
                 return redirect('lien-he')->with('success', 'Chúng tôi đã gửi thông tin bảng giá cho bạn, Vui lòng kiểm tra email.');
                  }

}