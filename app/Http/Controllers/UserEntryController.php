<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

use App\Models\User;

class UserEntryController extends Controller
{
    public function InputProfile(Request $request)
    {

    	Session::put('profile',$request->all());

    	return redirect()->route('user-entry-tag');
    }

    public function InputTag(Request $request)
    {
    	Session::put('tags',$request->get('tags'));

    	return redirect()->route('user-entry-confirm');
    }

    public function Confirm(Request $request)
    {
    	$data = $request->session()->all();

    	// return view('user/user-entry-confirm',$data);
		//　Postのテスト用に変更　上が本番　下を消す		
    	return view('mock/mock-user-entry-confirm',$data);

    }

    public function Create(Request $request)
    {
    	//開発時のダミーデータ
    	$dummygoogle = ['email'=>'b9999@oic.jp',
    					'student_name'=> 'gsgjbjhgg',
    					'google_id'=>'dajkj1890ufdaj3eqjkfda'];
    	Session::put('google',$dummygoogle);
    	//ここまで

    	$Sessiondata = $request->session()->all();

    	$UserProfire = array_merge($Sessiondata['google'],$Sessiondata['profile']);

    	$TagIds = $request->session()->get('tags');
   
    	$user = User::create($UserProfire);

    	$user->tags()->attach($TagIds);
    } 
}