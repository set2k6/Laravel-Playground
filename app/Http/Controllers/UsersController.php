<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
    	$users = [
			'0'=> [
					'first_name' => 'John',
					'last_name' => 'Green',
					'city' => 'Nashville'
					],
			'1'=> [
					'first_name' => 'Kala',
					'last_name' => 'Cannon',
					'city' => 'Smyrna'
					]
	];
	return view('admin.users.index', compact('users'));
    }
}
