<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // table name
    protected $table = 'blogs';

    //可変項目
    protected $fillable =
    [
      'title',
      'content'
    ];
}
