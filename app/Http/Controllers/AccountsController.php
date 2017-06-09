<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Account;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nations = DB::table('nations')->get();
        
        return view('farmaggie.register', compact('nations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account = new Account;
        $account->account_title = request('name_title');
        $account->account_name = request('name');
        $account->account_surname = request('surname');
        $account->account_name = request('name');
        $account->account_email = request('email');
        $account->account_pass = request('pass1');
        //$account->account_sex = request('sex');
        $account->account_DOB = request('birthdate');
        $account->account_mobile = request('mobile');
        $account->account_nation = request('country');
        $account->account_name = request('name');
        $account->account_edu = request('education');
        $account->account_status = request('status');
        $account->account_hno = request('add_no');
        $account->account_moo = request('add_moo');
        $account->account_soi = request('add_soi');
        $account->account_road = request('add_road');
        $account->account_dis = request('add_dis');
        $account->account_subdis = request('add_subdis');
        $account->account_province = request('add_province');
        $account->account_postID = request('add_zip');
        $account->account_facebook = request('add_face');
        $account->account_line = request('add_line');
        
        $account->save();
        
        return redirect('farm/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
