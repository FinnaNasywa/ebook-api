<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me (){
        return[
            'Nis' => 3103120159,
            'Nama' => 'Nasywa Nur Shafinna',
            'Phone' => '085329718929',
            'Class' => 'XII RPL 5'
        ];
    }
}
