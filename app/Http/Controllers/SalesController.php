<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class SalesController extends Controller
{

//-------------------------Index--------------------//


  public function index()
{
    return view('index');
}

	//-------------------------VIEW TV PREMIUM--------------------//

  public function viewpremium()
    {
    	// mengambil data dari table pegawai
		$tvpremium = DB::table('tv_costumer')->get();
 
    	// mengirim data pegawai ke view index
    	return view('tvpremium',['tv_costumer' => $tvpremium]);
 
    }
	
//-------------------------VIEW TV PENDING--------------------//

    public function viewpending()
    {
    	// mengambil data dari table pegawai
		$tvpremium = DB::table('tv_costumer')->where('status','Waiting Activation')->get();
 
    	// mengirim data pegawai ke view index
    	return view('pendingaktivasi',['tv_costumer' => $tvpremium]);
 
    }

	//-------------------------VIEW FOR ORDER--------------------//

    public function vieworder()
    {
    	// mengambil data dari table pegawai
		$tvpremium = DB::table('tv_costumer')->where('status','DONE')->get();
 
    	// mengirim data pegawai ke view index
    	return view('input_order',['tv_costumer' => $tvpremium]);
 
    }
	
//-------------------------VIEW REPORT--------------------//

    public function report()
    {
    	// mengambil data dari table pegawai
		$ticket = DB::table('ticket')->where ('status_ticket', 'ACTIVE')->get();
 
    	// mengirim data pegawai ke view index
    	return view('report',['ticket' => $ticket]);
 
    }

//-------------------------CARI TICKET NUMBER--------------------//

		public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$ticket = DB::table('ticket')
		->where('ticket_number','like',"%".$cari."%")
		->paginate();
    		// mengirim data pegawai ke view index
		return view('report',['ticket' => $ticket]);
 
	}
	
//-------------------------INPUT------------------//

	public function tambah_po()
{ 
	// memanggil view tambah
	return view('input_po');
}

// method untuk insert data ke table pegawai
public function store_po(Request $request)
{
	// insert data ke table pegawai
	DB::table('tv_costumer')->insert([
		'cust_id' => $request->cust_id,
		'type_aktivasi' => $request->type_aktivasi,
		'status' => $request->status,
		'open_close_date' => $request->open_close_date,
		'req_install_date' => $request->req_install_date,
		'requestor_name' => $request->requestor_name,
		'form_number' => $request->form_number,
		'homepass' => $request->homepass,
		'cust_name' => $request->cust_name,
		'package' => $request->package,
		'cluster' => $request->cluster,
		'remark' => $request->remark,
		'install_date' => $request->install_date,
		'status_install' => $request->status_install
	
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/sales');
 
}

//-------------------------EDIT(INPUT ORDER)--------------------//

// method untuk UPDATE data ke table pegawai
public function editorder($id)
{
	// mengambil data ticket berdasarkan id yang dipilih
	$order = DB::table('tv_costumer')->where('id',$id)->get();
	// passing data ticket yang didapat ke view edit.blade.php
	return view('form_order',['tv_costumer' => $order]);
}

// update data ticket
public function updateorder(Request $request)
{
	// update data ticket
	DB::table('tv_costumer')->where('id',$request->id)->update([
		'cust_id' => $request->cust_id,
		'type_aktivasi' => $request->type_aktivasi,
		'status' => $request->status,
		'open_close_date' => $request->open_close_date,
		'req_install_date' => $request->req_install_date,
		'requestor_name' => $request->requestor_name,
		'form_number' => $request->form_number,
		'homepass' => $request->homepass,
		'cust_name' => $request->cust_name,
		'package' => $request->package,
		'cluster' => $request->cluster,
		'remark' => $request->remark,
		'install_date' => $request->install_date,
		'status_install' => $request->status_install
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/sales');
}


//-------------------------HAPUS--------------------//

// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pegawai')->where('pegawai_id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}
}