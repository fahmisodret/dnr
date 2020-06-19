<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\User;

class MenuController extends Controller
{
	public function index(){
		$menu = Menu::all();
		$data = [];
		foreach ($menu as $items) {
			$item = &$child[$items->id];
			$item['name'] = $items->name;
			if($items->parent_id == 0){
				$data['menu'][$items->id] = $item;
			}else{
        		$data['menu'][$items->parent_id]['child'][$items->id] = &$item;
			}
		}

		return view('admin.menu.index', $data);
	}

	public function priv($id){
		// dd(User::find($id)->menus);
		$data['user_menu'] = User::find($id)->menus;
		$menu = Menu::all();
		$data = [];
		foreach ($menu as $items) {
			$item = &$child[$items->id];
			$item['name'] = $items->name;
			if($items->parent_id == 0){
				$data['menu'][$items->id] = $item;
			}else{
        		$data['menu'][$items->parent_id]['child'][$items->id] = &$item;
			}
		}

		return view('admin.menu.index', $data);
	}

	public function store(Request $request){
		// generate crud and view
		Artisan::call("php artisan generate:menu ".$request['name']);
	}

	public function update(Request $request){

	}

	public function delete(Request $request){

	}
}
