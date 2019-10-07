<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_user extends Model
{
  public $timestamps = false;
  protected $table = "tbl_user";
  protected $fillable = ['name','email','password'];
}
