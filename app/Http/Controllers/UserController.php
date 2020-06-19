<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Menampilkan data kelurahan.
     * Role = Admin
     *
     * @return data kelurahan
     */
    public function index()
    {
    	$data['mainTitle'] = 'User';
    	$data['firstPage'] = 'Admin';
    	$data['secondPage'] = 'User';
    	$data['kel'] = User::all();
        return view('admin.user.index', $data);
    }

    /**
     * Menampilkan data kelurahan.
     * Role = Admin
     *
     * @return data kelurahan
     */
    public function create()
    {
    	$data['mainTitle'] = 'User';
    	$data['firstPage'] = 'Admin';
    	$data['secondPage'] = 'User';
        return view('admin.user.create', $data);
    }


    /**
     * insert data kelurahan.
     * Role = Admin
     *
     * @return data kelurahan
     */
    public function store(Request $request)
    {
        $status = 200;
        $message = 'User added!';
        $this->validate($request, [
			'User' => 'required',
			'kecamatan' => 'required',
			'kota' => 'required'
		]);
        $requestData = $request->all();
        
        $res = User::create($requestData);
        if(!$res){
            $status = 500;
            $message = 'User Not added!';
        }
        if($request->ajax()){
            return response()->json(['flash_status'=>$status, 'flash_message'=>$message]);
        }
        return redirect('admin/user')
            ->with(['flash_status' => $status,'flash_message' => $message]);
    }


    /**
     * Menampilkan detail data kelurahan.
     * Role = Admin
     *
     * @param $id
     * @return data kelurahan
     */
    public function show($id)
    {
    	$data['mainTitle'] = 'User';
    	$data['firstPage'] = 'Admin';
    	$data['secondPage'] = 'User';
        $data['item'] = User::findOrFail($id);

        return view('admin.user.show', $data);
    }


    /**
     * edit data kelurahan.
     * Role = Admin
     *
     * @param $id
     * @return data kelurahan
     */
    public function edit($id)
    {
    	$data['mainTitle'] = 'User';
    	$data['firstPage'] = 'Admin';
    	$data['secondPage'] = 'User';
        $data['item'] = User::findOrFail($id);

        return view('admin.user.edit', $data);
    }


    /**
     * update data kelurahan.
     * Role = Admin
     *
     * @param $id
     * @return data kelurahan
     */
    public function update(Request $request, $id)
    {
        $status = 200;
        $message = 'User Updated!';
        $this->validate($request, [
			'User' => 'required',
			'kecamatan' => 'required',
			'kota' => 'required'
		]);
        $requestData = $request->all();
        $kelurahan = User::findOrFail($id);
        $res = $kelurahan->update($requestData);
        if(!$res){
            $status = 500;
            $message = 'User Not updated!';
        }

        if($request->ajax()){
            return response()->json(['flash_status'=>$status, 'flash_message'=>$message]);
        }
        return redirect('admin/user')
            ->with(['flash_status' => $status,'flash_message' => $message]);
    }


    /**
     * delete data kelurahan.
     * Role = Admin
     *
     * @param $id
     * @return data kelurahan
     */
    public function destroy($id)
    {
        $status = 200;
        $message = 'User deleted!';
        $res = User::destroy($id);
        if(!$res){
            $status = 500;
            $message = 'User Not deleted!';
        }

        return redirect('admin/user')
            ->with(['flash_status' => $status,'flash_message' => $message]);
    }
}
