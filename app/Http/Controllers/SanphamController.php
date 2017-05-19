<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sanpham;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lists()
    {
		$data = Sanpham::select()->get()->toArray();
        return view('list', ['sanpham' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_database(Request $request)
    {
       $sanpham = new Sanpham;
	   $sanpham -> tensanpham = $request->txtTensanpham;
	   $sanpham -> gia = $request->txtGia;
	   $sanpham -> congdung = $request->txtCongdung;
	   $sanpham -> created_at = new \Datetime();
	   $sanpham-> save();
	   return redirect()->route('list');
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
    public function edit($id)
    {
		$data= Sanpham::find(1)->toArray();
        return view('edit',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $sanpham = Sanpham::find($id);
	   $sanpham -> tensanpham = $request->txtTensanpham;
	   $sanpham -> gia = $request->txtGia;
	   $sanpham -> congdung = $request->txtCongdung;
	   $sanpham -> created_at = new \Datetime();
	   $sanpham-> save();
	   return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanpham = Sanpham::find($id);
		$sanpham->delete();
		return redirect()->route('list');
    }
}
