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
        $this->validate(request(), [
            'name_title' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'pass1' => 'required',
            'pass2' => 'required',
            'sex' => 'required',
            'birthdate' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'education' => 'required',
            'status' => 'required',
            'add_no' => 'required',
            'add_moo' => 'required',
            'add_soi' => 'required',
            'add_road' => 'required',
            'add_dis' => 'required',
            'add_subdis' => 'required',
            'add_province' => 'required',
            'add_zip' => 'required',
            'add_face' => 'required',
            'add_line' => 'required',
        ]);

        Account::create([
            'account_title' => request('name_title'),
            'account_name' => request('name'),
            'account_surname' => request('surname'),
            'account_email' => request('email'),
            'account_pass' => request('pass1'),
            'account_sex' => request('sex'),
            'account_DOB' => request('birthdate'),
            'account_mobile' => request('mobile'),
            'account_nation' => request('country'),
            'account_edu' => request('education'),
            'account_status' => request('status'),
            'account_hno' => request('add_no'),
            'account_moo' => request('add_moo'),
            'account_soi' => request('add_soi'),
            'account_road' => request('add_road'),
            'account_dis' => request('add_dis'),
            'account_subdis' => request('add_subdis'),
            'account_province' => request('add_province'),
            'account_postID' => request('add_zip'),
            'account_facebook' => request('add_face'),
            'account_line' => request('add_line'),
        ]);
        
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
