<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Khachhang;
use Datetime;
class KhachhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function danhsach()
    {
		$data=Khachhang::select()->get()->toArray();
        return view('listkhachhang',['khachhang'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function them()
    {
        return view('addkhachhang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function them_database(Request $request)
    {
       $khachhang= new Khachhang;
	   $khachhang->hoten=$request->txthoten;
	   $khachhang->sdt=$request->txtsdt;
	   $khachhang->diachi=$request->txtdiachi;
	   $khachhang->sanpham=$request->txtsanpham;
	   $khachhang->created_at= new Datetime();
	   $khachhang->save();
	   return redirect()->route('danhsach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sua($id)
    {
		$data= Khachhang::find(1)->toArray();
        return view('editkhachhang',['khachhang'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sua_database(Request $request, $id)
    {
        $khachhang=  Khachhang::find($id);
	   $khachhang->hoten=$request->txthoten;
	   $khachhang->sdt=$request->txtsdt;
	   $khachhang->diachi=$request->txtdiachi;
	   $khachhang->sanpham=$request->txtsanpham;
	   $khachhang->updated_at= new Datetime();
	   $khachhang->save();
	   return redirect()->route('danhsach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function xoa($id)
    {
        $khachhang=Khachhang::find($id);
		$khachhang->delete();
		return redirect()->route('danhsach');
		
    }
}
