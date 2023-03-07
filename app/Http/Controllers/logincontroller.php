<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class logincontroller extends Controller
{
    public function form_login(){
        return view("user.login");
    }

    public function login(Request $req){
        $data = DB::select("select id,user_type from users where username=? and password=?",[$req->username,$req->password]);
        if(count($data) > 0){
            $req->session()->put("user_id",$data[0]->id); //optional kalau gak pake session dihapus aja
            if($data[0]->user_type=='penjual'){// validasi type user dan diarahkan sesuai halaman masing-masing
                return redirect('/makanan');
            }else
            return redirect('/pemesanan');
        }else{
            return redirect("/login");
        }
    }

    public function logout(Request $req){
        $req->session()->forget("user_id");
        return redirect('/login');
    }
}
