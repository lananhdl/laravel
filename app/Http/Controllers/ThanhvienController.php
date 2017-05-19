<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thanhvien;
use Datetime;
class ThanhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	
    {
		$data= Thanhvien::select()->get()->toArray();
        return view('index',['thanhvien'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thanhvien= new Thanhvien;
		$thanhvien->hoten=$request->txthoten;
		$thanhvien->email=$request->txtemail;
		$thanhvien->password=$request->txtpassword;
		$thanhvien->vaitro=$request->txtvaitro;
		$thanhvien->created_at= new Datetime();
		$thanhvien->save();
		return redirect()->route('list-thanh-vien');
		
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
		$data=Thanhvien::find(1)->toArray();
        return view('update',['data_edit'=>$data]);
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
        $thanhvien= Thanhvien::find($id);
		$thanhvien->hoten=$request->txthoten;
		$thanhvien->email=$request->txtemail;
		$thanhvien->password=$request->txtpassword;
		$thanhvien->vaitro=$request->txtvaitro;
		$thanhvien->updated_at= new Datetime();
		$thanhvien->save();
		return redirect()->route('list-thanh-vien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thanhvien=Thanhvien::find($id);
		$thanhvien->delete();
		return redirect()->route('list-thanh-vien');
		
		
    }
}
