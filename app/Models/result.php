<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Result extends Model
{
   use HasFactory;
    use SoftDeletes;
     protected $fillable = [
         'testid',
         'testcode',
        'demoPart',
        'devices',
        'browser',
        'OS',
        'index',
        'rt',
        'MobileOS',
        'methods',
    ];

    public function Result()
    {
        return $this->belongsTo(Result::class);
    }
}
