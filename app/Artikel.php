<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
