<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\tbl_user;

class Akun extends Controller
{

    public function Tambah(Request $request){
      $data = tbl_user::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password
      ]);
      $res['message'] = "Success!";
      $res['values'] = $data;
      return response($res);
    }

    public function Ubah(Request $request){
      $data = DB::table('tbl_user')->where('id',$request->id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password
      ]);
      $res['message'] = "Success!";
      $res['values'] = $data;
      return response($res);
    }

    public function getDetail($name){
      $data = DB::table('tbl_user')->where('name',$name)->get();
      if (count($data) > 0) {
        $res['message'] = "Success!";
        $res['values'] = $data;
        return response($res);
      }else {
        $res['message'] = "Empty!";
        return response($res);
      }
    }
}
