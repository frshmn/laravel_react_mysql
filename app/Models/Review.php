<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  // table name
  protected $table = 'reviews';

  //可変項目
  protected $fillable =
  [
    'title',
    'content'
  ];
}
