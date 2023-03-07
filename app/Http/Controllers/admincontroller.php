<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admincontroller extends Controller
{
    public function list_makanan(Request $req){
        if(!$req->session()->exists("user_id")){
            return redirect('/login');
        }
        $title = "Makanan";
        $data = DB::select("select * from makanan");
        return view('admin.makanan',['data'=>$data,'title'=>$title]);
    }


    public function tambah_makanan(Request $req){
        DB::insert("Insert into makanan values(Null,?)",[$req->makanan]);
        return redirect('/makanan');
    }
    public function hapus_makanan(Request $req){
        DB::delete("delete from makanan where id=?",[$req->id]);
        return redirect('/makanan');
    }
    public function form_edit(Request $req){
        $title = "Masakan";
        return view('admin.edit',['id'=>$req->id,'title'=>$title]);
    }
    public function edit_masakan(Request $req){
        DB::update("update makanan set makanan=? where id=?",
        [$req->makanan,$req->code]);
        return redirect("/makanan");
    }
    public function list_pesan(Request $req){
        $title = "Histori";
        $pesan = DB::select("select users.name,pesanan.* from pesanan
        inner join users on users.id = pesanan.user_id");
        return view('admin.histori',['pesan'=>$pesan,'title'=>$title]);
    }
    public function hapus_pesan(Request $req){
        DB::delete("delete from pesanan where id=?",[$req->id]);
        return redirect('/histori');
    }

}
