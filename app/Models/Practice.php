<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');

    public static $rules = array(
        'practice' => 'required',
        'answer' => 'required',
        'programming' => 'required',
        'content' => 'required',
    );
}
