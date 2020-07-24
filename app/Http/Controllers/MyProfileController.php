<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    //
    public function create( )
	{
		return view("myprofile/create");
	}

	public function show($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "Thanakorn" ,
            "lastname" =>  "Chulee",
            "email" => "thanakorn26443@gmail.com",
        ];
        $others = "กรุณากดยืนยัน";
        return view("myprofile/show" , compact('profile','others') );
    }

}
