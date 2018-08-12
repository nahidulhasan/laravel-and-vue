<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function storeItem(Request $request) {
		$data = new Person ();
		$data->name = $request->name;
		$data->age = $request->age;
		$data->profession = $request->profession;
		$data->save ();
		return $data;
	}
	public function readItems() {
		$data = Person::all ();
		return $data;
	}
	public function deleteItem(Request $request) {
		$data = Person::find ( $request->id )->delete ();
	}
	public function editItem(Request $request, $id){
		$data =Person::where('id', $id)->first();
		$data->name = $request->get('val_1');
		$data->age = $request->get('val_2');
		$data->profession = $request->get('val_3');
		$data->save();
		return $data;
	}
}

