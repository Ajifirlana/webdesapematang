<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Support\Str;

use App\Http\Requests;
use App\Berita;
use Image;
use File;
use Carbon\Carbon;
use Cookie;
use Session;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$berita = DB::table('berita')->paginate(3);
	

		return view('home',['berita' => $berita]);
	}

	public function tambahberita()
	{
		return view('backend.tambahberita');
	}

	public function tambahberitastore(Request $request)
{

	$this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            ]);

        $image = $request->file('image');
        $namaFile = $image->getClientOriginalName();
        
        $request->file('image')->move('uploads', $namaFile);
        $do = new Berita($request->all());
        $do->image = $namaFile;
        $do->save();
    

	return redirect('/backend/tambahberita')->with(['success' => 'Data Berhasil Di Tambah']);
	Session::flash('success','Data Berhasil Di Tambah');

	DB::table('berita')->insert([
		'judul' => $request->judul,
		'isi' => $request->isi,
		'created_at' => $request->created_at,
		'image' => $request->image,
	
	]);

	
	
    }

	public function editberita($id)
{
	$berita = Berita::find($id);

	return view('backend.editberita',['berita' => $berita]);

}

public function updateberita($id, Request $request)
{
    $this->validate($request,[
	   'judul' => 'required',
	   'isi' => 'required'
    ]);

    $berita = Berita::find($id);
    $berita->judul = $request->judul;
    $berita->isi = $request->isi;
 
    $berita->save();
    return redirect('/home');
}

public function tampilberita($id)
{

	$berita = Berita::find($id);

	return view('backend.tampilberita',['berita' => $berita]);

}

	public function hapusberita($id){
	
	$image = Berita::where('id',$id)->first();
	File::delete('uploads'.$image->file);

	Berita::where('id',$id)->delete();

	return redirect()->back();
}


}
