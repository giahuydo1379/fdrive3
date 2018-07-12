<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;



class Feedback extends Model
{
  


    protected $table = "feedback";
    protected $primaryKey = 'id';
    public $timestamps = false;
  



    public $fillable = ['name', 'email', 'company', 'content', 'senddate',
    'status', 'job_title', 'address',   'phone', 'fax', 'title', 'contact_service'
    
    ];
    

}