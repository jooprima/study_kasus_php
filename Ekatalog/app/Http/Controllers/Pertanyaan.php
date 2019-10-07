<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\tbl_pertanyaan;

class Pertanyaan extends Controller
{
    public function Pertanyaan(Request $request){
      $data = tbl_pertanyaan::create([
        'pertanyaan' => $request->pertanyaan,
        'jawaban' => 'null'
      ]);
      $res['message'] = "Success!";
      $res['values'] = $data;
      return response($res);
    }

    public function jawaban(Request $request){
      $data = DB::table('tbl_pertanyaan')->where('id',$request->id)->update([
        'jawaban' => $request->jawaban,
      ]);
      $res['message'] = "Success!";
      $res['values'] = $data;
      return response($res);
    }
}
