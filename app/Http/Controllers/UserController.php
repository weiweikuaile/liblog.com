<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	/*
	*Display a listing of the resource
	*
	* @return \Illuminate\Http\Response
	*
	*/
	public function getIndex(){
		//echo '用户列表页';
		return view('layout.index');
	}
	 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function create(){
		echo '用户添加表单';
	}

	public function store(Request $request)
	{

	}
	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function show($id)
	{
		
	}
	/**
	*Show the form for editing the specified resource.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function edit($id)
	{
		//
	}
	/**
	*Update the specified resource in storage.
	*
	* @param \Illuminate\Http\Request $request
	* @param int $id
	* @return \Illuminate\Http\Response
	**/
	public function update(Request $request,$id)
	{
		//
	}
	/**
	*Remove the specified resource from storage.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	**/
	public function destroy($id)
	{
		
	}
}