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
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
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

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$berita = DB::table('berita')
		->where('judul','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('home',['berita' => $berita]);

		echo json_encode($callback);

	}

	public function tambahberita()
	{
		return view('backend.tambahberita');
	}

	public function tambahberitastore(Request $request)
{

	$this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'judul' => 'required|min:5|max:100',
            'uuid' => 'required|min:5|max:100',
            ]);

        $image = $request->file('image');
        $namaFile = $image->getClientOriginalName();
        
        $thumbImage = Image::make($image->getRealPath())->resize(100, 100);


    
        $request->file('image')->move('uploads', $namaFile);
        $do = new Berita($request->all());
        $do->image = $namaFile;
        $do->save();


    

	return redirect('/backend/tambahberita')->with(['success' => 'Data Berhasil Di Tambah']);
	Session::flash('success','Berita Berhasil Di Tambah');
	
	DB::table('berita')->insert([
		'judul' => $request->judul,
		'isi' => $request->isi,
		'uuid' => $request->uuid,
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
	   'uuid' => 'required',
	   'isi' => 'required'
    ]);

    $berita = Berita::find($id);
    $berita->judul = $request->judul;
    $berita->uuid = $request->uuid;
    $berita->isi = $request->isi;
 
    $berita->save();

	Session::flash('success','Data Berhasil Di Tambah');
	
    return redirect('/home')->with(['success' => 'Berita Berhasil Di Edit']);
}

public function tampilberita($id)
{

	$berita = Berita::find($id);

	return view('backend.tampilberita',['berita' => $berita]);

}

	public function hapusberita($id){
	
		$match = Berita::find($id);
        $match->delete();
        File::delete(public_path().'/uploads/' . $match->flag_1); // untuk menghapus file nya
        File::delete(public_path().'/uploads/' . $match->flag_2);  // untuk menghapus file nya
        return redirect()->with(['success' => 'Berita Berhasil Di Hapus'])->back();
     
	
	
}


}
