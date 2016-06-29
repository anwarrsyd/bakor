<?php

namespace App\Http\Controllers;

//use Request;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use Session;
use Validator;
use DB;
use App\izin;
use App\absen;
use App\admin;

class HomeController extends controller{
	public function indeks(){
			if(Auth::check()){
        date_default_timezone_set("Asia/jakarta");
          
		$data=array();
		$tanggal=date("d/m/Y");
		$data['tervalidasi']= izin::select('id')->where('tanggal','=',$tanggal)->count();
		 $data['peserta'] = absen::where('tanggal','=',$tanggal)->count();
		return view('dashboard',$data);
		}
		else{
    		return view('login');
    	}
    }
	
	public function index(){
			if(Auth::check()){
		return view('absen');
	}
	else{
    		return view('login');
    	}
    }
	public function absen(){
	   if(Auth::check()){
		 date_default_timezone_set("Asia/jakarta");
		 $data=Input::all();
		  absen::insertGetId(array(
            'nrp'=> $data['nrp'],
            'nama'=>$data['nama'],
            'kemeja'=>$data['kemeja'],
            'celana'=>$data['celana'],
            'dasi'=>$data['dasi'],
            'sabuk'=>$data['sabuk'],
            'kaos'=>$data['kaos'],
            'rambut'=>$data['rambut'],
            'idcard'=>$data['idcard'],
            'tanggal'=>date("d/m/Y"),
            'waktu'=>date("h:i:sa")
		));
		    Session::flash('suksesabsen','Login anda gagal, silahkan cek kembali username dan password');
		  return redirect('absensi');

	}
	else{
    		return view('login');
    	}
    }

	public function izin(){
			if(Auth::check()){
		return view('izin');
	}
else{
    		return view('login');
    	}
    }
	public function ijin(){
			if(Auth::check()){
		 date_default_timezone_set("Asia/jakarta");
		 $data=Input::all();
		  izin::insertGetId(array(
            'nrp'=> $data['nrp'],
            'nama'=>$data['nama'],
            'jamkembali'=>$data['jamkembali'],
            'alasan'=>$data['alasan'],
            'tanggal'=>date("d/m/Y"),
            'jamkeluar'=>date("h:i")
           
		));
		    Session::flash('suksesizin','Login anda gagal, silahkan cek kembali username dan password');
		  return redirect('izin');

	}
	else{
    		return view('login');
    	}
    }
	public function rekap(){
			if(Auth::check()){
		$data=array(); 
        $data['peserta'] = absen::get();
        return view('listabsensi',$data);
	}
	else{
    		return view('login');
    	}
    }
	public function rekapizin(){
			if(Auth::check()){
		$data=array(); 
        $data['peserta'] = izin::get();
        return view('listizin',$data);
	}
	else{
    		return view('login');
    	}
    }
	public function regis(){
			
    	return view('register');
    }
    
    public function register(){
    		
    	$data=Input::all();
        $pass=bcrypt( $data['password']);
        admin::insertGetId(array(
            'username'=> $data['username'],
            'password'=> $pass,
           
            ));
            return redirect('/');
    }
    
    public function login(){
    	return view('login');
    }
    public function loginform(Request $request)
    {
            
            // $credentials = Input::only('username','password');
            $new = $request->only('username','password');
            // $this->data['username'] = Input::get('username');
            
            // dd($credentials);

            if (Auth::attempt($new,true))
            {
                    //if(Auth::role()==1)
                        // return 'asdf';
             
               
                    $id=Auth::user()->id;
                
                    return redirect()->intended('dashboard');
                //return 'asdfjhdsafasdf';
                
                   
                //return 'asdfjhdsafasdf';
            }
            else{

                Session::flash('message','Login anda gagal, silahkan cek kembali username dan password');
                return redirect('/');

            } 
            // return redirect('loginadmin');
        
    }
     public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}