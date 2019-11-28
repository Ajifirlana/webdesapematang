<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Galeri;
use App\Berita;
use Illuminate\Http\Request;

class GaleriController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$galeri = Galeri::all();
		$berita = Berita::all();

		return view('backend/galerifoto',['galeri' => $galeri],['berita' => $berita]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function tambahgaleri()
	{
		return view('backend.tambahgaleri');
	}

	public function tambahgaleristore(Request $request)
{

	$this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            ]);

        $image = $request->file('image');
        $namaFile = $image->getClientOriginalName();
        
        $request->file('image')->move('uploads', $namaFile);
        $do = new Galeri($request->all());
        $do->image = $namaFile;
        $do->save();
    

	return redirect('/backend/tambahgaleri')->with(['success' => 'Data Berhasil Di Tambah']);
	Session::flash('success','Data Berhasil Di Tambah');

	DB::table('galeri')->insert([
		'caption' => $request->caption,
		'image' => $request->image,
	
	]);

	
	
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function tampilgaleri($id)
{

	$galeri = Galeri::find($id);

	return view('backend.tampilgaleri',['galeri' => $galeri]);

}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function editgaleri($id)
{
	$galeri = Galeri::find($id);

	return view('backend.editgaleri',['galeri' => $galeri]);

}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updategaleri($id, Request $request)
{
    $this->validate($request,[
	   'caption' => 'required'
    ]);

    $galeri = Galeri::find($id);
    $galeri->caption = $request->caption;
   
 
    $galeri->save();
    return redirect('/backend/galeri')->with(['success' => 'Data Berhasil Di Edit']);
}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */


}
