<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\User;
use Session;
use App\Http\Model\Feedback;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $users = Feedback::orderBy('id','DESC')->paginate(5);
        // $this->authorize($items, 'view');
        return view('home',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function show($id)
    {
        $users = Feedback::find($id);
        return view('admin/feedback.show',compact('users'));
    }

    public function changeLanguage($language)
    {
        \Session::put('website_language', $language);
 
        return redirect()->back();
    }

    public function postLang(Request $request)
    {
        Session::set('locale', $request->locale);
        return redirect()->back();
    }
    public function Search(Request $request){
    	$keyword = $request->keyword;
    	$user = User::where('name','like',"%$request->keyword%")->paginate(5)->appends(['keyword' => $keyword]);

        return view('search',['user' => $user, 'keyword' => $request->keyword]) 
        ->with('i', ($request->input('page', 1) - 1) * 5);
        
    }
}
