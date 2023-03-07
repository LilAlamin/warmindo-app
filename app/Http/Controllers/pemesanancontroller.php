<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pemesanancontroller extends Controller
{
    public function list_pesan(Request  $req){
        if(!$req->session()->exists("user_id")){
            return redirect('/login');
        }
        $makanan = DB::select("select makanan from makanan");
        $title = "Pemesanan";
        $data = DB::select("select users.name,pesanan.makanan,pesanan.total from pesanan
        inner join users on users.id = pesanan.user_id");
        return view("user.pemesanan",['data'=>$data,'title'=>$title,'makanan'=>$makanan]);
    }

    public function tambah_pesan(Request $req){
        DB::insert("insert into pesanan values(NULL,?,?,?)",
        [$req->makanan,$req->total,$req->session()->get('user_id')]);
        return redirect("/pemesanan");
    }
}
