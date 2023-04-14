<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musician extends Model
{
    use HasFactory;
// 以下を追記
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'nationality' => 'required',
        'detail' => 'required',
        'url1' => 'required',
    );
}
