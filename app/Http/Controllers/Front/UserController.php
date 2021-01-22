<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function showUsers(){
        $data = array('name' , 'age' ,  'age');
        return \view('welcome' , \compact('data'));

    }

}
