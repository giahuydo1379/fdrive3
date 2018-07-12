<?php

namespace App\Http\Model;



use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    
    protected $table = "Category";
    protected $primaryKey = 'id';


    public $fillable = ['name','slug', 'parent_id', 'left','right', 'level', 'user_id'];
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->hasMany('App\Http\Model\Post','category_id','id');
    }

    public function childs(){
        return $this->hasMany('App\Http\Model\Category','parent_id');
    }

    
    public function getListCategory()
    {
   // $category=new Category();
   $category= Category:: with('childs')
   ->where ('parent_id',1)
   ->get();
   //dd($category); die();
   return $category;
    }

}