<?php

namespace App;

use Zizaco\Entrust\EntrustRole;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends EntrustRole
{
    use SoftDeletes;
    protected $table = "role";
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    public $fillable = ['name', 'display_name', 'description'
    ];
}
