<?php namespace Tulocalidad\Http\Controllers;

use Tulocalidad\Http\Requests;
use Tulocalidad\Http\Controllers\Controller;

use Illuminate\Http\Request;
use View;
class EjemploController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
		echo 'Hola mundo';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function nueva($id){
		$edad = $id * 7; 
		return View::make('nueva', compact('edad'));
	}

	public function siguiente($id){
		$edad = $id * 7; 
		return View::make('siguiente', compact('edad'));
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}