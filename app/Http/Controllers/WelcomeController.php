<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Str;
use Hash;
use App\Http\Requests;
use App\Berita;
use App\Galeri;
use App\Menu;
use App\Aparatur;


class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$halaman = DB::table('halaman')->get();
        if(!$halaman){
            return view('404');
        }
		$berita = Berita::latest()->paginate(1);
	
		$galeri = Galeri::latest()->orderby('id','desc')->paginate(8);

		$aparatur = Aparatur::latest()->orderby('id','desc')->get();

		$menu = DB::table('menu')->get();

		return view('welcome', ['halaman' => $halaman],['berita' => $berita, 'galeri'=>$galeri,'aparatur'=>$aparatur,'menu'=>$menu], compact('welcome'));
	}

	public function bacaselengkapnya($id)
{

	$berita = Berita::find($id);
    	$menu = DB::table('menu')->get();
    	$galeri = Galeri::latest()->orderby('id','desc')->paginate(4);
    	$aparatur = Aparatur::latest()->orderby('id','desc')->get();
    	
	return view('bacaselengkapnya',compact('halaman','titlepage'),['berita' => $berita,'menu'=>$menu,'galeri'=>$galeri,'aparatur'=>$aparatur],compact('bacaselengkapnya'));

}

	public function baca_halaman($uuid){
		 
		 $halaman = DB::table('halaman')->where('uuid', $uuid)->first();
        if(!$halaman){
            return view('404');
        }
        $galeri = Galeri::latest()->orderby('id','desc')->paginate(4);
       $berita = Berita::latest()->paginate(5);
        $titlepage = $halaman->judul;
        return view('baca',compact('halaman','titlepage'),['berita' => $berita, 'galeri' => $galeri]);
      }


	


}
