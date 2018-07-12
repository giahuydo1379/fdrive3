<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Zizaco\Entrust\Traits\EntrustUserTrait;


class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "Users";
    protected $primaryKey = 'id';
   


    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function item()
    {
        return $this->hasMany(Item::class);
    }
    public function post()
    {
        return $this->hasMany('App\Http\Model\Post','user_id','id');
    }
    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
