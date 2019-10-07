<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_pertanyaan extends Model
{
  public $timestamps = false;
  protected $table = "tbl_pertanyaan";
  protected $fillable = ['pertanyaan','jawaban'];
}
