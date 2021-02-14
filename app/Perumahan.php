<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Agen;

class Perumahan extends Model
{
    protected $table = 'perumahan';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Agen()
    {
        return $this->belongsTo(Agen::class, 'agen_id');
    }
}
