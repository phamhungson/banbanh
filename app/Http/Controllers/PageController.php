<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;
class PageController extends Controller
{
    public function getIndex(){
      $slide=Slide::all();
      $new_product=Product::where('new','1')->paginate(4);
      $sanpham_khuyenmai=Product::where('promotion_price','<>','0')->paginate(8);
        // return view('page/trangchu',['slide'=>$slide]);
        return view('page/trangchu',compact('slide','new_product','sanpham_khuyenmai'));
    }


    public function getLoaiSanPham($type){
      $sp_theoloai = Product::where('id_type',$type)->get();
      $sp_khac = Product::where('id_type','<>',$type)->paginate(3);
      $loai = ProductType::all();
      $loai_sp = ProductType::where('id',$type)->first();
      return view('page/loai_sanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }

    public function getChiTietSanPham(Request $req){
      $sanpham = Product::where('id',$req->id)->first();
      $sanpham_tuongtu = Product::where('id_type',$sanpham->id_type)->paginate(6);
      return view('page/sanpham',compact('sanpham','sanpham_tuongtu'));
    }

    public function getLienHe(){
      return view('page/lienhe');
    }

    public function getGioiThieu(){
      return view('page/gioithieu');
    }

}
