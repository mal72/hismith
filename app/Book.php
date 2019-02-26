<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Book extends Model
{
    protected $fillable = [
        'name', 'price', 'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);

    }
}
