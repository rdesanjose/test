<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PostsModel extends Model
{
  protected $table = 'user_posts';
  public $timestamps = false;
}
