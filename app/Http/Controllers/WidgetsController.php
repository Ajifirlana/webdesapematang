<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Widgets;
use Illuminate\Http\Request;

class WidgetsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$widget = Widgets::paginate(10);
		return view('backend.widget',['widget' => $widget]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function editwidget($id)
{
	$widget = Widgets::find($id);

	return view('backend.editwidget',['widget' => $widget]);

}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function updatewidget($id, Request $request)
{
    $this->validate($request,[
	   'isi_widget' => 'required'
    ]);

    $widget = Widgets::find($id);
    $widget->isi_widget = $request->isi_widget;
   
 
    $widget->save();

    return redirect('/backend/widget')->with(['success' => 'Data Berhasil Di Edit']);
}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
