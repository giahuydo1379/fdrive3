<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Model\Post;
use App\Http\Model\Category;
use App\Permission;
use DB;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller

	{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	

	public function __construct(Category $Category)
		{
		$this->listCategory = $Category;
		}

	public function index(Request $request)
		{
		$post = Post::orderBy('id', 'DESC')->paginate(5);
		// dd($post);
		return view('admin.post.index', compact('post'))->with('i', ($request->input('page', 1) - 1) * 5);
		}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
 
	public function create()
		{
		$listCategory = $this->listCategory->getListCategory();

		// dd($listCategory);

		if (isset($listCategory))
			{
			$results['category'] = $listCategory->toArray();
			}
		  else
			{
			$results['errs'] = "not get item listcategory";
			}

		$permission = Permission::get();
		return view('admin.post.create', $results);
		}

 

     public function store(Request $request)
		{
		$this->validate($request,
		 [
			 'title' => 'required|min:6|max:255', 
			'summary' => 'required|min:6', 
			'content' => 'required|min:6', 
		], 

		[
			'title.required' =>'Bạn chưa nhập tên tiêu đề', 
			'title.min' => 'Tiêu đề ít nhất chứa 6 kí tự', 
			'summary.min' => 'Tóm tắt ít nhất chứa 6 kí tự', 
			'content.min' => 'Nội dung ít nhất chứa 6 kí tự', 
			'summary.required' => 'Bạn chưa nhập tên tóm tắt', 
			'content.required' => 'Bạn chưa nhập nội dung'
		]);
		$post = new Post;
		$this->validate($request, ['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', ]);

		if ($request->hasFile('image')) // Kiểm tra xem người dùng có upload hình hay không
			{
			$imgFile = $request->file('image'); // Nhận file hình ảnh người dùng upload lên server
			$imgFileExtension = $imgFile->getClientOriginalExtension(); // Lấy đuôi của file hình ảnh
			if ($imgFileExtension != 'png' && $imgFileExtension != 'jpg' && $imgFileExtension != 'jpeg')
				{
				return redirect()->route('post.create')->with('error', 'Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
				}

			$imgFileName = $imgFile->getClientOriginalName(); // Lấy tên của file hình ảnh
			$randomFileName = str_random(4) . '_' . $imgFileName; // Random tên file để tránh trường hợp trùng với tên hình ảnh khác trong CSDL
			while (file_exists('upload/tintuc/' . $randomFileName)) // Trường hợp trên gán với 4 ký tự random nhưng vẫn có thể xảy ra trường hợp bị trùng, nên bỏ vào vòng lặp while để kiểm tra với tên tất cả các file hình trong CSDL, nếu bị trùng thì sẽ random 1 tên khác
				{
				$randomFileName = str_random(4) . '_' . $imgFileName;
				}

			echo $randomFileName;
			$imgFile->move('upload/tintuc', $randomFileName); // file hình được upload sẽ chuyển vào thư mục có đường dẫn như trên
			$post->image = $randomFileName;
			}
		  else $post->image = ''; // Nếu người dùng không upload hình thì sẽ gán đường dẫn là rỗng
		$user = Auth::user();
		$post->title = $request->title;

		//  $post-> unsigned_title	 = changeTitle($request-> unsigned_title);

		$post->summary = $request->summary;
		$post->content = $request->content;
		$post->title = $request->title;
		$a = changeTitle($request->title);
		$post->slug = $a;
		$post->category_id = $request->category_id;
		$post->user_id = $user->id;
		$post->active = $request->has('active') ? 1 : 0;
		$post->oustand = $request->has('active') ? 1 : 0;
		$post->save();
		return redirect()->route('post.index')->with('success', 'Bài viết đã được tạo');
		}

     public function showCate()
		{
		$listCategory = $this->listCategory->getListCategory();

		// dd($listCategory);

		if (isset($listCategory))
			{
			$results['category'] = $listCategory->toArray();
			}
		  else
			{
			$results['errs'] = "not get item listcategory";
			}

		$permission = Permission::get();
		return view('admin/Post.category', $results);
		}

 
    public function edit($id)
		{
		$listCategory = $this->listCategory->getListCategory();

		// dd($listCategory);

		if (isset($listCategory))
			{
			$results['category'] = $listCategory->toArray();
			}
		  else
			{
			$results['errs'] = "not get item listcategory";
			}

		$permission = Permission::get();
		$post = Post::find($id); //Find the requested role

		//   return view('admin.post.edit',$post, $results);

		return view('admin.post.edit', compact('post') , $results);
		}

    public function update(Request $request, $id)
        
        {

		$this->validate($request,
		[
			'title' => 'required|min:6|max:255', 
		   'summary' => 'required|min:6', 
		   'content' => 'required|min:6',
	   ], 

	   [
			'title.required' =>'Bạn chưa nhập tên tiêu đề', 
			'title.min' => 'Tiêu đề ít nhất chứa 6 kí tự', 
			'summary.min' => 'Tóm tắt ít nhất chứa 6 kí tự', 
			'content.min' => 'Nội dung ít nhất chứa 6 kí tự', 
			'summary.required' => 'Bạn chưa nhập tên tóm tắt', 
			'content.required' => 'Bạn chưa nhập nội dung'
		]);
	   $post = Post::find($id);
		$post->category_id = $request->input('category_id');
		$post->title = $request->input('title');
		$a = changeTitle($request->input('title'));
		$post->slug = $a;
		$post->summary = $request->input('summary');
		$post->content = $request->input('content');
		$post->active = $request->input('active');
		$post->oustand = $request->input('active');

		if ($request->hasFile('image'))
			{
			$imgFile = $request->file('image');
			$imgFileExtension = $imgFile->getClientOriginalExtension();
			if ($imgFileExtension != 'png' && $imgFileExtension != 'jpg' && $imgFileExtension != 'jpeg')
				{
				return redirect()->route('post.create')->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
				}

			$imgFileName = $imgFile->getClientOriginalName(); // Lấy tên của file hình ảnh
			$randomFileName = str_random(4) . '_' . $imgFileName; // Random tên file để tránh trường hợp trùng với tên hình ảnh khác trong CSDL

			while (file_exists('upload/tintuc/' . $randomFileName))  // Trường hợp trên gán với 4 ký tự random nhưng vẫn có thể xảy ra trường hợp bị trùng, nên bỏ vào vòng lặp while để kiểm tra với tên tất cả các file hình trong CSDL, nếu bị trùng thì sẽ random 1 tên khác đến khi nào ko trùng nữa thì thoát vòng lặp
				{
				$randomFileName = str_random(4) . '_' . $imgFileName;
				}

			echo $randomFileName;
			
			$imgFile->move('upload/tintuc', $randomFileName); // file hình được upload sẽ chuyển vào thư mục có đường dẫn như trên
			if (isset($post->image)) //kiểm tra đã có hình từ trước hay chưa
				{
				unlink('upload/tintuc/' . $post->image); // Xóa hình cũ
				$post->image = $randomFileName; // Lưu lại hình mới
				}
			  else
				{
				$post->image = $randomFileName;// Lưu lại hình mới
				}
				
			}
		
    	// Không có else vì nếu người dùng không muốn thay đổi lại hình khác thì vẫn giữ lại đường dẫn hình cũ, gán mặc định như trên sẽ làm mất đường dẫn hình
			
		$post->save();
		return redirect()->route('post.index')->with('success', 'Bài viết đã được cập nhập');
		}

    public function notActive(Request $request)
		{

		$post = Post::orderBy('id', 'DESC')->where('active', 0)->paginate(5);
		return view('admin.post.notactive', compact('post'))->with('i', ($request->input('page', 1) - 1) * 5);
		}



	public function destroy($id)
		{
		Post::find($id)->delete();

		//   DB::table("post")->where('id',$id)->delete();

		return redirect()->route('post.index')->with('success', 'Bài viết đã được xóa');
		}

		
		public function getDeleted(Request $request)
		{

		$post = Post::withTrashed()->paginate(5);
		

		return view('admin.post.deleted', compact('post'))->with('i', ($request->input('page', 1) - 1) * 5);
		}
		public function restore($id)
		{

		$post = Post::withTrashed()->find($id)->restore();
		

		return redirect()->route('post.index')->with('success', 'Bài viết đã được khôi phục');
		}

		public function getDetail(Request $Request, $id)
		{
			//$id = $Request->id;
			return response()->json('asda');
//return view('admin.post.detail', compact('post'));
		}
	}