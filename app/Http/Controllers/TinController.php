<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tin;
use Datetime;
class TinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Tin::select()->get()->toArray();
        return view('backend/news_list' , ['tin' => $data]);
    }
	 public function trangchu()
    {
        $data= Tin::select()->get()->toArray();
        return view('frontend/index' , ['tin' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/news_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tin= new Tin;
		$tin->theloai=$request->sltCate;
		$tin->tieude=$request->txtTitle;
		$tin->tacgia=$request->txtAuthor;
		$tin->trichdan=$request->txtIntro;
		$tin->noidung=$request->txtFull;
		$tin->hinhdaidien=$request->newsImg;
		$tin->active=$request->rdoPublic;
		$tin->created_at= new Datetime();
		$tin->save();
		return redirect()->route('list-news');
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
        $data=Tin::find($id)->toArray();
		
        return view('backend/news_edit',['data_edit'=>$data]);
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
        $tin= Tin::find($id);
		$tin->theloai=$request->sltCate;
		$tin->tieude=$request->txtTitle;
		$tin->tacgia=$request->txtAuthor;
		$tin->trichdan=$request->txtIntro;
		$tin->noidung=$request->txtFull;
		$tin->hinhdaidien=$request->newsImg;
		$tin->active=$request->rdoPublic;
		$tin->updated_at= new Datetime();
		$tin->save();
		return redirect()->route('list-news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tin=Tin::find($id);
		$tin->delete();
		return redirect()->route('list-news');
    }
}
