<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;

use App\Http\Model\Category;
use App\Permission;
use DB;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    public function index()
		{
            $root = Category::where('name', 'root')->get();
         
            $child1 = Category::create(['name' => 'Child 1']);
            $child1->makeChildOf($root);
            return view('admin/Post.category');
		}
}