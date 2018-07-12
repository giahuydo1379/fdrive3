<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
  
    use SoftDeletes;

    protected $table = "post";
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];



    public $fillable = ['title', 'slug', 'summary', 'content', 'category_id',
    'image', 'user_id', 'active'
    
    ];
    
    public function user()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function category()
    {
    	return $this->belongsTo('App\Http\Model\Category','category_id','id');
    }

}